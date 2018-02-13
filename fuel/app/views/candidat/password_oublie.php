
<div id="left" class="row espace_int">                    
    <div class="col-lg-12" id="register">
        <p class="breadcrumb"><a href="">Accueil &raquo;</a> Modifier le mot de passe</p>
        <div class="row text">
            <h2 class="col-lg-12 first"><span>Mot de passe oublié?</span> </h2>
        </div>
        <div class="row">
            <ul class="errors">
                <?php
                if (isset($message)):
                    echo '<li >' . $message . '</li>';
                endif;
                if (isset($errors)):
                    foreach ($errors as $cle => $val):
                        echo '<li >' . $val . '</li>';
                    endforeach;
                endif;
                ?>
            </ul>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="<?php echo Uri::base(false) . 'candidat/sendPwd/' ?>" method="post">

                            <div class="form-group">
                                <label class="col-lg-12">Profil*</label>
                                <div class="col-lg-12">
                                    <select   name="prof" class="form-control updatepw">
                                        <option value="" selected >choisir</option>
                                        <option value="candidat">Candidat</option>
                                        <option value="recruteur">Recruteur</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 ">
                                    <label>Adresse mail*</label>
                                    <input class="form-control updatepw" type="text" name="mail"/>
                                </div>                                   
                                <?php if (isset($error)) echo $error; ?>
                                <p class="col-lg-5" ><input type="submit" value="Valider" id="ok" class="updatepwd"/></p>
                            </div>                
                        </form>
                    </div>
                    <div class="col-lg-5 slogans">
                        <ul class="list-unstyled">
                            <li><a href="#"><span>Sauvegardez</span> vos annonces</a></li>
                            <li><a href="#"><span>Suivez</span> vos candidatures</a></li>
                            <li><a href="#"><span>Archivez</span> vos cv et offres d’emploi</a></li>
                            <li><a href="#"><span>Gérez</span> vos alertes</a></li>
                            <li><a href="#"><span>Maîtrisez</span> votre recherche d'emploi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
<div class="row">
    <div class="col-lg-12" id="espace">
        <?php echo render('inc/espace') ?>
</div>
</div>

<?php echo render('inc/lastJobs') ?>