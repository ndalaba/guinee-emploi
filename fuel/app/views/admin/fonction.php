<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-edit"></span> Fonctions</h3>
        </div>       
        <div class="panel-body">
            <div class="row">
                <form class="form-horizontal" method="post" action="<?php echo Uri::create('admin/setting/savefonction') ?>" style="padding: 10px 30px 0px 30px ">     
                    <fieldset>
                        <?php if (isset($fonction)): ?>
                            <input type="hidden" name="id" value="<?php echo $fonction->id ?>" />
                        <?php endif; ?>                                   
                            <div class="form-group">
                                <label for="firstName">Fonction*&nbsp;:</label>
                                <input type="text" value="<?php echo isset($fonction) ? $fonction->fonction : '' ?>" id="fonction" name="fonction" required class="form-control">
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
                    <th style="width:250px;">Fonctions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fonctions as $f): ?>
                    <tr id="tr<?php echo $f->id ?>">
                        <td><?php echo stripslashes($f->fonction) ?></td>
                        <td>
                            <a href="<?php echo Uri::create('admin/setting/getFonction/' . $f->id) ?>" class="badge"><i class="icon-pencil"></i></a>
                            <a href="<?php echo Uri::create('admin/setting/delFonction/' . $f->id) ?>" id="<?php echo $f->id ?>" class="badge badge-important remove"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
            </div>

        </div>
    </div>
</div>