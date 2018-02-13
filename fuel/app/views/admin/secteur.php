<?php echo Asset::js('admin/secteur.js'); ?>
<div class="wrap nosubsub" style="float: left; width:864px;">
	<div class="icon32" id="icon-edit"><br/></div>
    <h2>Secteur d'activité</h2>
    <div id="col-container">
        <div id="col-right">
            <div class="col-wrap">
            <form method="get" action="" id="posts-filter">
                <h3>Liste categorie de secteur d'activite</h3>                
                <table cellspacing="0" class="widefat fixed">
                	<thead>
                    	<tr>
                        <?php //if($admin->acces==1){ ?>
                        	<th style="width: 20px;" class="manage-column column-cb " id="cb" scope="col"></th>
                         <?php //}?>
                        	<th  class="manage-column column-name" id="name" scope="col">ID</th>  
                            <th style="width: 50%;" class="manage-column column-posts " id="posts" scope="col">Secteur activite</th>                      	                       
                        	<th style="width: 50%;" class="manage-column column-posts " id="posts" scope="col">Categorie Secteur activite</th>
                    	</tr>
                	</thead>                	
                	<tbody class="list:cat" id="the-list">
                        <?php if(isset($secteurs)){ foreach($secteurs as $c): ?>
                            <tr class="iedit alternate tr<?php echo $c->idSecteur ?>" id="cat-3" style="">
                            <?php //if($admin->acces==1){ ?>
                                <th class="check-column" title="supprimer le type" scope="row" onclick="supprimerSecteur(<?php echo $c->idSecteur ?>)"></th>
                             <?php //}?>   
                                <td class="name column-name"><?php echo $c->idSecteur ?></td>                                
                                <td class="name column-name"><a title="<?php echo utf8_decode(stripslashes($c->secteur_activite)) ?>" href="<?php echo Uri::create('offre/loadSecteur/'.$c->idSecteur) ?>" class="row-title"><?php echo utf8_decode($c->secteur_activite) ?></a><br/></td>
                                <td class="name column-name"><a title="<?php echo utf8_decode(stripslashes($c->idCat_secteur)) ?>" href="<?php echo Uri::create('offre/loadSecteur/'.$c->idSecteur) ?>" class="row-title"><?php echo utf8_decode($c->idCat_secteur) ?></a><br/></td>
                            </tr>
                        <?php endforeach; } ?>                        
                	</tbody>
                </table>                
            </form>            
            </div>
        </div><!-- /col-right -->
        <div id="col-left">
            <div class="col-wrap">
                <div class="form-wrap">
                    <h3>Ajouter un secteur d'activite</h3>
                    <div id="ajax-response"></div>
                    <form class="add:the-list: validate" method="post" action="<?php echo Uri::create('offre/saveSecteur/') ?>" id="addcat" name="addcat" onsubmit="return isvalid()">
                        <input type="hidden" name="idSecteur" id="catID" value="<?php echo isset($secteur)?$c->idSecteur:'0'; ?>" />    
                        <div class="form-field form-required">
                        	<label for="cat_name">Nom du secteur d'activite </label>
                        	<input type="text" aria-required="true" width="200px" value="<?php echo isset($secteur)?stripslashes($c->secteur_activite):''; ?>" id="secteur" name="secteur_activite" tabindex="1"/>                            
                        </div> 
                        <div class="form-field form-required">
                        	<label for="cat_name">Nom de la categorie de secteur d'activite </label>
                        	<select name="idCat_secteur">
                              <?php if(isset($CategorieSecteurs)){ foreach($CategorieSecteurs as $c): ?>
                              <option value="<?php echo $c->idCategorie ?>"><?php echo utf8_decode($c->cat_secteur) ?></option>
                             <?php endforeach; }?>
                            </select>                            
                        </div>                        
                        <p class="submit">
                            <input type="submit" value="Enregistrer" name="add" class="button" tabindex="3"/>  
                            <input type="reset" value="Annuler" name="add" class="button" tabindex="3"/>                            
                        </p>
                    </form>
                </div>
            </div>
        </div><!-- /col-left -->
    </div><!-- /col-container -->
</div>