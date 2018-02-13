<?php 
/**
 * Description of Message
 *
 * @author NDalaba
 */
use Orm\Model;
class Model_MessageCandidat extends Model {
    
    protected static $_table_name="messagecandidat";
    
    protected static $_properties=array('id','candidat_id','recruteur_id','sujet','ajout','message','lu');
    protected static $_belong_to = array('candidat');
    public static function getMessagesAll($id) {
        $nb= DB::query("SELECT * FROM messagecandidat WHERE candidat_id=$id")->as_object()->execute();
        return count($nb);
    }
    public static function getMessages($id,$start = 0, $nb = 4) {
        return DB::query("SELECT * FROM messagecandidat WHERE candidat_id=$id ORDER BY id DESC LIMIT $start, $nb")->as_object()->execute();
    }
    public static function remove($id,$candidat){
         return DB::query("DELETE FROM messagecandidat WHERE candidat_id=$candidat AND id=$id")->execute();
    }
       	
}
