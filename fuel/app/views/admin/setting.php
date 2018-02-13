<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-edit"></span> SECTEURS D'ACTIVITE</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form class="form-horizontal" method="post" action="<?php echo Uri::create('admin/setting/savesecteur') ?>" style="padding: 2px 20px 20px 20px;">
                    <fieldset class="highlightCreationCompte">
                        <?php if (isset($secteur)): ?>
                            <input type="hidden" name="id" value="<?php echo $secteur->id ?>" />
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="lastName">Catégorie*&nbsp;:</label>
                            <select name="categorie_id" required class="form-control">
                                <option value="">--------</option>
                                <?php foreach ($categories as $c): ?>
                                    <option value="<?php echo $c->id ?>" <?php if (isset($secteur) AND $secteur->categorie_id == $c->id) echo 'selected' ?>><?php echo $c->categorie ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="firstName">Secteur d'activité*&nbsp;:</label>
                            <input type="text" value="<?php echo isset($secteur) ? $secteur->secteur : '' ?>" id="secteur" name="secteur" required class="form-control" >
                        </div>
                        <p class="btnValiderP">
                            <button value="Valider et continuer" type="submit" class="btn btn-primary">
                                <span>Valider</span>
                            </button>
                        </p>
                    </fieldset>
                </form>
                <table class="example table table-bordered table-condensed table-hover">
                    <thead>
                        <tr>
                            <th style="width: 150px;">Secteur d'activité</th>
                            <th style="width: 150px;">Catégorie</th>
                            <th style="width: 50px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($secteurs as $s): ?>
                            <tr id="tr<?php echo $s->id ?>">
                                <td><?php echo stripslashes($s->secteur) ?></td>
                                <td><?php echo stripslashes($s->categorie) ?></td>
                                <td>
                                    <a href="<?php echo Uri::create('admin/setting/getSecteur/' . $s->id) ?>" id="<?php echo $s->id ?>" class="badge"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo Uri::create('admin/setting/delSecteur/' . $s->id) ?>" id="<?php echo $s->id ?>" class="badge badge-important remove"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-edit"></span> CATEGORIES DE SECTEUR D'ACTIVITE</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form class="form-horizontal" method="post" action="<?php echo Uri::create('admin/setting/savecategorie') ?>" style="padding: 2px 20px 20px 20px;">
                    <fieldset class="highlightCreationCompte">
                        <?php if (isset($categorie)): ?>
                            <input type="hidden" name="id" value="<?php echo $categorie->id ?>" />
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="firstName">Catégorie*&nbsp;:</label>
                            <input type="text" value="<?php echo isset($categorie) ? $categorie->categorie : '' ?>" id="categorie" name="categorie" required class="form-control"/>
                        </div>
                        <p class="btnValiderP">
                            <button value="Valider et continuer" type="submit" class="btn btn-primary">
                                <span>Valider</span>
                            </button>
                        </p>
                    </fieldset>
                </form>
                <table class="example table table-bordered table-condensed table-hover">
                    <thead>
                        <tr>
                            <th style="width:250px;">Catégories</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $c): ?>
                            <tr id="tr<?php echo $c->id ?>">
                                <td><?php echo stripslashes($c->categorie) ?></td>
                                <td>
                                    <a href="<?php echo Uri::create('admin/setting/getCategorie/' . $c->id) ?>" class="badge"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo Uri::create('admin/setting/delCategorie/' . $c->id) ?>" id="<?php echo $c->id ?>" class="badge badge-important remove"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<script>
    $(function(){
        $('input').addClass('form-control');
        $('select').addClass('form-control');
    });
</script>