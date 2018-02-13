<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Warning - 2013-05-29 07:46:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 11:28:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:07:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:07:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:07:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:07:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:07:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:07:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:07:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:07:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:07:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:07:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:07:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:07:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:07:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:07:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:07:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:07:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:07:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-29 14:07:54 --> 8 - Undefined index: fonction_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:07:54 --> 8 - Undefined index: secteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:07:54 --> 8 - Undefined index: recruteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:07:54 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'offre.fonction_id_id' in 'on clause' with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=0 AND offre.fonction_id=0 AND offre.type_contrat='CDI' AND offre.recruteur_id=0 AND recruteur.id=0 AND 1=1 AND 1=1 ORDER BY offre.id DESC LIMIT 0,20" in C:\xampp\htdocs\jobsite\fuel\core\classes\database\pdo\connection.php on line 137
Warning - 2013-05-29 14:08:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:08:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:08:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:08:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:08:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:08:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:08:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-29 14:08:09 --> 8 - Undefined index: fonction_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:08:09 --> 8 - Undefined index: secteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:08:09 --> 8 - Undefined index: recruteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:08:09 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'offre.fonction_id_id' in 'on clause' with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=0 AND offre.fonction_id=0 AND offre.type_contrat='Freelance' AND offre.recruteur_id=0 AND recruteur.id=0 AND 1=1 AND 1=1 ORDER BY offre.id DESC LIMIT 0,20" in C:\xampp\htdocs\jobsite\fuel\core\classes\database\pdo\connection.php on line 137
Warning - 2013-05-29 14:08:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-29 14:08:12 --> 8 - Undefined index: fonction_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:08:12 --> 8 - Undefined index: secteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:08:12 --> 8 - Undefined index: recruteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:08:12 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'offre.fonction_id_id' in 'on clause' with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=0 AND offre.fonction_id=0 AND offre.type_contrat='Stage' AND offre.recruteur_id=0 AND recruteur.id=0 AND 1=1 AND 1=1 ORDER BY offre.id DESC LIMIT 0,20" in C:\xampp\htdocs\jobsite\fuel\core\classes\database\pdo\connection.php on line 137
Warning - 2013-05-29 14:09:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-29 14:09:40 --> 8 - Undefined index: fonction_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:09:40 --> 8 - Undefined index: secteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:09:40 --> 8 - Undefined index: recruteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Warning - 2013-05-29 14:09:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:09:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:09:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-29 14:09:43 --> 8 - Undefined index: fonction_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:09:43 --> 8 - Undefined index: secteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Error - 2013-05-29 14:09:43 --> 8 - Undefined index: recruteur_id in C:\xampp\htdocs\jobsite\fuel\app\classes\controller\offre.php on line 163
Warning - 2013-05-29 14:09:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:09:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-29 14:12:23 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 5
Error - 2013-05-29 14:12:23 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 45
Warning - 2013-05-29 14:12:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-29 14:12:26 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 5
Error - 2013-05-29 14:12:26 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 45
Warning - 2013-05-29 14:12:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:12:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:12:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:12:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-29 14:12:43 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 5
Error - 2013-05-29 14:12:43 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 45
Warning - 2013-05-29 14:15:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:15:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:15:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:15:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 14:18:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 14:18:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 14:18:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 16:36:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 16:36:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 16:36:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 16:36:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 16:36:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 16:36:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 16:36:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-29 16:36:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-29 16:36:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-29 20:04:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
