<div class="row" style="display: none;">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12 bloc_entete">
                    <h2 class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 bloc_contenu">
                <h3>Lorem ipsum dolor sit amet, consectetur.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda blanditiis delectus enim eos laborum minus?</p>
            </div>

        </div>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="row">
            <div class="col-lg-12 bloc_entete">
                <h2>Toutes les annonces et offres d'emploi publiées sur  le site</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 bloc_contenu">
                <h3>Guinee-Emploi votre partenaire</h3>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row" >
                            <iframe class="col-lg-12"  src="http://www.youtube.com/embed/<?php echo $video->video ?>"width="317" height="178" frameborder="0" allowfullscreen></iframe>
                            <div class="col-lg-12 slidetext">
                                <p class="plus">Media</p>
                                <p><a href="#"><?php echo $video->titre ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php foreach ($best as $e): ?>
                            <div class="row tout" >
                                <div class="col-lg-12 astuce" >
                                    <p class="imgcont">
                                        <a href="<?php echo Uri::base(false) . 'article/' . $e->id . '/' . Inflector::friendly_title($e->titre) ?>"  tabindex="" title="<?php echo stripslashes($e->titre) ?>">
                                            <img  src="<?php echo Uri::base(false) . 'assets/upload/article/' . $e->image ?>" width="100" height="55" alt="<?php echo stripslashes($e->titre) ?>" title="<?php echo stripslashes($e->titre) ?>"/>
                                        </a>
                                    </p>
                                    <p class="textimg">
                                        <a href="<?php echo Uri::base(false) . 'article/' . $e->id . '/' . Inflector::friendly_title($e->titre) ?>"  tabindex="" title="<?php echo stripslashes($e->titre) ?>">
                                            <?php echo stripslashes(\Fuel\Core\Str::truncate($e->titre, 70)) ?>
                                        </a>
                                    </p>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            <h4 class="col-lg-12">Guinee-Emploi votre partenaire</h4>
        </div>
        <div class="row" id="mainfeaturecont">
            <div class="col-lg-6 " id="video">
                <div class="row" >
                    <iframe class="col-lg-12"  src="http://www.youtube.com/embed/<?php echo $video->video ?>" frameborder="0" allowfullscreen></iframe>
                    <div class="col-lg-12 slidetext">
                        <p class="plus">Media</p>
                        <p><a href="#"><?php echo $video->titre ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="sidebar" >
                <?php foreach ($best as $e): ?>
                    <div class="row tout" >
                        <div class="col-lg-12 astuce" >
                            <p class="imgcont">
                                <a href="<?php echo Uri::base(false) . 'article/' . $e->id . '/' . Inflector::friendly_title($e->titre) ?>"  tabindex="" title="<?php echo stripslashes($e->titre) ?>">
                                    <img  src="<?php echo Uri::base(false) . 'assets/upload/article/' . $e->image ?>" width="100" height="55" alt="<?php echo stripslashes($e->titre) ?>" title="<?php echo stripslashes($e->titre) ?>"/>
                                </a>
                            </p>
                            <p class="textimg">
                                <a href="<?php echo Uri::base(false) . 'article/' . $e->id . '/' . Inflector::friendly_title($e->titre) ?>"  tabindex="" title="<?php echo stripslashes($e->titre) ?>">
                                    <?php echo stripslashes(\Fuel\Core\Str::truncate($e->titre, 70)) ?>
                                </a>
                            </p>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <p class="alljobs"><a href="<?php echo Uri::create('articles') ?>">Tous les articles &raquo;</a></p>
    </div>
</div>
<?php echo render('inc/lastJobs') ?>

