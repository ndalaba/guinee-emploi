<div class="row" >
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12 bloc_entete">
                <h5 class="text-right" style="margin-top: 0px;"></h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 bloc_contenu" style="padding-bottom: 10px;">
                <h3 >Nos partenaires</h3>
                <?php $partenaires = Model_Partenaire::find('all'); ?>
                <?php foreach ($partenaires as $p): ?>
                    <div class="col-lg-4">
                        
                        <div class="col-lg-12">
                            <a href="<?php echo $p->site_web ?>" target="_blank" title="<?php echo stripslashes($p->nom_parte) ?>">
                                <img class="img-responsive" style="max-height: 80px;" src="<?php echo Uri::base(false) . 'assets/upload/partenaires/' . $p->logo_parte ?>"  alt="<?php echo stripslashes($p->nom_parte) ?>" title="<?php echo stripslashes($p->nom_parte) ?>"/>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
