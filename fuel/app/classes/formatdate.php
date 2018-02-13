<?php  
class FormatDate
{
    /*
    *Converti une date en lettre 
    */
    public static function lettres($date,$choix_affichage_de_lheure=false)
    {
        $liste_mois = array(
        '01'=>'Janvier',
        '02'=>'Février',
        '03'=>'Mars',
        '04'=>'Avril',
        '05'=>'Mai',
        '06'=>'Juin',
        '07'=>'Juillet',
        '08'=>'Aout',
        '09'=>'Septembre',
        '10'=>'Octobre',
        '11'=>'Novembre',
        '12'=>'Décembre'
        );  
        
        if(!empty($date))
        {
            /*La date peut parfois etre composee de de la date separe par l'heure par un espace
            donc on verifie dabor la presence de l'heure*/
            $date_entiere = explode(' ',$date);
            if(isset($date_entiere[1]))
            {
                if($choix_affichage_de_lheure==false)
                {
                    $heure = '';    
                }
                else
                {
                    $heure = ' &agrave '.$date_entiere[1];
                }
            }
            else
            {
                $heure = '';
            }
            
            $element_date = explode('-',$date_entiere[0]);
            $jour = $element_date[2];    
            $mois = $element_date[1]; 
            $annee = (int) $element_date[0]; 
            
            if($annee != 0)
            {                           
                return $jour.' '.$liste_mois[$mois].' '.$annee.''.$heure;   
            }
            else
            {
                return 'Format non valide';   
            }
        }        
        else
        {
            return '';
        }   
    }
    
    public static function chiffres($date)
    {
        if(!empty($date))
        {
            $element_date = explode('-',$date);
            $data['jour'] = (int) $element_date[2];    
            $data['mois'] = (int) $element_date[1]; 
            $data['annee'] = (int) $element_date[0]; 

            return $data; 
        }  
        else
        {
            return '';
        }    
    }     
    
    public static function barres($date)
    {
        if(!empty($date))
        {
            $element_date = explode('-',$date);
            $data['jour'] = $element_date[2];    
            $data['mois'] = $element_date[1]; 
            $data['annee'] = $element_date[0]; 

            return $data['jour'].'/'.$data['mois'].'/'.$data['annee'];  
        }  
        else
        {
            return '';
        }    
    }    
    
    public static function BDD($date)
    {
        if(!empty($date))
        {
            $element_date = explode('/',$date);
            $jour = (int) $element_date[0];    
            $mois = (int) $element_date[1]; 
            $annee = (int) $element_date[2]; 

            return $annee.'-'.$mois.'-'.$jour; 
        }  
        else
        {
            return '';
        }    
    }

    public static function timestamp($date = '')
    {
        if(!empty($date))
        {
            $element_date = explode('-',$date);
            $annee = (int) $element_date[0];
            $mois = (int) $element_date[1];
            $jour = (int) $element_date[2];

            return gmmktime(0,0,0,$mois,$jour,$annee);
        }
        else
        {
            return gmmktime(0,0,0,gmdate('n'),gmdate('j'),gmdate('Y'));
        }
    }
}


