<div id="left" class="row espace_int">
    <div class="col-lg-12 espace_candidat">
         <?php echo render('candidat/candidat_header'); ?>
        <div class="row">
            <div class="col-lg-12 " >
                <p class="breadcrumb">
                    <a href="<?php echo Uri::base(false) . 'candidat/' ?>"> Espace candidat &raquo;</a> Mes messages
                </p>
                <div class="row toutsec" >                                    
                    <table class="table table-bordered table-condensed table-hover" style="width: 95%;margin-left: 15px;">
                        <thead>
                            <tr>
                                <th></th>
                                <th>SUJETS</th>
                                <th>DATE</th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php
                            if (isset($messages)) {
                                foreach ($messages as $msg):
                                    ?>        
                                    <tr >
                                        <td ><a href="<?php echo Uri::create('candidat/removeMessage/' . $msg->id) ?>"><i class="icon-remove"></i></a></td>
                                        <td ><p class="message" ><a href="<?php echo Uri::base(false) . 'candidat/detailM/' . $msg->id . '/' . Inflector::friendly_title($msg->sujet) ?>"><?php echo $msg->message ?></a></p></td>
                                        <td ><span class="date" ><?php echo FormatDate::lettres($msg->ajout); ?></span></td>
                                    </tr>
                                <?php endforeach;
                            }
                            ?>
                        </tbody>                                        
                    </table>                                   
                    <span class="col-lg-12 suivan"><?php if (isset($pagination)) echo $pagination; ?></span>
                </div>                                
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" id="espace">
<?php echo render('inc/espace') ?>
    </div>              
</div>
<?php echo render('inc/lastJobs') ?>
