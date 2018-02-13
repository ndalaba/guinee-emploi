<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>Guinee-Emploi : Administration</title>
        <?php echo render('inc/meta') ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>assets/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>assets/bootstrap/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>assets/bootstrap/css/bootstrap-glyphicons.css" />
        <?php echo Asset::css(array('inline.css')) ?>
        <?php echo Asset::js(array('jquery-latest.js', 'bootstrap.js', 'dataTables.js', 'functions.js', 'notification.js')); ?>
        <style>.profil input, select, option, button, textarea, label {font-family: Arial,Helvetica,sans-serif;font-size: 11px; color: #666666;}
            #resultats #left .espace .filtre{width: auto!important}
            #resultats #left .espace .filtre li{width:262px; }
            .candidat #left .espace {border: none;}
        </style>
    </head>
    <script type="text/javascript">
        var baseUrl = '<?php echo Uri::create('/'); ?>';
    </script>

    <style>
        .panel-body .btn:not(.btn-block) { width:145px;margin-bottom:10px; }
    </style>
    <body>
        <div class="navbar navbar-default" role="navigation">
            <div class="container"> 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a target="_blank" href="#" class="navbar-brand">Administration Guinée Emploi</a>
                </div>
                <div class="collapse navbar-collapse">                  
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user"></span> 
                                <strong><?php echo Session::get('login') ?></strong>
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="navbar-login">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <p class="text-center">
                                                    <span class="glyphicon glyphicon-user icon-size"></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-8">
                                                <p class="text-left"><strong><?php echo Session::get('nom') ?></strong></p>
                                             <!--   <p class="text-left small">correoElectronico@email.com</p>
                                                <p class="text-left">
                                                    <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                                </p>-->
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="navbar-login navbar-login-session">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                    <a href="<?php echo Uri::create("admin/admin/deconnection") ?>" class="btn btn-danger btn-block">Déconnection</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">                               
                                <strong>NewsLetter</strong>
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                            <ul class="dropdown-menu" style="width: 320%">
                                <li>
                                    <div class="navbar-login" style="padding: 10px">
                                        <h4>RECEVEZ LA NEWSLETTER</h4>
                                        <form action="" method="post">
                                            <div class="input-group">
                                                <textarea style="margin: 0px; width: 288px; height: 67px;" class="btn" name="mails" id="mails" placeholder="adresse email" required></textarea>
                                                <button class="btn btn-info" type="submit" id="valider" onclick="saveNewsletterAdmin();">Submit</button>
                                            </div>
                                            <div class="input-group">
                                                <div style="display:none;width: 50px;margin: auto;" id="ajaxImg"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
                                                <span style="width: 100%;text-align: center;font: bold 12px arial;  color: rgb(104, 142, 10);"></span>                    
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="navbar-login navbar-login-session" style="padding: 10px">
                                        <h4>DESABONNER DE LA NEWSLETTER</h4>
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <textarea style="margin: 0px; width: 288px; height: 67px;" class="btn" name="umails" id="umails" placeholder="adresse email" required></textarea>                                                
                                                <button class="btn btn-info" type="submit" id="valider" onclick="unsaveNewsletter();">Submit</button>
                                            </div>
                                            <div class="input-group">
                                                <div style="display:none;width: 50px;margin: auto;" id="ajaxImg2"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
                                                <span  style="width: 100%;text-align: center;font: bold 12px arial;  color: rgb(104, 142, 10);"></span>                    
                                            </div>
                                        </form> 
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li id="news"  ><a href="#" class="news"> <i class="icon icon-envelope"></i> Envoyer une newsletter</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var urel = '<?php echo Uri::create('newsletter/sendNews') ?>';
            $('#news .news').click(function (e) {
                e.preventDefault();
                if (confirm("Voulez vous Envoyer la newsletter ?")) {
                    var i = prompt("Début", 0);
                    var n = prompt("Début", 1999);
                    $('body').css('cursor', 'wait');
                    $.post(urel, {'i': i, "n": n}, function (msg) {
                        $.createNotification({content: msg});
                        $('body').css('cursor', '');
                    });
                }
            });
        </script>

        <div class="container">           
            <div class="row">
                <?php echo render($content) ?>              
                <div class="col-lg-4">
                    <?php echo render('admin/right') ?>
                </div>
            </div>      
        </div>  
        <?php echo Asset::js(array('admin.js', 'offre.js')) ?>
    </body>
</html>

