// Function pour charger le champ textArea à uploader à la place de l'éditeur
function loadContent() {
    var cont = window.monEditeur.document.getElementById('editor').innerHTML;
    $('#exp').html(cont);
    if ($.trim($('#exp').val()) === "<br>")
        $('#exp').val('');
}
function isValid() {
    loadContent();
    if (!is_string('lastName'))
        return false;
    if (!is_string('firstName'))
        return false;
    if (!is_string('activity'))
        return false;
    if (!is_string('country'))
        return false;
    if (!is_string('idville'))
        return false;
    if (!is_string('activity'))
        return false;
    if (!is_string('status'))
        return false;
    if (!is_string('levelEducation'))
        return false;
    return true;
}
function deleteCV(email) {
    if (confirm("Voulez vous supprimer ce CV ?")) {
        $.ajax({
            type: "POST",
            url: baseUrl + 'candidat/deleteCV',
            data: "email=" + email,
            success: function(data) {
                window.location.reload();
            }
        });
    }
}
$(function() {
    $('#frmfiltreCandidat select,#frmfiltreCandidat input').change(function() {
        $('.espace_int #ajaxImgFiltre').show();
        $('#action').val(1);
        data = $('#frmfiltreCandidat').serialize();
        $.post(baseUrl + 'candidat/filtre', data, function(html) {
            $('.listcandidats').html(html);
            $('.espace_int #ajaxImgFiltre').hide();
        });
    });
    //init scroll
    $(window).data('ajaxready', true);
    $(window).scroll(function() {
        if ($(window).data('ajaxready') == false)
            return;
        if ($(window).scrollTop() === $(document).height() - $(window).height()) {
            $(window).data('ajaxready', false);
            data = $('#frmfiltreCandidat').serialize();
            if ($('#action').val() == 1 && $('.listcandidats .tout:last').attr('id')) {
                $('.espace_int #ajaxImg').show();
                $.post(baseUrl + 'candidat/nextFiltre/' + $('.listcandidats .tout:last').attr('id'), data, function(json) {
                    if (json) {                       
                        $('.espace_int .listcandidats').append(json);
                         $('.espace_int .breadcrumb span.nbre ').html($('.listcandidats .tout').size());
                        $(window).data('ajaxready', true);
                    }
                    $('.espace_int #ajaxImg').hide();
                });
            }
            else if ($('#action').val() == 0 && $('.listcandidats .tout:last').attr('id')) {
                $('.espace_int #ajaxImg').show();
                $.post(baseUrl + 'candidat/nextCvtheque/' + $('.listcandidats .tout:last').attr('id'), data, function(json) {
                    if (json) {                       
                        $('.espace_int .listcandidats').append(json);
                         $('.espace_int .breadcrumb span.nbre ').html($('.listcandidats .tout').size());
                        $(window).data('ajaxready', true);
                    }
                    $('.espace_int #ajaxImg').hide();
                });
            }
        }
    });
//Ouvre la fenêtre de message vers le recruteur
    $("#sendMessageToRecruteur").click(function() {
        if ($(this).attr('cand') == 'candidat') {
            $('#modal_new').modal();
        }
        else {
            $(location).attr('href', baseUrl + 'candidat/');
        }
    });
// Envoi du message au recruteur
    $("#send").click(function() {
        if (!is_string('sujet'))
            return false;
        if (!is_string('message'))
            return false;
        var recruteur = $('#msgrec').attr('title');

        data = {
            'recruteur': recruteur,
            'sujet': $('#sujet').val(),
            'message': $('#message').val()
        };
        $.post(baseUrl + 'candidat/sendMsgrec', data, function(rs) {
            if (rs === "1") {
                $('#sujet,#message').val('');
                $.createNotification({content: 'Message envoyé avec succès'});
            }
            else {
                $.createNotification({content: 'l\'envoi du message a echoué '});
            }
        });

    });

});
