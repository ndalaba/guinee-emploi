<?php 
/**
 * Description of Contact
 *
 * @author NDalaba
 */
use Orm\Model;

class Model_Contact extends Model {
    
    protected static $_table_name="contact";
    
    protected static $_properties=array('id', 'type', 'nom', 'sujet', 'mail', 'message','lu','ajout');
    public static function getNonlu(){
        return self::find()->where('lu',0)->get();
    }
    public static function getMsg($i=0,$n=100){
        return DB::query("SELECT * FROM contact ORDER BY id DESC LIMIT $i,$n")->as_object('Model_Contact')->execute();
    }
}
