<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Warning - 2014-08-12 00:14:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 00:14:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 00:14:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 00:14:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 00:17:42 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/recruteur.php on line 633
Error - 2014-08-12 00:21:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 00:21:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 00:29:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 00:29:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 00:40:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 00:40:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 04:24:30 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 05:08:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 05:08:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 05:10:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 05:10:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 05:38:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:38:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:39:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:39:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:39:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:39:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:40:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:40:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:40:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:40:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 05:41:00 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'zerekor??%' ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND offre.fonction_id=5 AND offre.type_contrat='Stage' AND offre.recruteur_id=48 AND recruteur.id=48 AND 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=74 AND LOWER(offre.ville) LIKE '%n'zerekor�%' ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2014-08-12 05:41:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:41:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 05:42:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 05:42:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 05:44:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:44:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:45:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:45:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:45:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:45:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:45:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:45:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:45:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:45:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:45:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:45:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:45:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:45:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 05:45:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:45:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 05:46:17 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'zer??kor??%' ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND offre.fonction_id=5 AND offre.type_contrat='Alternance' AND offre.recruteur_id=101 AND recruteur.id=101 AND 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=73 AND LOWER(offre.ville) LIKE '%n'zer�kor�%' ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2014-08-12 05:47:45 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 05:47:45 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 05:48:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 05:48:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 06:32:35 --> 8 - Undefined property: Orm\Query::$nom in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/recruteur.php on line 633
Error - 2014-08-12 08:04:08 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 08:50:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 08:50:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 08:50:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 08:50:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 09:31:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 09:31:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 09:31:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 09:31:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 09:31:39 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 09:31:39 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 09:32:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 09:32:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 09:35:15 --> Error - Call to undefined method Orm\Query::getOffres() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Error - 2014-08-12 09:35:17 --> Error - Call to undefined method Orm\Query::getOffres() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Error - 2014-08-12 09:35:40 --> 2 - Missing argument 1 for Controller_Offre::action_detail() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 89
Error - 2014-08-12 09:35:40 --> 8 - Undefined variable: id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 91
Error - 2014-08-12 09:35:40 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 92
Error - 2014-08-12 09:35:40 --> 2048 - Creating default object from empty value in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 92
Error - 2014-08-12 09:35:40 --> Error - Call to undefined method stdClass::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 93
Error - 2014-08-12 09:35:43 --> 2 - Missing argument 1 for Controller_Offre::action_detail() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 89
Error - 2014-08-12 09:35:43 --> 8 - Undefined variable: id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 91
Error - 2014-08-12 09:35:43 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 92
Error - 2014-08-12 09:35:43 --> 2048 - Creating default object from empty value in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 92
Error - 2014-08-12 09:35:43 --> Error - Call to undefined method stdClass::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 93
Error - 2014-08-12 09:39:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 09:39:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 10:36:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 10:36:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 10:38:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 10:38:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 10:38:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 10:38:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 10:38:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 10:38:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 10:38:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 10:38:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 10:58:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 10:58:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 11:01:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:01:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 11:02:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:02:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 11:05:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:05:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 11:05:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:05:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:06:12 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-08-12 11:06:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:06:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 11:07:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:07:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 11:08:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:08:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:09:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:09:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:11:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:11:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:13:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:13:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:14:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:14:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:16:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:16:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:17:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:17:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 11:21:34 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-12 11:22:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:22:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:25:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:25:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 11:27:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:27:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 11:29:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:29:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 11:31:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:31:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 11:31:24 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 11:32:03 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 504
Error - 2014-08-12 11:43:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:43:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:44:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:44:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:50:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:50:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:52:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:52:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:52:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:52:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:53:00 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 11:53:02 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 11:53:03 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-08-12 11:53:03 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:53:03 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 11:53:03 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 11:53:04 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 11:53:05 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 11:53:05 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 11:53:06 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-08-12 11:53:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 11:53:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 11:54:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:54:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:54:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:54:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:54:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:54:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:55:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:55:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:55:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:55:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:56:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:56:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:58:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:58:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 11:59:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 11:59:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 12:00:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:00:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 12:00:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:00:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 12:00:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:00:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 12:00:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:00:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 12:00:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:00:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 12:00:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:00:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 12:01:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:01:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 12:02:49 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Error - 2014-08-12 12:04:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:04:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 12:15:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:15:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 12:20:56 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:20:56 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 12:21:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:21:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 12:22:27 --> 2 - Missing argument 1 for Controller_Offre::action_detail() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 89
Error - 2014-08-12 12:22:27 --> 8 - Undefined variable: id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 91
Error - 2014-08-12 12:22:27 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 92
Error - 2014-08-12 12:22:27 --> 2048 - Creating default object from empty value in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 92
Error - 2014-08-12 12:22:27 --> Error - Call to undefined method stdClass::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 93
Error - 2014-08-12 12:24:29 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 12:25:22 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-08-12 12:33:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:33:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 12:33:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:33:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 12:37:08 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:37:08 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 12:37:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:37:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 12:37:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:37:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 12:37:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:37:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 12:42:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:42:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 12:46:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:46:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 12:49:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:49:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 12:50:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:50:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 12:52:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:52:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 12:52:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:52:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 12:55:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 12:55:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 12:58:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 12:58:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 12:59:08 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 13:16:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 13:16:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 13:16:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 13:16:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 13:21:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:21:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:21:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:21:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:21:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:21:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:23:33 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:23:33 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:24:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:24:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:24:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:24:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:24:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:24:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:24:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:24:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:34:03 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:34:03 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 13:34:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 13:34:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 13:35:19 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:35:19 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:35:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:35:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 13:35:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 13:35:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 13:35:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 13:35:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 13:36:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:36:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 13:38:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 13:38:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 13:38:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 13:38:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 14:02:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:02:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 14:02:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:02:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 14:03:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:03:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 14:03:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:03:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 14:04:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:04:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:04:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:04:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:18:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:18:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:26:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:26:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:32:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:32:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 14:36:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:36:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 14:36:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:36:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:39:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:39:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 14:42:12 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-12 14:45:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:45:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:45:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:45:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:48:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:48:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:48:58 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'emploi 2014 %' OR LOWER(offre.description) LIKE '%offres d'emploi 2014 %') ORDER' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Kindia' AND (LOWER(offre.titre) LIKE '%offres d'emploi 2014 %' OR LOWER(offre.description) LIKE '%offres d'emploi 2014 %') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2014-08-12 14:48:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:48:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:49:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:49:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 14:49:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:49:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 14:50:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:50:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 14:50:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:50:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 14:50:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:50:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 14:50:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:50:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 14:50:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:50:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 14:50:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 14:50:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 14:53:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:53:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 14:53:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 14:53:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 15:00:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 15:00:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 15:26:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 15:26:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 15:26:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 15:26:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 15:27:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 15:27:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 15:27:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 15:27:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 15:28:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 15:28:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 15:28:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 15:28:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:13:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:13:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:42:32 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 16:43:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:43:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:43:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:43:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 16:44:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:44:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:44:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:44:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:44:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:44:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:45:08 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:45:08 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:45:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:45:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:45:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:45:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:46:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:46:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:46:19 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:46:19 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 16:46:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:46:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 16:48:23 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:48:23 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 16:48:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:48:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:49:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:49:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 16:49:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:49:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:50:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:50:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:50:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:50:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 16:50:39 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 16:50:39 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 16:50:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:50:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:52:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:52:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:52:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:52:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:52:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:52:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:55:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:55:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:55:46 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Error - 2014-08-12 16:56:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:56:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:56:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:56:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:56:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:56:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:56:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:56:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:56:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:56:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:57:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:57:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:57:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:57:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:58:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:58:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:58:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:58:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 16:59:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 16:59:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 17:10:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 17:10:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 17:10:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 17:10:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 17:11:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 17:11:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 17:13:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 17:13:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 17:14:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 17:14:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 17:51:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 17:51:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:02:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:02:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:08:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:08:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:22:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:22:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:30:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:30:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:37:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:37:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 18:52:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 18:52:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 18:53:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 18:53:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 18:53:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:53:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:55:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:55:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:55:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:55:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 18:55:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 18:55:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 18:55:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:55:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:55:55 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-08-12 18:56:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 18:56:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 18:56:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 18:56:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 18:56:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:56:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:59:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:59:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 18:59:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 18:59:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 19:00:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 19:00:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 19:07:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 19:07:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 19:08:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 19:08:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 19:08:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 19:08:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 19:09:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 19:09:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 19:10:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 19:10:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 19:29:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 19:29:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 19:30:30 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 20:55:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 20:55:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 21:00:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 21:00:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 21:12:52 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-12 21:19:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 21:19:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 21:20:35 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-12 21:20:35 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-12 21:20:35 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-12 21:20:35 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-12 21:20:45 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-08-12 21:31:59 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-12 21:33:41 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-12 21:35:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 21:35:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 21:35:32 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 21:35:32 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 21:51:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 21:51:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 21:53:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 21:53:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 21:54:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 21:54:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 21:57:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 21:57:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 21:59:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 21:59:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 21:59:19 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 21:59:19 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 22:00:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 22:00:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 22:00:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 22:00:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 22:02:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:02:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 22:03:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:03:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 22:04:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:04:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 22:05:49 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-12 22:08:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:08:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 22:09:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 22:09:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 22:10:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 22:10:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 22:10:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:10:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 22:10:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 22:10:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 22:10:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:10:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 22:11:43 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-12 22:13:25 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-12 22:13:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:13:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 22:14:07 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-12 22:14:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:14:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 22:14:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:14:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 22:14:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:14:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 22:14:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:14:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 22:14:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:14:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 22:14:24 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-12 22:16:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:16:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 22:21:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:21:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 22:39:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:39:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 22:39:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 22:39:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-12 22:50:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 22:50:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-12 22:51:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-12 22:51:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-12 23:01:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 23:01:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 23:14:32 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2014-08-12 23:14:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 23:14:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 23:14:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 23:14:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 23:17:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 23:17:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 23:24:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 23:24:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-12 23:54:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-12 23:55:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
