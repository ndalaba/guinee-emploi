<?php 
/**
 * Description of Message
 *
 * @author NDalaba
 */
use Orm\Model;

class Model_MessageRecruteur extends Model {
    
    protected static $_table_name="messagerecruteur";
    
    protected static $_properties=array('id','candidat_id','recruteur_id','sujet','ajout','message','lu');
    protected static $_belong_to = array('recruteur');
   
    public static function getMessagesAll($id) {
        $nb= DB::query("SELECT * FROM messagerecruteur WHERE recruteur_id=$id")->as_object()->execute();
        return count($nb);
    } 	
    public static function getMessages($id,$start = 0, $nb = 4) {
        return DB::query("SELECT * FROM messagerecruteur WHERE recruteur_id=$id LIMIT $start, $nb")->as_object()->execute();
    }
    public static function remove($id,$recruteur){
         return DB::query("DELETE FROM messagerecruteur WHERE recruteur_id=$recruteur AND id=$id")->execute();
    }
}
