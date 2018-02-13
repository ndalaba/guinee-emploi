<?php
/*
 * Categorie de secteur d'activité
 */
class Model_Categorie extends Orm\Model {

   protected static $_properties = array('id', 'categorie');
   protected static $_table_name = 'categorie';   
   protected static $_has_many = array('secteurs');

}