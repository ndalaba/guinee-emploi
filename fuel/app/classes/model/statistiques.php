<?php

/**
 * Description of Statistiques
 *
 * @author N'Dalaba
 */
use Fuel\Core\Model;

class Model_Statistiques extends Model {

    public static function countCandidats() {
        $query = DB::query('SELECT id FROM candidat')->execute();
        return count($query);
    }

    public static function countRecruteurs() {
        $query = DB::query('SELECT id FROM recruteur')->execute();
        return count($query);
    }

    public static function countMails() {
         $query = DB::query('SELECT email FROM newsletter WHERE actif=1')->as_object()->execute();
        return count($query);
    }

}
