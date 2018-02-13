<div class="row">
    <div class="col-lg-12 espace logged_recruter profil">

        <?php echo render('recruteur/recruteur_header'); ?>

        <ul class="errors">
            <?php
            if (isset($errors)):
                foreach ($errors as $cle => $val):
                    echo '<li>' . $val . '</li>';
                endforeach;
            endif;
            ?>
        </ul>

        <form class="form-horizontal" role="form" method="post" action="<?php echo Uri::base(false) . 'recruteur/add' ?>" onsubmit="return isValid();">
            <h2>INFORMATIONS DE L'ENTREPRISE </h2>
            <fieldset class="highlightCreationCompte">
                <!-- START Data only available when modifying candidate -->
                <input type="hidden"
                       value="<?php if (isset($recruteur->date_enreg) and ($recruteur->date_enreg != '0000-00-00'))
                           echo $recruteur->date_enreg;
                       else
                           echo date("Y-m-d");
                       ?>" name="date_enreg"/>
                <input type="hidden" name="id" value="<?php echo $recruteur->id ?>"/>
                <input type="hidden" name="pwd" value="<?php echo $recruteur->pwd ?>"/>
                <input type="hidden" name="logo" value="<?php echo $recruteur->logo ?>"/>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="lastName">Nom de l'entreprise *&nbsp;:</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" value="<?php echo $recruteur->nom ?>" id="lastName" name="nom"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="activity">Secteur d'activite *&nbsp;:</label>
                    <div class="col-lg-5">
                        <select class="form-control" name="secteur_id" id="secteur_id">
                            <?php foreach ($secteurs as $catsecteur): ?>
                                <optgroup label="<?php echo $catsecteur->categorie ?>">
                                    <?php foreach ($catsecteur->secteurs as $secteur): ?>
                                        <option
                                            value="<?php echo $secteur->id ?>" <?php echo ($secteur->id == $recruteur->secteur_id) ? "selected" : "" ?>><?php echo $secteur->secteur ?></option>
                                    <?php endforeach; ?>
                                </optgroup>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="activity">Statut *&nbsp;:</label>
                    <div class="col-lg-5">
                        <select class="form-control" id="activity" name="statut">
                            <option <?php echo ($recruteur->statut == "") ? ("selected=''") : ("") ?> value="">...
                            </option>
                            <option <?php echo ($recruteur->statut == "SA") ? ("selected=''") : ("") ?> value="SA">SA
                            </option>
                            <option <?php echo ($recruteur->statut == "SARL") ? ("selected=''") : ("") ?>value="SARL">
                                SARL
                            </option>
                            <option
                                <?php echo ($recruteur->statut == "Entreprise individuelle") ? ("selected=''") : ("") ?>value="Entreprise individuelle">
                                Entreprise individuelle
                            </option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="address">Adresse&nbsp;:</label>
                    <div class="col-lg-5">
                        <input class="form-control" value="<?php echo $recruteur->adresse ?>" maxlength="256" id="address" name="adresse">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-lg-4 text-right" for="country">Pays*&nbsp;:</label>
                    <div class="col-lg-5">
                        <?php echo render('inc/pays'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="city">Ville*&nbsp;: </label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" class="last" name="ville" id="idville" value="<?php echo $recruteur->ville ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="codePhoneNumber">Téléphone&nbsp;:</label>
                    <div class="col-lg-5">
                        <input class="form-control" value="<?php echo $recruteur->phone ?>" maxlength="15" name="phone">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="siteweb">Site web&nbsp;:</label>
                    <div class="col-lg-5">
                        <input class="form-control" value="<?php echo $recruteur->site_web ?>" name="site_web" id="siteweb">
                        <p style="font-family: Arial,Helvetica,sans-serif;font-size: 11px;text-align: center;color: #666;">
                            Exemple: http://www.monsite.com</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right">Description de l'entreprise </label>
                    <div class="col-lg-7">
                        <textarea class="form-control" name="description" class="description" style="height: 200px;"><?php echo $recruteur->description ?></textarea>
                    </div>
                </div>
            </fieldset>

            <h2>INFORMATIONS DU CONTACT</h2>
            <fieldset class="highlightCreationCompte">
                <div class="form-group">
                    <label class="col-lg-4 text-right">Etat Civil :</label>
                    <div class="col-lg-1">
                        <div class="radio">
                            <label>
                                <input type="radio" class="radio" id="genderIdsElement1"
                                       value="M."  <?php echo ($recruteur->etat_civil == "M.") ? ("checked=''") : ("") ?>
                                       name="etat_civil" checked/>
                                M.
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-1">
                        <div class="radio">
                            <label>
                                <input type="radio" class="radio" id="genderIdsElement2"
                                       value="Mme." <?php echo ($recruteur->etat_civil == "Mme.") ? ("checked=''") : ("") ?>
                                       name="etat_civil"/>
                                Mme.
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-1">
                        <div class="radio">
                            <label>
                                <input type="radio" class="radio" id="genderIdsElement3" value="Melle."
                                       <?php echo ($recruteur->etat_civil == "Melle.") ? ("checked=''") : ("") ?>name="etat_civil"/>
                                Mlle.
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="lastName">Nom*&nbsp;:</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" value="<?php echo $recruteur->nom_contact ?>"
                               id="contactName"
                               name="nom_contact" maxlength="32">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="firstName">Prénom*&nbsp;:</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" value="<?php echo $recruteur->prenom_contact ?>"
                               id="contactPrenom"
                               name="prenom_contact" maxlength="32">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-lg-4 text-right" for="phone">Téléphone*&nbsp;:</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" value="<?php echo $recruteur->phone_contact ?>"
                               id="contactPhone"
                               name="phone_contact" maxlength="32">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 text-right" for="function">Fonction*&nbsp;:</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" value="<?php echo $recruteur->fonction_contact ?>"
                               id="contactFonction"
                               name="fonction_contact" maxlength="32">
                    </div>
                </div>
            </fieldset>
            <p class="btnValiderP">
                <button value="Valider et continuer" type="submit" class="btnType1 bgType1">
                    Valider
                </button>
            </p>
        </form>
</div>
</div>
