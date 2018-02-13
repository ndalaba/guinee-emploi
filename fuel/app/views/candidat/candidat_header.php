<div class="row top_eapace">
    <div class="col-lg-4">
        <p>Bienvenue <span><?php echo $candidat->prenom . ' ' . $candidat->nom; ?></span></p>
    </div>
    <div class="col-lg-8 menu_candidat"> 
        <ul class="list-unstyled nav nav-tabs">
         <li ><a href="<?php echo Uri::base(false) . 'candidat'?>">Déposer CV</a></li>
         <li ><a href="<?php echo Uri::base(false) . 'candidat' ?>">Espace candidat</a></li>
         <li class="last"><a href="<?php echo Uri::base(false) . 'candidat/candidatures' ?>">Voir mes candidatures</a></li>
      </ul>

    </div>
</div>