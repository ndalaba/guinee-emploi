function echoEntreprise(json) {
    var valeur = eval('(' + json + ')');
    var item = '';
    for (i = 0; i < valeur.length; i++) {
        item += '<div class="row tout" id="' + valeur[i].id + '">';
        item += '<div class="col-lg-12 ">';
        item += '<div class="row"><div class="col-lg-12"><h5 class="title"><a href="' + baseUrl + 'recruteur/detail/' + valeur[i].id + '/' + encodeURIComponent(valeur[i].nom) + '">' + valeur[i].nom + '</a></h5></div></div>';
        item += '<div class="row"><div class="col-lg-12"><p class="text"><a href="' + baseUrl + 'recruteur/detail/' + valeur[i].id + '/' + encodeURIComponent(valeur[i].nom) + '">' + valeur[i].description + '</a></p></div></div>';
        item += '<div class="row ">';
        item += '<div class="col-lg-9"><p class="entreprise">&raquo; <a href="' + baseUrl + 'offre/recruteur/' + valeur[i].id + '">Voir toutes les offres proposées par ' + valeur[i].nom + '</a></p></div>';
        item += '<div class="col-lg-2"><a href="' + baseUrl + 'recruteur/detail/' + valeur[i].id + '"><img class="img-responsive" src="' + baseUrl + 'assets/upload/logo/' + valeur[i].logo + '"  title="' + valeur[i].nom + '"/></a></div>';
        item += '<div class="col-lg-12"><p class="entreprise">&raquo; <a href="' + baseUrl + 'recruteur/detail/' + valeur[i].id + '">Plus d\'informations sur  ' + valeur[i].nom + '</a></p></div>';
        item += '</div></div></div>';

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
        //$('#action').val(-1);//<input type="hidden" id="action"/> value à -1
        data = $('#frmfiltreOffre').serialize();

        $.post(baseUrl + 'recruteur/filtreEntreprise', data, function(data) {console.log(data);
            var valeur = eval('(' + data + ')');
            var item = '';
            for (i = 0; i < valeur.length; i++) {
                item += '<div class="row tout" id="' + valeur[i].id + '">';
                item += '<div class="col-lg-12 ">';
                item += '<div class="row"><div class="col-lg-12"><h5 class="title"><a href="' + baseUrl + 'recruteur/detail/' + valeur[i].id + '/' + encodeURIComponent(valeur[i].nom) + '">' + valeur[i].nom + '</a></h5></div></div>';
                item += '<div class="row"><div class="col-lg-12"><p class="text"><a href="' + baseUrl + 'recruteur/detail/' + valeur[i].id + '/' + encodeURIComponent(valeur[i].nom) + '">' + valeur[i].description + '</a></p></div></div>';
                item += '<div class="row ">';
                item += '<div class="col-lg-9"><p class="entreprise">&raquo; <a href="' + baseUrl + 'offre/recruteur/' + valeur[i].id + '">Voir toutes les offres proposées par ' + valeur[i].nom + '</a></p></div>';
                item += '<div class="col-lg-2"><a href="' + baseUrl + 'recruteur/detail/' + valeur[i].id + '"><img class="img-responsive" src="' + baseUrl + 'assets/upload/logo/' + valeur[i].logo + '"  title="' + valeur[i].nom + '"/></a></div>';
                item += '<div class="col-lg-12"><p class="entreprise">&raquo; <a href="' + baseUrl + 'recruteur/detail/' + valeur[i].id + '">Plus d\'informations sur  ' + valeur[i].nom + '</a></p></div>';
                item += '</div></div></div>';
            }
            $('.espace_int .bas .left  .nobre ').html(valeur.length);
            $('.espace_int .bas .left .listofres ').html(item);
            $('.left #ajaxImgFiltre').hide();
        });
    });
//AFFICHAGE OFFRES SUIVANTES
    $('.pagin_recruteurs').click(function(){
            if ($('.listofres .tout:last').attr('id')) { //Recherche annonce suivante sans filtre
                $('.left #ajaxImg').show();
                $.post(baseUrl + 'recruteur/nextEntreprise', {'id': $('.listofres .tout:last').attr('id')}, function(json) {
                    if (json) {
                        echoEntreprise(json);
                        $(window).data('ajaxready', true);
                    }
                    $('.left #ajaxImg').hide();
                });
            }

        
    });
});


