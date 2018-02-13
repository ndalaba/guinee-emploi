<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Error - 2014-07-19 00:07:29 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 00:20:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 00:20:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 00:34:37 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 00:35:37 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 00:44:29 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 01:54:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 01:54:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 02:05:30 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2014-07-19 02:05:38 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2014-07-19 02:47:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 02:47:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 02:47:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 02:47:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 02:51:20 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 504
Error - 2014-07-19 02:53:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 02:53:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 02:58:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 02:58:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 02:58:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 02:58:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 03:25:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 03:25:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 04:06:26 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Error - 2014-07-19 04:40:08 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 04:52:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 04:52:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 04:52:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 04:52:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 04:52:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 04:52:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 05:00:33 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 05:16:25 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 05:19:26 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 05:26:26 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 07:02:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 07:02:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 07:40:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 07:40:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 08:39:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 08:39:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 08:48:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 08:48:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 09:21:11 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-07-19 09:27:35 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 09:27:35 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 09:27:38 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 09:27:39 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 10:09:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 10:09:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 10:09:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 10:09:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 10:09:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 10:09:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 10:21:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 10:21:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 11:21:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 11:21:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 11:21:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 11:21:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 11:40:27 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-07-19 11:45:45 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 11:45:45 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 11:53:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 11:53:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 11:54:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 11:54:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 11:55:59 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-07-19 11:57:03 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-07-19 11:57:08 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-07-19 11:57:15 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-07-19 12:06:39 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 12:06:39 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 12:14:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 12:14:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 12:14:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:14:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 12:14:52 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 12:14:52 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 12:19:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 12:19:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 12:32:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:32:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 12:34:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 12:34:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 12:34:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 12:34:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 12:36:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:36:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 12:36:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:36:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 12:36:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:36:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 12:36:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:36:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 12:37:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:37:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 12:37:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:37:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 12:37:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:37:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:37:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 12:37:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 12:45:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 12:45:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 12:50:45 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-07-19 12:51:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 12:51:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 13:13:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 13:13:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 13:39:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 13:39:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 14:04:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 14:04:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 14:45:03 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 14:45:05 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 14:45:17 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-07-19 14:46:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 14:46:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 14:46:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 14:46:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 14:47:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 14:47:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 14:50:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 14:50:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 14:50:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 14:50:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 14:52:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 14:52:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 14:55:02 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 14:56:44 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:00:25 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:01:02 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:06:15 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:06:50 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:06:54 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Warning - 2014-07-19 15:08:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 15:08:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 15:10:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 15:10:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 15:13:01 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:18:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 15:18:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 15:19:06 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:20:37 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:21:33 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:24:13 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:34:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 15:34:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 15:34:29 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:35:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 15:35:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 15:36:12 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:37:25 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:38:21 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Warning - 2014-07-19 15:39:58 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 15:39:58 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 15:41:14 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:42:18 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:46:00 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 427
Error - 2014-07-19 15:47:41 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-07-19 16:15:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:15:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 16:15:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:15:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 16:20:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:20:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 16:20:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 16:20:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 16:23:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:23:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 16:24:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:24:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 16:25:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:25:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 16:25:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:25:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 16:25:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:25:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 16:25:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:25:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 16:25:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:25:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 16:25:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 16:25:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 16:27:09 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:27:09 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 16:27:09 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 16:27:09 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 16:41:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 16:41:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 17:08:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 17:08:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 17:09:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 17:09:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 17:18:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 17:18:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 17:47:25 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 17:49:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 17:49:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 17:50:07 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 17:50:07 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 17:50:14 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 17:50:14 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 17:50:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 17:50:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 17:51:58 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 17:53:37 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 18:07:48 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-07-19 19:03:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 19:03:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 19:05:37 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 19:05:37 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 20:21:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 20:21:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 20:50:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 20:50:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 21:03:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 21:03:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 21:21:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 21:21:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 21:22:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 21:22:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 21:25:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 21:25:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 21:26:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 21:26:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 21:27:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 21:27:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 21:29:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 21:29:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 21:41:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 21:41:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 22:01:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 22:01:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 22:05:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 22:05:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 22:08:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 22:08:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 22:10:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 22:10:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 22:42:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 22:42:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-07-19 23:12:33 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-07-19 23:16:52 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:16:52 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 23:17:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:17:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 23:18:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:18:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 23:18:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:18:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 23:18:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:18:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 23:19:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:19:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 23:25:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:25:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 23:28:54 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Error - 2014-07-19 23:33:31 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-07-19 23:34:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:34:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 23:35:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:35:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 23:35:52 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:35:52 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-07-19 23:39:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-07-19 23:39:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-07-19 23:40:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-07-19 23:40:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-07-19 23:47:02 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-07-19 23:50:08 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-07-19 23:55:19 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
