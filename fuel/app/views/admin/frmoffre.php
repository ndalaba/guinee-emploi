<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-pencil"></span> DEPOSER VOTRE OFFRE D'EMPLOI</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form id="formKJ" class="form-horizontal" method="post" action="<?php echo Uri::create('admin/setting/saveOffre') ?>" style="padding: 2px 20px 20px 20px;">
                    <?php if (isset($offre)): ?>
                        <input type="hidden" name="id" value="<?php echo $offre->id ?>" />
                    <?php endif; ?>
                    <fieldset>                       
                        <div class="form-group">
                            <label class="control-label" for="alertName">Titre de l'offre *&nbsp;:</label>
                            <div class="controls">
                                <input type="text" value="<?php if (isset($offre->titre)) echo $offre->titre ?>" name="titre" id="titre" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="country">Pays*&nbsp;:</label>
                            <div class="controls">
                                <?php echo render('inc/pays') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="city">Ville*&nbsp;: </label>
                            <div class="controls">
                                <input id="idville" name="ville" value="<?php if (isset($offre->titre)) echo $offre->ville ?>" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Toutes les recruteurs</label>                                 
                            <div class="controls">
                                <select name="recruteur_id" id="recruteur" class="form-control" style="width: 61%;float: left; margin-right: 50px;">
                                    <option value="">--Toutes les recruteurs--</option>
                                    <?php foreach ($recruteurs as $recru): ?>
                                        <option value="<?php echo $recru->id ?>"><?php echo $recru->nom ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <button type="button" class="btn btn-sm btn-success new_rec">Nouveau Recruteur</button>
                            </div>
                        </div>
                        <div  class="form-group recruteur" style="display: none;">
                            <div class="controls">
                                <label class="control-label" for="idrecruteur">Nom du Recruteur*&nbsp;: </label>
                                <input id="idrecruteur" class="last" name="new_recruteur" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="control-label">Secteur d'activité</label> 
                            <div class="controls">
                                <select name="secteur_id" id="secteur" class="form-control"> 
                                    <option value="">--Tous les secteurs d'activités--</option>
                                    <?php foreach ($catsecteurs as $catsecteur): ?>
                                        <optgroup label="<?php echo $catsecteur->categorie ?>">
                                            <?php foreach ($catsecteur->secteurs as $secteur): ?>
                                                <option value="<?php echo $secteur->id ?>" <?php if (isset($offre->secteur_id)) echo ($offre->secteur_id == $secteur->id) ? "selected" : "" ?>><?php echo $secteur->secteur ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="contrats">Type de contrat&nbsp;:</label>
                            <span class="optgroup">
                                <input type="radio" id="type_contratCDI" value="CDI"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "CDI") ? ("checked=''") : ("") ?>  name="type_contrat" class="cocher" checked>
                                <label for="type_contrat1" class="radioLabel">CDI</label>
                                <input type="radio" id="type_contratCDD" value="CDD"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "CDD") ? ("checked=''") : ("") ?> name="type_contrat" class="cocher">
                                <label for="type_contrat2" class="radioLabel">CDD</label>
                                <input type="radio" id="type_contratStage" value="Stage" <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "Stage") ? ("checked=''") : ("") ?>  name="type_contrat" class="cocher">
                                <label for="type_contrat3" class="radioLabel">Stage</label>
                                <input type="radio" id="type_contratIntérim" value="Interim"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "Interim") ? ("checked=''") : ("") ?> name="type_contrat" class="cocher">
                                <label for="type_contrat4" class="radioLabel">Intérim</label>
                                <input type="radio" id="type_contratAlternance" value="Alternance"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "Alternance") ? ("checked=''") : ("") ?> name="type_contrat" class="cocher">
                                <label for="type_contrat7" class="radioLabel">Alternance</label>
                                <input type="radio" id="type_contratFreelance" value="Freelance"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "Freelance") ? ("checked=''") : ("") ?> name="type_contrat" class="cocher">
                                <label for="type_contrat8" class="radioLabel">Freelance</label>
                            </span>
                        </div>
                        <div class="form-group">
                            <label  class="control-label" for="selectedFunctionIds">Fonction(s) :</label>
                            <div class="controls">
                                <select name="fonction_id" id="fonction" class="form-control">
                                    <option value="27">----</option>
                                    <?php foreach ($fonctions as $fonction): ?>
                                        <option value="<?php echo $fonction->id ?>" <?php if (isset($offre->fonction)) echo ($offre->fonction_id == $fonction->id) ? "selected" : "" ?>><?php echo stripslashes($fonction->fonction) ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="experience">Expérience&nbsp;:</label>
                            <input type="number" required="" id="experience" value="<?php echo isset($offre->experience) ? $offre->experience : "0" ?>" name="experience" class="form-control"/>                                 
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description de l'offre </label>
                            <div class="controls">
                                <textarea class="form-control" name="description" style="margin-top: 0px; margin-bottom: 0px; height: 418px;"><?php if (isset($offre->description)) echo $offre->description ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="alert">Spécialites recherchées*&nbsp;:</label>
                            <div class="controls">
                                <input  type="text" id="alert" value="<?php if (isset($offre->spe_recherche)) echo $offre->spe_recherche ?>" name="spe_recherche" id="titre" class="form-control"/>
                            </div>

                            <p class="help-block" style="font-size: 11px;color: #666; margin-left: 140px;">(Ex:java,php,oracle,mecanique,medecine,chauffeur.....) </p>
                        </div>
                        <div class="form-group">
                            <label for="alertName">Date début *&nbsp;:</label>
                            <div class="controls">
                                <input type="date" value="<?php if (isset($offre->date_debut)) echo $offre->date_debut ?>" maxlength="64" name="date_debut" id="date_debut" class="datepicker form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alertName">Date fin *&nbsp;:</label>
                            <div class="controls">
                                <input type="date" value="<?php if (isset($offre->date_fin)) echo $offre->date_fin ?>" maxlength="64" name="date_fin" id="date_fin" class="datepicker form-control"/>
                            </div>
                        </div>

                        <div  class="form-group">
                            <h3 class="form_title">Offre à la une ? </h3>
                            <p  style="font-size: 12px;margin-left: 58px;">                          
                                <input type="radio" value="1" name="offre_a_la_une" <?php if (isset($offre->offre_a_la_une) and $offre->offre_a_la_une == 1) echo 'checked'; ?> />
                                Oui   (Une fois que vous cocher ce botton,l'offre s'affiche comme offre à la une  sur le site)
                            </p>
                            <p  style="font-size: 12px;margin-left: 58px;">                       
                                <input type="radio" value="0" name="offre_a_la_une" <?php if (isset($offre->offre_a_la_une) and $offre->offre_a_la_une == 0) echo 'checked'; ?> />
                                Non
                            </p>
                        </div>
                        <div class="form-group">
                            <h3 class="form_title">Voulez-vous publier directement cette offre sur le site ?  </h3>
                            <p style="font-size: 12px;margin-left: 58px;"  >                            
                                <input type="radio" value="1" name="publier" <?php if (isset($offre->pubdiver) and $offre->pubdiver == 1) echo 'checked'; ?> />
                                Oui   (Une fois que vous cocher ce botton,votre offre s'affiche directement sur le site)
                            </p>
                            <p  style="font-size: 12px;margin-left: 58px;">                            
                                <input type="radio" value="0" name="publier" <?php if (isset($offre->pubdiver) and $offre->pubdiver == 0) echo 'checked'; ?> />
                                Non
                            </p>
                        </div>
                    </fieldset>
                    <p class="formbtn">
                        <button value="Valider" type="submit" class="btn btn-primary" style="float: right;margin-right: 87px;">
                            <span style="color: white;">Valider</span>
                        </button>
                        <span id="loader" style="display: none;"> <i class="icon-spinner"></i> Enregistrement en cours...</span>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_message">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Alert</h4>
            </div>
            <div class="modal-body">
                <div id="msg_alert"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.new_rec').click(function () {
            $('.recruteur').show();
        });
        $('#loader').hide();
        $('#formKJ').submit(function (e) {
            $('#loader').fadeIn();
            var url = $(this).attr('action');
            var data = $(this).seriadivze();
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'html',
                data: data,
                success: function (resultat) {
                    $('#modal_message').modal();
                    $('#modal_message #msg_alert').html(resultat);
                    $('#loader').hide();
                }
            });
            e.preventDefault();
        });
    });
</script>


<?php echo Fuel\Core\Asset::js('recruteur.js') ?>