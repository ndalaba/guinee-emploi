<div class="row">
    <div class="col-lg-12 bloc_contenu">
        <p class="breadcrumb"><a href="">Accueil &raquo;</a> Les <span class="nobre" style="font-size: 14px;font-weight: bolder;"><?php echo $count ?> </span> derniers articles</p>
        <?php if($articles != null): ?>
            <?php foreach ($articles as $article): ?>
                <div class="row article_content">
                    <div class="col-lg-12">
                        <div class="row">
                            <h2 class="article_title"><a href="<?php echo Uri::base(false) . 'article/' . $article->id . '/' . Inflector::friendly_title($article->titre) ?>"><?php echo $article->titre ?></a></h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img style="width: 100%;" class="img-thumbnail img-responsive" alt="<?php echo $article->titre ?>" src="<?php echo Uri::base(false) . 'assets/upload/article/' . $article->image ?>" />
                            </div>
                            <div class="col-lg-8 tout" id="<?php echo $article->id ?>"">
                                        <h3 style="margin-left: 0; font-size: inherit"><?php echo stripslashes($article->getCategory()->categorie) ?></h3>
                                        <p><span class="label label-warning"><?php echo date('d/M/Y') ?></span></p>
                                        <p>
                                            <a href="<?php echo Uri::base(false) . 'article/' . $article->id ?>"><?php echo Str::truncate($article->contenu, 200) ?></a>
                                        </p>
                                        <p>
                                            <a class="btn btn-xs btn-success" href="<?php echo Uri::base(false) . 'article/' . $article->id . '/' . Inflector::friendly_title($article->titre) ?>">
                                                En savoir plus </a>
                                        </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <div style="display:none;width: 50px;margin: auto;" id="ajaxImg"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
    </div>
    <?php echo render('inc/espace') ?>
</div>