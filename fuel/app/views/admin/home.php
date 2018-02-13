<div class="col-md-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-dashboard"></span>Tableau de bord</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <a href="<?php echo Uri::create('admin/setting/saveOffre') ?>" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Publier Offre</a>
                    <a href="<?php echo Uri::create('admin/setting/offres') ?>" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Liste Offres</a>
                    <a href="<?php echo Uri::create('admin/setting/fonctions') ?>" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>Liste de fonctions</a>
                    <a href="<?php echo Uri::create('admin/setting/message') ?>" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>Messages <span style="color: #D54E21; font-weight: bold;" title="<?php echo $nonlu; ?> Nouveaux messages"><?php echo $nonlu; ?></a>
                </div>
                <div class="col-xs-6 col-md-6">
                    <a href="<?php echo Uri::create('admin/setting/recruteurs') ?>" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Recruteurs <span style="color: #D54E21; font-weight: bold;" title="<?php echo $newsR; ?> Nouveaux recruteurs"><?php echo $newsR; ?></a>
                    <a href="<?php echo Uri::create('admin/setting/articles') ?>" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Articles</a>
                    <a href="<?php echo Uri::create('admin/setting/videos') ?>" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>Video</a>
                    <a href="<?php echo Uri::create('admin/setting/setting') ?>" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-dashboard"></span> <br/>Reglages</a>
                </div>
            </div>
            <a href="<?php echo Uri::create('/') ?>" class="btn btn-success btn-lg btn-block" role="button" target="_blank"><span class="glyphicon glyphicon-globe"></span> Site internet</a>
        </div>
    </div>
</div>