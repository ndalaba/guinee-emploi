$(document).ready(function () {
    if ($('.example').html()) {
        $('.example').dataTable({
            "bJQueryUI": true,
            "ordering": true,
            "oLanguage": {
                "sLengthMenu": "Afficher _MENU_",
                "sZeroRecords": "Aucun résultats",
                "sInfo": "_START_ à _END_ de _TOTAL_ lignes",
                "sInfoEmpty": "Affichage 0 à 0 ode 0 lignes",
                "sInfoFiltered": "(_MAX_ au total)",
                "sSearch": "Rechercher:",
                "oPaginate": {
                    "sFirst": "Premier",
                    "sPrevious": "Précédent",
                    "sNext": "Suivant",
                    "sLast": "Dernier"
                }
            }
        });
        $('input').addClass('form-control');
        $('select').addClass('form-control');
        $('.dataTables_wrapper').css('padding', '10px');

        $('.remove').click(function (e) {
            e.preventDefault();
            if (confirm('Supprimer cet enregistrement')) {
                var id = $(this).attr('id');
                var url = $(this).attr('href');
                $.get(url, function () {
                    $('#tr' + id).fadeOut('slow');
                });
            }
        });
        $('#frmfiltreOffre select,#frmfiltreOffre input').change(function () {
            $('#action').val(-1);//<input type="hidden" id="action"/> value à -1
            data = $('#frmfiltreOffre').serialize();
            $.post(baseUrl + 'offre/filtre', data, function (rs) {
                var valeur = eval('(' + rs + ')');
                var item = '';
                for (var i = 0; i < valeur.length; i++) {
                    item += '<tr id="tr' + valeur[i].idoffre + '">';
                    item += '<td>' + valeur[i].date_fin + '</td>';
                    item += '<td><a href="' + baseUrl + 'offre/detail/' + valeur[i].idOffre + '" target="_blank">' + valeur[i].titre + '</a></td>';
                    item += '<td>' + valeur[i].ville + '</td>';
                    item += '<td><a href="' + baseUrl + 'offre/recruteur/detail/' + valeur[i].idRecruteur + '" target="_blank">' + valeur[i].recruteur + '</a></td>';
                    item += '<td>' + valeur[i].vues + '</td>';
                    item += '<td>';
                    item += '<a href="' + baseUrl + 'setting/getOffre/' + valeur[i].idOffre + '" class="badge"><i class="icon-pencil"></i></a>';
                    item += '<a href="delOffre" id="' + valeur[i].idoffre + '" class="badge badge-important remove"><i class="icon-remove"></i></a>';
                    item += '</td>';
                    item += '</tr>';
                }
                $('#table_secteur tbody').html(item);
            });
        });
        $(window).scroll(function () {
            if ($(window).scrollTop() === $(document).height() - $(window).height()) {
                if ($('#action').val() === 0) {//dernières offres
                    $.post(baseUrl + 'offre/nextoffre', {'id': $('#table_secteur tbody tr:last').attr('id')}, function (rs) {
                        var valeur = eval('(' + rs + ')');
                        var item = '';
                        for (var i = 0; i < valeur.length; i++) {
                            item += '<tr id="tr' + valeur[i].idoffre + '">';
                            item += '<td>' + valeur[i].date_fin + '</td>';
                            item += '<td><a href="' + baseUrl + 'offre/detail/' + valeur[i].idOffre + '" target="_blank">' + valeur[i].titre + '</a></td>';
                            item += '<td>' + valeur[i].ville + '</td>';
                            item += '<td><a href="' + baseUrl + 'offre/recruteur/detail/' + valeur[i].idRecruteur + '" target="_blank">' + valeur[i].recruteur + '</a></td>';
                            item += '<td>' + valeur[i].vues + '</td>';
                            item += '<td>';
                            item += '<a href="' + baseUrl + 'setting/getOffre/' + valeur[i].idOffre + '" class="badge"><i class="icon-pencil"></i></a>';
                            item += '<a href="delOffre" id="' + valeur[i].idoffre + '" class="badge badge-important remove"><i class="icon-remove"></i></a>';
                            item += '</td>';
                            item += '</tr>';
                        }
                        $('#table_secteur tbody').html(item);
                    });
                }
                else if ($('#action').val() === -1) {//recherche par filtre
                    data = $('#frmfiltreOffre').serialize();
                    $.post(baseUrl + 'offre/nextFiltre/' + $('#table_secteur tbody tr:last').attr('id'), data, function (rs) {
                        var valeur = eval('(' + rs + ')');
                        var item = '';
                        for (var i = 0; i < valeur.length; i++) {
                            item += '<tr id="tr' + valeur[i].idoffre + '">';
                            item += '<td>' + valeur[i].date_fin + '</td>';
                            item += '<td><a href="' + baseUrl + 'offre/detail/' + valeur[i].idOffre + '" target="_blank">' + valeur[i].titre + '</a></td>';
                            item += '<td>' + valeur[i].ville + '</td>';
                            item += '<td><a href="' + baseUrl + 'offre/recruteur/detail/' + valeur[i].idRecruteur + '" target="_blank">' + valeur[i].recruteur + '</a></td>';
                            item += '<td>' + valeur[i].vues + '</td>';
                            item += '<td>';
                            item += '<a href="' + baseUrl + 'setting/getOffre/' + valeur[i].idOffre + '" class="badge"><i class="icon-pencil"></i></a>';
                            item += '<a href="delOffre" id="' + valeur[i].idoffre + '" class="badge badge-important remove"><i class="icon-remove"></i></a>';
                            item += '</td>';
                            item += '</tr>';
                        }
                        $('#table_secteur tbody').html(item);
                    });
                }
            }
        });
    };
});