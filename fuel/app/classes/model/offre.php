<?php

class Model_Offre extends Orm\Model {

    protected static $_properties = array('id', 'date_enreg', 'titre', 'pays', 'type_contrat', 'fonction_id',
        'experience', 'description', 'spe_recherche', 'fichier', 'date_debut', 'date_fin', 'ville', 'recruteur_id',
        'vues', 'secteur_id','publier','actif','offre_a_la_une');
    protected static $_table_name = 'offre';
    protected static $_belongs_to = array('fonction', 'recruteur', 'secteur');
    protected static $_many_many = array(
        'candidats' => array(
            'key_from' => 'id',
            'key_through_from' => 'offre_id',
            'table_through' => 'candidats_offres',
            'key_through_to' => 'email',
            'model_to' => 'Model_Candidat',
            'key_to' => 'email',
        )
    );

    public static function recherche($mcles, $v, $n = 10) {
        $ville = ($v === "") ? " and 1=1" : " and offre.ville='" . $v . "'";
        $motcles = ($mcles === "") ? " AND 1=1" : " AND (LOWER(offre.titre) LIKE '%" . strtolower($mcles) . "%' OR LOWER(offre.description) LIKE '%" . strtolower($mcles) . "%')";
        $where = $ville . $motcles;
        $query = "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1" . $where . " ORDER BY offre.id DESC LIMIT 0,$n";
        $resultats['results'] = DB::query($query)->as_object()->execute();
        $resultats['query'] = $query;
        return $resultats;
    }

    public static function filtre($f, $c, $s, $r, $d, $vil, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(offre.ville) LIKE '%" . strtolower($vil) . "%'";
        $secteur = ($s === "") ? " AND 1=1" : " AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=" . (int) $s;
        $fonction = ($f === "") ? " AND 1=1" : " AND offre.fonction_id=" . (int) $f;
        $contrat = ($c === "") ? " AND 1=1" : " AND offre.type_contrat='" . $c . "'";
        $recruteur = ($r === "") ? " AND 1=1" : " AND offre.recruteur_id=" . (int) $r . " AND recruteur.id=" . (int) $r;
        $date = ($d === "") ? " AND 1=1" : " AND offre.date_debut " . $d;
        $where = $fonction . $contrat . $recruteur . $date . $secteur . $ville;
        $sql = "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1";
        $query = $sql . $where . " ORDER BY offre.id DESC LIMIT 0,$n";
        return DB::query($query)->as_object()->execute();
    }

    public static function filtre_by_recruteur($f, $c, $s, $r, $d, $vil, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(offre.ville) LIKE '%" . strtolower($vil) . "%'";
        $secteur = ($s === "") ? " AND 1=1" : " AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=" . (int) $s;
        $fonction = ($f === "") ? " AND 1=1" : " AND offre.fonction_id=" . (int) $f;
        $contrat = ($c === "") ? " AND 1=1" : " AND offre.type_contrat='" . $c . "'";
        $recruteur = ($r === "") ? " AND 1=1" : " AND offre.recruteur_id=" . (int) $r . " AND recruteur.id=" . (int) $r;
        $date = ($d === "") ? " AND 1=1" : " AND offre.date_debut " . $d;
        $where = $fonction . $contrat . $recruteur . $date . $secteur . $ville;
        $sql = "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1";
        $query = $sql . $where . " ORDER BY offre.id DESC LIMIT 0,$n";
        return DB::query($query)->as_object()->execute();
    }

    public static function getbySecteur($s, $n = 10) {
        $query = 'SELECT DISTINCT offre.id,SUBSTRING(offre.description FROM 1 FOR 200) as description,titre,
                date_debut,type_contrat,offre.recruteur_id,offre.ville,
                offre.fonction_id
                 FROM offre,secteur,fonction,recruteur
                 WHERE offre.actif=1 AND offre.publier=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=' . (int) $s . ' ORDER BY offre.id DESC LIMIT 0,' . $n;
        $resultats = DB::query($query)->as_object()->execute();
        return $resultats;
    }

    public function getRecruteur() {
        $recruteur = Model_Recruteur::find($this->idRecruteur);
        if ($recruteur != NULL)
            return $recruteur;
        else
            return Model_Recruteur::forge();
    }

    public static function getLast() {
        return DB::query('SELECT * FROM offre WHERE UNIX_TIMESTAMP(date_debut)>=UNIX_TIMESTAMP()-2592000 LIMIT 0,5')->as_object("Model_Offre")->execute();
    }

    public static function getOffresL($l = 8) {
        //return Model_Offre::find()->order_by('id', 'desc')->limit($l)->get();
        return Fuel\Core\DB::query("SELECT * FROM offre WHERE actif=1 AND publier=1 ORDER BY id DESC LIMIT 0,$l")->as_object()->execute();
    }

    public static function getOffresR($lim = 4) {
        //return Model_Offre::find()->order_by('id', 'desc')->limit(5)->get();
        return Fuel\Core\DB::query("SELECT * FROM offre WHERE  actif=1 AND publier=1 AND offre_a_la_une=1  ORDER BY id DESC LIMIT 0,$lim")->as_object('Model_Offre')->execute();
   
    }

    public static function getOffres($limit = 30) {//admin
        $sql = "SELECT offre.id, titre,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin, offre.ville,offre.recruteur_id as idRecruteur, nom AS recruteur, offre.date_enreg as date_enreg ,vues
          FROM offre 
          LEFT JOIN recruteur ON recruteur.id=offre.recruteur_id          
          ORDER BY offre.id DESC LIMIT 0,$limit";
        $offres = DB::query($sql)->as_object()->execute();
        return $offres;
    }

    public static function getNextOffres($id, $limit = 10, $recruteur_id = '') {
        if(empty($recruteur_id)){
            $sql = "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
                   date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
                   offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
                   FROM offre
                   LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                   WHERE offre.actif=1 AND offre.publier=1 AND offre.id < $id
                   ORDER BY offre.id DESC LIMIT 0,$limit";
        }
        else{
            $sql = "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
                   date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
                   offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
                   FROM offre
                   LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                   WHERE offre.actif=1 AND offre.publier=1 AND offre.id < $id
                   WHERE recruteur.id = $recruteur_id
                   ORDER BY offre.id DESC LIMIT 0,$limit";
        }
        $offres = DB::query($sql)->as_object()->execute();
        return $offres;
    }

    public static function getNextFiltre($f, $c, $s, $r, $d, $vil, $id, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(ville) LIKE '%" . strtolower($vil) . "%'";
        $secteur = ($s === "") ? " AND 1=1" : " AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=" . (int) $s;
        $fonction = ($f === "") ? " AND 1=1" : " AND offre.fonction_id=" . (int) $f;
        $contrat = ($c === "") ? " AND 1=1" : " AND offre.type_contrat='" . $c . "'";
        $recruteur = ($r === "") ? " AND 1=1" : " AND offre.recruteur_id=" . (int) $r . " AND recruteur.id=" . (int) $r;
        $date = ($d === "") ? " AND 1=1" : " AND offre.date_debut " . $d;
        $where = $secteur . $fonction . $contrat . $recruteur . $date . $ville;
        $sql = "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1";
        $query = $sql . $where . "  AND offre.id < $id ORDER BY offre.id DESC LIMIT 0,$n";
        return DB::query($query)->as_object()->execute();
    }

    public static function getnextbySecteur($s, $id, $n = 10) {
        $query = 'SELECT DISTINCT offre.id AS id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip,titre,
                date_debut,type_contrat,offre.recruteur_id,offre.ville,
                offre.fonction_id
                 FROM offre,secteur,fonction,recruteur
                 WHERE offre.actif=1 AND offre.publier=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=' . (int) $s . "  AND offre.id < $id ORDER BY offre.id DESC LIMIT 0,$n";
        $resultats = DB::query($query)->as_object()->execute();
        return $resultats;
    }

    public static function nextrecherche($mcles, $v, $id, $n = 10) {
        $ville = ($v === "") ? " and 1=1" : " and offre.ville='" . $v . "'";
        $motcles = ($mcles === "") ? " AND 1=1" : " AND (LOWER(offre.titre) LIKE '%" . strtolower($mcles) . "%' OR LOWER(offre.description) LIKE '%" . strtolower($mcles) . "%')";
        $where = $ville . $motcles;
        $query = 'SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
                 FROM offre,secteur,fonction,recruteur
                 WHERE offre.actif=1 AND offre.publier=1 AND offre.recruteur_id=recruteur.id ' . $where . "  AND offre.id < $id ORDER BY offre.id DESC LIMIT 0,$n";
        $resultats = DB::query($query)->as_object()->execute();
        return $resultats;
    }

    public static function filtreCandidat($comp, $vil, $tranche, $statut, $formation, $langue, $id, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(candidat.ville) LIKE '%" . strtolower($vil) . "%'";
        $experience = ($comp === "") ? " AND 1=1" : " AND LOWER(candidat.experience) LIKE '%" . strtolower($comp) . "%'";
        $tranche = ($tranche === "") ? " AND 1=1" : " AND tranche_age='$tranche'";
        $statut = ($statut === "") ? " AND 1=1" : " AND statut='$statut'";
        $formation = ($formation === "") ? " AND 1=1" : " AND niveau_formation='$formation'";
        $langue = ($langue === "") ? " AND 1=1" : " AND (premiere_langue='$langue' OR deuxieme_langue='$langue')";
        $where = $ville . $experience . $tranche . $statut . $formation . $langue;
        $sql = "SELECT *,candidat.id AS id,candidat.experience AS experience,candidat.ajout AS ajout FROM candidat 
            JOIN candidats_offres ON candidats_offres.candidat_id=candidat.id 
            JOIN offre ON candidats_offres.offre_id=offre.id
            WHERE offre.id=$id " . $where . " ORDER BY candidat.ajout DESC LIMIT 0,$n";
        return DB::query($sql)->as_object()->execute();
    }

    public static function nextFiltreCandidat($comp, $vil, $tranche, $statut, $formation, $langue, $ajout, $id, $n = 10) {
        $ville = ($vil === "") ? " AND 1=1" : " AND LOWER(ville) LIKE '%" . strtolower($vil) . "%'";
        $experience = ($comp === "") ? " AND 1=1" : " AND LOWER(experience) LIKE '%" . strtolower($comp) . "%'";
        $tranche = ($tranche === "") ? " AND 1=1" : " AND tranche_age='$tranche'";
        $statut = ($statut === "") ? " AND 1=1" : " AND statut='$statut'";
        $formation = ($formation === "") ? " AND 1=1" : " AND niveau_formation='$formation'";
        $langue = ($langue === "") ? " AND 1=1" : " AND (premiere_langue='$langue' OR deuxieme_langue='$langue')";
        $where = $ville . $experience . $tranche . $statut . $formation . $langue;
        $sql = "SELECT *,candidat.id AS id,candidat.experience AS experience,candidat.ajout AS ajout FROM candidat 
            JOIN candidats_offres ON candidats_offres.candidat_id=candidat.id 
            JOIN offre ON candidats_offres.offre_id=offre.id
            WHERE offre.id=$id " . $where . "  AND candidat.ajout < $ajout ORDER BY candidat.ajout DESC LIMIT 0,$n";
        return DB::query($sql)->as_object()->execute();
    }

    public static function nextCandidat($id, $ajout, $n = 10) {
        $sql = "SELECT *,candidat.id AS id,candidat.experience AS experience,candidat.ajout AS ajout FROM candidat 
        JOIN candidats_offres ON candidats_offres.candidat_id=candidat.id 
        JOIN offre ON candidats_offres.offre_id=offre.id
        WHERE offre.id=$id  AND candidat.ajout < $ajout ORDER BY candidat.ajout DESC LIMIT 0,$n";
        return DB::query($sql)->as_object()->execute();
    }

    public static function getCandidats($id, $n = 10) {
        $sql = "SELECT *,candidat.id AS id,candidat.experience AS experience,candidat.ajout AS ajout FROM candidat 
        JOIN candidats_offres ON candidats_offres.candidat_id=candidat.id 
        JOIN offre ON candidats_offres.offre_id=offre.id
        WHERE offre.id=$id ORDER BY candidat.ajout DESC LIMIT 0,$n";
        return DB::query($sql)->as_object()->execute();
    }

    public static function listCandidat($id) {
        $sql = "SELECT *,candidat.id AS id,candidat.experience AS experience,candidat.ajout AS ajout 
                FROM candidat 
                JOIN candidats_offres ON candidats_offres.candidat_id=candidat.id 
                JOIN offre ON candidats_offres.offre_id=offre.id
                JOIN savecandidat ON (savecandidat.offre_id=offre.id AND savecandidat.candidat_id=candidat.id)
                WHERE offre.id=$id ORDER BY candidat.ajout DESC";
        return DB::query($sql)->as_object()->execute();
    }

    public function getLogo() {
        if (!$this->recruteur_id)
        {
            return NULL;
        }
        else{
            $recruteur = DB::query("SELECT logo FROM recruteur WHERE id=$this->recruteur_id")->as_object()->execute();
            return $recruteur[0]->logo;
        }

        //return $logo[0]->logo;
    }

}
