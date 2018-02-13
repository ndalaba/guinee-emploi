
<div class="row" id="left">
    <div class="col-lg-12 logged_recruter espace">

        <?php echo render('recruteur/recruteur_header'); ?>

        <h3> Liste des Postulants à l'offre
            <a style="font-size: inherit; color: #688e0a; font-weight: bold;" href="<?php echo Uri::create('offre/detail/' . $offre->id) ?>" target="_blank">
                <?php echo $offre->titre; ?>
            </a>
        </h3>
        <hr>
        <p><a href="#" class="btn btn-xs btn-success display_option_filtre">Afficher l'option filtre</a></p>
        <div class="row">
            <div class="col-lg-12 filtre">
                <form id="frmfiltreCandidat" class="form-horizontal">
                    <input type="hidden" id="todo" value="mesCandidats"/>
                    <input type="hidden" id="offreId" value="<?php echo $offre->id ?>"/>

                    <div class="well">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="col-lg-12">Fonction</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="competence" class="form-control" placeholder="développeur, comptable, chauffeur.....">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="col-lg-12">Ville</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" name="ville"  id="ville" value="<?php echo isset($ville) ? $ville : "" ?>" placeholder="Conakry"/>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="col-lg-12">Age</label>
                                    <div class="col-lg-12">
                                        <select id="age" name="tranche_age" class="form-control">
                                            <option value="">...</option>
                                            <option value="Moins de 18 ans">Moins de 18 ans</option>
                                            <option value="18 - 24">18 - 24</option>
                                            <option value="25 - 34">25 - 34</option>
                                            <option value="35 - 44">35 - 44</option>
                                            <option value="45 - 65">45 - 65</option>
                                            <option value="Plus de 65 ans">Plus de 65 ans</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="col-lg-12">Statut</label>
                                    <div class="col-lg-12">
                                        <select id="status" name="statut" class="form-control">
                                            <option value="">...</option>
                                            <option value="Chaumeur">Chaumeur</option>
                                            <option value="Employé">Employé</option>
                                            <option value="Agent de maîtrise">Agent de maîtrise</option>
                                            <option value="Cadre">Cadre</option>
                                            <option value="Cadre dirigeant">Cadre dirigeant</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="col-lg-12">Formation</label>
                                    <div class="col-lg-12">
                                        <select id="levelEducation" name="niveau_formation" class="form-control">
                                            <option value="">...</option>
                                            <option value="CAP">CAP</option>
                                            <option value="BEP">BEP</option>
                                            <option value="BAC">BAC</option>
                                            <option value="BAC+1">BAC+1</option>
                                            <option value="BAC+2">BAC+2</option>
                                            <option value="BAC+3">BAC+3</option>
                                            <option value="BAC+4">BAC+4</option>
                                            <option value="BAC+5">BAC+5</option>
                                            <option value="&gt; BAC+5">&gt; BAC+5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="col-lg-12">Langue</label>
                                    <div class="col-lg-12">
                                        <select id="langue" name="langue" class="form-control">
                                            <option value="">...</option>
                                            <option value="Anglais">Anglais</option>
                                            <option value="Allemand">Allemand</option>
                                            <option value="Arabe">Arabe</option>
                                            <option value="Chinois">Chinois</option>
                                            <option value="Français">Français</option>
                                            <option value="Russe">Russe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>


        <p>
                <div class="btn-group" data-toggle="buttons-radio">
                    <button type="button" class="btn selectionCandidat" title="Selectionner tous les candidats"><i class="icon icon-ok"></i></button>
                    <button type="button" class="btn deselectionCandidat" title="Retirer tous les candidats"><i class="icon-off"></i></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn" id="saveCandidats" title="Enregistrer les candidats selectionnés"><i class="icon-hdd"></i></button>
                    <button type="button" class="btn" id="unsaveCandidats" title="Retirer ces candidats enregister"><i class="icon-trash"></i></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn" id="listCandidat"  title="Afficher les candidats enregistrés"><i class="icon-list"></i></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn" id="sendMessageToCandidat" title="Envoyer un message aux candidats"><i class="icon-comment"></i></button>
                </div>
        </p>

        <div class="candidatures">
           <!-- <p class="add" style=""><a href="<?php //echo Uri::base(false) . 'recruteur/publierOffre'     ?>">Publier une nouvelle offre d'emploi</a></p>-->

            <table class="table table-responsive table-condensed table-stripped toutsec">
                <?php foreach ($canditats as $cv) : ?>
                    <tr class="tout <?php echo Model_Candidat::isSaved($cv->id, $offre->id) ? 'selected' : ''; ?>" <?php echo Model_Candidat::isSaved($cv->id, $offre->id) ? 'style="background-color:#ccc;"' : ''; ?> id="<?php echo $cv->ajout ?>" title="<?php echo $cv->id ?>">
                        <td>
                            <button type="button" class="btn btn-xs select_deselect <?php echo Model_Candidat::isSaved($cv->id, $offre->id) ? 'active' : ''; ?>" title="Selectionner|Retirer <?php echo stripslashes($cv->nom . ' ' . $cv->prenom) ?>"><i class="icon-ok"></i></button>
                        </td>
                        <td style="width: 110px;">
                            <a target="_blank" href="<?php echo Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) ?>">
                                <img style="width: 100px;" src="<?php echo Uri::base(false) . 'assets/upload/photo/' . $cv->photo ?>" />
                            </a>
                        </td>
                        <td>
                            <h5>
                                <a  style="text-transform: uppercase; color: green; font-weight: normal; font-size: 15px;" target="_blank" href="<?php echo Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) ?>">
                                    <?php echo stripslashes($cv->nom . ' ' . $cv->prenom) ?>
                                </a>
                            </h5>
                            <p> <?php echo $cv->niveau_formation ?> | <?php echo $cv->tranche_age ?> | <?php echo $cv->premiere_langue . '-' . $cv->deuxieme_langue ?> | <?php echo stripslashes($cv->ville) ?> </p>
                            <?php echo Str::truncate(stripslashes(nl2br($cv->experience)), 150) ?>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium ad cupiditate dolorum eligendi fuga perspiciatis ratione recusandae voluptas. Animi aperiam ex explicabo impedit in ipsam magnam mollitia similique voluptates.</p>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div style="display:none;width: 50px;margin: auto;" id="ajaxImgFiltre"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
        </div>
    </div>
    <?php echo render('inc/espace') ?>
    
</div>
<?php echo render('inc/lastJobs') ?>
<div class="modal fade" id="modal_new" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Envoi Message</h4>
            </div>
            <div class="modal-body">
                <p id="messageSuccess"></p>
                <form>
                    <div class="form-group">
                        <label class="control-label" for="sujet">Sujet:</label>
                        <input type="text" id="sujet" class="form-control" placeholder="sujet" value="Offre d'emploi: <?php echo $offre->titre ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="sujet">Message:</label>
                        <textarea id="message" class="form-control" style="height: 250px;">Bonjour,</textarea>
                    </div>
                    <hr>
                    <div class="form-group right">
                        <button id="send" class="btn btn-success" >Envoyer</button>
                        <button id="fermer" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo Asset::js(array('recruteur.js','notification.js')); ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('.filtre').hide();
        $('.display_option_filtre').on('click',function(){
            $('.filtre').fadeToggle();
        });

        $('.select_deselect').click(function(){
            if($(this).parents('tr').hasClass('selected'))
            {
                $(this).parents('tr').removeClass('selected');
                $(this).parents('tr').css('backgroundColor','');
            }
            else{
                $(this).parents('tr').addClass('selected');
                $(this).parents('tr').css('backgroundColor','#ccc');
            }

        });

        $('.selectionCandidat').click(function(){
            $('table.toutsec .tout').addClass('selected');
            $('table.toutsec .tout').css('backgroundColor','#ccc');
        });

        $('.deselectionCandidat').click(function(){
            $('table.toutsec .tout').removeClass('selected');
            $('table.toutsec .tout').css('backgroundColor','');
        });

        $('#sendMessageToCandidat').click(function(){
            $('#messageSuccess').html('');
        });
    });
</script>