<?php

class Model_Candidat extends Orm\Model {

    protected static $_properties = array('email','date_enreg', 'nom', 'prenom', 'pays', 'ville', 'id', 'premiere_langue', 'niveau_plangue', 'deuxieme_langue', 'niveau_dlangue', 'show','alert','specialite',
        'phone', 'statut', 'experience', 'cvdoc', 'newsletter', 'photo', 'pwd', 'tranche_age', 'adresse', 'etat_civil', 'niveau_formation', 'ajout','expe');
    protected static $_table_name = 'candidat';  
    protected static $_has_many = array('messagecandidats');
    protected static $_many_many = array(
        'offres' => array(
            'key_from' => 'id',
            'key_through_from' => 'candidat_id',
            'table_through' => 'candidats_offres',
            'key_through_to' => 'offre_id',
            'model_to' => 'Model_Offre',
            'key_to' => 'id',
        )
    );

    public static function checkUser($email) {
        $query = self::find()->where(array('email' => $email));
        return $query->get_one();
    }

    public static function connect($email, $pwd) {
        $password = sha1($pwd);
        $query = self::find()->where(array('email' => $email, 'pwd' => $password));
        return $query->get_one();
    }

    public static function postuler($id,$idoffre,$cv,$lettre) {
        $sql = "INSERT INTO candidats_offres(candidat_id,offre_id,cvpostuler,lettre_motivation,date_postulation) VALUES($id,$idoffre,'$cv','$lettre'," . time() . ")";
        DB::query($sql)->execute();
    }
    public static function resetPostuler($id, $idoffre) {
        
         $sql ="DELETE FROM candidats_offres WHERE candidat_id= $id  AND offre_id= $idoffre";
         DB::query($sql)->execute();
        
    }
    public static function checkPostuler($id, $idOffre) {
        $query = DB::query('SELECT * from candidats_offres WHERE candidat_id="' . $id . '" and offre_id=' . $idOffre, DB::SELECT)->execute();
        return count($query);
    }

    public static function getCV($id) {
        $query = DB::query("SELECT cvdoc FROM candidat WHERE id=$id")->as_object()->execute();
        return $query[0];
    }
    public static function resetPWD($mail,$pwd) {
         $query = DB::query("SELECT * FROM candidat WHERE email='$mail'")->as_object()->execute();
        if(count($query) < 1){
            return NULL;
        }
        else {
            DB::query("UPDATE candidat set pwd='$pwd' WHERE email='$mail'")->execute();
            return $mail;
        }
        
    }

    public static function getCVTheques($n = 10) {
        return self::find()->where('show', 1)->order_by('ajout', 'DESC')->limit($n)->get();
    }

    public static function filtre($comp, $vil, $tranche, $statut, $formation, $langue, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(ville) LIKE '%" . strtolower($vil) . "%'";
        $experience = ($comp === "") ? " AND 1=1" : " AND LOWER(experience) LIKE '%" . strtolower($comp) . "%'";
        $tranche = ($tranche === "") ? " AND 1=1" : " AND tranche_age='$tranche'";
        $statut = ($statut === "") ? " AND 1=1" : " AND statut like '%$statut%'";
        $formation = ($formation === "") ? " AND 1=1" : " AND niveau_formation='$formation'";
        $langue = ($langue === "") ? " AND 1=1" : " AND (premiere_langue='$langue' OR deuxieme_langue='$langue')";
        $where = $ville . $experience . $tranche . $statut . $formation . $langue;
        $sql = "SELECT * FROM candidat WHERE candidat.show=1 " . $where . " ORDER BY ajout DESC LIMIT 0,$n";
        return DB::query($sql)->as_object()->execute();
    }

    public static function nextFiltre($comp, $vil, $tranche, $statut, $formation, $langue, $ajout, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(ville) LIKE '%" . strtolower($vil) . "%'";
        $experience = ($comp === "") ? " AND 1=1" : " AND LOWER(experience) LIKE '%" . strtolower($comp) . "%'";
        $tranche = ($tranche === "") ? " AND 1=1" : " AND tranche_age='$tranche'";
        $statut = ($statut === "") ? " AND 1=1" : " AND statut like '%$statut%'";
        $formation = ($formation === "") ? " AND 1=1" : " AND niveau_formation='$formation'";
        $langue = ($langue === "") ? " AND 1=1" : " AND (premiere_langue='$langue' OR deuxieme_langue='$langue')";
        $where = $ville . $experience . $tranche . $statut . $formation . $langue;
        $sql = "SELECT * FROM candidat WHERE candidat.show=1 " . $where . "  AND ajout < $ajout ORDER BY ajout DESC LIMIT 0,$n";
        return DB::query($sql)->as_object()->execute();
    }

    public static function getNextCvtheque($ajout, $n) {
        return self::find()->where('show', 1)->where('ajout', '<', $ajout)->order_by('ajout', 'DESC')->limit($n)->get();
    }
    public static function getMail($mot) {
        $n=  count($mot);
        $sl="";
        for($i=0;$i<$n;$i++){
           $sl.=" specialite LIKE '%".$mot[$i]."%' OR ";
        }
        $sql=rtrim($sl, ' OR ');
        return DB::query("SELECT email FROM candidat WHERE 1=1 AND (".$sql.")")->as_object()->execute();
    }
     
    public static function isSaved($id,$offre){
        $query=DB::query("SELECT * FROM savecandidat WHERE offre_id=$offre AND candidat_id=$id")->execute();
        if(count($query)>0)
            return true;
        else 
            return false;
    }
    
}