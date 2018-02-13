<div class="row espace_int">
    <div class="col-lg-12">
        <p class="breadcrumb">
            <a  href="<?php echo Uri::base(false) ?>" class="liena">Accueil</a> &raquo; Détail de l'article  
        </p>

    </div>
    <div class="col-lg-12 detail_article">  
        <div class="row">
            <div class="col-lg-12">
                <h3 ><?php echo $article->titre ?></h3> 
                <p>
                    <span class="label label-warning"><?php echo date('d/M/Y') ?> | <?php echo stripslashes($article->getCategory()->categorie) ?></span>
                </p>
            </div>

        </div>
        <div class="row">

            <div class="col-lg-12">
                <img alt="<?php echo $article->titre ?>" src="<?php echo Uri::base(false) . 'assets/upload/article/' . $article->image ?>" class="img-responsive" style="float: left; margin-right: 10px;" />
                <?php echo nl2br($article->contenu) ?>
            </div>
        </div>   



    </div>
    <?php echo render('inc/likebutton') ?>     
    <!-- FB COMMENTS -->
    <?php echo render('inc/fbcomment') ?>
    <!-- FB COMMENTS -->
</div>
<div class="row">
    <div class="col-lg-12"e id="espace">
        <?php echo render('inc/espace') ?>
    </div>
</div>
