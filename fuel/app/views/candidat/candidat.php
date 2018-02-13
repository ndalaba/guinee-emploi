<div id="left" class="row espace_int">
    <div class="col-lg-12 espace_candidat">
        <?php echo render('candidat/candidat_header'); ?>
        <div class="row profil_candidat">
            <div class="col-lg-6 ">
                <p class="breadcrumb">
                    <a href="<?php echo Uri::base(false) ?>">Accueil &raquo;</a>
                    <a href="<?php echo Uri::base(false) . 'candidat/' ?>"> Espace candidat &raquo;</a> mon compte
                </p>
                <div class="row toutsection">
                    <div class="col-lg-12 titre">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="<?php echo Uri::base(false) . 'candidat/detail/' . $candidat->id . '/' . Inflector::friendly_title($candidat->nom . ' ' . $candidat->prenom) ?>">Mon Profil Public</a>
                            </div>
                            <div class="col-lg-6" >
                                <p class="profil">
                                    <a href="<?php echo Uri::base(false) . 'candidat/profilCandidat' ?>" >Gérer mon profil</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 text">
                        <p >Gérez votre e-réputation et soyez visible sur les moteurs de recherche grâce au Profil pubdivc.</p>
                    </div>
                    <div class="col-lg-12 titre alerte">
                        <a href="<?php echo Uri::base(false) . 'candidat/mesAlertes' ?>">Mon AlertJobs</a>
                    </div>
                    <div class="col-lg-12 text">
                        <p>Grâce à vos alertes e-mail, recevez directement par e-mail toutes les nouvelles offres d'emploi correspondant à vos critères.</p>
                    </div>
                    <div class="col-lg-12 titre cv">
                        <a href="<?php echo ($candidat->cvdoc == 'nofile.doc' OR $candidat->cvdoc == '') ? "#" : Uri::create('assets/upload/cv/' . $candidat->cvdoc) ?>">Mon CV</a>
                    </div>

                    <div class="col-lg-12 text">
                        <p >En déposant votre CV sur Emploi-guinee.com, vous pourrez :</p>
                        <div class="row vert" >
                            <div class="col-lg-12">
                                <p >&raquo; Être directement contacté par des cabinets de recrutement, des entreprises ou des sociétés d'intérim. </p>
                            </div>
                            <div class="col-lg-12">
                                <p >&raquo; Postuler en ligne en joignant simplement votre CV. </p>
                            </div>

                        </div>
                    </div>
                </div>

                <?php if (isset($file_errors)): ?>
                    <ul class="row divst-unstyled errors">
                        <?php
                        foreach ($file_errors as $file) {
                            echo '<li class="col-lg-12">' . ($file['errors'][0]['message']) . '</li>';
                        }
                        ?>
                    </ul>
                <?php
                endif;
                if (Session::get_flash('erreur')) {
                    echo '<div class="col-lg-12">' . Session::get_flash('erreur') . '</div>';
                }
                ?>
                </ul>
<?php if ($candidat->cvdoc == 'nofile.doc'): ?>
                    <div class="row">
                        <form class="form-horizontal"action="<?php echo Uri::base(false) . 'candidat/UpdateCV'; ?>" method="post" id="cvform" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input  type="file" id="cv" name="cv"/>
                                </div>
                                <div class="col-lg-12">
                                    <input   type="submit" value="Ajouter mon cv" id="ok"/>
                                </div>
                            </div> 
                        </form>
                    </div>
<?php else : ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="cvbtn"> <a href="javascript:" oncdivck="deleteCV()">Supprimer le cv</a></p>
                        </div>
                    </div>
<?php endif; ?>


            </div>
            <div class="col-lg-6">
                <div class="row photo" >
                    <div class="col-lg-4">
                        <img class="img-responsive img-rounded" src="<?php echo Uri::base(false) . 'assets/upload/photo/' . $candidat->photo ?>" alt="<?php echo $candidat->prenom . ' ' . $candidat->nom; ?>" />
                    </div>
                    <div class="col-lg-7">
                        <p><?php echo $candidat->prenom . ' ' . $candidat->nom; ?></p>
                        <p><a href="<?php echo Uri::base(false) . 'candidat/maPhoto' ?>">Modifier ma photo</a></p>
                        <p><a href="<?php echo Uri::base(false) . 'candidat/UpdatePwd' ?>">Modifier mon mot de passe </a></p>

                    </div>
                </div>
                <div class="row toutsection">
                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col-lg-12 titre">
                                <a href="<?php echo Uri::base(false) . 'candidat/candidatures' ?>">Mes Candidatures</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text">
                                <p>Suivez toutes les offres d'emploi aux quelles vous avez postulées </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <p class="optimiser">
                                    <a href="<?php echo Uri::base(false) . 'candidat/candidatures' ?>">Voir mes candidatures</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 titre">
                                <a href="#">Ma Newsletter</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text">
                                <p>Vous êtes abonné à la newsletter
                                    Emploi-guinee.com avec l'adresse suivante :
                                    <a href="mailto:<?php echo $candidat->email ?>" class="email"><?php echo $candidat->email ?></a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 titre" style="margin-top: 38px;">
                                <a href="<?php echo Uri::create('candidat/messagesCandidat') ?>">Mes messages</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text">
                                <p>Tous les messages qui vous sont envoyés par les recruteurs</p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="optimiser">
                                    <a href="<?php echo Uri::create('candidat/messagesCandidat') ?>" class="email">Lire mes messages</a> 
                                </p>
                            </div>
                        </div>
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


