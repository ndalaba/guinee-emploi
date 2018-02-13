<?php 
/**
 * Description of Category Article
 *
 * @author NDalaba
 */
 
use Orm\Model;

class Model_Category extends Model{
	
    protected static $_table_name='category'; 
    
    protected static $_properties=array('id','categorie','description');
    protected static $_has_many = array('articles');
          
}
