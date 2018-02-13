<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                    </span> Contenu</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-comment text-warning"></span><a href="<?php echo Uri::create('admin/setting/sendMessage') ?>"> Envoyer Message</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-pencil text-primary"></span><a href="<?php echo Uri::create('admin/setting/saveOffre') ?>"> Offres</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-list text-success"></span><a href="<?php echo Uri::create('admin/setting/offres') ?>"> Liste Offres</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-pencil text-info"></span><a href="<?php echo Uri::create('admin/setting/saveArticle') ?>"> Articles</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-list-alt text-info"></span><a href="<?php echo Uri::create('admin/setting/articles') ?>"> Liste Articles</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-comment text-success"></span><a href="<?php echo Uri::create('admin/setting/message') ?>"> Messages</a>
                            <!--<span class="badge">42</span>-->
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                    </span> Administration</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="<?php echo Uri::create('admin/setting/categories_actu') ?>"> <i class="icon icon-list"></i> Catégories d'article</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="<?php echo Uri::create('admin/setting/fonctions') ?>"> <i class="icon icon-list"></i> Fonctions</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="<?php echo Uri::create('admin/setting/videos') ?>"> <i class="icon icon-play"></i> Videos</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="<?php echo Uri::create('admin/setting/setting') ?>"> <i class="icon icon-hdd"></i> Réglages</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                    </span> Autres</a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">                       
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-user"></span><a href="<?php echo Uri::create('user/') ?>"> Utilisateurs</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-user"></span><a href="<?php echo Uri::create('admin/setting/recruteurs') ?>"> Récruteurs</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-user"></span><a href="<?php echo Uri::create('admin/admin/partenaires') ?>"> Partenaires</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-dashboard"></span><a href="<?php echo Uri::create('admin/admin/index') ?>">Tableau de bord</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<ul class="nav navbar-nav col-lg-12" style="margin-top: 2px;background-color: #EBE9E9;">
    <li class="dropdown col-lg-12">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">NewsLetters <span class="glyphicon glyphicon-envelope pull-right"></span></a>
        <ul class="dropdown-menu" style="width: 105%">
            <li id="news"><a href="#" class="news"> <i class="icon icon-envelope"></i> Envoyer une newsletter</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo Uri::create('cvtheque') ?>" target="_blank"><i class="icon icon-user"></i>(<?php echo Model_Statistiques::countCandidats(); ?>) Candidats inscrits</a></li>
            <li class="divider"></li>        
            <li><a href="<?php echo Fuel\Core\Uri::create('admin/setting/recruteurs') ?>"><i class="icon icon-user"></i> (<?php echo Model_Statistiques::countRecruteurs(); ?>) Recruteurs inscrits</a></li>                                         
            <li class="divider"></li>        
            <li><a href=""><i class="icon icon-envelope"></i> (<?php echo Model_Statistiques::countMails(); ?>) Adresses mails</a></li>                                                           
        </ul>
    </li>
</ul>
