<?php
/**
 * Classe de function static utilisée dans les controllers
 *
 * @author ndalaba
 */
class Func {
       
    public static function publiearticle($id) {
        DB::query("UPDATE article SET publie=1 WHERE id=" . (int) $id)->execute();
    }

    public static function depublierarticle($id) {
        DB::query("UPDATE article SET publie=0 WHERE id=" . (int) $id)->execute();
    }
     public static function deletearticle($id) {
        $article= Model_Article::find($id);              
        @unlink('assets/upload/article/'.$article->image);  
        $article->delete();        
    }   
    public static function deleteCategory($id){
         DB::query("DELETE FROM category WHERE id=" . (int) $id)->execute();
    }
}
