<?php 

 class Model_Alertjob extends Orm\Model {
    
    protected static $_properties = array('idAlert', 'titre', 'email');
    protected static $_table_name = 'alertjob';
    protected static $_primary_key = array('idAlert');
    
   
    protected static  $_belongs_to= array(
    'offre' => array(
        'key_from' => 'idAlert',
        'model_to' => 'Model_Candidat',
        'key_to' => 'idCandidat',
        
    )
);
   public static function createAlert($p,$v,$f,$mcles,$c=null,$s,$exp,$r,$email){
         $contrat=' AND (';
         $pays=($p==="")?" 1=1":" offre.pays='".$p."'";
         $ville=($v==="")?" AND 1=1":" AND offre.ville='".$v."'";
         $fonction=($f==="")?" AND 1=1":" AND fonction.idFonction=".(int)$f;
         $motcles=($mcles==="")?" AND 1=1":" AND offre.titre like '%".$mcles."%' AND offre.description like '%".$mcles."%'";
        
         for($i=0; $i < count($c); $i++) { 
         $contrat.=($c[$i]==NULL)?" 1=1":" offre.type_contrat='".$c[$i]."' OR ";
        }
         $contrat.=' 1=1)';
         $secteur=($s==="")?" AND 1=1":" AND secteur_activite.idSecteur=".(int)$s;
         $recuteur=($r==="")?" AND 1=1":" AND recruteur.idRecruteur=".(int)$r;
         $experience=($exp==0)?" AND 1=1":" AND offre.experience='".$exp."'";
         
         $where=$pays.$ville.$fonction.$motcles.$contrat.$secteur.$experience;
         $query="SELECT offre.titre,offre.pays,offre.ville,fonction.fonction,offre.experience,
                 offre.type_contrat,secteur_activite.secteur_activite,recruteur.nom as recruteur
                 FROM offre,secteur_activite,fonction,recruteur,candidat
                 WHERE ".$where." AND candidat.email='".$email."'";
          return  $query;                           
    }  
 }