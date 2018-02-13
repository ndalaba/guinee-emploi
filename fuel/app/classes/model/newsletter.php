<?php 
/**
 * Description of Newsletter
 *
 * @author NDalaba
 */
use Orm\Model;
class Model_Newsletter extends Model {
    
    protected static $_table_name="newsletter"; 
    protected static $_primary_key=array('email');
    protected static $_properties=array('email','actif','ajout');   
    public static function isRegistred($mail){
       $nl= self::find(trim($mail)); 
       if($nl!=NULL)
           return TRUE;
       else 
           return FALSE;
    } 
    public static function saveNewsletter($mail){
        $time=  time();
        DB::query("INSERT INTO newsletter VALUES('$mail',1,$time)")->execute();
    }
    public static function getMails($i=0,$n=1999){
        return DB::query("SELECT email FROM newsletter WHERE actif=1 ORDER BY ajout LIMIT $i,$n")->execute();
    }
    public static function updateOpened($email,$newsletter,$ajout){
        DB::query("INSERT INTO newsopened(email,newsletter,ajout) VALUES('$email',$newsletter,$ajout)")->execute();
    }
     public static function unsaveNewsletter($mail){        
        DB::query("update newsletter set actif=0 where email like '%$mail%'")->execute();        
    } 
}
