<div id="left" class="row espace_int">
    <div class="col-lg-12 espace_candidat">
        <?php echo render('candidat/candidat_header'); ?>

    </div>
    <div class="col-lg-12 bas candidatures">
        <h1  class="bigtitle">MES CANDIDATURES</h1>
        <div class="row ">
            <?php if (isset($candidat)): foreach (array_reverse($candidat->offres) as $offre): ?>
                    <?php $recruteur = Model_Recruteur::find($offre->recruteur_id); ?>
                    <div class="col-lg-12 postcandidat">
                        <div class="row">
                            
                                <h5 class="title"><a  class="col-lg-12"href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id . '/' . Inflector::friendly_title($offre->titre) ?>"><?php echo $offre->titre ?></a></h5>
                           
                            <div class="col-lg-12">
                                <p class="soustitle">
                                    <a href="#" class="first"><?php echo Helper::formatDate($offre->date_debut) ?></a><a href="#"><?php echo $offre->type_contrat ?></a><a href="#" class="last"><?php echo stripslashes($offre->ville) ?></a></p>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <p class="text">
                                            <a href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id . '/' . Inflector::friendly_title($offre->titre) ?>"><?php echo Str::truncate($offre->description, 200) ?></a>
                                        </p>
                                    </div>
                                    <?php if (isset($recruteur->nom) AND $recruteur->nom != ""): ?>
                                        <div class="col-lg-2">
                                            <a  href="<?php echo Uri::base(false) . 'recruteur/detail/' . $offre->recruteur_id . '/' . Inflector::friendly_title($recruteur->nom) ?>">  
                                                <img src="<?php echo Uri::base(false) . 'assets/upload/logo/' . $recruteur->logo ?>" class="img-responsive img-rounded" /></a>
                                        </div>   
                                    <?php endif; ?>   


                                </div>
                            </div>
                            <?php if (isset($recruteur->nom) AND $recruteur->nom != ""): ?>
                                <div class="col-lg-12">
                                    <p class="entreprise">&raquo; <a href="<?php echo Uri::base(false) . 'recruteur/detail/' . $offre->recruteur_id . '/' . Inflector::friendly_title($recruteur->nom) ?>">Plus d'informations sur <?php echo $recruteur->nom; ?> </a><span></span></p>
                                </div>
                                <div class="col-lg-12">
                                   <p class="entreprise">&raquo; <a href="<?php echo Uri::base(false) . 'offre/recruteur/' . $offre->recruteur_id . '/' . Inflector::friendly_title($recruteur->nom) ?>">Voir toutes les offres proposées par <?php echo $recruteur->nom; ?></a></p>  
                                </div>
                               
                                
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>
<?php echo render('inc/lastJobs') ?>



