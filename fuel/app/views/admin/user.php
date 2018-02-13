<?php echo Asset::js('user.js') ?>
<div class="row" style="margin-top: 25px;">
    <div style="float: left; width: 50%;">
        <h3>Utilisateurs</h3>  
        <table class="table table-bordered table-condensed table-hover table-striped" id="example"> 
            <thead>    
                <tr>   
                    <th >Action</th> 
                    <th >Login</th> 
                    <th  colspan="2">Nom et Pr&eacute;nom</th>   
                    <th >Droit</th>            </tr>  
            </thead>  
            <tbody >    
                <?php
                if (isset($users)) {
                    foreach ($users as $admin):
                        ?>      
                        <tr class="iedit alternate tr<?php echo $admin->id ?>" >  
                            <td class="btn-group">   
                                <button style="display: inline;" class="btn btn-danger" title="supprimer"  onclick="supprimerUser('<?php echo $admin->id ?>')">
                                    <i class="icon-remove"></i></button>
                                <a id="login<?php echo $admin->id ?>" href="<?php echo Uri::create('user/loaduser/' . $admin->id) ?>" class="row-title">  
                                    <button  class="btn btn-info" title="Modifier" ><i class="icon-edit"></i></button>                            </a>  
                            </td>  
                            <td ><?php echo $admin->login ?></td>   
                            <td  colspan="2"><?php echo $admin->nom ?></a><br></td>  
                            <td ><?php echo $admin->droit ?><br/></td>  
                        </tr>                <?php
                    endforeach;
                }
                ?>                              
            </tbody>
        </table>   
    </div>
    <div style="float: right; width: 40%; margin-right: 10px;"> 
        <h3>Ajouter un utilisateur</h3>   
        <div ><?php if (isset($error)) echo $error; ?></div>  
        <form class="well"  action="<?php echo Uri::create('user/saveuser') ?>" method="post" id="frmuser" class="add:the-list: validate" onsubmit="return isValid()">	        <input type="hidden" name="id" id="id" value="<?php echo isset($user) ? $user->id : '0'; ?>" />            <div >            <label  for="cat_name">Login</label>            <input type="text" size="40" id="login" name="login" value="<?php echo isset($user) ? $user->login : ''; ?>"/>           
            </div>        
            <h4>
                <label  for="cat_name">Nom et Pr&eacute;nom</label>
            </h4>    
            <div > 
                <input type="text" size="40" value="<?php echo isset($user) ? $user->nom : ''; ?>" id="nom" name="nom" />                                   </div>        <h4><label  for="cat_name">Droit</label></h4>  
            <div >    
                <select id="droit" name="droit">   
                    <option value="">- - - - -</option>   
                    <option value="1" <?php if (isset($user) AND $user->droit == 1) echo 'selected' ?>>Editeur niveau 1</option> 
                    <option value="2" <?php if (isset($user) AND $user->droit == 2) echo 'selected' ?>>Editeur niveau 2</option> 
                    <option value="3" <?php if (isset($user) AND $user->droit == 3) echo 'selected' ?>>Administrateur</option>   
                </select>  
            </div>    
            <h4><label  for="cat_name">Mot de passe</label></h4>  
            <div>    
                <input type="password"  size="40" id="pwd" name="pwd" value="" tabindex="1" /> 
                Si vous souhaitez changer le mot de passe de l'utilisateur, tapez en un nouveau. Sinon, laissez le champ vide.  
            </div> 
            <div  style="margin-top: 10px;" >   
                <button class="btn btn-primary" type="submit">Enregistrer</button> 
                <button class="btn btn-inverse" type="reset">Annuler</button>  
            </div>  
        </form>
    </div>
</div>
