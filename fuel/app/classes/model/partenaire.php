<?php

class Model_Partenaire extends Orm\Model {

    protected static $_properties = array('id','nom_parte', 'logo_parte','site_web');
    protected static $_table_name = 'partenaires';
    
    public static function getAll($l=4) {
        return DB::query("SELECT * FROM partenaires ORDER BY id DESC LINIT 0,$l")->as_object('Model_Partenaire')->execute();
    }

   
}
