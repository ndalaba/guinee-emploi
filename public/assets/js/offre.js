
function echoOffre(json) {
    var valeur = eval('(' + json + ')');
    var item = '';
    for (i = 0; i < valeur.length; i++) {
        item += '<div class="row tout" id="' + valeur[i].id + '">';
        item += '<div class="col-lg-12 ">';
        item += '<div class="row"><div class="col-lg-12"><h5 class="title"><a href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">' + valeur[i].titre + '</a></h5></div></div>';
        item += '<div class="row"><div class="col-lg-12"><p class="soustitle"><a href="#" class="first">' + (valeur[i].date_fin).replace("00/00/0000", "-") + '</a><a href="#">' + valeur[i].type_contrat + '</a><a href="#" class="last">' + valeur[i].ville + '</a></p></div></div>';
        item += '<div class="row"><div class="col-lg-12"><p class="text"><a href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">' + valeur[i].descrip + '</a></p></div></div>';
        item += '<div class="row"><div class="col-lg-12"> <p class="voir"><a href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">Voir l\'offre</a></p></div></div>';
        if (valeur[i].nom) {
            item += '<div class="row ">';
            item += '<div class="col-lg-9"><p class="entreprise">&raquo; <a href="' + baseUrl + 'offre/Recruteur/' + valeur[i].recruteur_id + '">Voir toutes les offres proposées par ' + valeur[i].nom + '</a></p></div>';
            if (valeur[i].logo!='') {
                item += '<div class="col-lg-2"><a href="' + baseUrl + 'offre/Recruteur/' + valeur[i].recruteur_id + '"><img class="img-responsive" src="' + baseUrl + 'assets/upload/logo/' + valeur[i].logo + '"  title="' + valeur[i].nom + '"/></a></div>';
            }
            item += '<div class="col-lg-12"><p class="entreprise">&raquo; <a href="' + baseUrl + 'recruteur/detail/' + valeur[i].recruteur_id + '">Plus d\'informations sur  ' + valeur[i].nom + '</a></p></div>';
            item += '</div>';
        }
        
        item += '</div></div>';
        
    }
    var nbre = parseInt($('.espace_int .bas .left .nobre ').html());
    var length = nbre + valeur.length;

    $('.espace_int .bas .left .nobre ').html(length);
    $('.espace_int .bas .left .listofres').append(item);

}
$(function() {
    //CHANGEMENT DETAT DES SELECTS DANS LE FILTRE
    $('#frmfiltreOffre select,#frmfiltreOffre input').change(function() {
        $('.left #ajaxImgFiltre').show();
        $('#action').val(-1);//<input type="hidden" id="action"/> value à -1
        data = $('#frmfiltreOffre').serialize();
        $.post(baseUrl + 'offre/filtre', data, function(data) {
            var valeur = eval('(' + data + ')');
            var item = '';
            for (i = 0; i < valeur.length; i++) {
                item += '<div class="row tout" id="' + valeur[i].id + '">';
                item += '<div class="col-lg-12 ">';
                item += '<div class="row"><div class="col-lg-12"><h5 class="title"><a href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">' + valeur[i].titre + '</a></h5></div></div>';
                item += '<div class="row"><div class="col-lg-12"><p class="soustitle"><a href="#" class="first">' + (valeur[i].date_fin).replace("00/00/0000", "-") + '</a><a href="#">' + valeur[i].type_contrat + '</a><a href="#" class="last">' + valeur[i].ville + '</a></p></div></div>';
                item += '<div class="row"><div class="col-lg-12"><p class="text"><a href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">' + valeur[i].descrip + '</a></p></div></div>';
                if (!valeur[i].nom)
                    item += '<div class="row"><div class="col-lg-12"> <p class="voir"><a href="' + baseUrl + 'offre/detail/' + valeur[i].id + '/' + friendlyTitle(valeur[i].titre) + '">Voir l\'offre</a></p></div></div>';
                if (valeur[i].nom) {
                    item += '<div class="row ">';
                    item += '<div class="col-lg-9"><p class="entreprise">&raquo; <a href="' + baseUrl + 'offre/Recruteur/' + valeur[i].recruteur_id + '">Voir toutes les offres proposées par ' + valeur[i].nom + '</a></p></div>';
                    item += '<div class="col-lg-2"><a href="' + baseUrl + 'offre/Recruteur/' + valeur[i].recruteur_id + '"><img class="img-responsive" src="' + baseUrl + 'assets/upload/logo/' + valeur[i].logo + '" title="' + valeur[i].nom + '"/></a></div>';
                    item += '<div class="col-lg-12"><p class="entreprise">&raquo; <a href="' + baseUrl + 'recruteur/detail/' + valeur[i].recruteur_id + '">Plus d\'informations sur  ' + valeur[i].nom + '</a></p></div>';
                    item += '</div>';
                }
                item += '</div></div>';
            }
            $('.espace_int .bas .left  .nobre ').html(valeur.length);
            $('.espace_int .bas .left .listofres ').html(item);
            $('.left #ajaxImgFiltre').hide();
        });
    });
//AFFICHAGE OFFRES SUIVANTES


    $('.pagin_last_offre').click(function() {
        if ($('#action').val() == 0 && $('#action').attr('action') == "offre" && $('.listofres .tout:last').attr('id')) { //Recherche annonce suivante sans filtre
            $('.left #ajaxImg').show();
            $.post(baseUrl + 'offre/nextoffre', {'id': $('.listofres .tout:last').attr('id')}, function(json) {
                if (json) {
                    echoOffre(json);

                }
                $('.left #ajaxImg').hide();
            });
        }
        else if ($('#action').val() == -1 && $('.listofres .tout:last').attr('id')) {//Recherche annonce suivante avec filtre
            $('.left #ajaxImg').show();
            data = $('#frmfiltreOffre').serialize();
            $.post(baseUrl + 'offre/nextFiltre/' + $('.listofres .tout:last').attr('id'), data, function(json) {
                if (json) {
                    echoOffre(json);

                }
                $('.left #ajaxImg').hide();
            });
        }
        else if ($('#action').attr('action') == "categorie" && $('.listofres .tout:last').attr('id')) {//Recherche annonce suivante par catégorie
            $('.left #ajaxImg').show();
            data = {'categorie': $('#action').val()};
            $.post(baseUrl + 'offre/nextCategorie/' + $('.listofres .tout:last').attr('id'), data, function(json) {
                if (json) {
                    echoOffre(json);

                }
                $('.left #ajaxImg').hide();
            });
        }
        else if ($('#action').attr('action') == "motcle" && $('.listofres .tout:last').attr('id')) {//Recherche annonce suivante par mot clé
            $('.left #ajaxImg').show();
            data = {'motcle': $('#action').val(), 'ville': $('#action').attr('ville')};
            $.post(baseUrl + 'offre/nextMotcle/' + $('.listofres .tout:last').attr('id'), data, function(json) {
                if (json) {
                    echoOffre(json);

                }
                $('.left #ajaxImg').hide();
            });
        }
    });

});
