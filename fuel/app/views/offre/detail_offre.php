<div class="row espace_int">
    <div class="col-lg-12">
        <p class="accueil">
            <a href="<?php echo Uri::base(false) ?>">Accueil</a> &raquo; Détail de l'offre  
        </p>

    </div>
    <div class="col-lg-12">
        <div class="row">

            <div class="col-lg-12 detail_offre">

                <?php if (isset($file_errors)): ?>
                    <ul class="errors"><?php
                        foreach ($file_errors as $file) {
                            echo '<li >' . ($file['errors'][0]['message']) . '</li>';
                        }
                        ?>
                    </ul>
                <?php endif; ?>

                <?php if (\Fuel\Core\Session::get('postuler')): ?>
                    <div class="row alert alert-success">
                        <div class="col-lg-12">
                            <p><?php echo Session::get('postuler') ? Session::get('postuler') : ''; ?></p>
                        </div>
                    </div>  
                <?php endif; ?>


                <div id="kj_ventre" class="row">
                    <div id="jobs_detail" class="col-lg-12">   
                        <?php if (isset($offre->recruteur->nom)): ?>
                            <div class="row" style="margin-bottom: 10px;">                            
                                <?php $logo = ($offre->recruteur->logo == 'no-logo.jpg') ? 'no-logo.jpg' : $offre->recruteur->logo; ?>                               
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="entreprise2"><a href="<?php echo Uri::base(false) . 'recruteur/detail/' . $offre->recruteur->id . '/' . Inflector::friendly_title($offre->recruteur->nom) ?>"><?php echo $offre->recruteur->nom; ?></a></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <button data-toggle="modal" data-target="#modal_envoi_message" class="btn" cand="<?php if (Session::get('logged_candidat')) echo 'candidat' ?>"id="sendMessageToRecruteur" title="Envoyer un message au recruteur"><i class="icon-comment"></i>Nous ecrire </button>
                                        </div>
                                    </div>

                                </div>  

                                <div class="col-lg-3">
                                  <?php if(isset($logo) AND $logo!=NULL):?>
                                    <img class="img-responsive"src="<?php echo Uri::base(false) . 'assets/upload/logo/' . $logo ?> " id="logo" width="100%" height="100%"/>                       
                                    <?php endif;?>
                                </div>

                            </div>

                        <?php endif; ?>
                        <div class="row">

                            <div class="col-lg-9">
                                <h1 class="titre1" ><?php echo $offre->titre ?></h1>
                            </div>
                            <?php if (!Session::get('logged_candidat')): ?>
                                <div class="col-lg-3">
                                    <p class="postule">
                                        <a  href="<?php echo Uri::create('candidat/enregistrer') ?>" class="btnVert">Postuler</a>
                                    </p>
                                </div>                            
                            <?php endif; ?>
                            <?php if (Session::get('logged_candidat')  and isset($offre->recruteur->nom)): ?>

                                <div class="col-lg-3">
                                    <p class="postule btnpostule">
                                        <a  href="#formpostule" class="btnVert" onclick="$('#postuler').fadeIn();
                                        $('.btnpostule').hide();">
                                            Postuler
                                        </a>
                                    </p>
                                </div>

                            <?php endif; ?>
                        </div>
                        <?php echo render('inc/likebutton') ?>
<!-- <div style="margin-left: 13px;" class="fb-like" data-href="<?php //echo Uri::base('false') . 'offre/detail/' . $offre->id . '/' . Inflector::friendly_title($offre->titre)                                  ?>" data-send="true" data-width="450" data-show-faces="false"></div>                          -->
                        <table class="table table-responsive noline"  >
                            <tbody >
                                <tr >
                                    <td class="badge">Date d'expiration : </td>
                                    <?php if($expire<0): ?>
                                    <td ><strong><?php echo (Helper::formatDate($offre->date_fin) == '00/00/0000') ? '-' : Helper::formatDate($offre->date_fin) ?></strong></td>
                                    <?php else: ?>
                                        <td ><strong style="color:red"> Expirée </strong></td>
                                    <?php endif ?>
                                    <td class="badge">Référence de l'offre :</td>
                                    <td ><strong><?php echo $offre->id ?></strong></td>
                                </tr>
                                <?php if ($offre->fonction_id != 27) : ?>
                                    <tr >
                                        <td class="badge">Contrat :</td>
                                        <td >
                                            <strong>
                                                <?php echo $offre->type_contrat ?>
                                            </strong>
                                        </td>
                                        <td class="badge">Expérience :</td>
                                        <td >
                                            <strong>
                                                <?php echo ($offre->experience == 0) ? "Indifférent" : $offre->experience . " an(s)"; ?>
                                            </strong>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <tr >
                                    <td class="badge">Localisation :</td>
                                    <td ><strong><?php echo $offre->ville . ' , ' . $offre->pays ?></strong></td>
                                    <?php if (!empty($offre->fichier) AND $offre->fichier != "nofile.jpg"): ?>
                                        <td >Fichier joint</td>
                                        <td ><strong><a href="<?php echo Uri::base(false) . 'assets/upload/' . $offre->fichier ?>" title="fichier joint"><i class="icon-download"></i></a></strong></td>
                                    <?php endif; ?>

                                    <?php if ($offre->fonction_id != 27) : ?>

                                        <td class="badge">Fonction(s) :</td>
                                        <td >
                                            <strong>
                                                <?php echo $fonction->fonction ?>
                                            </strong>
                                        </td>

                                    <?php endif; ?>
                                    <?php if (isset($secteur)): ?>
                                    <tr>
                                        <td class="badge">Secteur :</td>
                                        <td >
                                            <strong>
                                                <?php echo $secteur->secteur ?>
                                            </strong>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                            </tbody>
                        </table>

                        <div class="row">
                        <!-- pub adsense -->
                        <div class="col-lg-12">
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
                        
                        
                        <!-- pub adsense -->
                        </div>
                            <div class="col-lg-12">
                            <?php if($expire<0): ?>
                           	<p><?php echo nl2br($offre->description) ?></p>  
                            <?php else: ?>
                                <p style="text-decoration: line-through"><?php echo nl2br($offre->description) ?></p>  
                            <?php endif ?>
                        
                            </div>
                        </div>
                        <?php if (isset($offre->recruteur->nom)): ?>
                            <div class="row">                            
                                <div class="col-lg-12">
                                    <p class="entreprise">&raquo; <a href="<?php echo Uri::base(false) . 'offre/recruteur/' . $offre->recruteur->id . '/' . Inflector::friendly_title($offre->recruteur->nom) ?>">Voir toutes les offres proposées par <?php echo $offre->recruteur->nom; ?></a></p>
                                </div>
                            </div>

                        <?php endif; ?>
                        <?php if (Session::get('logged_candidat') and isset($offre->recruteur->nom)): ?> 
                            <?php if (!Session::get('postuler')): ?>  
                                
                                <form style="display: none; margin-top: 10px;"class="form-horizontal" action="<?php echo Uri::base(false) . 'candidat/postuler/' . $offre->id ?>" method="post" id="postuler" enctype="multipart/form-data">                                                                                                                                
                                    <fieldset id="formpostule">
                                        <legend class="titre1">Postuler à cette annonce &nbsp;<span class="glyphicon glyphicon-envelope"></span></legend>

                                        <input type="hidden" value="<?php echo $offre->id ?>" name="idOffre"/>
                                        <div class="form-group">
                                            <input type="file" name="cv" id="pdffile" style="display: none;" />

                                            <div class="col-lg-6">
                                                <input type="text" name="subfile" id="subfile" class="form-control" disabled>

                                            </div>

                                            <label class="col-lg-6">
                                                <a class="btn btn-warning" onclick="$('#pdffile').click();">Selectionner votre cv</a>
                                            </label>
                                            <script type="text/javascript">
                                                $('#pdffile').change(function() {

                                                    $('#subfile').val($(this).val());
                                                })
                                            </script>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-12" style="font-size: 12px">&nbsp;&nbsp;&nbsp;Rédigez votre lettre de motivation (Facultatif)</label>
                                            <div class="col-lg-11">
                                                <textarea name="lettre"class="form-control"rows="20" ></textarea> 
                                            </div>
                                        </div>
                                        <div class="col-lg-12 " >
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <p class="postule">
                                                        <a  href="javascript:;" class="btnVert" onclick="$('#postuler').submit();">Envoyer</a>

                                                    </p>
                                                </div>
                                                <div class="col-lg-2">ou</div> 
                                                <div class="col-lg-5">
                                                    <p class="postule">
                                                        <input type="reset" style="display: none" id="reset">
                                                        <a href="javascript:;" onclick="$('#postuler').fadeOut();
                                                                        $('.btnpostule').show();
                                                                        $('#reset').click();">Annuler</a> 
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                    </fieldset>
                                </form>
                            <?php else: ?>
                                <div class="row">
                                    <div class="col-lg-12 " >
                                        <p class=" postule">
                                            <a href="<?php echo Uri::create('candidat/resetpostuler/' . $offre->id) ?>" class="btnVert">Annuler</a>
                                        </p> 
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
    <!--<p class="postule">
    <a  href="<?php //echo Uri::create('candidat/enregistrer')  ?>" class="btnVert"><span>Postulez</span></a>
    </p>-->
                        <?php endif; ?>
                        <?php //\Fuel\Core\Session::delete("postuler") ?>

                    </div>
                </div>
            </div>
            <!-- FB COMMENTS -->
            <?php echo render('inc/fbcomment') ?>
            <!-- FB COMMENTS -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12"e id="espace">
        <?php echo render('inc/espace') ?>
    </div>
</div>

<div class="modal fade" id="modal_envoi_message" tabindex="-1">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title" id="myModalLabel">Envoyer un Message à  <?php if (isset($offre->recruteur->nom)){echo $offre->recruteur->nom;} ?></h4>
           </div>

           <div class="modal-body">

               <p id="msg_alert"></p>

                <form action="<?php echo \Fuel\Core\Uri::create('candidat/envoyer_message/'.$offre->id); ?>" method="post" id="msgrec" title="<?php echo $offre->recruteur_id ?>">
                   <p id="loader_envoi_message"><i class="icon icon-spinner"></i> Envoi en cours...</p>
                   <div class="control-group">
                        <label for="sujet">Sujet</label>
                        <input name="sujet" class="form-control" type="text" id="sujet" placeholder="Sujet du message" value="Offre d'emploi: <?php echo $offre->titre ?>"/>
                   </div>
                   <div class="control-group">
                       <label for="sujet">Message</label>
                       <textarea name="message" class="form-control" id="message" placeholder="Contenu du messqge ici" style="height: 250px;"></textarea>
                   </div>
                   <hr>
                   <div class="control-group">
                       <button id="send" class="btn btn-success" >Envoyer le message</button>
                       <button class="btn" data-dismiss="modal">Annuler</button>
                   </div>
               </form>
           </div>

       </div>
   </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#loader_envoi_message').hide();
        $('#msgrec').submit(function(e){
            $('#loader_envoi_message').fadeIn();
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                url: url,
                type: 'post',
                data: data,
                success:function(data){
                    $('#loader_envoi_message').hide();
                    if(data == 'success')
                    {
                        $('#msg_alert').empty().html('Votre message a bien été envoyé').css('color','green');
                        $('#msgrec :input').each(function(index){
                            $(this).val('');
                        });
                    }
                    else if(data == 'error')
                    {
                        $('#msg_alert').empty().html("Votre message n'a pas pu être envoyé. Vérifier que v" +
                            "votre connexion internet est bien active puis réessayer à nouveau.").css('color','green');
                    }
                    else
                    {
                        $('#msg_alert').empty().html(data).css('color','red');
                    }

                }
            });

            e.preventDefault();
        });
    });
</script>