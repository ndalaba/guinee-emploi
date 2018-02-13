<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-edit"></span> Les catégories d'actualités</h3>
        </div>
        <div class="panel-body">
            <div class="row">                                              
                <form class="form-horizontal">
                    <select class="postform cat form-control" id="select_op" style="float: left;width: 30%;margin-right: 12px; margin-left: 10px;">
                        <option value="">Opération</option>                                                                              
                        <option value="-1">Supprimer</option>  
                    </select>                                                                                
                    <input type="button" value="Exécuter" onclick="doOperation()" class="btn btn-primary"/>
                </form>                                                         
                <form method="POST" action="<?php echo Uri::create('admin/setting/categories_actu') ?>" class="form-horizontal" id="frm_op" style="width: 99%;float: left;">
                    <input type="hidden" name="op" id="id_op"/>
                    <table border="0" cellpadding="4" cellspacing="1" class="table table-bordered table-condensed table-hover">
                        <thead>
                            <tr>
                                <th width="30px"></th>
                                <th class="text-left">&nbsp;Categorie</th>   
                                <th class="text-left">&nbsp;Description</th>   
                                <th width="90px"><div style="text-align: center;">MODIFIER</div></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $a): ?>
                                <tr class="even">
                                    <td class="text-center"><input type="checkbox" name="operation[]" value="<?php echo $a->id ?>"/></td>
                                    <td><a href="#"><?php echo $a->categorie ?></a></td>  
                                    <td><?php echo $a->description ?></td>  
                                    <td class="text-center">
                                        <a style="color: #000;" href="<?php echo Uri::create('admin/setting/updateCategorie_actu/' . $a->id) ?>"" class="badge"><i class="icon-pencil"></i></a>                                                                                                                          
                                    </td>
                                </tr>
                            <?php endforeach; ?>                                           
                        </tbody>
                    </table>
                </form>  
            </div>

        </div>
    </div>
     <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-edit"></span> Enregistrer une categorie</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form name="mainform" id="mainform" class="form-horizontal" action="<?php echo Uri::create('admin/setting/saveCategorie_actu'); ?>" method="post" onsubmit="return isCatActuFrmValid()" style="padding: 10px 30px 0px 30px">
                    <input type="hidden" id="id" name="id" value="<?php echo isset($categorie->id) ? $categorie->id : ''; ?>"/>                                                                 
                    <div class="form-group">                            
                        <label><a href="#"  ><div class="helpico"></div></a>Catégorie: <span class="colour">*</span></label>
                        <input name="categorie" id="post_section" value="<?php echo isset($categorie) ? $categorie->categorie : '' ?>" class="form-control " type="text"><span style="color: red; padding: 20px"></span>
                    </div>                                              
                    <div class="form-group">
                        <label><a href="#"  ><div class="helpico"></div></a>Description: <span class="colour">*</span></label>
                        <textarea style="width: 719px; height: 60px; margin: 0px;" rows="3" cols="10" name="description" id="post_content" class="form-control"><?php echo isset($categorie) ? $categorie->description : '' ?></textarea>                           
                    </div>                                                                                           
                    <p class="formbtn">
                        <button value="Valider" type="submit" class="btn btn-primary">
                            <span>Valider</span>
                        </button>
                    </p>                       

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
