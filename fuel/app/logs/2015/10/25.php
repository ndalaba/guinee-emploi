<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Error - 2015-10-25 00:07:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 00:07:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 00:13:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 00:13:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 00:21:45 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 00:42:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 00:42:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 00:42:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 00:42:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 00:49:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 00:49:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 00:56:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 00:56:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 01:03:41 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 01:13:47 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 01:14:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 01:14:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 01:16:20 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 01:17:11 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 01:17:11 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 01:32:20 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 01:32:20 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 01:33:48 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 01:35:01 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 01:40:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 01:40:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 01:53:15 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-10-25 01:53:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 01:53:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 01:53:35 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2015-10-25 02:00:45 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 02:00:45 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 02:05:04 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 02:05:26 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 02:05:26 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 02:07:02 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 02:09:33 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 02:10:19 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 02:10:20 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 02:14:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 02:14:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 02:23:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 02:23:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 02:30:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 02:30:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 03:16:44 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 92
Error - 2015-10-25 03:31:08 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 03:31:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 03:31:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 03:31:30 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 03:31:34 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 05:36:24 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 06:28:39 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 06:39:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 06:39:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 07:01:02 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 07:04:39 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'offre producteur%' OR LOWER(offre.description) LIKE '%appel d'offre producteur%'' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Conakry' AND (LOWER(offre.titre) LIKE '%appel d'offre producteur%' OR LOWER(offre.description) LIKE '%appel d'offre producteur%') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-10-25 07:04:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 07:04:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 07:48:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 07:48:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 07:48:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 07:48:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 07:50:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 07:50:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 07:50:03 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 07:50:03 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 07:50:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 07:50:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 08:27:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 08:27:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 08:40:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 08:40:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 08:54:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 08:54:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 08:55:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 08:55:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 09:42:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 09:42:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 09:42:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 09:42:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 09:42:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 09:42:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 09:42:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 09:42:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 09:43:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 09:43:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 09:54:52 --> 2003 - SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'sowib72.startlogicmysql.com' (113) in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2015-10-25 09:54:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 09:54:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 10:03:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 10:03:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 10:03:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 10:03:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 10:03:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 10:03:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 10:03:48 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 10:03:48 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 10:06:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 10:06:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 10:06:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 10:06:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 10:25:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 10:25:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 10:32:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 10:32:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 11:11:09 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-10-25 11:25:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 11:25:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 11:25:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 11:25:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 11:26:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 11:26:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 11:26:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 11:26:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 11:28:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 11:28:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 11:37:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 11:37:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 12:24:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 12:24:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 12:40:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 12:40:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 12:41:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 12:41:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 12:42:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 12:42:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 12:42:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 12:42:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 12:42:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 12:42:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 12:44:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 12:44:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 12:45:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 12:45:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 13:05:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 13:05:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 13:11:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 13:11:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 13:11:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 13:11:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 13:22:53 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 13:23:59 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 13:25:12 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 13:25:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 13:25:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 13:28:12 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 13:28:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 13:28:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 13:28:34 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 13:30:15 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 13:47:16 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 13:54:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 13:54:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 14:01:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 14:01:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 14:11:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 14:11:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 14:11:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 14:11:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 14:13:27 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 14:14:41 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 14:14:41 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 14:23:22 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 14:24:30 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 14:24:34 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 14:24:34 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 14:25:14 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 14:25:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 14:25:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 14:27:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 14:27:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 14:28:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 14:28:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 14:29:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 14:29:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 14:29:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 14:29:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 14:31:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 14:31:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 14:33:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 14:33:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 14:34:31 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 14:34:31 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 14:36:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 14:36:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 14:39:49 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 14:39:57 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 14:39:57 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 14:40:54 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 14:43:21 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 14:44:07 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 14:53:36 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 14:54:18 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 14:55:52 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 14:57:34 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'emploi total guin??e%' OR LOWER(offre.description) LIKE '%offre d'emploi total g' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Conakry' AND (LOWER(offre.titre) LIKE '%offre d'emploi total guin�e%' OR LOWER(offre.description) LIKE '%offre d'emploi total guin�e%') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-10-25 14:57:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 14:57:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 15:07:15 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-10-25 15:21:02 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 15:21:02 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 15:21:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 15:21:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 15:21:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 15:21:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 15:44:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 15:44:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 15:45:10 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 15:49:37 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 16:31:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 16:31:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 16:31:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 16:31:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 16:32:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 16:32:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 16:35:26 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-10-25 16:41:08 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 16:41:08 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 16:41:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 16:41:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 16:41:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 16:41:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 16:44:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 16:44:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 17:11:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:11:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:12:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:12:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:12:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:12:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:12:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:12:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:15:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:15:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:15:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:15:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:16:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:16:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:27:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:27:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:27:38 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-10-25 17:34:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 17:34:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 17:34:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 17:34:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 17:35:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 17:35:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 17:36:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 17:36:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 17:37:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:37:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:40:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:40:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:43:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:43:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 17:43:27 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 17:46:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 17:46:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 18:11:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 18:11:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 18:19:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 18:19:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 18:24:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 18:24:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 18:24:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 18:24:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 18:24:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 18:24:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 18:25:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 18:25:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 18:27:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 18:27:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 18:28:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 18:28:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 18:32:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 18:32:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 19:13:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 19:13:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 19:14:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 19:14:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 19:14:19 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 19:14:19 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 19:14:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 19:14:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 19:14:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 19:14:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 19:14:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 19:14:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 19:14:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 19:14:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 19:14:52 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 19:14:52 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 19:57:24 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 19:59:55 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 504
Error - 2015-10-25 20:17:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 20:17:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 20:22:38 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:22:45 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 20:22:45 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 20:23:00 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:24:51 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:25:01 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 20:25:01 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 20:25:33 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:26:14 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:26:34 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:26:41 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 20:26:41 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 20:26:44 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:27:08 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:27:47 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 20:31:11 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-10-25 20:31:19 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:31:47 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:31:56 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:32:04 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-10-25 20:43:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 20:43:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 20:43:20 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 92
Warning - 2015-10-25 20:56:34 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:56:39 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 20:56:39 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 20:58:25 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 20:58:54 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 21:02:46 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 21:02:46 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 21:15:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 21:15:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 21:22:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 21:22:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 21:22:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 21:22:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 21:37:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 21:37:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 21:41:20 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-10-25 21:41:27 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 21:41:27 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 21:43:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 21:43:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 21:43:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 21:43:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 21:43:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 21:43:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 21:43:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 21:43:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 21:55:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 21:55:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 22:16:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:16:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 22:17:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:17:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 22:18:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:18:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 22:20:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:20:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 22:20:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 22:20:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 22:35:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 22:35:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 22:40:18 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-10-25 22:40:59 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-10-25 22:41:10 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:41:10 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 22:42:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:42:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 22:43:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:43:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 22:49:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:49:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 22:53:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:53:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 22:54:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:54:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 22:55:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 22:55:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 22:55:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:55:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 22:59:08 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 22:59:08 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 23:04:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:04:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 23:07:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:07:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 23:08:53 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:08:53 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 23:09:59 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 504
Error - 2015-10-25 23:16:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:16:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 23:17:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:17:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 23:18:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:18:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 23:18:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:18:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 23:27:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:27:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 23:27:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:27:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 23:30:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:30:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 23:40:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:40:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 23:45:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:45:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 23:48:39 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-10-25 23:48:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:48:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 23:49:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:49:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 23:51:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:51:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-10-25 23:52:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:52:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 23:54:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:54:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-10-25 23:54:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-10-25 23:54:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-10-25 23:55:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:55:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 23:55:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:55:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 23:56:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:56:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 23:56:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:56:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-10-25 23:57:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-10-25 23:57:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
