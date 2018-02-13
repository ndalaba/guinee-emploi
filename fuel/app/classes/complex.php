<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * 
 */

class Complex{

    public static function _validation_complexe($pwd)
    {
        If((strlen($pwd)>=8) && (preg_match("#[A-Z]#", $pwd)) && (preg_match("#[a-z]#", $pwd))&& (preg_match("#[0-9]#", $pwd)))
          return  true;
        else
            return false;
        
    }
    

}


