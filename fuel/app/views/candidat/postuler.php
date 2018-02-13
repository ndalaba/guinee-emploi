<!DOCTYPE HTML>
<html>
    <head>        
        <title>Guinee-Emploi : Postuler à l'offre</title>
        <?php echo render('inc/meta') ?>    
        <?php echo Asset::css(array('bootstrap.css', 'global.css')) ?>
        <?php echo Asset::js(array('jquery-latest.js', 'bootstrap.js')) ?>
    </head>
    <script>
        function slide() {

            $('#catlist').slideToggle();
            $('#acat').slideToggle();

        }
    </script>
    <body class="interne">
        <div id="main">
            <div id="top"></div>
            <div id="content">
                <div id="left">
                    <?php echo render('inc/header'); ?>
                    <div class="" id="register">
                        <p class="breadcrumb"><a href="">Accueil &raquo;</a><a href="">Espace candidat </a>Postuler</p>
                        <h2>Postulation à l'offre : </h2>

                        <div class="form">
                            <ul class="errors">
                                <?php
                                if (isset($errors)):
                                    foreach ($errors as $cle => $val):
                                        echo '<li>' . $val . '</li>';
                                    endforeach;
                                endif;
                                ?></ul>

                            <form action="<?php echo Uri::base(false) . 'candidat/add' ?>" method="post">
                                <input type="text" na
                            </form>
                        </div>
                    </div>
                    <?php echo render('inc/espace') ?>                    
                    <?php echo render('inc/lastJobs') ?>
                </div>
                <?php echo render('inc/right') ?>
            </div>
        </div>
        <?php echo render('inc/footer') ?>
    </body>
</html>