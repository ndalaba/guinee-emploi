<div class="row">
    <div class="col-lg-12">

        <div class="row">
        
        
            <div class="col-lg-12 bloc_entete">
                <h2 class="text-right"><a href="<?php echo Uri::base(false) . 'recruteur/entreprise/' ?>" style="font: bold 14px !important;color: #fff;">Toutes les Entreprises qui publient sur  le site</a></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 bloc_contenu">
                <h3>Guinee-Emploi votre partenaire</h3>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row" >
                            <iframe style="width: 95%;height:220px;   margin-left: 5%;"  src="http://www.youtube.com/embed/<?php echo $video->video ?>?autoplay=0" frameborder="0" allowfullscreen></iframe>
                            <div class="col-lg-12 slidetext">
                                <p class="plus"><span class="label label-success">Media</span> <a href="#"><strong><?php echo $video->titre ?></strong></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php foreach ($best as $e): ?>
                            <div class="row" >
                                <div class="col-lg-4" >
                                    <a href="<?php echo Uri::base(false) . 'article/' . $e->id . '/' . Inflector::friendly_title($e->titre) ?>"  tabindex="" title="<?php echo stripslashes($e->titre) ?>">
                                        <img style="width: 100%;"  src="<?php echo Uri::base(false) . 'assets/upload/article/' . $e->image ?>"  alt="<?php echo stripslashes($e->titre) ?>" title="<?php echo stripslashes($e->titre) ?>"/>
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <p>
                                        <a href="<?php echo Uri::base(false) . 'article/' . $e->id . '/' . Inflector::friendly_title($e->titre) ?>"  tabindex="" title="<?php echo stripslashes($e->titre) ?>">
                                            <?php echo stripslashes(\Fuel\Core\Str::truncate($e->titre, 70)) ?>
                                        </a>
                                    </p>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <p class="alljobs text-right"><a href="<?php echo Uri::create('articles') ?>">Tous les articles &raquo;</a></p>

            </div>

        </div>
    </div>
</div>
   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Adaptable -->
	<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-client="ca-pub-3883880951212572"
	     data-ad-slot="2703512642"
	     data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
<?php echo render('inc/lastJobs') ?>

   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Adaptable -->
	<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-client="ca-pub-3883880951212572"
	     data-ad-slot="2703512642"
	     data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
