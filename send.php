<?php
    if(isset($_POST['titre'])){
        mysql_connect("sowib72.startlogicmysql.com","guineewebdev","test");
        mysql_select_db('guineewebdev');
        $query='INSERT INTO offre values("","'.$_POST['titre'].'","'.$_POST['pays'].'","'.$_POST['ville'].'","'.$_POST['secteur'].'","'.$_POST['dateExp'].'","'.$_POST['description'].'","'.$_POST['mail'].'","'.$_POST['phone'].'")';
        
        mysql_query($query) or die(mysql_error());
       
        $destinataire=array("bahturbo@yahoo.fr","is@guinee-webdev.com","mellsnos@yahoo.fr");
        $expediteur = 'contact@guinee-webdev.com';       
        $objet = 'Offre d\emploi à publier';
        $headers  = 'MIME-Version: 1.0' . "\n";
        $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; 
        $headers .= 'Reply-To: '.$expediteur."\n"; 
        $headers .= 'From: "Job NL"<'.$_POST['mail'].'>'."\n"; 
        $headers .= 'Delivered-to: '.$destinataire."\n"; 
        $headers .= 'Cc: '.$copie."\n";
        $headers .= 'Bcc: '.$copie_cachee."\n\n";                             
        foreach($destinataire as $cle => $valeur){          
        	$message ='<table width="450" border="0" background="none" id="frmofrre" class="simplemodal-data" style="display: table;">                
                  <tbody><tr>
                    <td><label>Titre</label></td>
                    <td>'.$_POST['titre'].'</td>
                  </tr>
                   <tr>
                    <td><label>Pays</label></td>
                    <td>'.$_POST['pays'].'</td>
                  </tr>
                   <tr>
                    <td><label>Ville</label></td>
                    <td>'.$_POST['ville'].'</td>
                  </tr>
                  <tr>
                    <td><label>Secteur d\'activite</label></td>
                    <td>'.$_POST['secteur'].'</td>
                  </tr>
                   <tr>
                    <td><label>Date d\'expiration</label></td>
                    <td>'.$_POST['dateExp'].'</td>
                  </tr>
                  <tr>
                    <td><label>Email Contact</label></td>
                    <td>'.$_POST['mail'].'</td>
                  </tr>
                  <tr>
                    <td><label>Telephone Contact</label></td>
                    <td>'.$_POST['phone'].'</td>
                  </tr>
                  <tr>
                    <td><label>Description</label></td>
                    <td width=500px height=200px>'.$_POST['description'].'</td>
                  </tr>                  
             </tbody></table>';
            @mail($valeur, $objet, $message, $headers);        	                                      
        }         
        if(mysql_affected_rows()){
            echo 'true';
        } else echo 'false';
       
        
    }


 ?>