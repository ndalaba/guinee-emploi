<div class="col-lg-8 right">
   <?php if (Session::get('emailR')) : ?>
    <ul class="row list-unstyled">
        <li class="col-lg-4"><a href="<?php echo Uri::base(false) . 'recruteur/publierOffre/'?>">Nouvelle offre</a></li>
        <li class="col-lg-5"><a href="<?php echo Uri::base(false) . 'recruteur/mesOffres' ?>">Mes offres d'emplois </a></li>
        <li class="col-lg-3 last"><a href="<?php echo Uri::base(false) . 'recruteur' ?>">Mon espace</a></li>
      </ul>
   <?php else: ?>
      <ul class="row list-unstyled ">
         <li class="col-lg-3"><a href="<?php echo Uri::base(false) . 'candidat'?>">Déposer CV</a></li>
         <li class="col-lg-4"><a href="<?php echo Uri::base(false) . 'candidat' ?>">Espace candidat</a></li>
         <li class="col-lg-5 last"><a href="<?php echo Uri::base(false) . 'candidat/candidatures' ?>">Voir mes candidatures</a></li>
      </ul>
   <?php endif; ?>
</div>