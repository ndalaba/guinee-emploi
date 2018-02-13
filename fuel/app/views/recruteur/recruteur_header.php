<div class="row menu">
    <div class="col-lg-4 left">
        <p>Bienvenue <span><?php echo $recruteur->nom; ?></span></p>
    </div>
    <div class="col-lg-8 right">
        <ul>
            <li><a href="<?php echo Uri::base(false) . 'recruteur/publierOffre' ?>">Nouvelle Offre</a></li>
            <li><a href="<?php echo Uri::base(false) . 'recruteur/'?>">Mon Espace</a></li>
            <li class="last"><a href="<?php echo Uri::base(false) . 'recruteur/mesOffres' ?>">Mes offres d'emplois </a></li>
        </ul>
    </div>
</div>

<?php

//if ( $recruteur->actif != 1 ): ?>
    <!--<div class="row" style="margin-top: 20px;">
        <div class="col-lg-12">
            <div class="alert alert-success">Votre compte est en cours de validation. Votre compte sera accessible dans l'heure qui suit</div>
        </div>
    </div>-->
<?php //endif; ?>

