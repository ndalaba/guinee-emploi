<script type="text/javascript">
    var baseUrl = '<?php echo Uri::create('/'); ?>';
</script>
<?php echo Asset::js('functions.js') ?>
<script>
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
<div id="footcont" class="row">
    <div class="col-lg-12 footer">
        <div class="row">
            <div class="col-lg-2">
                <ul class="list-unstyled">
                    <li ><a href="<?php echo Uri::base(false) ?>">Accueil</a></li>
                    <li ><a href="#" class="ajob2">AlertJob</a></li>
                    <li ><a href="<?php if (\Fuel\Core\Session::get('logged_recruteur')) {
                            echo Uri::create('cvtheque');
                        }else{
                            echo Uri::create('recruteur');
                        }
                        ?>">CVthèque</a></li>

                </ul>
            </div>
            <div class="col-lg-3">
                <ul class="list-unstyled">
                    <li ><a href="<?php echo Uri::create('loginRecruteur') ?>">Annonceurs</a></li>
                    <li ><a href="<?php echo Uri::create('loginCandidat') ?>">Candidats</a></li>
                    <li ><a href="<?php echo Uri::create('offre/') ?>">Offres d’emploi</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-unstyled">

                    <li ><a href="#"><strong style="text-decoration: underline; ">Inscription:</strong></a></li>
                    <li ><a href="<?php echo Uri::create('candidat/enregistrer') ?>">Candidats</a></li>
                    <li ><a href="<?php echo Uri::create('recruteur/enregistrer') ?>">Recruteurs</a></li>


                    </li>
                </ul>
            </div>

            <div class="col-lg-2">
                <ul class=" fan list-unstyled">
                    <li ><a href="#recherche" style="color: #333333;">Rechercher</a></li>
                    <li class="nl"><a href="#newsle" >Newsletter</a></li>
                    <li class="fb"><a href="http://www.facebook.com/GuineeEmploi" >Devenir Fan</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row copir">
    <div class="col-lg-12">
         <p ><strong>Copyright © 2013 - <?php echo date('Y'); ?> Guinee-Emploi</strong> Réalisé par <a href="http://www.guinee-webdev.com" target="_blank">Guinee-webdev</a></p> 
    </div>
</div>
<div id="popup" style="display: none;"> <?php //echo render('inc/pop')     ?></div>
<script type="text/javascript">
    $('.ajob2').click(function() {
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
                } else if ('vous devez vous inscrire d\'abord') {
                    $(location).attr('href', '<?php echo Uri::create('front/loginCandidat') ?>');
                }
            }

        });

    });
</script>
<!--
<script type="text/javascript">
var infolinks_pid = 2712196;
var infolinks_wsid = 0;
</script>
<script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>-->

<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-36357264-3', 'guinee-emploi.com');
    ga('send', 'pageview');

</script>