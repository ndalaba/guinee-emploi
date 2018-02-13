<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="noindex,nofollow" />
        <?php echo Asset::css(array('bootstrap.css','global.css')) ?>
        <?php echo Asset::js(array('jquery-latest.js','bootstrap.js','dataTables.js','functions.js','offre.js')); ?>
        <style>.profil input, select, option, button, textarea, label {font-family: Arial,Helvetica,sans-serif;font-size: 11px; color: #666666;}</style>
    </head>
    <script type="text/javascript">
        var baseUrl='<?php echo Uri::create('/'); ?>';
    </script>
  
    <style type="">body{background-image: none} .table th, .table td {border: 1px solid #ddd!important;}</style>  
    <body style="height: 200px;" class="interne profil candidat" id="resultats">
        <div id="main" style="width: 97%;">
            <div id="content" style="width: 680px;">
                <div id="left">
                    <div class="espace">
                        <?php echo render($content) ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        jQuery('#body').load(function() {
            var tag = jQuery(this);
            var final_height = tag.contents().height();
            tag.attr('height', final_height);
        });
    </script>
      <?php echo Asset::js('admin.js') ?>
</html>