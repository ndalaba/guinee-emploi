<?php

class Model_Recruteur extends Orm\Model {

    protected static $_properties = array('id', 'date_enreg', 'nom', 'email', 'pwd', 'pays', 'ville', 'phone', 'site_web', 'description', 'nom_contact',
        'prenom_contact', 'etat_civil', 'fonction_contact', 'phone_contact', 'logo', 'secteur_id', 'adresse', 'statut', 'actif');
    protected static $_table_name = 'recruteur';
    protected static $_has_many = array('offres', 'messagerecruteurs');
    protected static $_belong_to = array('secteur');

    public static function checkmail($mail) {
        $email = DB::query("SELECT email FROM recruteur WHERE email='$mail'")->as_object()->execute();
        if (count($email) > 0)
            return true;
        else
            return false;
    }

    public static function checkUser($id) {
        $query = self::find()->where(array('id' => $id));
        return $query->get_one();
    }

    //Plus grands recruteurs du site
    public static function bestRecruteurs() {
        return DB::query('SELECT recruteur.id as id,nom,logo,recruteur.ville as ville,recruteur.pays as pays,COUNT( recruteur_id ) AS nb_offre
        FROM offre
        INNER JOIN recruteur ON recruteur.id = offre.recruteur_id
        WHERE actif=1
        GROUP BY recruteur_id
        ORDER BY nb_offre DESC 
        LIMIT 0 , 4')->as_object()->execute();
    }

    public static function resetPWD($mail, $pwd) {
        $query = DB::query("SELECT * FROM recruteur WHERE email='$mail'")->as_object()->execute();
        if(count($query) < 1){
            return NULL;
        }
        else {
            DB::query("UPDATE recruteur set pwd='$pwd' WHERE email='$mail'")->execute();
            return $mail;
        }
        
    }

    public static function connect($email, $pwd) {
        $password = sha1($pwd);
        $query = self::find()->where(array('email' => $email, 'pwd' => $password));
        return $query->get_one();
    }

    public static function getEmail($id) {
        return DB::query("SELECT email FROM recruteur WHERE id=$id")->as_object()->execute();
    }

    /* public function getOffres($i=0,$n=20){
      return DB::query("SELECT * FROM offre WHERE id=".$this->id." ORDER BY idOffre DESC LIMIT $i,$n ")->as_object('Model_Offre')->execute();
     */

    public function getSecteur() {
        return Model_Secteur::find($this->secteur_id);
    }

    public function getOffres($limit = 10) {
        $sql = "SELECT *,offre.id AS id,offre.description as description
          FROM offre 
          LEFT JOIN recruteur ON recruteur.id=offre.recruteur_id
          WHERE recruteur.id=" . $this->id . " AND offre.actif=1
          ORDER BY offre.id DESC LIMIT 0,$limit";
        $offres = DB::query($sql)->as_object()->execute();
        return $offres;
    }
    /*public function getOffresEntreprise($limit = 10) {//admin
        $sql = "SELECT *,offre.id AS id,offre.description as description
          FROM offre 
          LEFT JOIN recruteur ON recruteur.id=offre.recruteur_id
          WHERE recruteur.id=" . $this->id . "
          ORDER BY offre.id DESC LIMIT 0,$limit";
        $offres = DB::query($sql)->as_object()->execute();
        return $offres;
    }*/

    public function getNextOffres($id, $limit = 10) {
        $sql = "SELECT *,offre.id AS id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
              FROM offre 
              LEFT JOIN recruteur ON recruteur.id=offre.recruteur_id
              WHERE recruteur.id=" . $this->id . "
              AND offre.id < $id
              ORDER BY offre.id DESC LIMIT 0,$limit";
        $offres = DB::query($sql)->as_object()->execute();
        return $offres;
    }

    public function getNextFiltre($f, $c, $d, $vil, $id, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(ville) LIKE '%" . strtolower($vil) . "%'";
        $fonction = ($f === "") ? " AND 1=1" : " AND offre.fonction_id=" . (int) $f;
        $contrat = ($c === "") ? " AND 1=1" : " AND offre.type_contrat='" . $c . "'";
        $date = ($d === "") ? " AND 1=1" : " AND offre.date_debut " . $d;
        $where = $fonction . $contrat . $date . $ville;
        $sql = "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
                 FROM offre,secteur,fonction,recruteur
                 WHERE offre.recruteur_id=recruteur.id
                 AND recruteur.id=" . $this->id;
        $query = $sql . $where . "  AND offre.id < $id ORDER BY offre.id DESC LIMIT 0,$n";
        return DB::query($query)->as_object()->execute();
    }

    public function filtreOffre($f, $c, $d, $vil, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(ville) LIKE '%" . strtolower($vil) . "%'";
        $fonction = ($f === "") ? " AND 1=1" : " AND offre.fonction_id=" . (int) $f;
        $contrat = ($c === "") ? " AND 1=1" : " AND offre.type_contrat='" . $c . "'";
        $date = ($d === "") ? " AND 1=1" : " AND offre.date_debut " . $d;
        $where = $fonction . $contrat . $date . $ville;
        $sql = "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
                 FROM offre,secteur,fonction,recruteur
                 WHERE offre.recruteur_id=recruteur.id
                 AND recruteur.id=" . $this->id;
        $query = $sql . $where . "  ORDER BY offre.id DESC LIMIT 0,$n";
        return DB::query($query)->as_object()->execute();
    }

    public function filtreEntreprise($r, $s, $vil, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(ville) LIKE '%" . strtolower($vil) . "%'";
        $recruteur = ($r === "") ? "1=1" : " id=" . (int) $r;
        $secteur = ($s === "") ? " AND 1=1" : " AND secteur_id='" . $s . "'";
        $where = $recruteur . $secteur . $ville;
        $sql = "SELECT id,nom,SUBSTRING(description FROM 1 FOR 200) as description,logo
                 FROM recruteur WHERE $where ORDER BY id DESC LIMIT 0,$n";
        return DB::query($sql)->as_object()->execute();
    }

    public static function getNextEntreprise($id, $limit = 5) {

        $sql = "SELECT id,nom,SUBSTRING(description FROM 1 FOR 200) as description,logo
                 FROM recruteur WHERE id < $id ORDER BY id DESC LIMIT 0,$limit";
        $recruteurs = DB::query($sql)->as_object()->execute();
        return $recruteurs;
    }

    public static function deleteOffre($id, $recruteur) {
        return DB::query("DELETE FROM offre WHERE id=$id AND recruteur_id=$recruteur")->execute();
    }

    public static function getAll() {
        return DB::query('SELECT * FROM recruteur WHERE actif=1 ORDER BY nom')->as_object('Model_Recruteur')->execute();
    }

    public static function getLast() {
        return DB::query('SELECT * FROM recruteur ORDER BY id DESC LIMIT 0,20')->as_object('Model_Recruteur')->execute();
    }

    public static function countNew() {
        return count(DB::query('SELECT id FROM recruteur WHERE actif=0')->execute());
    }

}
