
<div id="left" class="row espace_int">
    <div class="col-lg-12" id="register">
        <p class="breadcrumb"><a href="">Accueil &raquo;</a>  Connexion</p>
        <div class="row form">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <form class="form-horizontal"action="<?php echo Uri::base(false) . 'front/connection/' ?>" method="post">

                            <h2 class="first" >Vous êtes déjà enregistré
                                <span  >Connectez-vous à votre compte</span>
                            </h2>


                            <input type="hidden" value="2" class="loginUser" name="loginUser"/><!-- différencier le candidat(1) du récruteur(2) -->
                            <?php if (isset($errors)) { ?>
                                <ul class="errors list-unstyled">
                                    <?php
                                    foreach ($errors as $value) :
                                        ?>
                                        <li><?php echo $value; ?></li>
                                        <?php
                                    endforeach;
                                    ?>
                                </ul>   
                            <?php } ?>
                            <?php if (isset($error)) { ?><div class="col-lg-12"><p><?php echo $error; ?></p></div> <?php } ?>

                            <div class="form-group">
                                <label class="col-lg-12">Email*<span>ex : guineeemploi@yahoo.fr</span></label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" name="email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12">Mot de passe*</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="password" name="pwd"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="ok"><input type="submit" value="Se connecter" id="ok2"/></p>
                                </div>
                                 <div class="col-lg-12">
                                    <p class="pwd"><a href="<?php echo Fuel\Core\Uri::create('candidat/forgetPwd') ?>">Mot de passe oublié ?</a></p>
                                </div>
                            </div>



                        </form>
                    </div>
                    <div class="col-lg-5 titles">

                        <div class="row" style="margin-left: 0px;">
                            <div class="col-lg-12">
                                <h2 class="last1" >Créez votre
                                    <span >Compte recruteur</span>
                                </h2>
                            </div>

                        </div>
                        <ul class="list-unstyled stitle " style="margin-left: 0px;">
                            <li class=" fleche">Votre offre sera visible par des milliers de membres</li>
                            <li class=" fleche">Identifiez les meilleurs candidats grâce à une recherche dédiée</li>
                            <li class=" fleche">Suivez vos projets de recrutement avec efficacité</li>

                        </ul>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="ok"><a href="<?php echo Uri::create('recruteur/enregistrer') ?>">Créer un compte</a></p>
                            </div>
                           
                        </div>                                              
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="row">
    <div class="col-lg-12"e id="espace">
        <?php echo render('inc/espace') ?>
    </div>
</div>
<?php echo render('inc/lastJobs') ?>