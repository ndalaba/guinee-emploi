<style>
    h1, h2 {
        clear: both;
        float: none;
        font-family: arial;
        font-size: 1.6em;
        font-weight: 700;
        padding-top: 10px;
    }

    h2 {
        color: #99CC01;
        font-family: arial;
        font-size: 1.4em;
        font-weight: 700;
    }
</style>

<div class="row" id="left">
    <div class="col-lg-12 espace_int">
        <div class="haut">
            <p class="breadcrumb"><a href="">Accueil &raquo;</a> Contactez-nous</p>
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

        <div class="form">
            <div class="static simpleContent">
                <h1 id="retour">CONTACTEZ-NOUS !</h1>
                <h2><strong>GUINEE-EMPLOI</strong>.COM EST À VOTRE ÉCOUTE</h2>
                <p><strong>guinee-emploi.</strong>com a vocation à vous mettre en relation avec les entreprises qui recrutent par le biais des annonces qui sont mises à votre disposition dans le <a title="rechercher une offre" href="<?php echo Uri::create('offre') ?>">moteur de recherche</a>, par le biais des <a href="<?php echo Uri::create('candidat') ?>">alertes e-mails</a>, ainsi qu'en <a href="<?php echo Uri::create('candidat') ?>">déposant votre CV</a> dans la CVthèque.</p>
                <p><strong>Veuillez noter que toute demande d'emploi via ce formulaire ne pourra être traitée.</strong></p>
                <form class="form-horizontal contact" action="<?php echo Uri::base(false) . 'front/contact/'?>" method="post" name="form1">
                    <fieldset>
                        <div class="form-group">
                            <label class="text-right col-lg-4"><strong>Vous êtes <em>*</em> : </strong></label>
                            <div class="col-lg-8">
                                <select class="form-control" name="type">
                                    <option value="candidat">Un candidat</option>
                                    <option value="recruteur">Un recruteur</option>
                                    <option value="journaliste">Un journaliste</option>
                                    <option value="partenaire">Un partenaire</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="text-right col-lg-4"><strong>Nom et prénoms<em>*</em> : </strong></label>
                             <div class="col-lg-8">
                                <input class="form-control" type="text" value="" name="nom" required="">
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="text-right col-lg-4"><strong>Sujet<em>*</em> : </strong></label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="" name="sujet" required="">
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="text-right col-lg-4"><strong>Adresse e-mail<em>*</em> : </strong></label>
                            <div class="col-lg-8">
                                <input class="form-control" type="email" value="" name="mail" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="text-right col-lg-4"><strong>Votre message<em>*</em> :</strong></label>
                            <div class="col-lg-8">
                                <textarea class="form-control" rows="10" name="message"></textarea>
                            </div>
                        </div>

                        <p class="btnValiderP">
                            <button value="envoyer" type="submit" class="btnType1 bgType1"><span style="color: white;">Envoyer</span></button>
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php echo render('inc/espace') ?>
</div>