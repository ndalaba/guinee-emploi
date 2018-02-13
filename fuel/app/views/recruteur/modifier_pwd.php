<div class="row" id="left">
    <div class="col-lg-12 logged_recruter espace">
        <?php echo render('recruteur/recruteur_header'); ?>
        <p class="breadcrumb"><a href="">Accueil &raquo;</a> Modifier le mot de passe</p>
        <div class="text">

            <h2 class="first"><span>Modifier le mot de passe</span> </h2>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <?php //Affichage individuel des erreurs du formulaire
                if (isset($errors)): ?>
                    <div class="alert alert-danger" style="margin-left: 0;">
                        <?php echo current($errors); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="form col-lg-6">
                <form class="form-horizontal" action="<?php echo Uri::base(false) . 'recruteur/editPwd/' ?>" method="post">
                        <div class="form-group">
                            <label  class="col-lg-4">Mot de passe*</label>
                            <div class="col-lg-8">
                                <input class="form-control"  type="password" name="pwd"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4">Confirmer le Mot de passe*</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="password" name="cpwd"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4"></label>
                            <div class="col-lg-8">
                                <p class="ok" style="text-align: left;"><input type="submit" value="Valider" id="ok"/></p>
                            </div>
                        </div>
                </form>
            </div>
            <div class="formbox col-lg-6">
                <ul class="register_info">
                    <li><a href="#"><span>Sauvegardez</span> vos annonces</a></li>
                    <li><a href="#"><span>Suivez</span> vos candidatures</a></li>
                    <li><a href="#"><span>Archivez</span> vos cv et offres d’emploi</a></li>
                    <li><a href="#"><span>Gérez</span> vos alertes</a></li>
                    <li><a href="#"><span>Maîtrisez</span> votre recherche d'emploi</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php echo render('inc/espace') ?>
   

</div>
 <?php echo render('inc/lastJobs') ?>