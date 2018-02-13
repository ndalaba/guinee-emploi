<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-edit"></span> Enregistrer une section</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form name="mainform" id="mainform" class="form-horizontal" action="<?php echo Uri::create('admin/setting/saveCategorie_actu'); ?>" method="post" onsubmit="return isCatActuFrmValid()">
                    <input type="hidden" id="id" name="id" value="<?php echo isset($categorie->id) ? $categorie->id : ''; ?>"/>                                                                 
                    <div class="form-group">                            
                        <label><a href="#"  ><div class="helpico"></div></a>Catégorie: <span class="colour">*</span></label>
                        <input name="categorie" id="post_section" value="<?php echo isset($categorie) ? $categorie->categorie : '' ?>" class="form-control " type="text"><span style="color: red; padding: 20px"></span>
                    </div>                                              
                    <div class="form-group">
                        <label><a href="#"  ><div class="helpico"></div></a>Description: <span class="colour">*</span></label>
                        <textarea style="width: 300px;height: 50px;" rows="3" cols="10" name="description" id="post_content" class="form-control"><?php echo isset($categorie) ? $categorie->description : '' ?></textarea>                           
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