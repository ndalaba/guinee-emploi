<!DOCTYPE HTML>

<html>

    <head>

        <title><?php echo $offre->titre ?> | Emploi et Recrutement - Recherche emploi et annonces sur Guinee-Emploi.com</title>
        <meta name="google-site-verification" content="U6qDXo8sfhllC_NP5JjmGf5efdXZVQBJOEbmoZN1VzQ" />

        <?php echo render('inc/meta') ?>

        <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>assets/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>assets/bootstrap/css/font-awesome.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>assets/bootstrap/css/bootstrap-glyphicons.css" />
       <?php if(isset($offre) AND $offre!=NULL): ?>
	       <meta property="og:title" content="<?php echo $offre->titre ?>" />
	       <meta property="og:type" content="Emploi et Recrutement - Recherche emploi et annonces sur Guinee-Emploi.com" />
	       <meta property="og:url" content="<?php echo Uri::base('false') . 'offre/detail/' . $offre->id . '/' . Inflector::friendly_title($offre->titre)?>" />
	        <?php if(isset($logo) AND $logo!=NULL):?>
	        	<meta property="og:image" content="<?php echo Uri::base(false) . 'assets/upload/logo/' . $logo ?>" />                   
	            <?php endif;?>
	       
       <?php endif ?>


        <?php echo Asset::css(array('responsive-style.css', 'idy.css')) ?>

        <?php echo Asset::js(array('jquery-latest.js', 'bootstrap.js', 'functions.js')) ?>

        <script>

            function slide() {

                $('#catlist').slideToggle();

                $('#acat').slideToggle();

            }
            function friendlyTitle(name) {
                name = name.toLowerCase(); // lowercase
                name = name.replace(/^\s+|\s+$/g, ''); // remove leading and trailing whitespaces
                name = name.replace(/\s+/g, '-'); // convert (continuous) whitespaces to one -
                name = name.replace(/[^a-z-]/g, ''); // remove everything that is not [a-z] or -
                return name;
            }
        </script>

    </head>   

    <body <?php if (isset($class)): ?> class="<?php echo $class ?>" <?php endif; ?> >

        <div class="container ">



            <div class="row">



                <div class="col-lg-12" id="top-line"></div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8">

                            <?php echo render('inc/top') ?>



                            <?php echo $contenu; ?>
                            <?php echo render('inc/partenaires') ?>

                        </div>

                        <?php echo render('inc/right') ?>
                    </div>
                </div>



            </div>
           


        </div>

        <?php echo render('inc/footer') ?>

         


    </body>

    <script>

        function slide() {

            $('#catlist').slideToggle();

            $('#acat').slideToggle();

        }

        (function(d, s, id) {

            var js, fjs = d.getElementsByTagName(s)[0];

            if (d.getElementById(id))
                return;

            js = d.createElement(s);

            js.id = id;

            js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";

            fjs.parentNode.insertBefore(js, fjs);

        }(document, 'script', 'facebook-jssdk'));

    </script>



</html>