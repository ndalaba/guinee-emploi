<div class="row">
<div class="col-lg-12 espace logged_recruter profil">

<?php echo render('recruteur/recruteur_header'); ?>

<?php
//Affichage individuel des erreurs du formulaire
if (isset($errors)):
    ?>
    <div class="row">
        <div class="col-lg-12 alert alert-danger">
            <?php echo current($errors); ?>
        </div>
    </div>
<?php endif; ?>

<?php
//Affichage des erreurs denvoi de fichier
if (isset($file_errors)):
    ?>
    <div class="row">
        <div class=" col-lg-12 alert alert-danger">
            <?php foreach ($file_errors as $file): ?>
                echo '<p>' . ($file['errors'][0]['message']) . '</p>';
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<h2 class="form_title">DEPOSER VOTRE OFFRE D'EMPLOI</h2>

<div id="alert">
<!-- fil d'Ariane inscription -->
<form id="formKJ" class="formKJ formCreateAlert form-horizontal" method="post"
      action="<?php echo Uri::create('recruteur/saveOffre') ?>"
      enctype="multipart/form-data" title="<?php echo Uri::create('recruteur/addOffre') ?>">

<div class="form-group">
    <input class="form-control" type="hidden" value="<?php if (isset($offre->titre)) echo $offre->id ?>" name="id"/>
    <input class="form-control" type="hidden"
           value="<?php if (isset($offre->date_enreg) and ($offre->date_enreg != '0000-00-00'))
               echo $offre->date_enreg;
           else
               echo date("Y-m-d");
           ?>"
           name="date_enreg"/>
    <input class="form-control" type="hidden" value="<?php if (isset($offre->titre)) echo $offre->fichier ?>"
           name="fichier"/>
</div>

<fieldset class="highlightCreationCompte">
    <div class="form-group">
        <label class="col-lg-3" for="alertName">Titre de l'offre *&nbsp;:</label>

        <div class="col-lg-5">
            <input class="form-control" type="text" value="<?php if (isset($offre->titre)) echo $offre->titre ?>"
                   name="titre" id="titre" style="width: 400px;"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3" for="country">Pays*&nbsp;:</label>

        <div class="col-lg-5">
            <?php echo render('inc/pays') ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3" for="city">Ville*&nbsp;: </label>

        <div class="col-lg-5">
            <input style="width: 236px;" class="form-control" id="idville" class="last" name="ville"
                   value="<?php if (isset($offre->titre)) echo $offre->ville ?>"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3" class="secteur">Secteur d'activité</label>

        <div class="col-lg-5">
            <select style="width: 236px;" class="form-control" name="secteur_id" id="secteur">
                <option value="">--Tous les secteurs d'activités--</option>
                <?php foreach ($catsecteurs as $catsecteur): ?>
                    <optgroup label="<?php echo $catsecteur->categorie ?>">
                        <?php foreach ($catsecteur->secteurs as $secteur): ?>
                            <option
                                value="<?php echo $secteur->id ?>" <?php echo (Session::get('secteur') == $secteur->id) ? 'selected' : '' ?>><?php echo $secteur->secteur ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3" for="contrats">Type de contrat&nbsp;:</label>

        <div class="col-lg-5">
            <div class="row">

                <div class="col-lg-4">
                    <div class="radio">
                        <label>
                            <input type="radio" id="type_contratCDI"
                                   value="CDI"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "CDI") ? ("checked=''") : ("") ?>
                                   name="type_contrat" class="cocher" checked> CDI
                        </label>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="radio">
                        <label>
                            <input type="radio" id="type_contratCDD"
                                   value="CDD"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "CDD") ? ("checked=''") : ("") ?>
                                   name="type_contrat" class="cocher"> CDD
                        </label>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="radio">
                        <label>
                            <input type="radio" id="type_contratStage"
                                   value="Stage" <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "Stage") ? ("checked=''") : ("") ?>
                                   name="type_contrat" class="cocher"> Stage
                        </label>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="radio">
                        <label>
                            <input type="radio" id="type_contratIntérim"
                                   value="Interim"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "Interim") ? ("checked=''") : ("") ?>
                                   name="type_contrat" class="cocher"> Intérim
                        </label>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="radio">
                        <label>
                            <input type="radio" id="type_contratAlternance"
                                   value="Alternance"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "Alternance") ? ("checked=''") : ("") ?>
                                   name="type_contrat" class="cocher"> Alternance
                        </label>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="radio">
                        <label>
                            <input type="radio" id="type_contratFreelance"
                                   value="Freelance"  <?php if (isset($offre->type_contrat)) echo ($offre->type_contrat == "Freelance") ? ("checked=''") : ("") ?>
                                   name="type_contrat" class="cocher"> Freelance
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3" class="haute" for="selectedFunctionIds">Fonction(s) :</label>

        <div class="col-lg-5">
            <select style="width: 100%;" class="form-control" name="fonction_id" id="fonction">
                <option value="27">----</option>
                <?php
                if (isset($fonctions)) {
                    foreach ($fonctions as $fonction):
                        ?>
                        <option
                            value="<?php echo $fonction->id ?>"  <?php if (isset($offre)) echo ($offre->fonction_id == $fonction->id) ? ("selected") : ("") ?> ><?php echo utf8_decode($fonction->fonction) ?></option>
                    <?php
                    endforeach;
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3" class="haute" for="experience">Expérience&nbsp;:</label>

        <div class="col-lg-5">
            <input class="form-control" type="number" id="experience"
                   value="<?php echo isset($offre->experience) ? $offre->experience : "0" ?>"
                   name="experience"/>

        </div>
    </div>

    <div class="form-group">
        <label>Description de l'offre </label>
        <textarea class="form-control" style="height: 343px; width: 100%;"
                  name="description"><?php if (isset($offre->description)) echo $offre->description ?></textarea>
    </div>

    <div class="form-group">
        <label class="col-lg-3" for="alert">Spécialites recherchées*&nbsp;:</label>

        <div class="col-lg-5">
            <input class="form-control" type="text" id="alert"
                   value="<?php if (isset($offre->spe_recherche)) echo $offre->spe_recherche ?>"
                   name="spe_recherche" id="titre" style="width: 400px;"/>

            <p class="help-block" style="font-size: 11px;color: #666;">(Ex:java,php,oracle,mecanique,medecine,chauffeur.....) </p>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3" for="alertName">Date début *&nbsp;:</label>

        <div class="col-lg-5">
            <input class="form-control" style="width: 120px;" type="date"
                <?php if (isset($offre->publier) and ($offre->publier != 0)) echo 'readonly'; ?>
                   value="<?php if (isset($offre->date_debut)) echo $offre->date_debut ?>"
                   maxlength="64" name="date_debut" id="date_debut"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3" for="alertName">Date fin *&nbsp;:</label>

        <div class="col-lg-5">
            <input class="form-control" style="width: 120px;" type="date" value="<?php if (isset($offre->date_fin)) echo $offre->date_fin ?>"
                   maxlength="64" name="date_fin" id="date_fin"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3">Fichier joint </label>

        <div class="col-lg-5">
            <input class="form-control" type="file" name="file1"/>
        </div>
    </div>

    <div class="form-group">
        <h2 class="form_title">Voulez-vous publier directement cette offre sur le site ? </h2>

        <p>
            <label>
                <input type="radio" value="1" name="publier" <?php if (isset($offre->publier) and $offre->publier == 1) echo 'checked'; ?> />
                Oui (Une fois que vous cocher ce botton,votre offre s'affiche directement sur le site)
            </label>
        </p>

        <p>
            <label>
                <input type="radio" value="0" name="publier" <?php if (isset($offre->publier) and $offre->publier == 0) echo 'checked'; ?> />
                Non! Ne pas publier pour le moment
            </label>
        </p>
    </div>

</fieldset>
<p class="formbtn">

    <button value="Valider" type="btn" class="btnType1 bgType1" id="btn-valid">
        <span style="color: white;">Valider</span>
    </button>
    <span id="loader"> <i class="icon-spinner"></i> Enregistrement en cours...</span>
</p>
</form>
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
                <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $('#loader').hide();
        $('#btn-valid').on('click', function () {
            $('#loader').fadeIn();
            var url = $('#formKJ').attr('title');
            var data = $('#formKJ').serialize();
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'html',
                data: data,
                success: function (resultat) {
                    if (resultat === "ok")
                        $('#formKJ').submit();
                    else {
                        $('#modal_message').modal();
                        $('#modal_message #msg_alert').html(resultat);
                        $('#loader').hide();
                    }
                }
            });
            return false;
        });
    });
</script>


<?php echo Fuel\Core\Asset::js('recruteur.js') ?>
