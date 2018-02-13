<!DOCTYPE HTML>
<html>
    <head>
        <title>Guinee-Emploi : MES CANDIDATURES</title>
        <?php echo render('inc/meta') ?>
        <?php echo Asset::css('global.css') ?>
        <?php echo Asset::js('jquery-latest.js') ?>

    </head>

    <body class="interne profil candidat" id="resultats">
        <div id="main">
            <div id="top"></div>
            <div id="content">
                <div id="left">
                    <?php echo render('inc/header') ?>
                    <div class="espace">
                        <div class="haut">
                            <p class="left">Bienvenue <span><?php echo $candidat->prenom . ' ' . $candidat->nom; ?></span></p>
                            <?php echo render('inc/space') ?>
                        </div>
                        <div class="bas candidatures">
                            <h1  class="bigtitle">MES CANDIDATURES</h1>
                            <div class="toutsec">
                                <?php if (isset($candidat)): foreach (array_reverse($candidat->offres) as $offre): ?>
                                        <?php $recruteur = Model_Recruteur::find($offre->recruteur_id); ?>
                                        <div class="tout">
                                            <div class="textcont">
                                                <h5 class="title"><a href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id . '/' . Inflector::friendly_title($offre->titre) ?>"><?php echo $offre->titre ?></a></h5>
                                                <p class="soustitle"><a href="#" class="first"><?php echo Helper::formatDate($offre->date_debut) ?></a><a href="#"><?php echo $offre->type_contrat ?></a><a href="#" class="last"><?php echo stripslashes($offre->ville) ?></a></p>
                                                <p class="text"><a href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id . '/' . Inflector::friendly_title($offre->titre) ?>"><?php echo Str::truncate($offre->description, 200) ?></a></p>
                                                <?php if (isset($recruteur->nom) AND $recruteur->nom != ""): ?>
                                                    <div class="imgcont"><a href="#"><img src="<?php echo Uri::base(false) . 'assets/upload/logo/' . $recruteur->logo ?>" width="45" height="25" /></a></div>
                                                    <div class="entreprise">
                                                        <p>&raquo; <a href="<?php echo Uri::base(false) . 'offre/recruteur/' . $offre->recruteur_id . '/' . Inflector::friendly_title($recruteur->nom) ?>">Voir toutes les offres proposées par <?php echo $recruteur->nom; ?></a></p>
                                                        <p>&raquo; <a href="<?php echo Uri::base(false) . 'recruteur/detail/' . $offre->recruteur_id . '/' . Inflector::friendly_title($recruteur->nom) ?>">Plus d'informations sur <?php echo $recruteur->nom; ?> </a><span></span></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php //echo render('inc/espace') ?>
                <?php echo render('inc/lastJobs') ?>
                </div>
<?php echo render('inc/right') ?>
            </div>
        </div>
<?php echo render('inc/footer') ?>
    </body>
</html>