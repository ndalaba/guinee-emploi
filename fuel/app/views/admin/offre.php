<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-list"></span> OFFRES D'EMPLOI</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" id="frmfiltreOffre">
                 <?php if (isset($categorie)): ?><!-- Page affichée à la suite d'une recherche par categorie (utilisé dans le js)-->
                    <input type="hidden" id="action" value="<?php echo $categorie ?>" action="categorie"/>
                <?php elseif (isset($motcle)) : ?><!-- Page affichée à la suite d'une recherche par mot clé (utilisé dans le js) -->
                    <input type="hidden" id="action" value="<?php echo $motcle ?>" action="motcle" ville="<?php echo $ville ?>"/>
                <?php else: ?> <!-- Page affichée de façon normale (utilisé dans le js) -->
                    <input type="hidden" id="action" value="0" action="offre" action="offre"/>
                <?php endif; ?>
                <fieldset>                  
                    <legend>Filtrer offres</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Fonction</label>
                        <div class="col-sm-10">
                            <select  id="fonction" name="fonction_id" class="form-control">
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
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Contrat</label>
                        <div class="col-sm-10">
                            <select name="type_contrat" id="type_contrat" class="form-control">
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
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Secteur</label>
                        <div class="col-sm-10">
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
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Recruteur</label>
                        <div class="col-sm-4">
                            <select name="recruteur_id" id="recruteur" class="form-control">
                            <option value="">--Toutes les recruteurs--</option>
                            <?php foreach ($recruteurs as $recruteur): ?>
                                <option value="<?php echo $recruteur->id ?>"><?php echo $recruteur->nom ?></option>
                            <?php endforeach; ?>
                        </select>   
                        </div>                      
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Période</label>
                        <div class="col-sm-10">
                            <select name="date" id="date" class="form-control">
                            <option value="0">--Indifférent --</option>
                            <option value="1">Aujourd'hui</option>
                            <option value="2">Moins de 7 jours</option>
                            <option value="3">Moins de 14 jours</option>
                            <option value="4">Moins de 21 jours</option>
                        </select>   
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Ville</label>
                        <div class="col-sm-10">
                            <input type="text" name="ville" id="ville" value="<?php echo isset($ville) ? $ville : "" ?>" placeholder="Conakry" class="form-control"/>                                                               
                        </select>   
                        </div>
                    </div>

                </fieldset>
            </form>           
            <div class="table-responsive">
                <table id="table_secteur" class="table table-bordred table-striped">
                    <thead>
                        <tr>
                            <th>Date Ajout</th>
                            <th>Titre du poste</th>
                            <th>Lieu</th>
                            <th>Recruteur</th> 
                            <th>Vues</th>          
                            <th style="width: 70px">Action</th>                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($offres as $o): ?>
                            <tr id="tr<?php echo $o->id ?>">
                                <td><?php echo date('d/M/Y h:m', $o->date_enreg); ?></td>
                                <td><a href="<?php echo Uri::create('offre/detail/' . $o->id . '/' . Inflector::friendly_title($o->titre)) ?>" target="_blank" title="<?php echo stripslashes($o->titre) ?>"><?php echo stripslashes(Str::truncate($o->titre, 70)) ?></a></td>
                                <td><?php echo stripslashes($o->ville) ?></td>
                                <td><a href="<?php echo Uri::create('offre/recruteur/' . $o->id . '/' . Inflector::friendly_title($o->recruteur)) ?>" target="_blank"><?php echo stripslashes($o->recruteur) ?></a></td>
                                <td><?php echo ($o->vues) ?></td>
                                <td>
                                    <a style="color: #000;" href="<?php echo Uri::create('admin/setting/getOffre/' . $o->id) ?>" class="badge"><i class="icon-pencil"></i></a>
                                    <a style="color: #000;" href="<?php echo Uri::create('admin/setting/delOffre/' . $o->id) ?>" id="<?php echo $o->id ?>" class="badge badge-important remove"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
<?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>