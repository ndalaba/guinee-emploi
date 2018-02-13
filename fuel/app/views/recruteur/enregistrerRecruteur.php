<div class="row">
    <div class="col-lg-12" id="register" style="margin-bottom: 20px;">
        <p class="breadcrumb"><a href="">Accueil &raquo;</a><a href="">Espace Recruteur </a>Création de votre compte</p>

        <div class="text" style="min-height: 66px;">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Créez votre<span>Compte Recruteur</span></h2>
                </div>
                <div class="col-lg-8">
                    <p class="description">Le compte recruteur vous permettra de déposer des annonces,
                        d'effectuer un suivi de vos offres d'emploi ,  et de consulter des CV
                        dans la CVthèque.
                    </p>
                </div>
            </div>
        </div>

        <?php if (isset($inscription_success)): ?>
            <span class="alert alert-success">Votre inscription est en cours de validation. Votre compte sera accessible dans l'heure qui suit</span>
        <?php endif; ?>
        <div class="form">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <p><?php echo $error; ?></p>
                    <p>
                    <?php if(\Fuel\Core\Session::get_flash('condition')): ?>
                        <?php echo \Fuel\Core\Session::get_flash('condition'); ?>
                    <?php endif; ?>
                    </p>
                </div>
            <?php endif; ?>
            <form action="<?php echo Uri::base(false) . 'recruteur/add' ?>" method="post">

                <div class="row">
                    <div class="col-lg-12">
                        <input type="hidden" value="<?php echo date("Y-m-d"); ?>" name="date_enreg"/>
                        <input  type="hidden" name="id" value=""/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nom *</label>
                            <input class="form-control"  type="text" name="nom" value="<?php echo isset($post) ? $post['nom'] : "" ?>"/>
                        </div>

                        <div class="form-group">
                            <label>Téléphone*</label>
                            <input class="form-control"  type="text" name="phone" value="<?php echo isset($post) ? $post['phone'] : "" ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Adresse*</label>
                            <input class="form-control"  type="text" name="adresse" value="<?php echo isset($post) ? $post['adresse'] : "" ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Secteur d'activité </label>
                            <select class="form-control" name="secteur_id">
                                <option selected>Selectionner</option>
                                <?php foreach ($catsecteurs as $catsecteur): ?>
                                    <optgroup label="<?php echo $catsecteur->categorie ?>">
                                        <?php foreach ($catsecteur->secteurs as $secteur): ?>
                                            <option value="<?php echo $secteur->id ?>"><?php echo $secteur->secteur ?></option>
                                <?php endforeach; ?>
                                    </optgroup>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                        <div class="form-group">
                            <label>Email*<span>ex : guinee-emploi@yahoo.fr</span></label>
                            <input class="form-control"  type="text" name="email" value="<?php echo isset($post) ? $post['email'] : "" ?>"/>
                        </div>

                        <div class="form-group">
                            <label>Mot de passe*</label>
                            <p class="help-block" style="font-weight: normal; font-size: 11px;">Le mot de passe doit comporter au moins une miniscule, une majuscule,un chiffre et être au moin égale à 8 caracteres</p>
                            <input class="form-control"  type="password" name="pwd" value="<?php echo isset($post) ? $post['pwd'] : "" ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Confirmation du mot de passe* </label>
                            <input class="form-control"  type="password" name="cpwd" value="<?php echo isset($post) ? $post['pwd'] : "" ?>"/>
                        </div>
                        <div class="checkbox" style="<?php echo isset($error) ? 'color:#ff6a00' : '' ?>">
                            <label>
                                <input type="checkbox" name="condition"/>
                                J'ai lu et j'accepte <a href="<?php echo Uri::create('front/conditions') ?>" target="_blank">les conditions d'utilisation</a>
                            </label>
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
