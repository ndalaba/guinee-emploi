<?php

class Model_Secteur extends Orm\Model {

   protected static $_properties = array('id', 'secteur', 'categorie_id');
   protected static $_table_name = 'secteur'; 
   protected static $_has_many = array('recruteurs');
   protected static $_belong_to = array('categorie');      
   public static function getAll(){
      return DB::query("SELECT *,categorie, secteur.id as id FROM secteur
                        INNER JOIN categorie ON categorie_id=categorie.id")->as_object()->execute();
   }
}