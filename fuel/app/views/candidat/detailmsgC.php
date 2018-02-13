<div id="left" class="row espace_int">
    <div class="col-lg-12 espace_candidat">
         <?php echo render('candidat/candidat_header'); ?>
        <div class="row">
            <div class="col-lg-12 " >
                <p class="breadcrumb">
                    <a href="<?php echo Uri::base(false) . 'candidat/' ?>"> Espace candidat &raquo;</a> Mes messages
                </p>
                <div class="row toutsec">
                    <?php if (isset($lemessage)): ?> 
                    <div class="col-lg-12">
                        <p class="lemessage"><?php echo $lemessage->message; ?></p>
                    </div>
                    <?php endif; ?>                                  
                </div>
                <div style="display:none;width: 50px;margin: auto;" id="ajaxImg"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
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