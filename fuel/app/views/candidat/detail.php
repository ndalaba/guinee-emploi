
<div id="left" class="row espace_int">
    <div class="col-lg-12 espace_candidat">
        <div class="row haut">
            <p class="col-lg-8 left" ><span>Accueil</span> &raquo; <a href="<?php echo Uri::create('cvtheque') ?>"> CVThèque </a> &raquo;  <?php echo stripslashes($candidat->nom . ' ' . $candidat->prenom) ?></p>

            <div class="col-lg-4" style="margin-top: 5px; text-align: right;">
                <button type="button" id="sendMessageToCandidat" class="btn" title="Ecrire au candidat">
                    Ecrire au candidat <span class="glyphicon glyphicon-comment"></span>

            </div>
        </div>
        <div class="row detail_offre">
            <div id="kj_ventre" class="col-lg-12">
                <div id="jobs_detail" class="row">  
                    <input type="hidden" id="candidat_id" value="<?php echo $candidat->id ?>"/>
                    <!--<div style="margin-left: 13px;" class="fb-like" data-href="<?php //echo Uri::base('false') . 'recruteur/detail/' . $candidat->id . '/' . Inflector::friendly_title($candidat->nom)               ?>" data-send="true" data-width="450" data-show-faces="false"></div>-->
                    <div class="col-lg-12">
                        <table class="¨table table-condensed noline" style="width: 100%;font-family:Segoe,Tahoma,Verdana,Arial,Helvetica,sans-serif;">
                            <tbody >
                                <tr >
                                    <td  class="badge"><span class="glyphicon glyphicon-user"></span></td>
                                    <td><strong><?php echo stripslashes($candidat->nom . ' ' . $candidat->prenom) ?></strong></td>                                                
                                </tr>
                                <tr>                                               
                                    <td  class="badge"><span class="glyphicon glyphicon-barcode"></span></td>
                                    <td><?php echo stripslashes($candidat->tranche_age) ?> ans</td>
                                    <td  class="badge"><span class="glyphicon glyphicon-certificate"></span></td>
                                    <td><?php echo stripslashes($candidat->statut) ?> </td>
                                </tr>
                                <tr >
                                    <td  class="badge"><span class="glyphicon glyphicon-book"></span></td>
                                    <td><?php echo stripslashes($candidat->niveau_formation) ?></td>
                                    <td  class="badge"><span class="glyphicon glyphicon-envelope"></span></td>
                                    <td><?php echo stripslashes($candidat->email); ?></td>
                                </tr>                                            
                                <tr >
                                    <td  class="badge"><span class="glyphicon glyphicon-headphones"></span></td>
                                    <td><?php echo stripslashes($candidat->phone) ?></td>
                                    <td  class="badge"><span class="glyphicon glyphicon-map-marker"></span></i></td>
                                    <td><?php echo stripslashes($candidat->ville) ?> - <?php echo stripslashes($candidat->pays) ?></td>                                                
                                </tr>                                                                                                                                 
                                <tr >
                                    <td  class="badge"><span class="glyphicon glyphicon-briefcase"></span></td>
                                    <td> <?php echo ($candidat->expe == 0) ? "Pas d'expérience" : stripslashes($candidat->expe) . " ans d'expérience" ?></td>
                                    <td  class="badge"><span class="glyphicon glyphicon-comment"></span></td>
                                    <td><?php echo stripslashes($candidat->premiere_langue . '/ ' . $candidat->niveau_plangue) ?> - <?php echo stripslashes($candidat->deuxieme_langue . ' ' . $candidat->niveau_dlangue) ?></td>                                                
                                </tr>
                                <tr >
                                    <td  class="badge"><span class="glyphicon glyphicon-tag"></span></td>
                                    <td><?php echo stripslashes($candidat->specialite) ?></td>                                                
                                </tr>                            
                                <?php if ($candidat->cvdoc != 'nofile.doc' and strlen($candidat->cvdoc) > 0): ?>
                                    <tr >
                                        <td  class="badge"><span class="glyphicon glyphicon-download"></span></td>
                                        <td  colspan="3"><a href="<?php echo \Fuel\Core\Uri::create('assets/upload/cv/' . $candidat->cvdoc) ?>" style="color:#688E0A; font-weight: bold;">Télécharger mon CV</a></td>                                          
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table> 
                    </div>
                    <div class="col-lg-12">
                        <p>
                            <img src="<?php echo Uri::base(false) . 'assets/upload/photo/' . $candidat->photo ?> " id="logo" style="max-height: 300px; max-width:300px; float: left;margin-right: 10px;"/>                                       
                            <?php echo nl2br(stripslashes($candidat->experience)) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-12" id="espace">
        <?php echo render('inc/espace') ?>
    </div>

</div>

<div class="modal fade" id="modal_new">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Envoyer un message à <?php echo $candidat->nom . ' ' . $candidat->prenom; ?></h4>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="alerte"></p>
                        <form class="form-horizontal" id="messageform">
                            <div class="form-group">
                                <label class="col-lg-12" for="sujet">Sujet:</label>
                                <div class="col-lg-12">
                                    <input type="hidden" id="id" name="candidat_id" value="<?php echo $candidat->id ?>"/>
                                    <input type="text" id="sujet" name="sujet" class="form-control" placeholder="sujet" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12" for="message">Message:</label>
                                <div class="col-lg-12">
                                    <textarea id="message" name="message" class="form-control input-xlarge" rows="15">Bonjour,</textarea>                            
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-lg-12">
                    <button type="button" id="sendToCanditat" class="btn btn-primary">Envoyer</button>
                    <button type="button"  class="btn btn-default" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php echo Fuel\Core\Asset::js(array('recruteur.js', 'notification.js')); ?>