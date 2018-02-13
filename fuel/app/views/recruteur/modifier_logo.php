
<div class="row" id="left">
    <div class="col-lg-12 logged_recruter espace">
        <?php echo render('recruteur/recruteur_header'); ?>
        <p class="breadcrumb"><a href="<?php echo Uri::create('recruteur') ?>">Accueil &raquo;</a>  Modifier mon logo</p>

        <div class="text">

            <h2 class="first"><span> Modifier mon logo</span> </h2>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <?php //Affichage individuel des erreurs du formulaire
                if (isset($errors)): ?>
                    <div class="alert alert-danger" style="margin-left: 0;">
                        <?php echo $errors; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="form col-lg-6">
                <?php //$logo = ($recruteur->logo == 'no-logo.jpg') ? 'nofile/no-logo.jpg' : $recruteur->logo; ?>
                <form action="<?php echo Uri::base(false) . 'recruteur/UpdateLogo/' ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4">
                            <img style="width: 100%;" src="<?php echo Uri::base(false) . 'assets/upload/logo/' .  $recruteur->logo; ?>"/>
                        </div>
                        <div class="col-lg-8">
                            <p class="name"><?php echo $recruteur->nom; ?></p>
                            <p><span>Secteur d'activit&eacute; :</span> <?php echo $secteur; ?></p>
                            <p><span>Localisation : </span><?php echo Myfunction::getVille($recruteur->ville) . ', ' . $recruteur->pays; ?></p>
                        </div>
                    </div>
                    <div class="input">
                        <input  type="file" name="logo"/>
                    </div>
                    <p class="ok" style="text-align: left;"><input type="submit" value="Envoyer" id="ok"/></p>
                </form>
            </div>
            <div class="formbox col-lg-6">
                <ul class="register_info">
                    <li><a href="#" style="text-decoration: none;"><span>Sauvegardez</span> vos annonces</a></li>
                    <li><a href="#" style="text-decoration: none;"><span>Suivez</span> les candidatures</a></li>
                    <li><a href="#" style="text-decoration: none;"><span>Archivez</span> les cv et offres d’emploi</a></li>
                    <li><a href="#" style="text-decoration: none;"><span>Gérez</span> les alertes</a></li>
                    <li><a href="#" style="text-decoration: none;"><span>Maîtrisez</span> votre offre d'emploi</a></li>
                </ul>

            </div>
        </div>

    </div>
    <?php echo render('inc/espace') ?>
    
</div>
<?php echo render('inc/lastJobs') ?>