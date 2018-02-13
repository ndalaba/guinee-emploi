<div class="row">
    <div class="col-lg-12 espace logged_recruter profil">

        <?php echo render('recruteur/recruteur_header'); ?>

        <div class="row">   
            <div class="col-lg-12">
                <p class="breadcrumb"><a href="<?php echo Uri::base(false) . 'recruteur/' ?>">Mon espace &raquo;</a> Vos messages</p>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>SUJETS</th>
                                    <th>DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($messages)) {
                                    foreach ($messages as $msg):
                                        ?>        
                                        <tr>
                                            <td><a href="<?php echo Uri::create('recruteur/removeMessage/' . $msg->id) ?>"><i class="icon-remove"></i></a></td>
                                            <td><a href="<?php echo Uri::base(false) . 'recruteur/detailM/' . $msg->id . '/' . Inflector::friendly_title($msg->sujet) ?>"><?php echo $msg->sujet ?></a></td>
                                            <td><?php echo FormatDate::lettres($msg->ajout); ?></td>
                                        </tr>
                                    <?php endforeach;
                                }
                                ?>
                            </tbody>                                        
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <span class="suivan"><?php if (isset($pagination)) echo $pagination; ?></span>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<?php echo render('inc/lastJobs') ?>