<?php
/**
 * Created by PhpStorm.
 * User: bender
 * Date: 20/01/14
 * Time: 11:38
 */

class affichertableau {

    static function afficher($tableau,$class = '')
    {
        $resultat = '<ul>';
        foreach ($tableau AS $cle => $valeur) {
            if (is_array($valeur)) {
                $resultat .= '<li class="closed"><a href="#">'.$cle.'</a>';

                $resultat .= affichertableau::afficher($valeur).'</li>';
            }
            else{
                $resultat .= '<li class="closed"><a href="#">'.$valeur.'</a></li>';
            }
        }

        return $resultat.'</ul>';
    }

} 