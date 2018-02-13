
<div id="left" class="row espace_int">
    <div class="col-lg-12 espace_candidat">
        <?php echo render('candidat/candidat_header'); ?>
    </div>
    <div class="col-lg-12" id="register">        
        <p class="breadcrumb"><a href="">Accueil &raquo;</a>  Espace candidat &raquo; Modifier ma photo</p>

        <div class="row" >
            <?php if (isset($errors)) : ?> 
                <div class="col-lg-12">
                    <ul class="errors">
                        <p><?php echo $errors; ?> <p>                              
                    </ul>
                </div>
            <?php endif; ?> 
            <div class="col-lg-7">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <img class="img-responsive" src="<?php echo Uri::base(false) . 'assets/upload/photo/' . $candidat->photo ?>" width="100%"/>
                            </div>
                            <div class="col-lg-9 txtcont">
                                <p class="name"><?php echo $candidat->prenom . ' ' . $candidat->nom; ?></p>
                                <p ><span>Niveau de formation :</span> <?php echo $candidat->niveau_formation ?></p>
                                <p ><span>Localisation : </span><?php echo $candidat->ville . ', ' . $candidat->pays; ?></p>

                            </div>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal"action="<?php echo Uri::base(false) . 'candidat/UpdatePhoto/' ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group col-lg-12 ">
                        <input  type="file" name="photo"/>
                    </div>

                    <?php if (isset($error)) echo $error; ?>
                    <div class="form-group col-lg-12"> 
                        <p ><input type="submit" value="Envoyer" id="ok"/></p>
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
<div class="row">
    <div class="col-lg-12" id="espace">
        <?php echo render('inc/espace') ?>
    </div>
</div>
<?php echo render('inc/lastJobs') ?>
