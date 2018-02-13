<div class="row">
    <div class="col-lg-12 espace logged_recruter">

        <?php //echo render('recruteur/recruteur_header'); ?>

        <div class="bas">
            <div class="left">
                <p class="breadcrumb"><a href="<?php echo Uri::base(false).'recruteur/'?>">Mon espace &raquo;</a>
                    <a href="<?php echo Uri::base(false).'recruteur/messagesRecruteur'?>">Mes messages &raquo;</a><?php if (isset($lemessage)) echo $lemessage->sujet; ?> </p>
                <div class="toutsec">
                    <?php  if (isset($lemessage)): ?>
                    <p class="lemessage"><?php echo $lemessage->message; ?></p>

                    <?php endif; ?>
                </div>
            </div>
            <div class="right">
            </div>
        </div>
    </div>
</div>
