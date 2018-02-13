function isValid() {
    if (!is_string('lastName'))
        return false;
    if (!is_string('idSecteur'))
        return false;
    if (!is_string('activity'))
        return false;
    if (!is_string('country'))
        return false;
    if (!is_string('idville'))
        return false;
    if (!is_string('contactName'))
        return false;
    if (!is_string('contactPrenom'))
        return false;
    if (!is_phone('contactPhone'))
        return false;
    if (!is_string('contactFonction'))
        return false;
    return true;
}
function isAnnonceValid() {
    if (!is_string('titre'))
        return false;
    if (!is_string('country'))
        return false;
    if (!is_string('idville'))
        return false;
    if (!is_string('date_fin'))
        return false;
    if (!is_string('date_fin'))
        return false;
    return true;
}
function echoOffre(json) {
    var valeur = eval('(' + json + ')');
    var item = '';
    for (i = 0; i < valeur.length; i++) {
        item += '<tr class="tout" id="' + valeur[i].id + '">';
        item += '<td>';
        item += '<h3 style="text-transform: uppercase;"><a style="color:#688e0a;"  href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">' + valeur[i].titre + '</a></h3>';
        item += '<address>';
        item += '<p>';
        item += '<a href="#" class="first">' + valeur[i].date_fin;
        item += '</a><br>';
        item += '<a href="#">' + valeur[i].type_contrat;
        item += '</a><br>';
        item += '<a href="#" class="last">' + valeur[i].ville;
        item += '</a><br>';
        item += '</p>';
        item += '<p class="text"><a href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">' + valeur[i].descrip + '</a></p>';
        item += '</address>';
        item += '</td>';
        item += '<td>';
        //item += '<p class="soustitle"><a href="#" class="first">' + (valeur[i].date_fin).replace("00/00/0000", "-") + '</a><a href="#">' + valeur[i].type_contrat + '</a><a href="#" class="last">' + valeur[i].ville + '</a></p>';
        item += '<p><a style="width: 85px;" class="publier btn btn-xs btn-warning" href="' + baseUrl + 'recruteur/publication/' + valeur[i].id + '"><i class="icon icon-list"></i> Publier</p>';
        item += '<p><a style="width: 85px;" class="btn btn-xs btn-default" href="' + baseUrl + 'recruteur/publierOffre/' + valeur[i].id + '"><i class="icon icon-edit"></i> Modifier</p>';
        item += '<p><a style="width: 85px;" offre_id ="'+ valeur[i].id +'" class="btn btn-xs btn-danger suppression" href="' + baseUrl + 'recruteur/desactiver/' + valeur[i].id + '"><i class="icon icon-remove"></i> Supprimer</p>';
        //item += '<p><a class="btn btn-xs btn-danger supprimerOffre" style="width: 85px;" href="javascript:;" onclick="supprimerOffre(' + valeur[i].id + ');"><i class="icon icon-remove"></i> Supprimer</a></p>
        item += '<p><a style="width: 85px;" class="btn btn-xs btn-success" href="' + baseUrl + 'offre/candidats/' + valeur[i].id + '"><i class="icon icon-eye-open"></i>  Postulants</a></p>';
        item += '</td></tr>';
    }
    $('table.toutsec tbody').append(item);
}
$(document).ready(function() {
    $('.left #ajaxImgFiltre,#ajaxImgFiltre').hide();
    //FILTRER LES OFFRES D'EMPLOI D'UN RECRUTEUR
    $('#frmfiltreOffre select,#frmfiltreOffre input').change(function() {
        $('.left #ajaxImgFiltre,#ajaxImgFiltre').show();
        $('#todo').val("filtreOffre");
        data = $('#frmfiltreOffre').serialize();
        $.post(baseUrl + 'recruteur/filtreOffre', data, function(json) {
            if (json) {
                var valeur = eval('(' + json + ')');
                var item = '';
                for (i = 0; i < valeur.length; i++) {
                    item += '<tr class="tout" id="' + valeur[i].id + '">';
                    item += '<td>';
                    item += '<h3 style="text-transform: uppercase;"><a style="color:#688e0a;" href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">' + valeur[i].titre + '</a></h3>';
                    item += '<address>';
                    item += '<p>';
                    item += '<a href="#" class="first">' + valeur[i].date_fin;
                    item += '</a><br>';
                    item += '<a href="#">' + valeur[i].type_contrat;
                    item += '</a><br>';
                    item += '<a href="#" class="last">' + valeur[i].ville;
                    item += '</a><br>';
                    item += '</p>';
                    item += '<p class="text"><a href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">' + valeur[i].descrip + '</a></p>';
                    item += '</address>';
                    item += '</td>';
                    item += '<td>';
                    //item += '<p class="soustitle"><a href="#" class="first">' + (valeur[i].date_fin).replace("00/00/0000", "-") + '</a><a href="#">' + valeur[i].type_contrat + '</a><a href="#" class="last">' + valeur[i].ville + '</a></p>';
                    item += '<p><a style="width: 85px;" class="publier btn btn-xs btn-warning" href="' + baseUrl + 'recruteur/publication/' + valeur[i].id + '"><i class="icon icon-list"></i> Publier</p>';
                    item += '<p><a style="width: 85px;" class="btn btn-xs btn-default" href="' + baseUrl + 'recruteur/publierOffre/' + valeur[i].id + '"><i class="icon icon-edit"></i> Modifier</p>';
                    item += '<p><a style="width: 85px;" class="btn btn-xs btn-danger suppression" href="' + baseUrl + 'recruteur/desactiver/' + valeur[i].id + '"><i class="icon icon-remove"></i> Supprimer</p>';
                    item += '<p><a style="width: 85px;" class="btn btn-xs btn-success" href="' + baseUrl + 'offre/candidats/' + valeur[i].id + '"><i class="icon icon-eye-open"></i>  Postulants</a></p>';
                    item += '</td></tr>';
                }
                $('table.toutsec tbody').html(item);
            }
            $('.left #ajaxImgFiltre,#ajaxImgFiltre').hide();
        });
    });

    //FILTRER LES CANDIDATS
    $('#frmfiltreCandidat select,#frmfiltreCandidat input').change(function() {
        $('.left #ajaxImgFiltre').show();
        $('#todo').val("filtreCandidats");
        var data = $('#frmfiltreCandidat').serialize();
        $.post(baseUrl + 'offre/filtreCandidat/' + $('#offreId').val(), data, function(html) {
            $('.candidatures .toutsec').html(html);
            $('.left #ajaxImgFiltre').hide();
        });
    });
    
    $('.pagin').click(function() {
            $('.left #ajaxImgFiltre,#ajaxImgFiltre').show();
            var todo = $('#todo').val();
            //ON AFFICHE LES OFFRES SUIVANTES DU RECRUTEUR
            if (todo === 'mesOffres') {
                $.post(baseUrl + 'recruteur/nextOffres', {'id': $('.toutsec .tout:last').attr('id')}, function(json) {
                    if (json) {
                        echoOffre(json);                      
                    }
                    $('.left #ajaxImgFiltre,#ajaxImgFiltre').hide();
                });
            }
            //ON AFFICHE LES OFFRES SUIVANTES DU RECRUTEUR FILTREES
            if (todo === 'filtreOffre') {
                var data = $('#frmfiltreOffre').serialize();
                $.post(baseUrl + 'recruteur/nextFiltreOffre/' + $('.toutsec .tout:last').attr('id'), data, function(json) {
                    if (json) {
                        echoOffre(json);                       
                    }
                    $('.left #ajaxImgFiltre,#ajaxImgFiltre').hide();
                });
            }

            //ON AFFICHE LES CANDIDATS SUIVANTS DE L'OFFRE
            if (todo === 'mesCandidats') {
                $.post(baseUrl + 'offre/nextCandidat/' + $('#offreId').val() + '/' + $('.toutsec .tout:last').attr('id'), data, function(json) {
                    if (json) {
                        var nbre = parseInt($('#resultats.candidat #left .espace .haut .left span ').load());
                        var length = nbre + 20;
                        $('#resultats.candidat #left .espace .haut .left span ').load(length);
                        $('.candidatures .toutsec').append(json);                      
                    }
                    $('.left #ajaxImg').hide();
                });
            }
            //ON AFFICHE LES CANDIDATS SUIVANTS DE L'OFFRE FILTRES
            if (todo === 'filtreCandidats') {
                var data = $('#frmfiltreCandidat').serialize();
                $.post(baseUrl + 'offre/nextFiltreCandidat/' + $('#offreId').val() + '/' + $('.toutsec .tout:last').attr('id'), data, function(json) {
                    if (json) {
                        var nbre = parseInt($('#resultats.candidat #left .espace .haut .left span ').load());
                        var length = nbre + 20;
                        $('#resultats.candidat #left .espace .haut .left span ').load(length);
                        $('.candidatures .toutsec').append(json);
                        
                    }
                    $('.left #ajaxImg').hide();
                });
            }
        //}
    });

    // Suppression offre d'emploi par le recruteur
    $('.supprimerOffre').click(function(e) {
        e.preventDefault();
        var id = $(this).parents('div.tout').attr('id');
        if (confirm("Voulez vous supprimer cette Offre d'emploi ?")) {
            $.ajax({
                type: "POST",
                url: baseUrl + 'recruteur/deleteOffre',
                data: "id=" + id,
                success: function(rs) {
                    if (rs === "1")
                        $("#" + id).fadeOut();
                }
            });
        }
    });
    //Sélectionner désélectionner un candidat
    $('body').delegate('button', 'click', function() {
        $(this).parents('.profil .toutsec .tout').toggleClass('selected');
        $(this).toggleClass('active');
        $('.btn-group button').removeClass('active');
    });
    //Selectionner tous les candidats
    $('.btn-group button.selectionCandidat').click(function(e) {
        $('.profil .toutsec .tout').addClass('selected');
        $('.profil .toutsec .tout .btn').addClass('active');
    });
    //Déselectionner tous les candidats
    $('.btn-group button.deselectionCandidat').click(function(e) {
        $('.profil .toutsec .tout').removeClass('selected');
        $('.profil .toutsec .tout .btn').removeClass('active');
    });
    //Ouvre la fenêtre de message
    $("#sendMessageToCandidat").click(function() {
        $('#modal_new').modal();
    });

    // Envoi du message aux candidats séléctionnés
    $("#send").click(function() {
        if (!is_string('sujet'))
            return false;
        if (!is_string('message'))
            return false;
        var selectedCandidatslenght = $('table.toutsec .selected').length;
        var seletedCandidats = new Array();
        for (var i = 0; i < selectedCandidatslenght; i++) {
            seletedCandidats.push($('table.toutsec .selected').eq(i).attr('title'));
        }
        data = {
            'canditats': seletedCandidats,
            'sujet': $('#sujet').val(),
            'message': $('#message').val()
        };
        $.post(baseUrl + 'recruteur/sendMsgBash', data, function(rs) {
            if (rs === "1") {
                $('#sujet,#message').val('');
                $('#messageSuccess').css('color','green').html('Le message a bien envoyé.');
            }
            else {
                $('#messageSuccess').css('color','red').html('L\'envoi du message a échoué. Veuillez vérifier votre' +
                    'connexion internet puis réessayer à nouveau.');
            }
        });

        return false;

    });

    // Envoi message à un candidat
    $("#sendToCanditat").click(function() {
        data = $('#messageform').serialize();
        
        $.post(baseUrl + 'recruteur/envoyer_message', data, function(message) {
            if (message == 'succes') {
                $('#messageform #sujet').val('');
                $('#messageform #message').val('');
              
                $('.modal-body .alerte').empty().html('Message envoyé avec succès').css('color', '#688e0a');
            }
            else if (message == 'erreur') {
                $('.modal-body .alerte').empty().html('l\'envoi du message a echoué ').css('color', '#333333');
            }
            else {
                $('.modal-body .alerte').empty().html(message).css('color', 'red');
            }
        });
        
    });

    // Enregistrer les candidats sélectionnés
    $('#saveCandidats').click(function() {
        var selectedCandidatslenght = $('table.toutsec .selected').length;
        var seletedCandidats = new Array();
        for (var i = 0; i < selectedCandidatslenght; i++) {
            seletedCandidats.push($('table.toutsec .selected').eq(i).attr('title'));
        }
        data = {
            'canditats': seletedCandidats,
            'offreId': $('#offreId').val()
        };
        $.post(baseUrl + 'recruteur/saveCandidats', data, function(rs) {
            console.log(rs);
            $.createNotification({content: 'Candidats enregistrés'});
        });

        return false;
    });

    // Supprimer les candidats sélectionnés
    $('#unsaveCandidats').click(function() {
        var selectedCandidatslenght = $('table.toutsec .selected').length;
        var seletedCandidats = new Array();
        for (var i = 0; i < selectedCandidatslenght; i++) {
            seletedCandidats.push($('table.toutsec .selected').eq(i).attr('title'));
        }
        data = {
            'canditats': seletedCandidats,
            'offreId': $('#offreId').val()
        };
        $.post(baseUrl + 'recruteur/unsaveCandidats', data, function() {
            $.createNotification({content: 'Candidats supprimés'});
            $('table.toutsec .tout').removeClass('selected');
            $('table.toutsec .tout').css('backgroundColor', '');
        });

        return false;
    });

    // Lister les candidats enregistrés
    $('#listCandidat').click(function() {
        $.get(baseUrl + 'offre/listCandidat/' + $('#offreId').val(), function(json) {
            if (json) {
                var nbre = parseInt($('#resultats.candidat #left .espace .haut .left span ').load());
                var length = nbre + 20;
                $('#resultats.candidat #left .espace .haut .left span ').load(length);
                $('.candidatures table.toutsec').load(json);
            }
            $('.left #ajaxImg').hide();
        });

        return false;
    });
});
