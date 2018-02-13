<?php

class Model_Fonction extends Orm\Model {

    protected static $_properties = array('id', 'fonction');
    protected static $_table_name = 'fonction';
    protected static $_has_many = array('offres');

    public static function getAll() {
        return DB::query('SELECT * FROM fonction ORDER BY fonction')->as_object('Model_Fonction')->execute();
    }

}
