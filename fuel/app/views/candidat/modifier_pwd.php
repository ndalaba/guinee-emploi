
<div id="left" class="row espace_int">
    <div class="col-lg-12 espace_candidat">
        <?php echo render('candidat/candidat_header'); ?>
    </div>
    <div class="col-lg-12" id="register">
        <p class="breadcrumb"><a href="">Accueil &raquo;</a> Espace candidat &raquo; Modifier le mot de passe</p>        
        <div class="row">
           
                <?php if (isset($errors)): ?>
                    <ul class="errors">
                        <?php
                        foreach ($errors as $cle => $val):
                            echo '<li>' . $val . '</li>';
                        endforeach;
                        ?>
                    </ul>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-7">
                            <form class="form-horizontal" action="<?php echo Uri::base(false) . 'candidat/editPwd/' ?>" method="post">                                                   
                                <div class="form-group">
                                    <label class="col-lg-12">Mot de passe*</label>
                                    <div class="col-lg-12">
                                        <input class="form-control" type="password" name="pwd"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-12" >Confirmer le Mot de passe*</label>
                                    <div class="col-lg-12">
                                        <input  class="form-control"type="password" name="cpwd"/>
                                    </div>
                                </div>
                                <?php if (isset($error)) echo $error; ?>
                                <div class="col-lg-10">
                                    <input type="submit" value="Valider" id="ok"/>
                                </div>

                            </form>
                        </div>
                        <div class="col-lg-5 slogans">
                            <ul class="list-unstyled">
                                <li ><a href="#"><span>Sauvegardez</span> vos annonces</a></li>
                                <li ><a href="#"><span>Suivez</span> vos candidatures</a></li>
                                <li ><a href="#"><span>Archivez</span> vos cv et offres d’emploi</a></li>
                                <li ><a href="#"><span>Gérez</span> vos alertes</a></li>
                                <li ><a href="#"><span>Maîtrisez</span> votre recherche d'emploi</a></li>
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