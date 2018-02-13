<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> LES RECRUTEURS</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <table class="example_bkp table table-bordered table-condensed table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <!--<th>Lieu</th>-->
                            <th>Email</th>
                            <th>Contact</th> 
                            <th>Actif</th>          
                            <th style="width: 70px">Action</th>                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recruteurs as $o): ?>
                            <tr id="tr<?php echo $o->id ?>">
                                <td><?php echo $o->id ?></td>
                                <td><a href="<?php echo Uri::create('recruteur/detail/' . $o->id . '/' . Inflector::friendly_title($o->nom)) ?>" target="_blank" title="<?php echo stripslashes($o->nom).' '.date('d/M/Y', $o->date_enreg) ?>"><?php echo stripslashes($o->nom) ?></a></td>
                                <!--<td><?php //echo stripslashes($o->ville) ?></td>-->
                                <td><?php echo stripslashes($o->email) ?></td>
                                <td><a href="<?php echo Uri::create('recruteur/detail/' . $o->id . '/' . Inflector::friendly_title($o->nom)) ?>" target="_blank" title="<?php echo stripslashes($o->nom_contact) ?>"><?php echo stripslashes($o->nom_contact . ' ' . $o->phone_contact) ?></a></td>
                                <td><a href="<?php echo Uri::create('admin/setting/activeRecruteur/' . $o->id . '/' . $o->actif) ?>" class="badge <?php echo ($o->actif == 1) ? 'badge-success' : 'badge-important' ?>" title="Cliquez pour changer"><i class="<?php echo ($o->actif == 1) ? 'icon-ok' : 'icon-off' ?>"></i></a></td>
                                <td>                    
                                    <a style="color: #000;" href="<?php echo Uri::create('admin/setting/delRecruteur/' . $o->id) ?>" id="<?php echo $o->id ?>" class="badge badge-important remove"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
