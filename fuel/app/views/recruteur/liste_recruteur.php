
<div class="row espace_int">

    <div class="col-lg-12 bas">
        <div class="row left">
            <p class="breadcrumb"><a href="">Accueil &raquo;</a> Les <span class="nobre" style="font-size: 14px;font-weight: bolder;"><?php echo $count ?> </span> dernières entreprises</p>
            <div class="col-lg-12 filtre">
                <form id="frmfiltreOffre" class="form-horizontal">
                    
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
                            <label class="col-lg-12">Recruteur</label>    
                            <div class="col-lg-12">
                                <select name="recruteur_id" id="recruteur"  class="form-control">
                                    <option value="">--Toutes les recruteurs--</option>
                                    <?php foreach ($entreprises as $recru): ?>
                                        <option value="<?php echo $recru->id ?>"><?php echo $recru->nom ?></option>
                                    <?php endforeach; ?>
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
                if (isset($recruteurs)): foreach ($recruteurs as $entreprise): ?>
                        <div class="row tout" id="<?php echo $entreprise->id ?>">
                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="title"><a  href="<?php echo Uri::base(false) . 'recruteur/detail/' . $entreprise->id . '/' . Inflector::friendly_title($entreprise->nom) ?>"><?php echo $entreprise->nom ?></a></h5>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class=" text"><a  href="<?php echo Uri::base(false) . 'recruteur/detail/' . $entreprise->id ?>"><?php echo Str::truncate($entreprise->description, 200) ?></a></p>                                       
                                    </div>
                                </div>

                                    <div class="row ">
                                        <div class="col-lg-9">
                                            <p class="entreprise">&raquo; <a href="<?php echo Uri::base(false) . 'offre/recruteur/' . $entreprise->id . '/' . Inflector::friendly_title($entreprise->nom) ?>">Voir toutes les offres proposées par <?php echo $entreprise->nom; ?></a></p>
                                        </div>
                                        
                                        <div class="col-lg-2">
                                            <?php if($entreprise->logo!=NULL) :?>
                                            <a  href="<?php echo Uri::base(false) . 'recruteur/detail/' . $entreprise->id . '/' . Inflector::friendly_title($entreprise->nom) ?>">
                                                <img src="<?php echo Uri::base(false) . 'assets/upload/logo/' . $entreprise->logo ?>" class="img-responsive"  />
                                            </a>
                                            <?php endif;?>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="entreprise">&raquo; <a href="<?php echo Uri::base(false) . 'recruteur/detail/' . $entreprise->id . '/' . Inflector::friendly_title($entreprise->nom) ?>">Plus d'informations sur <?php echo $entreprise->nom; ?> </a></p>
                                        </div>
                                    </div>
                               
                               
                            </div>
                        </div>
                        <?php
                    endforeach;
                endif;
                ?>  
                <div class="row">
                <div class="col-lg-12" style="text-align: right;">
                    <p>
                        <button class="btn btn-xs btn-success pagin_recruteurs">Voire les Entreprises suivantes &raquo;&raquo;</button>
                    </p>
                </div>
            </div> 
            </div>
            
            <div style="display:none;width: 50px;margin: auto;" id="ajaxImg"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
        </div>

    </div>
</div>

<?php echo Fuel\Core\Asset::js('liste_recruteur.js'); ?>


