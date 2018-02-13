<?php echo Asset::css('inline.css') ?>
<div class="form">
    <form class="formKJ well" method="post" action="<?php echo Uri::create('admin/admin/savepartenaire') ?>" style="float:left" enctype="multipart/form-data">
      <h2>PARTENAIRES</h2>
      <fieldset class="highlightCreationCompte">
          <?php if (isset($partenaire)): ?>
          <input type="hidden" name="id" value="<?php echo $partenaire->id ?>" />
          <?php endif; ?>
         <ol>
             <h6><?php if(isset($message)):echo $message ;endif;?></h6>
            <li>
               <label for="firstName">Nom *&nbsp;:</label>
               <input type="text" value="<?php echo isset($partenaire)?$partenaire->nom_parte:'' ?>" name="nom" required>
            </li>
            <li>
               <label for="firstName">Site web *&nbsp;:</label>
               <input type="text" value="<?php echo isset($partenaire)?$partenaire->site_web:'' ?>"  name="site">
            </li>
            <li>
               <label for="firstName">Logo *&nbsp;:</label>
               <input type="file" id="partenaire" name="logo" >
            </li>
            <p class="btnValiderP">
               <button value="Enregistrer" type="submit" class="btnType1 bgType1">
                  <span>Valider</span>
               </button>
            </p>
      </fieldset>
   </form>
   <div style="float: left; width: 50%;">
      <table class="example table table-bordered table-condensed table-hover">
         <thead>
            <tr>
               <th style="width:250px;">Partenaires</th>
               <th>Logo</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
         <?php foreach($partenaires as $f): ?>
            <tr id="tr<?php echo $f->id ?>">
               <td><?php echo stripslashes($f->nom_parte) ?></td>
               <td><img src="<?php echo Uri::base().'/assets/upload/partenaires/'.$f->logo_parte ?>" width="50px" height="50px;"/></td>
               <td>
                   <a href="<?php echo Uri::create('admin/admin/getPartenaire/'.$f->id) ?>" class="badge"><i class="icon-pencil"></i></a>
                   <a href="<?php echo Uri::create('admin/admin/delPartenaire/'.$f->id) ?>" id="<?php echo $f->id ?>" class="badge badge-important remove"><i class="icon-remove"></i></a>
               </td>
            </tr>
         <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</div>