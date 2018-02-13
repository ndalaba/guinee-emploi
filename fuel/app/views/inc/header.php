<div class="top">
   <div class="head">
      <div class="logo"><h2><a href="<?php echo Uri::create('/') ?>"><img src="<?php echo Uri::base(false) . 'assets' ?>/img/logo.png" width="200" height="96"  style="float: left;"/></a></h2></div>
      <div class="nav">
         <span class="left"></span>
         <ul>
            <li><a href="<?php echo Uri::base(false) ?>">Accueil</a></li>
             <?php if(\Fuel\Core\Session::get('logged_recruteur')): ?>
             <li><a href="<?php echo Uri::create('cvtheque') ?>">CVthèque</a></li>
             <?php endif;?>
            <li><a href="<?php echo Uri::base(false) . 'offre' ?>">Appels d'Offres</a></li>
            <!--<li><a href="<?php echo Uri::base(false) . 'articles' ?>">News</a></li>-->
            <li class="last"><a href="<?php echo Uri::base(false) . 'contact' ?>">Contacts</a></li>
         </ul>
      </div>
   </div>
 <?php echo render('inc/recherche'); ?>
</div>