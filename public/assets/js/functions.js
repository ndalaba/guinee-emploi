function is_string(id) {
    var str = document.getElementById(id);
    if (str.value.trim().length === 0) {
        str.style.borderColor = 'red';
        return false;
    }
    else {
        str.style.borderColor = '';
        return true;
    }
}
function is_email(id) {
    var str = document.getElementById(id);
    if (!str.value.trim().match(new RegExp('^[a-z0-9._-]+@[a-z0-9._-]{2,}\\.[a-z]{2,4}$'))) {
        str.style.borderColor = 'red';
        return false;
    }
    else {
        str.style.borderColor = '';
        return true;
    }
}
function is_phone(id) {
    var str = document.getElementById(id);
    if (!str.value.match(new RegExp('^([0-9]{8}|\\+[0-9]{10})$'))) {
        str.style.borderColor = 'red';
        return false;
    }
    else {
        str.style.borderColor = '';
        return true;
    }
}
function setSelectValue(selectId, val) {
    var elmt = document.getElementById(selectId);
    for (var i = 0; i < elmt.options.length; i++) {
        if (elmt.options[i].value === val)
            elmt.options[i].selected = true;
    }
}
function popup(lien) {
    window.open(lien, "PopUp", "width=500,height=350,location=no,status=no,toolbar=no,scrollbars=yes");
    return false;
}
function supprimerAlert(id) {
    if (confirm("Voulez vous supprimer cette Alerte ?")) {
        $.ajax({
            type: "POST",
            url: baseUrl + 'candidat/deleteAlerte',
            data: "id=" + id,
            success: function(data) {
                $('.tr' + id).fadeOut();
            }
        });
    }
}

function getbySecteur(id) {
    $.ajax({
        type: "POST",
        url: baseUrl + 'offre/getbySecteur',
        data: "id=" + id,
        success: function(data) {
            window.location.reload();
            //jobsiteresponsive_update (file://BENDERPC/jobsiteresponsive_update)

        }
    });
}
function changeSpace(cls) {
    $('#form_connexion').show();
    if (cls === "one") {
        
        $('.connexion .espace_connect .one').css('backgroundColor', '#688e0a');
        $('.connexion .espace_connect .two').css('backgroundColor', '#aad932');
        $('.connexion .espace_connect .one a').css('color', '#FFF');
        $('.connexion .espace_connect .two a').css('color', '#688e0a');
        $('#inscrire').attr('href', baseUrl + 'recruteur/enregistrer');
        $('.loginUser').val('2');
    }
    else {
        $('.connexion .espace_connect .two').css('backgroundColor', '#688e0a');
        $('.connexion .espace_connect .one').css('backgroundColor', '#aad932');
        $('.connexion .espace_connect .two a').css('color', '#FFF');
        $('.connexion .espace_connect .one a').css('color', '#688e0a');
        $('#inscrire').attr('href', baseUrl + 'candidat/enregistrer');
        $('.loginUser').val('1');
    }
    return false;
}
function unsaveNewsletter() {
    if (confirm('Ces emails ne recevront plus la newsletter')) {
        $('.newsletter #ajaxImg2').show();
        $.post(baseUrl + 'front/unsaveNewsletter', {'mail': $('#umails').val()}, function(rs) {
            $("#right .bloc .annonces .newsletter .lespan").eq(1).html(rs);
            $('.newsletter #ajaxImg2').hide();
        });
    }
    return false;
}
//Admin side
function saveNewsletterAdmin() {
    $('.newsletter #ajaxImg').show();
    $.post(baseUrl + 'front/saveNewsletter', {'mail': $('#mails').val()}, function(rs) {
        $("#right .bloc .annonces .newsletter .lespan").eq(0).html(rs);
        $('.newsletter #ajaxImg').hide();
    });

    return false;
}
//Front side
function saveNewsletter() {
    if (is_email('mail')) {
        $('.newsletter #ajaxImg').show();
        $.post(baseUrl + 'front/saveNewsletter', {'mail': $('#mail').val()}, function(rs) {           
            $("#right .bloc .annonces .newsletter .lespan").html(rs);            
            $('.newsletter #ajaxImg').hide();
        });

    } else {
        $("#right .bloc .annonces .newsletter .lespan").html('Entrer un email valide svp!');
    }
    return false;
}
