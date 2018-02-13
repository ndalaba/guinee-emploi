<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Warning - 2015-06-22 00:12:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 00:12:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 00:12:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 00:12:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 00:19:34 --> 8 - Undefined property: Fuel\Core\Database_Result_Cached::$email in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 483
Error - 2015-06-22 00:32:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 00:32:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 00:32:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 00:32:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 00:36:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 00:36:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 00:50:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 00:50:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 00:50:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 00:50:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 01:06:21 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 01:16:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 01:16:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 01:21:53 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-06-22 01:21:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 01:21:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 01:22:05 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-06-22 01:49:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 01:49:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 02:17:22 --> 2013 - SQLSTATE[HY000] [2013] Lost connection to MySQL server at 'reading initial communication packet', system error: 113 in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2015-06-22 02:50:58 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 166
Error - 2015-06-22 03:12:58 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 03:39:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 03:39:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 03:49:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 03:49:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 03:58:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 03:58:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 04:08:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 04:08:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 04:17:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 04:17:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 04:27:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 04:27:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 05:40:40 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 05:46:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 05:46:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 07:33:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 07:33:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 07:56:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 07:56:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:00:08 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 08:04:11 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 166
Warning - 2015-06-22 08:18:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 08:18:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 08:18:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 08:18:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 08:19:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 08:19:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 08:19:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:19:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 08:19:31 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 08:19:31 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 08:31:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:31:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:32:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:32:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:32:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:32:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:35:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:35:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:35:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:35:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:35:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:35:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:42:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:42:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:45:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:45:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:45:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:45:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:45:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:45:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:49:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:49:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:49:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:49:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:49:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:49:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:50:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:50:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:50:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:50:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:50:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:50:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:53:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:53:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:53:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:53:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:53:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:53:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:53:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:53:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:53:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:53:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:54:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:54:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:54:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:54:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:54:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:54:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:54:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:54:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:56:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:56:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:58:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:58:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:58:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:58:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 08:58:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 08:58:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 09:00:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 09:00:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 09:01:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 09:01:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 09:01:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 09:01:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 09:22:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 09:22:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 09:29:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 09:29:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 09:29:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 09:29:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 09:37:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 09:37:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 09:46:43 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 166
Error - 2015-06-22 09:58:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 09:58:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 09:58:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 09:58:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:00:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:00:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:02:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:02:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:05:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:05:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:07:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:07:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:10:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:10:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:12:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:12:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:12:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:12:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:13:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:13:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:14:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:14:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:15:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:15:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:20:49 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-06-22 10:27:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 10:27:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 10:31:47 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-06-22 10:39:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 10:39:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 10:39:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:39:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 10:39:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 10:39:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 10:39:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:39:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 10:40:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 10:40:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 10:40:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:40:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 10:49:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 10:49:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 11:02:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 11:02:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 11:33:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 11:33:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 11:49:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 11:49:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 11:51:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 11:51:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 11:51:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 11:51:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 11:52:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 11:52:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 11:54:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 11:54:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 11:56:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 11:56:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 11:57:30 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 11:57:30 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 11:57:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 11:57:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 11:57:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 11:57:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 11:59:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 11:59:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 11:59:21 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 11:59:31 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 11:59:50 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 12:00:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:00:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:10:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:10:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:12:50 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-06-22 12:13:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:13:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:13:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:13:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:13:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:13:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:14:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:14:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:14:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:14:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:14:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:14:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:14:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:14:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:15:04 --> 2013 - SQLSTATE[HY000] [2013] Lost connection to MySQL server at 'reading initial communication packet', system error: 113 in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2015-06-22 12:15:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:15:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:15:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:15:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:15:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:15:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:15:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:15:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:15:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:15:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:15:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:15:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:15:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:15:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:15:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:15:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:17:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:17:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:18:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:18:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:20:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:20:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:21:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:21:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:21:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:21:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:21:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:21:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 12:22:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:22:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:22:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:22:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:22:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:22:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:30:49 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 12:31:29 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 12:32:26 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 12:34:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:34:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:34:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:34:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:35:18 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 12:35:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:35:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:36:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:36:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:37:40 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 12:38:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:38:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 12:38:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:38:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:38:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:38:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:39:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:39:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:39:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:39:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 12:44:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:44:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 12:45:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:45:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:45:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:45:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:46:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:46:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:46:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:46:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:46:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:46:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 12:48:39 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 12:50:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:50:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:53:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:53:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 12:53:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:53:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:54:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:54:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:54:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:54:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:54:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:54:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 12:54:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:54:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 12:56:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:56:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:56:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:56:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 12:56:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:56:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 12:56:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:56:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 12:56:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 12:56:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 12:57:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:57:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:59:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:59:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:59:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:59:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 12:59:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 12:59:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 13:00:30 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 13:00:53 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:00:53 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 13:00:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:00:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 13:00:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:00:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 13:01:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:01:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 13:03:08 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 13:04:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:04:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:04:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:04:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 13:05:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:05:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 13:05:54 --> 2013 - SQLSTATE[HY000] [2013] Lost connection to MySQL server at 'reading initial communication packet', system error: 113 in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2015-06-22 13:06:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:06:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 13:07:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:07:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 13:11:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:11:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:18:15 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:18:15 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:31:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:31:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 13:31:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:31:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 13:31:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:31:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 13:31:32 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'information g??ographique %' OR LOWER(offre.description) LIKE '%systeme d'inform' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Conakry' AND (LOWER(offre.titre) LIKE '%systeme d'information g�ographique %' OR LOWER(offre.description) LIKE '%systeme d'information g�ographique %') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-06-22 13:31:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:31:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 13:31:39 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'information g??ographique %' OR LOWER(offre.description) LIKE '%systeme d'inform' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Conakry' AND (LOWER(offre.titre) LIKE '%systeme d'information g�ographique %' OR LOWER(offre.description) LIKE '%systeme d'information g�ographique %') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2015-06-22 13:34:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:34:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 13:34:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:34:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 13:34:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:34:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 13:34:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:34:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:34:20 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 13:35:31 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 13:35:54 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 13:40:57 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 504
Warning - 2015-06-22 13:41:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:41:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:43:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:43:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:43:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:43:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:43:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:43:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:44:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:44:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 13:44:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:44:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 13:44:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:44:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:44:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:44:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:44:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:44:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:44:33 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:44:33 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:44:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:44:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:46:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:46:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:46:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:46:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:46:42 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 13:52:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:52:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 13:52:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:52:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 13:54:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:54:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 13:54:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:54:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 13:54:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:54:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 13:54:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:54:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 13:54:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 13:54:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 13:57:13 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 13:57:13 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 13:59:00 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 13:59:38 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 13:59:46 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 13:59:52 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 14:00:15 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:00:15 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 14:01:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:01:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 14:01:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:01:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 14:02:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:02:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 14:03:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:03:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 14:03:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:03:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 14:03:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:03:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 14:04:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:04:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 14:04:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:04:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 14:04:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:04:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 14:04:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:04:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 14:04:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:04:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 14:04:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:04:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 14:05:42 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 14:29:00 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 14:33:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:33:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 14:33:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:33:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 14:38:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:38:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 14:38:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:38:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 14:38:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:38:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 14:41:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:41:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 14:44:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:44:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 14:45:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:45:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 14:45:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:45:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:45:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 14:45:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 14:46:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:46:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 14:47:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 14:47:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 14:47:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:47:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 14:47:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 14:47:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:05:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:05:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 15:17:40 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 15:17:40 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 15:19:23 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 15:30:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:30:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:30:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:30:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 15:30:41 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 15:30:41 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 15:31:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:31:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:31:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:31:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:31:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:31:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:31:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:31:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:31:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:31:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:31:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:31:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:31:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:31:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:31:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:31:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 15:32:29 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 15:32:29 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 15:32:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:32:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:32:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:32:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:32:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:32:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:32:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:32:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:32:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:32:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:32:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:32:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:32:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:32:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:32:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:32:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:32:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 15:32:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 15:41:25 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 15:51:00 --> 8 - Undefined property: Fuel\Core\Database_Result_Cached::$email in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 483
Error - 2015-06-22 16:04:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 16:04:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 16:07:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 16:07:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 16:07:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 16:07:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 16:11:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 16:11:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 16:12:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 16:12:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 16:29:43 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-06-22 16:39:08 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 16:40:01 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 16:43:13 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 504
Error - 2015-06-22 16:44:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 16:44:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 16:44:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 16:44:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 16:44:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 16:44:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 16:44:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 16:44:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 16:47:29 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 166
Warning - 2015-06-22 17:05:07 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:05:07 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:07:46 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 17:08:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:08:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:08:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:08:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:08:44 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 17:09:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:09:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:09:21 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 17:09:33 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:09:33 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:09:36 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 17:10:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:10:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:10:28 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:10:28 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:10:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:10:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:10:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:10:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:16:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:16:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:17:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:17:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:17:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:17:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:17:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:17:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:17:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:17:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:18:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:18:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:18:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:18:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:19:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:19:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:19:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:19:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:19:47 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 17:20:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:20:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:20:04 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 17:20:06 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 17:20:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:20:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:20:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:20:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:20:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:20:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:21:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:21:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:21:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:21:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:21:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:21:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:21:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:21:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:22:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:22:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:22:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:22:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:22:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:22:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:22:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:22:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:22:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:22:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:22:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:22:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:22:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:22:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:22:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:22:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:22:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:22:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:23:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:23:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:23:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:23:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:23:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:23:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:23:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:23:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:24:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:24:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:24:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:24:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:24:36 --> 2013 - SQLSTATE[HY000] [2013] Lost connection to MySQL server at 'reading initial communication packet', system error: 113 in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2015-06-22 17:24:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:24:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:24:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:24:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:24:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:24:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:24:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:24:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:25:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:25:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:25:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:25:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:25:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:25:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:25:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:25:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:25:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:25:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:25:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:25:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:25:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:25:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:26:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:26:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:26:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:26:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:26:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:26:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:26:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:26:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:26:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:26:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:26:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:26:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:27:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:27:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:27:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:27:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:28:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:28:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:28:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:28:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:28:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:28:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:28:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:28:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:28:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:28:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:28:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:28:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:28:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:28:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:28:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:28:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:29:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:29:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:29:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:29:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:29:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:29:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:29:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:29:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:29:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:29:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:29:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:29:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:29:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:29:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:29:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:29:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:30:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:30:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:30:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:30:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:30:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:30:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:30:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:30:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:30:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:30:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:30:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:30:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:30:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:30:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 17:34:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:34:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:35:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:35:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:41:12 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:41:12 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:41:31 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:41:31 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:42:12 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:42:12 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:42:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:42:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:42:23 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:42:23 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:42:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:42:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 17:42:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:42:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:43:36 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:43:36 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:43:55 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:43:55 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:45:33 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:45:33 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:45:45 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:45:45 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:46:00 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:46:00 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:46:12 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:46:12 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:46:24 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:46:24 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:46:31 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:46:31 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:46:52 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:46:52 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:47:07 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:47:07 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:47:14 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:47:14 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:47:31 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:47:31 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:47:45 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:47:45 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:48:03 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:48:03 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 17:48:28 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 17:48:28 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 17:52:02 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-06-22 17:52:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 17:52:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 18:15:06 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 166
Error - 2015-06-22 18:15:14 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-06-22 18:42:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 18:42:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 18:43:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 18:43:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 18:43:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 18:43:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 18:46:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 18:46:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 18:46:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 18:46:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 18:48:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 18:48:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 18:59:18 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/recruteur.php on line 628
Error - 2015-06-22 19:14:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 19:14:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 19:14:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 19:14:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 19:31:08 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 19:31:08 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 19:37:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 19:37:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 19:42:56 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 19:42:56 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 19:47:31 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 19:49:58 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 19:49:58 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 19:49:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 19:49:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 19:49:59 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 19:49:59 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 19:50:11 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 19:50:11 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 19:50:12 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 19:50:12 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 19:58:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 19:58:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 20:00:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 20:00:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 20:00:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 20:00:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 21:10:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 21:10:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 21:13:21 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 21:16:36 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 21:18:00 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 21:18:02 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 21:18:04 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 21:19:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 21:19:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 21:19:44 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-06-22 21:19:45 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:19:45 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:19:45 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:19:45 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:21:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:21:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:21:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:21:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:23:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:23:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:24:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:24:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:30:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:30:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 21:30:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 21:30:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 21:30:33 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:30:33 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:30:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:30:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 21:31:55 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-06-22 21:36:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:36:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 21:36:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 21:36:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 21:38:30 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-06-22 21:39:21 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-06-22 21:41:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:41:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:41:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:41:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:41:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:41:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:42:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:42:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 21:42:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 21:42:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 21:54:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 21:54:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 22:10:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 22:10:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 22:11:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 22:11:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 22:11:28 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 22:11:28 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 22:11:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 22:11:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 22:39:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 22:39:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 22:46:04 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 22:47:58 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 22:52:41 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 22:54:12 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 22:57:31 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 22:57:31 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 22:57:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 22:57:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 22:57:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 22:57:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 22:59:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 22:59:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 23:00:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 23:00:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 23:01:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 23:01:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 23:01:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 23:01:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 23:01:48 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/recruteur.php on line 628
Warning - 2015-06-22 23:03:38 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 23:03:38 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 23:05:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 23:05:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 23:08:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 23:08:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 23:11:05 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-06-22 23:11:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 23:11:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-06-22 23:11:55 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-06-22 23:13:05 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-06-22 23:14:14 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND (LOWER(offre.titre) LIKE '%informaticiens %' OR LOWER(offre.des' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND (LOWER(offre.titre) LIKE '%informaticiens %' OR LOWER(offre.description) LIKE '%informaticiens %') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2015-06-22 23:19:00 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 23:20:45 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 23:20:59 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 23:21:27 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-06-22 23:21:27 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 23:21:27 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 23:21:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 23:21:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 23:22:09 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-06-22 23:25:23 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2015-06-22 23:30:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 23:30:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 23:30:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 23:30:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 23:31:39 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 23:31:39 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-06-22 23:31:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 23:31:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-06-22 23:33:18 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'zerekore %' ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND offre.fonction_id=5 AND offre.type_contrat='CDD' AND offre.recruteur_id=211 AND recruteur.id=211 AND 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=81 AND LOWER(offre.ville) LIKE '%n'zerekore %' ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-06-22 23:35:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-06-22 23:35:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-06-22 23:39:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-06-22 23:39:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
