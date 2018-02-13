<?php //echo Asset::js('admin/user.js')  ?>
<div class="wrap nosubsub" style="float: left;">
    <div class="icon32" id="icon-edit"><br/></div>
    <h2>Utilisateurs</h2>
    <div id="col-container">
        <div id="col-right">
            <div class="col-wrap">
                <form method="get" action="" id="posts-filter">
                    <h3>Listes utilisateurs</h3>
                    <table cellspacing="0" class="widefat fixed">
                        <thead>
                            <tr>
                                <th style="width: 20px;" class="manage-column column-cb " id="cb" scope="col"></th>
                                <th style="" class="manage-column column-name" id="name" scope="col">Login</th>
                                <th style="" class="manage-column column-description" id="description" scope="col" colspan="2">Nom et Pr&eacute;nom</th>
                                <th style="" class="manage-column column-posts num" id="posts" scope="col">Droit</th>
                            </tr>
                        </thead>
                        <tbody class="list:cat" id="the-list">
                            <?php if (isset($users)) {
                                foreach ($users as $admin): ?>
                                    <tr class="iedit alternate tr<?php echo $admin->id ?>" id="cat-3" style="">
                                        <th class="check-column" title="supprimer l'utilisateur" scope="row" onclick="supprimerUser('<?php echo $admin->id ?>')"></th>
                                        <td class="name column-name"><a id="login<?php echo $admin->id ?>" href="<?php echo Uri::create('user/loaduser/' . $admin->id) ?>" class="row-title"><?php echo $admin->login ?></a><br/></td>
                                        <td class="name column-name" colspan="2"><a id="nom<?php echo $admin->id ?>"  href="javascript:" class="row-title"><?php echo $admin->nom ?></a><br></td>
                                        <td class="name column-name"><?php echo $admin->droit ?><br/></td>
                                    </tr>
                             <?php endforeach;} ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div><!-- /col-right -->
        <div id="col-left">
            <div class="col-wrap">

                <div class="form-wrap">

                    <h3>Ajouter un utilisateur</h3>

                    <div id="ajax-response" style="color:red;font-size:14px;"><?php if (isset($error)) echo $error; ?></div>

                    <form action="<?php echo Uri::create('user/saveuser') ?>" method="post" id="frmuser" class="add:the-list: validate" onsubmit="return isValid()">

                        <input type="hidden" name="id" id="id" value="<?php echo isset($user) ? $user->id : '0'; ?>" />

                        <div class="form-field form-required">

                            <label for="cat_name">Login</label>

                            <input type="text" size="40" id="login" name="login" value="<?php echo isset($user) ? $user->login : ''; ?>"/>

                        </div>

                        <div class="form-field form-required">

                            <label for="cat_name">Nom et Pr&eacute;nom</label>

                            <input type="text" size="40" value="<?php echo isset($user) ? $user->nom : ''; ?>" id="nom" name="nom" />

                        </div>

                        <div class="form-field form-required">

                            <label for="cat_name">Droit</label>

                            <select id="droit" name="droit">

                                <option value="">- - - - -</option>

                                <option value="1" <?php if (isset($user) AND $user->droit == 1) echo 'selected' ?>>Editeur niveau 1</option>

                                <option value="2" <?php if (isset($user) AND $user->droit == 2) echo 'selected' ?>>Editeur niveau 2</option>

                                <option value="3" <?php if (isset($user) AND $user->droit == 3) echo 'selected' ?>>Administrateur</option>

                            </select>

                        </div>

                        <div class="form-field form-required">

                            <label for="cat_name">Mot de passe</label>

                            <input type="password"  size="40" id="pwd" name="pwd" value="" tabindex="1" />

                            Si vous souhaitez changer le mot de passe de l'utilisateur, tapez en un nouveau. Sinon, laissez le champ vide.

                        </div>

                        <p class="submit">

                            <input type="submit" value="Enregistrer" name="edit" class="button" tabindex="4"/>

                            <input type="reset" value="Annuler" name="edit" class="button" tabindex="4"/>

                        </p>

                    </form>

                </div>

            </div>

        </div><!-- /col-left -->

    </div><!-- /col-container -->

</div>