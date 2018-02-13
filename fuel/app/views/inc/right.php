<div class="col-lg-4" id="right">
    <?php if (!Session::get('logged_candidat') and !Session::get('logged_recruteur')): ?>
        <div class="row connexion" id="conn">
            <div class="col-lg-12 espace_connect">
                <div class="row tabconnect">
                    <div class="col-lg-6 onespace">                     
                        <p class="one space"><a onclick="changeSpace('one');" href="javascript:;">Connexion Recruteur</a></p>
                    </div>
                    <div class="col-lg-6 onespace">   
                        <p class="two space"><a onclick="changeSpace('two');" href="javascript:;">Connexion Candidat</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 form" id="form_connexion" style="display: none;" >
                <form action="<?php echo Uri::base(false) . 'front/connection/' ?>" method="post" class="form-inline">
                    <input type="text" class="form-control" placeholder="Email" name="email" id="email" class="text" autocomplete="false" />
                    <input type="password" class="form-control" placeholder="Mot de passe" name="pwd" id="pwd" class="text" autocomplete="false" />
                    <input type="hidden" value="1" class="loginUser" name="loginUser"/><!-- différencier le candidat(1) du récruteur(2) -->
                    <input type="submit" value="Se connecter" name="go" id="go" class="btn btn-default form-control"/>
                </form>
                <p><a href="<?php echo Uri::base(false) . 'candidat/forgetPwd/' ?>">Mot de passe oublié ?</a> | <a href="<?php echo Uri::create('candidat/enregistrer') ?>" id="inscrire">S'inscrire</a></p>
            </div>
        </div>
    <?php else : ?>
        <div class="row connexion">
            <div class="col-lg-12 espace_connect">
                <div class="row" style="margin-left: 0px;">
                    <?php
                    if (Session::get('logged_candidat')):
                        $candidat = Model_Candidat::find(Session::get('id'));
                        ?>
                        <div class="col-lg-9 welc">
                            <p >
                                <a href="<?php echo Uri::create('candidat') ?>" style="float: left;"><img alt="<?php echo Session::get('nom'); ?>" src="<?php echo Uri::create('assets/upload/photo/' . Session::get('photo')); ?>" width="35" height="35"/></a>
                                <a href="<?php echo Uri::create('candidat') ?>" style="float: left;margin: 8px 0px 0px 5px;">
                                    <?php echo Session::get('nom'); ?>
                                </a>
                            </p>
                        </div>
                    <?php else: ?>
                        <div class="col-lg-9 welc">
                            <p >
                                <a href="<?php echo Uri::create('recruteur') ?>" style="float: left;"><img alt="<?php echo Session::get('nom') ?>" src="<?php echo Uri::create('assets/upload/logo/' . Session::get('logo')) ?>" width="30px" height="30px"/></a>
                                <a href="<?php echo Uri::create('recruteur') ?>" style="margin: 8px 0px 0px 5px;"><?php echo Session::get('nom') ?></a>
                            </p>
                        </div>
                    <?php endif; ?>
                    <div class="col-lg-3 quit">
                        <p><a  href="<?php echo Uri::create('front/deconnection') ?>">Quitter</a></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <div class="row bloc" style="margin-top: 10px;">
        <div class="col-lg-12 toutsection annonces">
            <div class=" row tout">
                <div class="col-lg-2 "><a class="vert" href="<?php echo Uri::create('candidat/enregistrer') ?>"><i class="icon icon-3x icon-pencil"></i></a></div>
                <div class=" col-lg-10 textcont">
                    <h5 class="title"><a href="<?php echo Uri::create('candidat/enregistrer') ?>" class="ajob">Vous êtes Candidat ? <span>Inscrivez-vous</span></a></h5>
                </div>
            </div>
            <div class="row tout">
                <div class="col-lg-2 "><a class="vert" href="<?php echo Uri::create('recruteur/enregistrer') ?>"><i class="icon icon-3x icon-pencil"></i></a></div>
                <div class="col-lg-10 textcont">
                    <h5 class="title"><a class="vert" href="<?php echo Uri::create('recruteur/enregistrer') ?>">Vous êtes Recruteur ? <span>Inscrivez-vous</span></a></h5>
                </div>
            </div>
            <div class="row tout" id="newsle">
                <div class="col-lg-2"><a class="vert" href="<?php echo Uri::base(false) . 'candidat' ?>"><i class="icon icon-4x icon-file-alt"></i></a></a> </div>
                <div class="col-lg-10 textcont">
                    <h5 class="title"><a href="<?php echo Uri::base(false) . 'candidat' ?>">Déposez votre CV dans la <span>CVthèque</span></a></h5>
                </div>
            </div>
            <div class=" row tout" style="border-bottom: none;">
                <div class="col-lg-2 "><a class="vert" href="#" class="ajob"><i class="icon icon-3x icon-envelope"></i></a></div>
                <div class=" col-lg-10 textcont">
                    <h5 class="title"><a href="#" class="ajob">Abonnez-vous <span >à la Newsletter de Guinée emploi</span></a></h5>
                </div>
            </div>
            <div class="row newsletter" >
                <form action="" method="post" class="form-inline">
                    <div class="col-lg-8">
                        <input  type="text" placeholder="Entez votre e-mail" id="mail" class="form-control" name="mail"/>
                    </div>
                    <div class="col-lg-4">
                        <input type="button" class="btn" value="Valider" id="valider" onclick="saveNewsletter();" />
                    </div>
                    <div class="col-lg-12 lespan"style="text-align: center;font: bold 12px arial;  color: rgb(104, 142, 10);"></div>
                    <div style="display:none;width: 50px;margin: auto;" id="ajaxImg"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
                </form>
            </div>
        </div>
    </div>
    <div class="row populaires">
        <div class="col-lg-12" style="padding: 0px;">
            <h3 class="titre">Les offres à la une  sur Guinee-Emploi</h3>
        </div>
        <div class="col-lg-12 toutsection" >
            <?php foreach ($offres_right as $offre): ?>
                <div class="row tout first">
                    <?php $recruteur = Model_Recruteur::find($offre->recruteur_id); ?>
                    <?php $logo = $offre->getLogo();
                    if ($logo != null AND file_exists(DOCROOT . 'assets/upload/logo/' . $logo)):
                        ?>
                        <div class=" col-lg-3" >
                            <img class="img-responsive" style="width: 100%;" src="<?php echo Uri::base(false) . 'assets/upload/logo/' . $logo ?> " id="logo" />
                        </div>
                        <div class=" col-lg-9" >
                        <?php else: ?>
                            <div class=" col-lg-12" >
                            <?php endif; ?>
                            <h5  class="alaune" style="margin-top: -3px;" title="<?php echo $offre->vues ?> vues"><a href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id . '/' . Inflector::friendly_title($offre->titre) ?>"><?php echo stripslashes(Str::truncate($offre->titre, 180)) ?></a></h5>
                            <p><?php echo \Fuel\Core\Str::truncate($offre->description, 50, '...', false); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
<div class="row follow" style="margin-top: 15px;">
      <div class="col-lg-12" style="padding: 0px;">
         <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- guinee-emploi_droite -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-3883880951212572"
     data-ad-slot="7171179842"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
     </div>
</div>
        <div class="row follow" style="margin-top: 15px;">
            <div class="col-lg-12" id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=118677141494341";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div style="margin-left: -37px;" class="col-lg-12 fb-like-box" data-href="http://www.facebook.com/GuineeEmploi" data-width="337" data-height="230" data-show-faces="true" data-stream="false" data-header="true"></div>
        </div>
    </div>
    <script type="text/javascript">
        function tick2() {
            $('#ticker_02 .first:first').slideUp(function() {
                $(this).appendTo($('#ticker_02')).slideDown();
            });
        }
        setInterval(function() {
            tick2();
        }, 5000);
        // $('#ticker_02 .first:odd').css('background-color', '#F1F1F1');
        $('.ajob').click(function() {
            var urel = '<?php echo Uri::create('candidat/alertjob') ?>';
            $.ajax({
                type: "POST",
                url: urel,
                success: function(mgs) {
                    if (mgs == 'vous êtes deja abonnés aux Alertjob') {
                        alert(mgs);
                    } else if (mgs == 'vous devez vous abonner aux Alertjob') {
                        if (confirm('Souhaitez-vous vous abonner aux Alertjob ?')) {
                            alert('Vous êtes maintenant abonné(e)s aux Alertjob');
                        }
                    } else if ('vous devez vous connecté d\'abord') {
                        $(location).attr('href', '<?php echo Uri::create('front/loginCandidat') ?>');
                    }
                }
            });
        });
    </script> 
    