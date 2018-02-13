<div class="row">
    <div class="col-lg-12 espace logged_recruter">

        <?php echo render('recruteur/recruteur_header'); ?>

        <div class="row body">
            <div class="col-lg-6">
                <p class="breadcrumb"><a href="">Accueil &raquo;</a><a href=""> Espace recruteur &raquo;</a> mon compte</p>

                <ul class="toutsection">
                    <li class="titre"><a href="#">Mon Profil Public</a><a href="<?php echo Uri::base(false) . 'recruteur/profilRecruteur/' ?>" class="profil">Gérer mon profil</a></li>
                    <div class="text">
                        <p>Gérez votre e-réputation et soyez visible sur les moteurs de recherche grâce au Profil public.</p>
                    </div>
                    <li class="titre"><a href="<?php echo Uri::base(false) . 'recruteur/mesOffres' ?>">Mes Offres d'emploi</a></li>
                    <div class="text"><p>Suivez toutes les offres d'emploi que j'ai publiées </p></div>
                    <p class="optimiser"><a href="<?php echo Uri::base(false) . 'recruteur/publierOffre' ?>">Publier une offre d'emploi</a></p>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="photo">
                            <img class="img-thumbnail" style="width: 100%;" src="<?php echo Uri::base(false) . 'assets/upload/logo/' . $recruteur->logo; ?>" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="photo">
                            <div class="txtcont">
                                <p><?php echo $recruteur->nom ?></p>
                                <p>
                                    <a href="<?php echo Uri::base(false) . 'recruteur/monLogo' ?>">Modifier mon logo</a>
                                </p>
                                <p>
                                    <a href="<?php echo Uri::base(false) . 'recruteur/UpdatePwd' ?>">Modifier mon mot de passe </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <ul class="toutsection">
                            <li class="titre"><a href="<?php echo Uri::create('recruteur/messagesRecruteur') ?>">Mes messages</a></li>
                            <div class="text">
                                <p>Tous les messages qui vous sont envoyés sont enregistrés ici :</p>

                            </div>
                            <p class="optimiser"> <a href="<?php echo Uri::create('recruteur/messagesRecruteur') ?>" class="email">Lire mes messages</a> </p>
                        </ul>
                </div>
            </div>
        </div>
    </div>

    <?php echo render('inc/espace') ?>
    

</div>
<?php echo render('inc/lastJobs') ?>