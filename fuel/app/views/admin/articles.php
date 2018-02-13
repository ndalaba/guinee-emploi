<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-list"></span> LES ARTICLES</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form class="form form-inline well" style="width: 97%">
                    <select name="publie" class="form-control">
                        <option value="">Etat</option> 
                        <option value="1">Publiés</option>  
                        <option value="0">Non Publiés</option> 
                    </select>                        
                    <select name="category_id" class="form-control">
                        <option value="">Categorie</option>                             
                        <?php foreach ($categories as $cat): ?>
                            <option value="<?php echo $cat->id ?>"><?php echo $cat->categorie ?></option>
                        <?php endforeach; ?>                           
                    </select>                           
                    <input type="submit"  value="Filtrer" id="post-query-submit" class="btn btn-primary"/>
                    <select id="select_op" class="form-control">
                        <option value="">Opération</option>                            
                        <option value="1">Publier</option>                              
                        <option value="0">Dépublier</option>                            
                        <option value="-1">Supprimer</option>  
                    </select>                                                                                
                    <input type="button" value="Exécuter" onclick="doOperation()" class="btn btn-primary"/>
                </form>  
                <form method="POST" action="<?php echo Uri::create('admin/setting/articles') ?>" class="frm_op" id="frm_op" style="width: 99%;float: left;">
                    <input type="hidden" name="op" id="id_op"/>
                    <table id="table_secteur" class="table table-bordered table-condensed table-hover">
                        <thead>
                            <tr>      
                                <th></th>
                                <th>&nbsp;TITRE</th>
                                <th>PUBLIE</th>                               
                                <th><div style="text-align: center;">MODIFIER</div></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($articles as $a): ?>
                                <tr id="tr<?php echo $a->id ?>">
                                    <td><input type="checkbox" name="operation[]" value="<?php echo $a->id ?>"/></td>
                                    <td>
                                        <a title="<?php echo "Apperçu de " . $a->titre ?>" href="<?php echo Uri::create('article/' . $a->id . '/' . Inflector::friendly_title($a->titre)) ?>" target="_blank"><?php echo $a->titre ?></a>
                                        <div class="meta">
                                            <span class="folder">
                                                <a target="_blank" href="<?php echo Uri::create('cat_actu/' . $a->getCategory()->id . '/' . Inflector::friendly_title($a->getCategory()->categorie)) ?>" rel="tag"><?php echo $a->getCategory()->categorie ?></a>
                                            </span> | 
                                            <span class="clock"><span><?php echo date('d/m/Y', $a->ajout) ?></span></span>
                                        </div>
                                    </td>
                                    <td><?php echo ($a->publie == 1) ? "OUI" : "NON" ?></td>                                    
                                    <td>
                                        <a style="color: #000;" href="<?php echo Uri::create('admin/setting/updateArticle/' . $a->id) ?>" class="badge"><i class="icon-pencil"></i></a>                                                                                                          
                                    </td>                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function doOperation() {
        if (confirm("Confirmer cette operation")) {
            document.getElementById('id_op').value = document.getElementById('select_op').value;
            document.getElementById('frm_op').submit();
        }
    }
</script>