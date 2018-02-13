
<div class="row espace_int">

    <div class="col-lg-12 bas">
        <div class="row left">
            <?php if (isset($recherche)): ?>
                <p class="breadcrumb"><a href="">Accueil &raquo;</a> Résultats de votre recherche <span style="color:#688e0a ; font-size: 14px;font-weight: bolder;"><?php echo stripslashes($recherche) ?></span> <span class="nobre" style="font-size: 14px;font-weight: bolder;"><?php echo $count ?> Appels d'Offres</span></p>
            <?php else: ?>
                <p class="breadcrumb"><a href="">Accueil &raquo;</a> Les <span class="nobre" style="font-size: 14px;font-weight: bolder;"><?php echo $count ?> </span> derniers Appels d'Offres</p>
            <?php endif; ?>
            <div class="col-lg-12 filtre">
                <form id="frmfiltreOffre" class="form-horizontal">
                    <input type="hidden" name="recruteur_id" value="<?php echo \Fuel\Core\Uri::segment(3); ?>">
                    <input type="hidden" id="action" value="-1" action="offre" action="offre"/>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Fonction</label>
                            <div class="col-lg-12">
                                <select  id="fonction" name="fonction_id"  class="form-control">
                                    <option value="">--Toutes les fonctions--</option>
                                    <?php
                                    if (isset($fonctions)) {
                                        foreach ($fonctions as $fonction):
                                            ?>
                                            <option  value="<?php echo $fonction->id ?>"><?php echo ($fonction->fonction) ?></option>
                                        <?php
                                        endforeach;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Contrat</label>
                            <div class="col-lg-12">
                                <select name="type_contrat" id="type_contrat"  class="form-control">
                                    <option value="">--Tous les type de contrats--</option>
                                    <option value="CDI">CDI</option>
                                    <option value="CDD">CDD</option>
                                    <option value="Freelance">Freelance</option>
                                    <option value="Stage">Stage</option>
                                    <option value="Alternance">Alternance</option>
                                    <option value="Interim">Intérim</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Secteur d'activité</label>
                            <div class="col-lg-12">
                                <select name="secteur_id" id="secteur" class="form-control">
                                    <option value="">--Tous les secteurs d'activités--</option>
                                    <?php foreach ($catsecteurs as $catsecteur): ?>
                                        <optgroup label="<?php echo $catsecteur->categorie ?>">
                                            <?php foreach ($catsecteur->secteurs as $secteur): ?>
                                                <option value="<?php echo $secteur->id ?>"><?php echo $secteur->secteur ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Période</label>
                            <div class="col-lg-12">
                                <select name="date" id="date"  class="form-control">
                                    <option value="0">--Indifférent --</option>
                                    <option value="1">Aujourd'hui</option>
                                    <option value="2">Moins de 7 jours</option>
                                    <option value="3">Moins de 14 jours</option>
                                    <option value="4">Moins de 21 jours</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Ville</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="ville" style="margin-bottom: 10px;"  id="ville" value="<?php echo isset($ville) ? $ville : "" ?>" placeholder="Conakry"/>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div style="display:none;width: 50px;margin: auto;" id="ajaxImgFiltre"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
            <div class="col-lg-12 listofres">
                <?php
                if (isset($offres)): foreach ($offres as $offre):
                    $recruteur = Model_Recruteur::find($offre->recruteur_id);
                    ?>
                    <div class="row tout" id="<?php echo $offre->id ?>">
                        <div class="col-lg-12 ">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="title"><a  href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id . '/' . Inflector::friendly_title($offre->titre) ?>"><?php echo $offre->titre ?></a></h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="soustitle"><a href="#" class="first"><?php echo (Helper::formatDate($offre->date_fin) == '00/00/0000') ? '-' : Helper::formatDate($offre->date_fin) ?></a><a href="#" ><?php echo $offre->type_contrat ?></a><a href="#" class="last"><?php echo stripslashes($offre->ville) ?></a></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class=" text"><a  href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id ?>"><?php echo Str::truncate($offre->description, 200) ?></a></p>
                                </div>
                            </div>

                            <?php if (isset($recruteur->nom) AND $recruteur->nom != ""): ?>

                                <div class="row ">
                                    <div class="col-lg-9">
                                        <p class="entreprise">&raquo; <a href="<?php echo Uri::base(false) . 'offre/recruteur/' . $recruteur->id  . '/' . Inflector::friendly_title($recruteur->nom)  ?>">Voir toutes les offres proposées par <?php echo $recruteur->nom;  ?></a></p>
                                    </div>
                                    <div class="col-lg-2">
                                        <a  href="<?php  echo Uri::base(false) . 'recruteur/detail/' . $recruteur->id . '/' . Inflector::friendly_title($recruteur->nom)  ?>">
                                            <img src="<?php echo Uri::base(false) . 'assets/upload/logo/' . $recruteur->logo  ?>" class="img-responsive"  />
                                        </a>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="entreprise">&raquo; <a href="<?php  echo Uri::base(false) . 'recruteur/detail/' . $recruteur->id . '/' . Inflector::friendly_title($recruteur->nom)  ?>">Plus d'informations sur <?php echo $recruteur->nom;  ?> </a></p>
                                    </div>
                                </div>
                            <?php  endif; ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class=" voir">
                                        <a href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id . '/' . \Fuel\Core\Inflector::friendly_title($offre->titre) ?>">Voir l'offre</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                endif;
                ?>
            </div>
            <div style="display:none;width: 50px;margin: auto;" id="ajaxImg"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
        </div>

    </div>
</div>

<?php echo Fuel\Core\Asset::js('offre.js'); ?>