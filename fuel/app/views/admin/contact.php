<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"> <span class="glyphicon glyphicon-inbox"></span> Messages de contact</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <table id="table_secteur" class="example table table-bordered table-condensed table-hover">
                    <thead>
                        <tr>
                            <th style="width: 20px"></th>
                            <th style="width: 20px"></th>
                            <th style="width: 270px">De</th>
                            <th style="width: 370px">Sujet</th>
                            <th style="width: 150px">Reçu</th>                                                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($messages as $m) : ?>
                            <tr id="<?php echo $m->id ?>" class="trMessage" style="font-weight: <?php echo ($m->lu == 0) ? "bold" : "normal" ?>; cursor: pointer;color: #344F70;font-size: 12px;">                
                                <td><input type="checkbox" name="operation[]" value="<?php echo $m->id ?>"/></td>
                                <td><i class="icon <?php echo ($m->lu == 0) ? " icon-envelope-alt" : " icon-envelope" ?>"></i></td>
                                <td><?php echo stripslashes($m->nom) ?></td>
                                <td><?php echo stripslashes($m->sujet) ?></td>
                                <td><?php echo date("d/m/Y h:i", $m->ajout) ?></td>              
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_message">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Alert</h4>
            </div>
            <div class="modal-body">
                <p>De: <span class="nom"></span></p>
                <p>Reçu: <span class="dte"></span></p>
                <div class="msg">


                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>
<script>
    $('.trMessage').click(function () {
        $.getJSON(baseUrl + 'admin/setting/getMessage/' + $(this).attr('id'), function (rs) {
            $('#modal_message').modal();
            $('#modal_message .sujet').html(rs.sujet);
            $('#modal_message .nom').html(rs.nom + '  &lt;' + rs.mail + '&gt;');
            $('#modal_message .msg').html(rs.message);
            var $date = new Date(rs.ajout * 1000);
            $('#modal_message .dte').html($date.getDate() + '/' + $date.getMonth() + '/' + $date.getFullYear() + ' ' + $date.getHours() + ':' + $date.getMinutes());
        });
        $('.trMessage').css('background', 'transparent');
        $(this).css('background', '#bdd3eb').css('font-weight', 'normal');
        $(this).find('i').removeClass('icon-envelope-alt').addClass('icon-envelope');
    });
</script>