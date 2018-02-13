<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-pencil"></span> EDITER UN ARTICLE</h3>
        </div>
        <div class="panel-body">
            <div class="row">
               <form class="form-horizontal" method="post" action="<?php echo Uri::create('admin/setting/saveArticle') ?>" style="padding: 10px 30px 10px 30px;" enctype="multipart/form-data">
            <?php if (isset($article)): ?>
                <input type="hidden" name="id" value="<?php echo $article->id ?>" />
            <?php endif; ?>
            <fieldset>               
                    <div class="form-group">
                        <label for="country">Catégorie*&nbsp;:</label>
                        <select name="category_id" tabindex="2" class="form-control" id="category_id" required="">
                            <option value="">Categorie</option>                             
                            <?php foreach ($categories as $cat): ?>
                                <option value="<?php echo $cat->id ?>" <?php if (isset($article) AND $article->category_id == $cat->id) echo 'selected' ?>><?php echo $cat->categorie ?></option>
                            <?php endforeach; ?>                           
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="alertName">Titre de l'article *&nbsp;:</label>
                        <input type="text" value="<?php if (isset($article->titre)) echo $article->titre ?>" name="titre" id="titre" class="form-control"/>
                    </div>
                    <div class="form-group"><label>Description de l'articlce </label>
                        <textarea class="form-control" style="margin: 0px 4px 0px 0px; height: 384px; width: 717px;" name="contenu"><?php if (isset($article->contenu)) echo $article->contenu ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="alertName">Image*&nbsp;: (<2M)</label>
                        <input type="file"  name="image" class="form-control"/>                        
                    </div>
                <div class="form-group">
                        <label for="alertName">Publier&nbsp;:</label>
                        <input type="checkbox" class="form-control"  name="publie" <?php
                        if (isset($article)) : $selected = ($article->publie == '1') ? 'checked="checked"' : '';
                            echo $selected;
                        endif;
                        ?>/>                       
                    </div>
                
            </fieldset>
            <p class="formbtn">
                <button value="Valider" type="submit" class="btn btn-info" style="float: right">
                    <span>Valider</span>
                </button>
            </p>
        </form>
            </div>            
        </div>
    </div>
</div>
