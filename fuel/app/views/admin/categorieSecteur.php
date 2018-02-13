<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-edit"></span> Categorie secteurs d'activité</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form method="get" action="" id="posts-filter">
                    <h3>Liste categorie de secteur d'activite</h3>                
                    <table cellspacing="0" class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <?php //if($admin->acces==1){ ?>
                                <th style="width: 20px;" class="manage-column column-cb " id="cb" scope="col"></th>
                                <?php //}?>
                                <th  class="manage-column column-name" id="name" scope="col">ID</th>                        	                       
                                <th style="width: 50%;" class="manage-column column-posts " id="posts" scope="col">Categorie Secteur</th>
                            </tr>
                        </thead>                	
                        <tbody class="list:cat" id="the-list">
                            <?php if (isset($CategorieSecteurs)) {
                                foreach ($CategorieSecteurs as $c): ?>
                                    <tr class="iedit alternate tr<?php echo $c->idCategorie ?>" id="cat-3" style="">
                                        <?php //if($admin->acces==1){  ?>
                                        <th class="check-column" title="supprimer le type" scope="row" onclick="supprimerCatSecteur(<?php echo $c->idCategorie ?>)"></th>
                                        <?php //} ?>   
                                        <td class="name column-name"><?php echo $c->idCategorie ?></td>                                
                                        <td class="name column-name"><a title="<?php echo utf8_decode(stripslashes($c->cat_secteur)) ?>" href="<?php echo Uri::create('offre/loadCatSecteur/' . $c->idCategorie) ?>" class="row-title"><?php echo utf8_decode($c->cat_secteur) ?></a><br/></td>
                                    </tr>
                            <?php endforeach;
                        } ?>                        
                        </tbody>
                    </table>                
                </form> 
                <h3>Ajouter une Categorie de secteur d'activite</h3>
                    <div id="ajax-response"></div>
                    <form class="add:the-list: validate" method="post" action="<?php echo Uri::create('offre/saveCatSecteur/') ?>" id="addcat" name="addcat" onsubmit="return isvalid()">
                        <input type="hidden" name="idCategorie" id="catID" value="<?php echo isset($CategorieSecteur) ? $c->idCategorie : '0'; ?>" />    
                        <div class="form-group">
                            <label for="cat_name">Nom de la categorie </label>
                            <input type="text" aria-required="true" width="200px" value="<?php echo isset($CategorieSecteur) ? stripslashes($c->cat_secteur) : ''; ?>" id="cat_secteur" name="cat_secteur" tabindex="1" class="form-control"/>                            
                        </div>                        
                        <p class="submit">
                            <input type="submit" value="Enregistrer" name="add" class="btn btn-sm btn-primary" tabindex="3"/>  
                            <input type="reset" value="Annuler" name="add" class="btn btn-sm btn-danger" tabindex="3"/>                            
                        </p>
                    </form>
            </div>

        </div>
    </div>
</div>
<?php echo Asset::js('admin/categorieSecteur.js'); ?>