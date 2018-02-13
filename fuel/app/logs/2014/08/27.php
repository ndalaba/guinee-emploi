<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Warning - 2014-08-27 00:04:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 00:04:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 00:04:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 00:04:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 00:05:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 00:05:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 00:07:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 00:07:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 00:07:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 00:07:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 00:07:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 00:07:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 00:08:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 00:08:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 00:13:40 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=90 AND offre.fonction_id=5 AND offre.type_contrat='Stage' AND offre.recruteur_id=77 AND recruteur.id=77 AND 1=1 AND LOWER(ville) LIKE '%conakry%'  AND offre.id < 268 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2014-08-27 01:32:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 01:32:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 01:32:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 01:32:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 01:42:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 01:42:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 01:44:29 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Error - 2014-08-27 01:55:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 01:55:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 01:55:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 01:55:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 01:56:23 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Error - 2014-08-27 02:17:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 02:17:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 03:39:32 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-27 04:21:46 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/recruteur.php on line 633
Error - 2014-08-27 04:23:17 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 05:40:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 05:40:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 06:37:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 06:37:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 06:54:04 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 06:54:04 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 06:58:09 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-27 07:00:04 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 07:37:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 07:37:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 07:37:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 07:37:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 08:53:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 08:53:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 09:00:23 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 09:03:30 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-08-27 09:06:47 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 09:06:47 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 09:14:31 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 09:18:45 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 09:18:45 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 09:18:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:18:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:20:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:20:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:29:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:29:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:43:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:43:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 09:44:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 09:44:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 09:44:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 09:44:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 09:45:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 09:45:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 09:46:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:46:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:48:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:48:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 09:50:04 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 09:50:04 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 09:50:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:50:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:52:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:52:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:57:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:58:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:58:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:58:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:58:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:58:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:58:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:58:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:58:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:58:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 09:58:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 09:58:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 10:08:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 10:08:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 10:08:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 10:08:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 10:13:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 10:13:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 10:24:32 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 10:24:32 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 10:34:19 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Error - 2014-08-27 10:40:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 10:40:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 10:40:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 10:40:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:11:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:11:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:14:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:14:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:15:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:15:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:15:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:15:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:15:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:15:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:15:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:15:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:15:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:15:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:16:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:16:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:16:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:16:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:17:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:17:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:17:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:17:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 11:18:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:18:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 11:19:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:19:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 11:19:45 --> 8 - Undefined index: date in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 192
Error - 2014-08-27 11:19:45 --> 8 - Undefined index: fonction_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 204
Error - 2014-08-27 11:19:45 --> 8 - Undefined index: type_contrat in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 204
Error - 2014-08-27 11:19:45 --> 8 - Undefined index: secteur_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 204
Error - 2014-08-27 11:19:45 --> 8 - Undefined index: recruteur_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 204
Error - 2014-08-27 11:19:45 --> 8 - Undefined index: ville in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 204
Warning - 2014-08-27 11:19:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:19:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:20:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:20:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:20:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:20:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:20:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:20:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:20:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:20:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:20:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:20:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:32:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:32:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 11:52:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 11:52:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 11:57:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:57:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:57:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:57:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:57:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:57:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:57:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:57:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:58:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:58:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 11:58:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 11:58:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 12:07:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:07:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 12:21:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:21:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 12:21:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:21:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 12:22:12 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 12:22:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:22:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 12:22:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:22:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 12:25:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:25:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 12:25:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:25:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 12:47:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 12:47:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 12:47:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:47:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 12:52:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 12:52:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 12:52:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:52:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 12:55:17 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 12:55:31 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 12:55:48 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 12:55:53 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 12:56:03 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-27 12:57:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:57:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 12:59:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 12:59:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 13:07:46 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 13:07:46 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 13:09:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 13:09:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 13:12:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 13:12:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 13:14:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 13:14:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 13:15:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 13:15:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 13:16:26 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 13:18:59 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2014-08-27 13:25:21 --> 1203 - SQLSTATE[42000] [1203] User jobsite already has more than 'max_user_connections' active connections in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 86
Warning - 2014-08-27 13:53:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 13:53:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 13:53:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 13:53:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 13:55:31 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 13:55:31 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 13:56:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 13:56:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 13:58:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 13:58:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 13:58:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 13:58:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 14:04:19 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 14:06:51 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 14:09:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 14:09:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 14:29:56 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/recruteur.php on line 633
Error - 2014-08-27 14:43:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 14:43:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 14:50:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 14:50:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 14:51:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 14:51:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 14:52:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 14:52:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 14:53:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 14:53:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 14:53:21 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-08-27 15:00:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 15:00:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 15:00:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 15:00:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 15:00:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 15:00:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 15:00:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 15:00:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 15:00:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 15:00:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 15:12:24 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 15:17:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 15:17:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 15:18:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 15:18:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 15:31:21 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 15:31:21 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 15:33:59 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 16:01:04 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 16:01:04 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 16:02:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 16:02:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 16:02:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 16:02:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 16:20:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 16:20:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 16:21:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 16:21:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 16:31:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 16:31:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-08-27 16:34:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 16:34:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 16:37:24 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/offre.php on line 163
Warning - 2014-08-27 16:37:35 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-08-27 16:44:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 16:44:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 16:44:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 16:44:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 16:44:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 16:44:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 16:46:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 16:46:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 17:00:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 17:00:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-08-27 17:05:51 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-08-27 17:05:51 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-08-27 17:05:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 17:05:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 17:08:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 17:08:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 17:21:07 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 504
Error - 2014-08-27 17:48:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 17:48:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 17:50:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 17:50:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 17:50:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 17:50:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 18:10:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 18:10:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 18:26:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 18:26:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 20:05:16 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/recruteur.php on line 633
Error - 2014-08-27 20:10:05 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 20:10:21 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 20:16:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 20:16:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 20:20:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 20:20:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 20:36:33 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 21:16:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 21:16:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 21:46:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 21:46:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 22:08:57 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 22:40:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 22:40:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 22:42:28 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 22:43:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 22:43:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 22:45:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 22:45:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 22:47:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 22:47:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 22:51:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 22:51:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 22:53:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 22:53:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 22:56:02 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 23:23:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 23:23:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 23:24:05 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-08-27 23:35:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 23:35:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 23:51:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 23:51:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-08-27 23:55:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-08-27 23:55:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
