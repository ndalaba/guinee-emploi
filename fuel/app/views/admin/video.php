<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"> <span class="glyphicon glyphicon-picture"></span> VIDEOS</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form class="form-horizontal" method="post" action="<?php echo Uri::create('admin/setting/saveVideo') ?>" style="padding: 10px 30px 0px 30px">                   
                    <fieldset>
                        <?php if (isset($video)): ?>
                            <input type="hidden" name="id" value="<?php echo $video->id ?>" />
                        <?php endif; ?>                              
                            <div class="form-group">
                                <label for="firstName">Titre de la video*&nbsp;:</label>
                                <input type="text" value="<?php echo isset($video) ? $video->titre : '' ?>" id="video" name="titre" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Lien de la video*&nbsp;:</label>
                                <input type="text" value="<?php echo isset($video) ? $video->video : '' ?>" id="video" name="video" required class="form-control">
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
                    <th style="width:250px;">Videos</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($videos as $f): ?>
                    <tr id="tr<?php echo $f->id ?>">
                        <td><?php echo stripslashes($f->video) ?></td>
                        <td>
                            <a href="<?php echo Uri::create('admin/setting/getVideo/' . $f->id) ?>" class="badge"><i class="icon-pencil"></i></a>
                            <a href="delvideo" id="<?php echo $f->id ?>" onclick="supprimerVideo(<?php echo $f->id ?>)" class="badge badge-important remove"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
            </div>
        </div>
    </div>
</div>