
<div id="left" class="row">
    <div class="col-lg-12" id="register">
        <p class="breadcrumb"><a href="">Accueil &raquo;</a><a href="">Espace candidat </a>Cr&eacute;ation de votre compte</p>
        <div class="text" style="min-height: 66px;">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Cr&eacute;ez votre<span>Compte candidat</span></span></h2>
                </div>
                <div class="col-lg-8">
                    <p class="description">Le compte candidat vous permettra de postuler, sauvegarder des annonces,
                        d'effectuer un suivi de vos candidatures, de recevoir gratuitement 
                        les nouvelles offres d'emploi par email et de d&eacute;poser votre CV
                        dans la CVth&egrave;que.
                    </p>
                </div>
            </div>
        </div>       

        <div class="row form">
            <ul class="col-lg-12 errors list-unstyled">
                <?php
                if (isset($errors)):
                    foreach ($errors as $cle => $val):
                        Helper::valider($val->rule);
                    endforeach;
                endif;
                ?></ul>

            <?php if (Session::get_flash('erreur')): ?>
                <h2 class="col-lg-12">
                    <?php echo Session::get_flash('erreur'); ?>
                </h2>
            <?php endif; ?>

            <form action="<?php echo Uri::base(false) . 'candidat/add' ?>" method="post" class="col-lg-12">
                <input type="hidden" value="<?php echo date("Y-m-d"); ?>" name="date_enreg"/>
                <input  type="hidden" name="id" value=""/>
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="form-group">
                            <label >Nom/Identifiant*</label>
                            <input class="form-control" type="text" name="nom" value="<?php echo isset($post) ? $post['nom'] : "" ?>"/>
                            <p><?php //echo $errors->username->get_message();       ?></p>
                        </div>
                        <div class="form-group">
                            <label >Pr&eacute;nom*</label>
                            <input class="form-control" type="text" name="prenom" value="<?php echo isset($post) ? $post['prenom'] : "" ?>"/>
                        </div>
                        <div class="form-group">
                            <label >Email*<span>ex : guineeemploi@yahoo.fr</span></label>
                            <input class=" form-control" type="text" name="email" value="<?php echo isset($post) ? $post['email'] : "" ?>"/>
                            <p class="col-lg-12 " style="color: #f13c3c;font: 13px arial;" > <?php if (isset($error)) echo $error; ?></p>
                        </div>

                    </div>
                    <div class="col-lg-6 ">
                        <div class="form-group">
                            <label >Mot de passe*<span>Le mot de passe doit comporter au moins une miniscule, une majuscule,un chiffre et être au moin égale à 8 caracteres</span></label>
                            <input class="form-control" type="password" name="pwd" value="<?php echo isset($post) ? $post['pwd'] : "" ?>"/>
                        </div>
                        <div class="form-group">
                            <label >Confirmation du mot de passe* </label>
                            <input class="form-control"  type="password" name="cpwd" value="<?php echo isset($post) ? $post['pwd'] : "" ?>"/>
                        </div>
                        <div class="form-group" style="<?php echo isset($errors) ? 'color:#ff6a00' : '' ?>">
                            <input class="col-lg-1"  type="checkbox" name="condition" />
                            <label class="col-lg-11">J'ai lu et j'accepte <a href="<?php echo Uri::create('front/conditions') ?>" target="_blank">les conditions d'utilisation</a></label>                                                                         
                        </div>

                    </div>
                </div>
                <p class="ok"><input type="submit" value="S'enregistrer" id="ok"/></p>
            </form>
        </div>
    </div>
    <?php echo render('inc/espace') ?>                    

</div>
<?php echo render('inc/lastJobs') ?>