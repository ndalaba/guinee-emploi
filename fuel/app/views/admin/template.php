<!DOCTYPE HTML>
<html>
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <title>Guinee-Emploi : Administration</title>
       <?php echo render('inc/meta') ?>
       <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>assets/bootstrap/css/bootstrap.css" />
       <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>assets/bootstrap/css/font-awesome.css" />
       <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>assets/bootstrap/css/bootstrap-glyphicons.css" />
      <?php echo Asset::css(array('global.css','inline.css')) ?>
       <?php echo Asset::js(array('jquery-latest.js','bootstrap.js','dataTables.js','functions.js','notification.js')); ?>
      <style>.profil input, select, option, button, textarea, label {font-family: Arial,Helvetica,sans-serif;font-size: 11px; color: #666666;}
      #resultats #left .espace .filtre{width: auto!important}
      #resultats #left .espace .filtre li{width:262px; }
      .candidat #left .espace {border: none;}
      </style>
   </head>
   <script type="text/javascript">
        var baseUrl='<?php echo Uri::create('/'); ?>';
    </script>
  
    <style type="">body{background-image: none} .table th, .table td {border: 1px solid #ddd!important;}</style>  
   <body class="interne profil candidat" id="resultats">
      <div id="main">
         <div id="content">
            <div id="left">
               <?php echo render('admin/header') ?>
               <div class="espace">
                  <div class="haut">
                     <!--<p class="left">Bienvenue <span><?php //echo Session::get('login'); ?></span></p>-->
                  </div>
                   <div id="container">
                       <?php echo render($content) ?>
                     <!--  <iframe name="myframe" id="myframe"  frameborder="0" title="dialogue de Contenu" width="100%"></iframe>-->
                   </div>
                   <script>
                       jQuery('#myframe').load(function() {
                           var tag = jQuery(this);
                           var final_height = tag.contents().height();
                           tag.attr('height', final_height);
                       });
                   </script>
               </div>
            </div>
            <?php echo render('admin/right') ?>
         </div>
      </div>
        <?php echo Asset::js(array('admin.js','offre.js')) ?>
   </body>
</html>