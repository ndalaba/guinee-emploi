<!DOCTYPE HTML>
<html>
    <head>
       <title>Emploi et Recrutement - Recherche emploi et annonces sur Guinee-Emploi.com - Recherche offre</title>
      <?php echo render('inc/meta') ?>      
        <?php echo Asset::css('global.css') ?>
        <?php echo Asset::js('jquery-latest.js') ?>
    </head>

    <body class="interne candidat" id="resultats">
        <div id="main">
            <div id="top"></div>
            <div id="content">
                <div id="left">
                    <?php echo render('inc/header') ?>
                    <div class="espace">
                        <div class="haut">
                            <p class="left"><span><?php echo $count ?> </span> resultat(s) correspondent à votre recherche</p>
                            <div class="right">
                                <ul>
                                    <li><a href="#">Trier les annonces par <select name="dateoffre" id="dateoffre"><option>Date</option></select></a></li>
                                    <li class="last"><a href="#" >Nombre d’offres par pages <select name="nbre"><option value="5">5</option></select></a></li>

                                </ul>
                            </div>

                        </div>
                        <div class="bas">
                            <div class="left">
                                <p class="breadcrumb"><a href="">Accueil &raquo;</a> Resultats de votre recherche</p>
                                <div class="filtre">
                                    <ul>
                                        <li>
                                            <label>Fonction</label>
                                            <form action="<?php echo Uri::base(false) . 'offre/filtreResultats' ?>" method="post" id="FunctionForm" name="FunctionForm" >

                                                <select  id="function" name="function" onchange="FunctionSubmit()">
                                                    <option value="0">--Toutes les fonctions--</option>
                                                    <?php if (isset($fonctions)) {
                                                        foreach ($fonctions as $fonction): ?>
                                                            <option  value="<?php echo $fonction->idFonction ?>"><?php echo utf8_decode($fonction->fonction) ?></option>
    <?php endforeach;
} ?>

                                                </select></form>
                                        </li>
                                        <li>
                                            <label>Contrat</label>
                                            <form action="<?php echo Uri::base(false) . 'offre/filtreResultats' ?>" method="post" id="ContratForm" name="ContratForm">

                                                <select name="type_contrat" onchange="ContratSubmit()" id="type_contrat">
                                                    <option value="0">--Tous les type de contrats--</option>
                                                    <option value="CDI">CDI</option>
                                                    <option value="CDD">CDD</option>
                                                    <option value="Freelance">Freelance</option>
                                                    <option value="Stage">Stage</option>
                                                    <option value="Alternance">Alternance</option>
                                                    <option value="Interim">Intérim</option>
                                                </select>
                                            </form>
                                        </li>
                                        <li>
                                            <label class="secteur">Secteur d'activité</label>
                                            <form action="<?php echo Uri::base(false) . 'offre/filtreResultats' ?>" method="post" id="SecteurForm" name="SecteurForm">

                                                <select name="secteur" onchange="SecteurSubmit()" id="secteur"> <option value="0">--Tous les secteurs d'activités--</option>
                                                        <?php foreach ($catsecteurs as $catsecteur): ?>
                                                        <optgroup label="<?php echo $catsecteur->cat_secteur ?>">
                                                            <?php foreach ($catsecteur->secteurs as $secteur): ?>
                                                                <option value="<?php echo $secteur->idSecteur ?>"><?php echo $secteur->secteur_activite ?></option>
                                                        <?php endforeach; ?>
                                                        </optgroup>
<?php endforeach; ?>
                                                </select>
                                            </form>
                                        </li>
                                        <li>
                                            <label>Recruteur</label>
                                            <form action="<?php echo Uri::base(false) . 'offre/filtreResultats' ?>" method="post" id="RecruteurForm" name="RecruteurForm">

                                                <select name="recruteur" onchange="RecruteurSubmit()" id="recruteur">
                                                    <option value="0">--Toutes les recruteurs--</option>
                                                    <?php foreach ($recruteurs as $recruteur): ?>
                                                        <option value="<?php echo $recruteur->idRecruteur ?>"><?php echo $recruteur->nom ?></option>
<?php endforeach; ?>
                                                </select></form>
                                        </li>
                                        <li>
                                            <label>Date</label>
                                            <form action="<?php echo Uri::base(false) . 'offre/filtreResultats' ?>" method="post" id="DateForm" name="DateForm">

                                                <select name="date" onchange="DateSubmit()" id="date">
                                                    <option value="0">--Tous les type de contrats--</option>
                                                    <option value="1">Aujourd'hui</option>
                                                    <option value="2">Moins de 7 jours</option>
                                                    <option value="3">Moins de 14 jours</option>
                                                    <option value="4">Moins de 21 jours</option>
                                                </select>
                                            </form>
                                        </li></ul>
                                </div>
                                <div class="toutsec">
                                    <?php
                                    if (isset($offres)): foreach ($offres['results'] as $offre):
                                            $recruteur = Model_Recruteur::find($offre->idRecruteur);
                                            ?>
                                            <div class="tout">

                                                <div class="textcont">
                                                    <h5 class="title"><a href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->idOffre ?>"><?php echo $offre->titre ?></a></h5>
                                                    <p class="soustitle"><a href="#" class="first"><?php echo $offre->date_debut ?></a><a href="#"><?php echo $offre->type_contrat ?></a><a href="#" class="last"><?php echo Myfunction::getVille($offre->ville) ?></a></p>
                                                    <p class="text"><a href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->idOffre ?>"><?php echo $offre->descrip ?></a></p>
                                                    <div class="imgcont"><a href="#"><img src="<?php echo Uri::base(false) . 'assets/upload/' . $recruteur->logo ?>" width="45" height="25" /></a></div>
                                                    <div class="entreprise">

                                                        <p>&raquo; <a href="<?php echo Uri::base(false) . 'offre_recruteur/' . $offre->idRecruteur ?>">Voir toutes les offres proposées par <?php echo $recruteur->nom; ?></a></p>
                                                        <p>&raquo; <a href="<?php echo Uri::base(false) . 'recruteur/detail/' . $offre->idRecruteur ?>">Plus d'informations sur <?php echo $recruteur->nom; ?> </a><span><a href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->idOffre ?>">Voir l'offre</a></span></p>
                                                    </div>
                                                </div>
                                            </div> <?php endforeach;
                                    endif; ?>




                                </div>

                            </div>
                            <div class="right">



                            </div>
                        </div>
                    </div>
                    <ul class="bot" id="espace">
                        <li><a href="#" class="one">Déposez votre CV</a></li>
                        <li><a href="#" class="two">Espace Candidats</a></li>
                        <li><a href="#" class="three">Nouvelles Offres</a></li>

                    </ul>


                </div>
<?php echo render('inc/right') ?>

            </div>

        </div>
<?php echo render('inc/footer') ?>

    </body>
</html>