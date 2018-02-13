<?php 

 class Model_Categoriesecteur extends Orm\Model {
    
    protected static $_properties = array('idCategorie', 'cat_secteur');
    protected static $_table_name = 'categorie_secteur';
    protected static $_primary_key = array('idCategorie');
    
      protected static $_has_many = array(
        'secteurs' => array(
        'key_from' => 'idCategorie',
        'model_to' => 'Model_Secteur',
        'key_to' => 'idCat_secteur',
        
      )
    );
    
 }