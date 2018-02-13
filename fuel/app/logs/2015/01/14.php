<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Warning - 2015-01-14 00:01:03 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 00:01:03 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 00:02:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 00:02:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 00:02:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 00:02:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 00:04:44 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 00:04:44 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 00:10:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 00:10:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 00:10:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 00:10:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 00:10:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 00:10:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 00:10:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 00:10:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 00:13:19 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 00:13:19 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 00:16:42 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-01-14 00:16:42 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-01-14 00:22:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 00:22:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 00:22:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 00:22:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 00:26:34 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 504
Warning - 2015-01-14 00:33:38 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-01-14 00:34:13 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-01-14 00:35:00 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-01-14 00:35:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 00:35:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 00:35:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 00:35:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 01:00:47 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 01:01:12 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 01:54:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 01:54:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 03:12:49 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 03:24:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 03:24:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 04:36:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 04:36:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 05:29:41 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 05:58:57 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 06:18:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 06:18:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 06:18:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 06:18:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 06:18:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 06:18:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 06:18:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 06:18:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 06:22:50 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 06:35:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 06:35:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 06:35:33 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-01-14 07:02:42 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 07:02:42 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 07:06:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 07:06:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 07:06:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 07:06:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 07:29:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 07:29:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 07:53:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 07:53:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 08:28:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 08:28:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 08:48:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 08:48:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 08:48:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 08:48:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 08:57:24 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 09:06:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 09:06:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 09:06:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 09:06:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 09:07:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 09:07:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 09:07:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 09:07:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 09:07:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 09:07:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 09:07:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 09:07:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 09:09:42 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 09:10:08 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 09:10:32 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 09:11:27 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 09:11:52 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 09:12:32 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 09:13:02 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 09:14:32 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-01-14 09:32:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 09:32:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 09:32:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 09:32:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 09:32:31 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 09:32:31 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 09:34:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 09:34:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 09:35:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 09:35:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 09:38:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 09:38:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 09:38:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 09:38:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 09:39:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 09:39:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 09:58:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 09:58:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:02:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:02:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:02:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:02:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:03:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:03:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:03:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:03:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:03:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:03:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 10:03:28 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-01-14 10:03:31 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:31 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:03:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:03:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 10:03:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 10:03:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 10:06:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 10:06:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 10:11:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 10:11:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 10:11:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 10:11:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 10:35:15 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 10:37:36 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 10:46:24 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 11:19:27 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 11:35:35 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-01-14 11:39:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 11:39:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 11:40:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 11:40:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 11:40:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 11:40:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 11:41:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 11:41:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 11:46:16 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-01-14 12:07:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 12:07:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 12:17:12 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-01-14 12:24:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 12:24:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 12:33:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 12:33:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 12:33:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 12:33:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 13:01:33 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:01:33 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 13:01:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:01:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 13:01:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:01:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 13:02:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:02:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 13:15:44 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 504
Warning - 2015-01-14 13:33:52 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:33:52 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 13:34:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:34:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 13:34:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:34:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 13:34:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:34:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 13:34:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:34:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 13:34:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:34:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 13:34:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 13:34:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 13:34:08 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:34:08 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 13:34:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:34:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 13:46:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 13:46:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 13:46:42 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-01-14 13:47:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 13:47:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 14:02:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 14:02:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 14:06:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 14:06:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 14:09:29 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:09:29 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:20:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:20:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:20:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:20:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 14:20:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 14:20:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 14:20:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:20:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 14:20:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 14:20:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 14:33:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:33:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:34:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:34:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:34:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:34:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:34:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:34:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:34:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:34:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:34:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:34:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:34:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:34:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:34:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:34:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:34:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:34:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:34:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 14:34:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 14:40:10 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-01-14 14:50:02 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 15:12:22 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 15:13:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:13:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:13:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:13:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:13:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:13:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:13:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:13:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:13:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:13:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:13:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:13:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:14:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:14:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:14:52 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'emploi dans le domq%' OR LOWER(offre.description) LIKE '%offres d'emploi dans le' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Conakry' AND (LOWER(offre.titre) LIKE '%offres d'emploi dans le domq%' OR LOWER(offre.description) LIKE '%offres d'emploi dans le domq%') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-01-14 15:14:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:14:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:14:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:14:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:14:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:14:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:14:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:14:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 15:16:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:16:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 15:18:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:18:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:18:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:18:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 15:19:08 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:19:08 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 15:19:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:19:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 15:20:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:20:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 15:20:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:20:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 15:23:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:23:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 15:24:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:24:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 15:24:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:24:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 15:28:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:28:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 15:29:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:29:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:29:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:29:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:29:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:29:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:29:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:29:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:29:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:29:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:29:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:29:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 15:29:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:29:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 15:29:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:29:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 15:29:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:29:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:30:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:30:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 15:30:03 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 15:30:03 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 15:30:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:30:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:30:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:30:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:30:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:30:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:30:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:30:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:30:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:30:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:32:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:32:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:33:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:33:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:33:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 15:33:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 15:52:33 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 16:00:42 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 504
Warning - 2015-01-14 16:02:03 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:02:03 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 16:02:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:02:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 16:03:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:03:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 16:03:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:03:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 16:03:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 16:03:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 16:06:22 --> 8 - Undefined property: Fuel\Core\Database_Result_Cached::$email in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/candidat.php on line 483
Warning - 2015-01-14 16:09:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:09:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 16:09:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 16:09:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 16:32:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:32:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 16:33:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:33:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:33:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 16:33:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 16:33:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:33:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 16:34:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 16:34:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 16:34:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 16:34:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 16:36:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 16:36:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 16:54:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 16:54:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 17:08:31 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:08:31 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 17:08:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 17:08:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 17:08:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 17:08:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 17:09:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:09:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:09:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:09:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:09:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:09:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:10:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:10:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:10:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:10:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:10:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:10:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:10:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:10:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:11:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:11:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:11:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:11:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:11:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:11:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:11:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:11:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:11:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:11:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:11:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:11:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:12:03 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:12:03 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:12:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:12:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:12:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:12:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:12:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:12:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:12:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:12:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:12:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:12:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:14:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:14:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 17:14:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:14:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 17:15:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 17:15:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 17:15:36 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND 1=1 AND offre.fonction_id=4 AND offre.type_contrat='CDI' AND offre.recruteur_id=150 AND recruteur.id=150 AND offre.date_debut >='2014-12-31' AND LOWER(ville) LIKE '%abidjan%'  AND offre.id < 278 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-01-14 17:22:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 17:22:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 17:23:53 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-01-14 17:38:13 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 17:38:13 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 17:54:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 17:54:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 18:03:41 --> 2 - Missing argument 1 for Controller_Offre::action_detail() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 89
Error - 2015-01-14 18:03:41 --> 8 - Undefined variable: id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 91
Error - 2015-01-14 18:03:41 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 92
Error - 2015-01-14 18:03:41 --> 2048 - Creating default object from empty value in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 92
Error - 2015-01-14 18:03:41 --> Error - Call to undefined method stdClass::save() in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 93
Error - 2015-01-14 18:11:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 18:11:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 18:22:05 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-01-14 18:22:39 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-01-14 18:25:31 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-01-14 18:27:36 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-01-14 18:27:36 --> 8 - Undefined variable: candidat in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/candidat_header.php on line 3
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/candidat_header.php on line 3
Error - 2015-01-14 18:27:36 --> 8 - Undefined variable: candidat in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/candidat_header.php on line 3
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/candidat_header.php on line 3
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 22
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 23
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 25
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 35
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 46
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 57
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 66
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 72
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 80
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 81
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 82
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 83
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 84
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 85
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 86
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 93
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 105
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 112
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 125
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 132
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 132
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 161
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 161
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 161
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 178
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 178
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 192
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 192
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 204
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 204
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 218
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 218
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 233
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 242
Error - 2015-01-14 18:27:36 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/profil_candidat.php on line 252
Warning - 2015-01-14 18:53:07 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-01-14 18:53:07 --> 8 - Undefined index: email in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/EnregistrerCandidat.php on line 52
Error - 2015-01-14 18:53:07 --> 8 - Undefined index: pwd in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/EnregistrerCandidat.php on line 60
Error - 2015-01-14 18:53:07 --> 8 - Undefined index: pwd in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/EnregistrerCandidat.php on line 64
Warning - 2015-01-14 18:53:08 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-01-14 18:53:08 --> 8 - Undefined index: email in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/EnregistrerCandidat.php on line 52
Error - 2015-01-14 18:53:08 --> 8 - Undefined index: pwd in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/EnregistrerCandidat.php on line 60
Error - 2015-01-14 18:53:08 --> 8 - Undefined index: pwd in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/candidat/EnregistrerCandidat.php on line 64
Error - 2015-01-14 19:25:28 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-01-14 19:47:30 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 19:47:30 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 19:50:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 19:50:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 19:50:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 19:50:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 19:50:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 19:50:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 20:03:06 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 20:03:06 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 20:14:20 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 20:14:20 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 20:38:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 20:38:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 21:24:02 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 21:35:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 21:35:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 21:35:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 21:35:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 21:36:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 21:36:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 21:36:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 21:36:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 21:41:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 21:41:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 21:41:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 21:41:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 21:47:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 21:47:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-01-14 21:47:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 21:47:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 21:51:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 21:51:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 21:51:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 21:51:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-01-14 22:21:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 22:21:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 22:21:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 22:21:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 22:22:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 22:22:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 22:23:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 22:23:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 22:24:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 22:24:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 22:24:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 22:24:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-01-14 22:34:04 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-01-14 22:47:51 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-01-14 23:08:40 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 163
Error - 2015-01-14 23:11:32 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-01-14 23:13:07 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-01-14 23:28:38 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-01-14 23:29:11 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-01-14 23:35:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-01-14 23:35:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-01-14 23:51:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-01-14 23:51:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
