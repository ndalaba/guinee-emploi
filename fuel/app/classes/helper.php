<?php
/**
 * Class de function d'aide
 *
 * @version    1.0
 * @author    Dev-In
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://development-in.com
 */

 class Helper{
     public static function format_url($chaine)
     {
         // en minuscule
        $chaine=strtolower($chaine);

        // supprime les caracteres speciaux
        $accents = Array("/�/", "/�/", "/�/","/�/", "/�/", "/�/", "/�/","/�/","/�/","/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/�/");
        $sans = Array("e", "e", "e", "e", "c", "a", "a","a", "a","a", "a", "i", "i", "i", "i", "u", "o", "o", "o", "o");
        $chaine = preg_replace($accents, $sans, $chaine);
        $chaine = preg_replace('#[^A-Za-z0-9]#', '-', $chaine);

       // Remplace les tirets multiples par un tiret unique
       $chaine = preg_replace( "#-+#", '-', $chaine );

       // Supprime le dernier caractère si c'est un tiret
       $chaine = rtrim( $chaine, '-' );

        while (strpos($chaine,'--') !== false)
            $chaine = str_replace('--', '-', $chaine);

        return $chaine;
     }
     public static function escape($chaine){
         return utf8_encode(stripslashes(html_entity_decode($chaine)));
     }
     public static function formatDate($date) {
        $f = explode("-", $date);
        $f = array_reverse($f);
        $format = implode('/', $f);
        return $format;
    }
     public static function isConnected(){
         if(Cookie::get('jobsemail')){
             $candidat = Model_Candidat::find()->where('email',Cookie::get('jobsemail'))->get_one();
             $session = Session::instance();
             $session->set('email', $candidat->email);
             $session->set('nom', $candidat->nom . ' ' . $candidat->prenom);
             $session->set('photo', $candidat->photo);
             return true;
         }
         elseif(Cookie::get('jobsemailR')){
             $recruteur = Model_Recruteur::find()->where('email',Cookie::get('jobsemailR'))->get_one();
             $session = Session::instance();
             $session->set('jobsemailR', $recruteur->email);
             $session->set('idRecruteur', $recruteur->id);
             $session->set('nom', $recruteur->nom);
             $session->set('logo', $recruteur->logo);
             return true;
         }
         else return false;
     }
     public static function valider($rule) {
        switch ($rule){
            case 'required': echo '<li> Les champs vides  sont Obligatoire</li>';
                break;
            case 'match_field': echo '<li> Les mot de passe doivent être identiques</li>';
                break;
            case 'valid_email': echo '<li> Veuillez entrer une adresse E-mail valide</li>';
                break;
            case 'complexe': echo '<li> Le mot de passe doit être composé au moins d\'une miniscule, une majuscule,un chiffre et être au moin égale a 8 caracteres </li>';
                break;

            }
    }
 }
