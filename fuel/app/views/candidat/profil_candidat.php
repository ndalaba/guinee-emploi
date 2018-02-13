<div id="left" class="row espace_int">
    <div class="col-lg-12 espace_candidat">
        <?php echo render('candidat/candidat_header'); ?>
        <div class="row profil">
            <ul class="col-lg-12 errors divst-unstyled">
                <?php
                if (isset($errors)):
                    foreach ($errors as $cle => $val):
                        echo '<div>' . $val . '</div>';
                    endforeach;
                endif;
                ?></ul>
            <div class="col-lg-12">
            <form class="form-horizontal" method="post" action="<?php echo Uri::base(false) . 'candidat/add/' ?>" style="float:left" onsubmit="return isVadivd();">

                <input type="hidden" value="<?php
                if (isset($candidat->date_enreg) and ($candidat->date_enreg != '0000-00-00'))
                    echo $candidat->date_enreg;
                else
                    echo date("Y-m-d");
                ?>" name="date_enreg"/>
                <input type="hidden" name="cvdoc" value="<?php echo $candidat->cvdoc ?>"/>
                <input type="hidden" name="photo" value="<?php echo $candidat->photo ?>" />
                <!--<input type="hidden" name="pwd"  value="<?php //echo $candidat->pwd          ?>"/>-->
                <input type="hidden" name="id" value="<?php echo $candidat->id ?>"/>
                <h2 class="titrprof_candidat">DONNÉES PERSONNELLES </h2>
                <fieldset class="highdivghtCreationCompte">
                    <!-- START Data only available when modifying candidate -->
                    <div class="form-group">
                        <label class="col-lg-4 text-right">Etat Civil :</label>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" class="radio" id="genderIdsElement1"
                                           value="M."  <?php echo ($candidat->etat_civil == "M.") ? ("checked=''") : ("") ?>
                                           name="etat_civil" checked/>
                                    M.
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" class="radio" id="genderIdsElement2"
                                           value="Mme." <?php echo ($candidat->etat_civil == "Mme.") ? ("checked=''") : ("") ?>
                                           name="etat_civil"/>
                                    Mme.
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" class="radio" id="genderIdsElement3" value="Melle."
                                           <?php echo ($candidat->etat_civil == "Melle.") ? ("checked=''") : ("") ?>name="etat_civil"/>
                                    Mlle.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-lg-4 text-right">Nom*&nbsp;:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php echo $candidat->nom ?>" id="lastName" name="nom" maxlength="32"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstName" class="col-lg-4 text-right">Prénom*&nbsp;:</label>
                        <div class="col-lg-8">
                            <input class="form-control"  type="text" value="<?php echo $candidat->prenom ?>" id="firstName" name="prenom" maxlength="32">
                        </div>
                    </div>
                    <!-- END Data only available when modifying candidate -->
                    <div class="form-group">
                        <label for="age" class="col-lg-4 text-right">Tranche d'âge&nbsp;:</label>
                        <div class="col-lg-8">
                            <select id="age" name="tranche_age" class="form-control" >
                                <option value="0" <?php echo ($candidat->etat_civil == "0") ? ("selected") : ("") ?>>...</option>
                                <option value="Moins de 18 ans" <?php echo ($candidat->tranche_age == "Moins de 18 ans") ? ("selected") : ("") ?>>Moins de 18 ans</option>
                                <option value="18 - 24" <?php echo ($candidat->tranche_age == "18 - 24") ? ("selected") : ("") ?>>18 - 24</option>
                                <option <?php echo ($candidat->tranche_age == "25 - 34") ? ("selected") : ("") ?> value="25 - 34">25 - 34</option>
                                <option <?php echo ($candidat->tranche_age == "35 - 44") ? ("selected") : ("") ?>value="35 - 44">35 - 44</option>
                                <option <?php echo ($candidat->tranche_age == "45 - 65") ? ("selected") : ("") ?>value="45 - 65">45 - 65</option>
                                <option <?php echo ($candidat->tranche_age == "Plus de 65 ans") ? ("selected") : ("") ?>value="Plus de 65 ans">Plus de 65 ans</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-lg-4 text-right">Adresse&nbsp;:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text"  value="<?php echo $candidat->adresse ?>" maxlength="256" id="address" name="adresse">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country" class="col-lg-4 text-right">Pays*&nbsp;:</label>
                        <div class="col-lg-8">
                            <?php echo render('inc/pays') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-lg-4 text-right">Ville*&nbsp;: </label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control"  id="idville" class="last" name="ville" value="<?php echo stripslashes($candidat->ville) ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="intPhoneNumber">
                            <label for="codePhoneNumber" class="col-lg-4 text-right">Téléphone :</label>
                            <div class="col-lg-8">
                                <input class="form-control "  type="text" value="<?php echo $candidat->phone ?>" maxlength="15" name="phone">
                            </div>
                        </div>
                    </div>

                </fieldset>                            

                <h2 class="titrprof_candidat">SITUATION ACTUELLE</h2>                            
                <fieldset class="highdivghtCreationCompte">

                    <div class="form-group">
                        <label for="status" class="col-lg-4 text-right">Expérience*&nbsp;:</label>  
                        <div class="col-lg-8">
                            <input class="form-control" type="number" value="<?php echo $candidat->expe ?>" name="expe" id="expe"/>                                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-lg-4 text-right">Statut*&nbsp;:</label> 
                        <div class="col-lg-8">
                            <select id="status" name="statut" class="form-control">
                                <option value="<?php echo stripslashes($candidat->statut); ?>"><?php echo stripslashes($candidat->statut); ?></option>
                                <option value="Sans emploi">Sans emploi</option>
                                <option value="Etudiant">Etudiant</option>
                                <option value="En poste, en recherche active">En poste, en recherche active</option>
                                <option value="En poste, à l'écoute du marché">En poste, à l'écoute du marché</option>
                                <option value="Agent de maîtrise">Agent de maîtrise</option>
                                <option value="Cadre">Cadre</option>
                                <option value="Cadre dirigeant">Cadre dirigeant</option>
                            </select>   
                        </div>
                    </div>

                </fieldset>                                                        
                <h2 class="titrprof_candidat">PRECISEZ VOS COMPTETENCES</h2>
                <fieldset class="form-group">

                    <div class="col-lg-12">                                
                        <input class=" form-control"type="text" id="spe" value="<?php if (isset($candidat->speciadivte)) echo $candidat->speciadivte ?>"  name="speciadivte" id="spe" />
                        <p class="col-lg-12"style="display: block;font-family: Arial,Helvetica,sans-serif;font-size: 11px;color: #666;width: 100%; padding-left: 15px;">(Ex:programmation, administration, gestion, comptabidivté, communication, management,...) </p>
                    </div>

                </fieldset>
                <h2 class="titrprof_candidat">FORMATION</h2>
                <fieldset>

                    <div class="form-group">
                        <label for="levelEducation" class="col-lg-4 text-right">Niveau de formation*&nbsp;:</label>
                        <div class="col-lg-8">
                            <select id="levelEducation" class="form-control" name="niveau_formation">
                                <option <?php echo ($candidat->niveau_formation == "0") ? ("selected") : ("") ?>value="<?php echo stripslashes($candidat->niveau_formation); ?>"><?php echo stripslashes($candidat->niveau_formation); ?></option>
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
                    <div class="form-group">
                        <label for="firstLanguage" class="col-lg-4 text-right">Première langue&nbsp;:</label>
                        <div class="col-lg-8">
                            <select id="firstLanguage" class="form-control" name="premiere_langue">
                                <option value="<?php echo stripslashes($candidat->premiere_langue); ?>"><?php echo stripslashes($candidat->premiere_langue); ?></option>
                                <option value="Anglais">Anglais</option>
                                <option value="Allemand">Allemand</option>
                                <option value="Arabe">Arabe</option>
                                <option value="Chinois">Chinois</option>
                                <option value="Français">Français</option>
                                <option value="Russe">Russe</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="levelFirstLanguage" class="col-lg-4 text-right">Niveau de première langue&nbsp;:</label>
                        <div class="col-lg-8">
                            <select id="levelFirstLanguage" class="form-control" name="niveau_plangue">
                                <option value="<?php echo stripslashes($candidat->niveau_plangue); ?>"><?php echo stripslashes($candidat->niveau_plangue); ?></option>
                                <option value="Débutant">Débutant</option>
                                <option value="Moyen">Moyen</option>
                                <option value="Courant">Courant</option>
                                <option value="Bidivngue">Bidivngue</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="secondLanguage" class="col-lg-4 text-right">Deuxième langue&nbsp;:</label>
                        <div class="col-lg-8">
                            <select id="firstLanguage" class="form-control" name="deuxieme_langue">
                                <option value="<?php echo stripslashes($candidat->deuxieme_langue); ?>"><?php echo stripslashes($candidat->deuxieme_langue); ?></option>
                                <option value="Anglais">Anglais</option>
                                <option value="Allemand">Allemand</option>
                                <option value="Arabe">Arabe</option>
                                <option value="Chinois">Chinois</option>
                                <option value="Français">Français</option>
                                <option value="Russe">Russe</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="levelSecondLanguage" class="col-lg-4 text-right">Niveau deuxième langue&nbsp;:</label>
                        <div class="col-lg-8">
                            <select id="levelSecondLanguage" class="form-control" name="niveau_dlangue">
                                <option value="<?php echo stripslashes($candidat->niveau_dlangue); ?>"><?php echo stripslashes($candidat->niveau_dlangue); ?></option>
                                <option value="Débutant">Débutant</option>
                                <option value="Moyen">Moyen</option>
                                <option value="Courant">Courant</option>
                                <option value="Bidivngue">Bidivngue</option>
                            </select>
                        </div>
                    </div>

                </fieldset>
                <h2 class="titrprof_candidat">DITES EN PLUS SUR VOUS</h2>
                <fieldset class="highdivghtCreationCompte">

                    <div class="form-group"> 
                        <div class="col-lg-12">
                            <textarea   id="experience" name="experience" class="mceEditor form-control" rows="20" cols="100" tabindex="2"><?php echo $candidat->experience ?></textarea>
                        </div>
                    </div>

                </fieldset>
                <fieldset style="padding: 10px;" >
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="show" >
                                <input id="show" type="checkbox" name="show" <?php echo ($candidat->show == 1) ? ("checked=''") : ("") ?>/>
                                Afficher mon cv dans la cvthèque pour être directement accessible par les récruteurs
                            </label>
                        </div>
                    </div>
                </fieldset>
                <fieldset >
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="alert" >
                                <input id="alert" type="checkbox"  name="alert" <?php echo ($candidat->alert == 1) ? ("checked=''") : ("") ?>/>
                                Autoriser le site à vous envoyer des Alertjob
                            </label>
                        </div>
                    </div>
                </fieldset>
                <p class="btnVadivderP row" style="text-adivgn: center">
                    <button value="Vadivder et continuer" type="submit" class="btnType1 bgType1">
                        Valider
                    </button>
                </p>
            </form>
          </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-12"id="espace">
        <?php echo render('inc/espace') ?>
    </div>
</div>


