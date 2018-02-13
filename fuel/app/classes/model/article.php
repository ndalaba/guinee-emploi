<?php 
/**
 * Description of Article
 *
 * @author NDalaba
 */
use Orm\Model;
class Model_Article extends Model {
    
    protected static $_table_name="article";
    
    protected static $_properties=array('id','titre','contenu','image','ajout','category_id','publie');
    protected static $_belong_to = array('category');
    
    public static function getLast($nb=10) {
        return self::find()->where('publie',1)->order_by('id','DESC')->limit($nb)->get();
    }
    public function getCategory(){
        return Model_Category::find($this->category_id);
    }
    public static function countArticle(){
        $query="SELECT id FROM article";
        return count(DB::query($query)->execute());
    }
    public static function getAll($nb=10){
      return self::find()->order_by('id','DESC')->limit($nb)->get();  
    }
    public static function filtre($etat,$cat){
         $cat=($cat==="")?" 1=1":" category_id=".(int)$cat;
         $etat=($etat==="")?" AND 1=1":" AND publie=".(int)$etat;                  
         $where=$cat.$etat;    
         return  DB::query("SELECT id,titre,ajout,publie,category_id FROM article WHERE ".$where)->as_object('Model_Article')->execute();                      
    }
    public static function getNextArticles($id, $limit = 10) {
        $sql = "SELECT * FROM article               
               WHERE article.id < $id
               AND publie=1
               ORDER BY article.id DESC LIMIT 0,$limit";
        $articles = DB::query($sql)->as_object('Model_Article')->execute();
        return $articles;
    }
}
