<!DOCTYPE HTML>
<html>
    <head>        
        <title>Guinee-Emploi : ESPACE - <?php echo $recruteur->nom; ?> - Messages</title>
        <?php echo render('inc/meta') ?>
        <?php echo Asset::css(array('bootstrap.css', 'global.css')) ?>
        <?php echo Asset::js(array('jquery-latest.js', 'bootstrap.js','notification.js', 'recruteur.js')) ?>
    </head>
    <script type="text/javascript">
        function slide() {
            $('#catlist').slideToggle();
            $('#acat').slideToggle();
        }
    </script>
    <style>
        #example_length select{width: 70px;}
        #example{margin-top: 10px;}
        #resultats #left .espace .haut .left {width: 430px;}
    </style>
    <body class="interne profil candidat" id="resultats">
        <div id="main">
            <div id="top"></div>
            <div id="content">
                <div id="left">
                    <?php echo render('inc/header') ?>
                    <div class="espace">
                        <div class="haut">
                            <p class="left"><span><a href="<?php echo Uri::create('recruteur') ?>" style="text-decoration: none; color: #688E0A;"><?php echo $recruteur->nom ?></a></span> &raquo; Messages</p>
                            <div class="toutsec right" style="margin: 0 6px 10px 0px; background-color: rgba(247, 245, 245, 0.49); float: right;width: auto;">                                
                                <div class="btn-group" data-toggle="buttons-radio">                                    
                                    <button type="button" class="btn selectionCandidat" title="Selectionner tous les candidats"><i class="icon-ok"></i></button> 
                                    <button type="button" class="btn deselectionCandidat" title="Retirer tous les candidats"><i class="icon-off"></i></button> 
                                </div>
                                <div class="btn-group">                                    
                                    <button type="button" class="btn" id="saveCandidat" title="Enregistrer les candidats selectionnés"><i class="icon-hdd"></i></button> 
                                    <button type="button" class="btn" id="unsaveCandidat" title="Retirer ces candidats enregister"><i class="icon-trash"></i></button>                                     
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn" id="listCandidat"  title="Afficher les candidats enregistrés"><i class="icon-list"></i></button> 
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn" id="sendMessageToCandidat" title="Envoyer un message aux candidats"><i class="icon-comment"></i></button> 
                                </div>
                            </div>
                        </div>                  
                        <div class="candidatures">                                                                               
                            <div class="toutsec">
                                <?php foreach ($canditats as $cv) : ?>                                 
                                <div class="tout <?php echo Model_Candidat::isSaved($cv->id,$offre->id)?'selected':''; ?>" id="<?php echo $cv->ajout ?>" title="<?php echo $cv->id ?>">
                                        <div style="float: left;margin-right: 7px;margin-top: 27px;" >                                    
                                            <button type="button" class="btn btn-small <?php echo Model_Candidat::isSaved($cv->id,$offre->id)?'active':''; ?>" title="Selectionner|Retirer <?php echo stripslashes($cv->nom . ' ' . $cv->prenom) ?>"><i class="icon-ok"></i></button>                                    
                                        </div>
                                        <div class="textcont" style="width: 610px;">
                                            <h5 class="title" style="width: 500px;"><a target="_blank" href="<?php echo Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) ?>"><?php echo stripslashes($cv->nom . ' ' . $cv->prenom) ?></a></h5>
                                            <p class="soustitle" style="width: 510px;"><a href="#" class="first"><?php echo $cv->niveau_formation ?></a><a href="#"><?php echo $cv->tranche_age ?></a><a href="#"><?php echo $cv->premiere_langue . '-' . $cv->deuxieme_langue ?></a><a href="#" class="last"><?php echo stripslashes($cv->ville) ?></a></p>
                                            <div class="text" style="width: 520px;"><?php echo Str::truncate(stripslashes(nl2br($cv->experience)), 150) ?></div>                                                                              
                                            <div class="imgcont" style="position: relative;top: -30px;left: -25px;"><a target="_blank" href="<?php echo Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) ?>"><img src="<?php echo Uri::base(false) . 'assets/upload/photo/' . $cv->photo ?>" width="75" height="56" /></a></div>                                                                             
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>                   
                        </div>
                    </div>
                    <?php echo render('inc/espace') ?>
                    <?php echo render('inc/lastJobs') ?>
                </div>
                <?php echo render('inc/right') ?>
            </div>
        </div>

        <div class="modal hide" id="modal_new" tabindex="-1">
            <div class="modal-header">
                <h1 id="myModalLabel">Envoi Message</h1>                              
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="sujet">Sujet:</label>
                        <div class="controls">
                            <input type="text" id="sujet" class="input input-xlarge" placeholder="sujet" value="Offre d'emploi: <?php echo $offre->titre ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sujet">Message:</label>
                        <div class="controls">
                            <textarea id="message" class="input input-xlarge" style="margin: 0px; height: 190px; width: 270px;">Bonjour,</textarea>                            
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="send" class="btn btn-danger" >Oui</button>
                <button class="btn" data-dismiss="modal">Annuler</button>
            </div>
        </div>

        <?php echo render('inc/footer') ?>
    </body>    
</html>