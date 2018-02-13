<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Warning - 2013-05-30 09:29:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:29:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:29:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-30 09:29:58 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 5
Error - 2013-05-30 09:29:58 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 45
Warning - 2013-05-30 09:30:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:30:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:30:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:30:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:30:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:30:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:30:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:30:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:30:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 09:32:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:16:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:16:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:16:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:16:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:16:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:16:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:16:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-30 10:16:46 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'undefined' in 'where clause' with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
               date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
               offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
               FROM offre,secteur,fonction,recruteur
               WHERE offre.recruteur_id=recruteur.id
               AND offre.id < undefined
               ORDER BY offre.id DESC LIMIT 0,20" in C:\xampp\htdocs\jobsite\fuel\core\classes\database\pdo\connection.php on line 137
Warning - 2013-05-30 10:16:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-30 10:16:48 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'undefined' in 'where clause' with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
               date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
               offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
               FROM offre,secteur,fonction,recruteur
               WHERE offre.recruteur_id=recruteur.id
               AND offre.id < undefined
               ORDER BY offre.id DESC LIMIT 0,20" in C:\xampp\htdocs\jobsite\fuel\core\classes\database\pdo\connection.php on line 137
Warning - 2013-05-30 10:16:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-30 10:16:57 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'undefined' in 'where clause' with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
               date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
               offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
               FROM offre,secteur,fonction,recruteur
               WHERE offre.recruteur_id=recruteur.id
               AND offre.id < undefined
               ORDER BY offre.id DESC LIMIT 0,20" in C:\xampp\htdocs\jobsite\fuel\core\classes\database\pdo\connection.php on line 137
Warning - 2013-05-30 10:16:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-30 10:16:59 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'undefined' in 'where clause' with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
               date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
               offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip
               FROM offre,secteur,fonction,recruteur
               WHERE offre.recruteur_id=recruteur.id
               AND offre.id < undefined
               ORDER BY offre.id DESC LIMIT 0,20" in C:\xampp\htdocs\jobsite\fuel\core\classes\database\pdo\connection.php on line 137
Warning - 2013-05-30 10:18:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:18:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:18:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:18:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:19:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:19:03 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:19:03 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:22:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:22:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:22:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:22:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:22:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:22:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:22:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-30 10:22:34 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 5
Error - 2013-05-30 10:22:34 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 45
Warning - 2013-05-30 10:22:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:22:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:22:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:22:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:22:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:22:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:23:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:23:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:23:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:23:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:23:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:23:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:23:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-30 10:23:09 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 5
Error - 2013-05-30 10:23:09 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 45
Warning - 2013-05-30 10:23:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:23:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:23:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:23:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:23:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:23:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:23:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:23:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:23:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:23:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:23:19 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:23:19 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:23:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-30 10:23:19 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 5
Error - 2013-05-30 10:23:19 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 45
Warning - 2013-05-30 10:23:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:23:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:23:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:25:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:25:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:08 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:08 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:08 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:08 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:08 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:08 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Error - 2013-05-30 10:47:18 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 5
Error - 2013-05-30 10:47:18 --> 8 - Undefined variable: title in C:\xampp\htdocs\jobsite\fuel\app\views\404.php on line 45
Warning - 2013-05-30 10:47:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:19 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:19 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-05-30 10:47:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-05-30 11:04:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
Warning - 2013-05-30 12:14:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
