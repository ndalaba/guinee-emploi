<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Error - 2015-07-03 00:16:23 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 00:22:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 00:22:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 00:43:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 00:43:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 00:59:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 00:59:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 01:07:37 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'z??r??kor??%' ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND 1=1 AND 1=1 AND 1=1 AND 1=1 AND 1=1 AND LOWER(offre.ville) LIKE '%n'z�r�kor�%' ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-07-03 02:09:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 02:09:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 02:17:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 02:17:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 02:27:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 02:27:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 02:37:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 02:37:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 02:39:37 --> 2003 - SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'sowib72.startlogicmysql.com' (113) in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2015-07-03 02:45:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 02:45:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 02:46:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 02:46:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 02:51:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 02:51:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 02:51:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 02:51:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 02:51:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 02:51:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 02:56:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 02:56:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 03:06:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 03:06:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 03:10:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 03:10:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 03:57:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 03:57:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 04:17:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 04:17:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 04:33:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 04:33:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 04:33:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 04:33:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 04:36:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 04:36:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 04:36:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 04:36:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 05:04:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 05:04:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 05:10:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 05:10:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 05:54:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 05:54:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 05:54:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 05:54:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 05:54:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 05:54:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 05:54:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 05:54:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 05:55:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 05:55:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 05:55:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 05:55:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 05:55:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 05:55:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 05:55:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 05:55:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 05:56:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 05:56:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 06:45:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 06:45:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 06:57:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 06:57:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 06:57:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 06:57:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 07:09:29 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 07:44:23 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 07:51:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 07:51:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:01:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:01:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 08:07:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 08:07:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 08:07:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:07:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 08:08:19 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 08:08:19 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 08:08:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:08:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:13:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:13:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:13:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:13:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:13:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:13:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:17:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:17:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:17:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:17:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 08:30:59 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 08:30:59 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 08:33:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 08:33:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 08:43:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:43:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:43:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:43:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:45:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:45:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:45:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:45:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:46:37 --> 2003 - SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'sowib72.startlogicmysql.com' (113) in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Warning - 2015-07-03 08:46:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 08:46:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 08:46:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:46:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:47:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:47:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 08:47:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 08:47:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 09:05:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 09:05:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 09:09:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 09:09:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 09:09:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 09:09:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 09:09:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 09:09:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 09:10:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 09:10:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 09:10:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 09:10:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 09:17:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 09:17:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 09:19:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 09:19:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 09:20:38 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 09:20:38 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 09:22:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 09:22:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 09:24:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 09:24:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 09:27:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 09:27:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 09:28:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 09:28:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 09:32:58 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-07-03 09:34:15 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-07-03 09:34:46 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-07-03 09:35:08 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-07-03 09:40:21 --> 2003 - SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'sowib72.startlogicmysql.com' (113) in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2015-07-03 09:40:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 09:40:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 09:50:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 09:50:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 09:50:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 09:50:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 10:05:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:05:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 10:08:08 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-07-03 10:09:47 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:09:47 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 10:16:26 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'candidat_id' cannot be null with query: "INSERT INTO `messagerecruteur` (`candidat_id`, `recruteur_id`, `sujet`, `ajout`, `message`, `lu`) VALUES (null, '238', 'Offre d\'emploi: TRAVAIL A TEMPS PARTIEL AUX ETUDIANTS PAS ENCORE DIPLOMES', '2015-07-03 10:16:26', 'Tolno Raymond \r\nTel:669674590\r\nEmail: slamy3289@yahoo.fr\r\nAdresse: koloma 1\r\n             Gestion marketing \r\n       expérience professionnels:\r\n• gestionnaire planète service (2011-2013)\r\n      Compétences professionnels:\r\n•capacité de gère les relations clients\r\n•capacité de vente de produit ( be to be)\r\n•capacité propose des stratégies de vente de produit\r\n•capacité de développé le Porte-feuille client\r\n•capacité de faire des études de marché \r\n•capacité d\'analyse du comportement du consommateurs \r\n•capacité de gestionnaire d\'entreprise \r\n       expérience Scolaire \r\n•étude en cours en master & gestion marketing \r\n•Licence gestion & marketing université kofi annnan (2013-2014) \r\n •diplôme de bac unique session (2008-2009) école semyg2\r\n•diplome de brevet session (2005-2006) école Anastasis \r\n•diplôme d\'examen d\'entre 6em (2001-2002) \r\n     Langue parler \r\n•Langue international : anglais de base; français soutenu \r\n•Langue nationale: soussou,malinke,peulh,kissi.\r\n                 Loisirs:\r\nLire, promenade, se connecter \r\n      statut :\r\n• célibataire ', 0)" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-07-03 10:16:34 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'candidat_id' cannot be null with query: "INSERT INTO `messagerecruteur` (`candidat_id`, `recruteur_id`, `sujet`, `ajout`, `message`, `lu`) VALUES (null, '238', 'Offre d\'emploi: TRAVAIL A TEMPS PARTIEL AUX ETUDIANTS PAS ENCORE DIPLOMES', '2015-07-03 10:16:34', 'Tolno Raymond \r\nTel:669674590\r\nEmail: slamy3289@yahoo.fr\r\nAdresse: koloma 1\r\n             Gestion marketing \r\n       expérience professionnels:\r\n• gestionnaire planète service (2011-2013)\r\n      Compétences professionnels:\r\n•capacité de gère les relations clients\r\n•capacité de vente de produit ( be to be)\r\n•capacité propose des stratégies de vente de produit\r\n•capacité de développé le Porte-feuille client\r\n•capacité de faire des études de marché \r\n•capacité d\'analyse du comportement du consommateurs \r\n•capacité de gestionnaire d\'entreprise \r\n       expérience Scolaire \r\n•étude en cours en master & gestion marketing \r\n•Licence gestion & marketing université kofi annnan (2013-2014) \r\n •diplôme de bac unique session (2008-2009) école semyg2\r\n•diplome de brevet session (2005-2006) école Anastasis \r\n•diplôme d\'examen d\'entre 6em (2001-2002) \r\n     Langue parler \r\n•Langue international : anglais de base; français soutenu \r\n•Langue nationale: soussou,malinke,peulh,kissi.\r\n                 Loisirs:\r\nLire, promenade, se connecter \r\n      statut :\r\n• célibataire ', 0)" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-07-03 10:16:41 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'candidat_id' cannot be null with query: "INSERT INTO `messagerecruteur` (`candidat_id`, `recruteur_id`, `sujet`, `ajout`, `message`, `lu`) VALUES (null, '238', 'Offre d\'emploi: TRAVAIL A TEMPS PARTIEL AUX ETUDIANTS PAS ENCORE DIPLOMES', '2015-07-03 10:16:41', 'Tolno Raymond \r\nTel:669674590\r\nEmail: slamy3289@yahoo.fr\r\nAdresse: koloma 1\r\n             Gestion marketing \r\n       expérience professionnels:\r\n• gestionnaire planète service (2011-2013)\r\n      Compétences professionnels:\r\n•capacité de gère les relations clients\r\n•capacité de vente de produit ( be to be)\r\n•capacité propose des stratégies de vente de produit\r\n•capacité de développé le Porte-feuille client\r\n•capacité de faire des études de marché \r\n•capacité d\'analyse du comportement du consommateurs \r\n•capacité de gestionnaire d\'entreprise \r\n       expérience Scolaire \r\n•étude en cours en master & gestion marketing \r\n•Licence gestion & marketing université kofi annnan (2013-2014) \r\n •diplôme de bac unique session (2008-2009) école semyg2\r\n•diplome de brevet session (2005-2006) école Anastasis \r\n•diplôme d\'examen d\'entre 6em (2001-2002) \r\n     Langue parler \r\n•Langue international : anglais de base; français soutenu \r\n•Langue nationale: soussou,malinke,peulh,kissi.\r\n                 Loisirs:\r\nLire, promenade, se connecter \r\n      statut :\r\n• célibataire ', 0)" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-07-03 10:16:43 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'candidat_id' cannot be null with query: "INSERT INTO `messagerecruteur` (`candidat_id`, `recruteur_id`, `sujet`, `ajout`, `message`, `lu`) VALUES (null, '238', 'Offre d\'emploi: TRAVAIL A TEMPS PARTIEL AUX ETUDIANTS PAS ENCORE DIPLOMES', '2015-07-03 10:16:43', 'Tolno Raymond \r\nTel:669674590\r\nEmail: slamy3289@yahoo.fr\r\nAdresse: koloma 1\r\n             Gestion marketing \r\n       expérience professionnels:\r\n• gestionnaire planète service (2011-2013)\r\n      Compétences professionnels:\r\n•capacité de gère les relations clients\r\n•capacité de vente de produit ( be to be)\r\n•capacité propose des stratégies de vente de produit\r\n•capacité de développé le Porte-feuille client\r\n•capacité de faire des études de marché \r\n•capacité d\'analyse du comportement du consommateurs \r\n•capacité de gestionnaire d\'entreprise \r\n       expérience Scolaire \r\n•étude en cours en master & gestion marketing \r\n•Licence gestion & marketing université kofi annnan (2013-2014) \r\n •diplôme de bac unique session (2008-2009) école semyg2\r\n•diplome de brevet session (2005-2006) école Anastasis \r\n•diplôme d\'examen d\'entre 6em (2001-2002) \r\n     Langue parler \r\n•Langue international : anglais de base; français soutenu \r\n•Langue nationale: soussou,malinke,peulh,kissi.\r\n                 Loisirs:\r\nLire, promenade, se connecter \r\n      statut :\r\n• célibataire ', 0)" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-07-03 10:16:45 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'candidat_id' cannot be null with query: "INSERT INTO `messagerecruteur` (`candidat_id`, `recruteur_id`, `sujet`, `ajout`, `message`, `lu`) VALUES (null, '238', 'Offre d\'emploi: TRAVAIL A TEMPS PARTIEL AUX ETUDIANTS PAS ENCORE DIPLOMES', '2015-07-03 10:16:45', 'Tolno Raymond \r\nTel:669674590\r\nEmail: slamy3289@yahoo.fr\r\nAdresse: koloma 1\r\n             Gestion marketing \r\n       expérience professionnels:\r\n• gestionnaire planète service (2011-2013)\r\n      Compétences professionnels:\r\n•capacité de gère les relations clients\r\n•capacité de vente de produit ( be to be)\r\n•capacité propose des stratégies de vente de produit\r\n•capacité de développé le Porte-feuille client\r\n•capacité de faire des études de marché \r\n•capacité d\'analyse du comportement du consommateurs \r\n•capacité de gestionnaire d\'entreprise \r\n       expérience Scolaire \r\n•étude en cours en master & gestion marketing \r\n•Licence gestion & marketing université kofi annnan (2013-2014) \r\n •diplôme de bac unique session (2008-2009) école semyg2\r\n•diplome de brevet session (2005-2006) école Anastasis \r\n•diplôme d\'examen d\'entre 6em (2001-2002) \r\n     Langue parler \r\n•Langue international : anglais de base; français soutenu \r\n•Langue nationale: soussou,malinke,peulh,kissi.\r\n                 Loisirs:\r\nLire, promenade, se connecter \r\n      statut :\r\n• célibataire ', 0)" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-07-03 10:19:24 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'candidat_id' cannot be null with query: "INSERT INTO `messagerecruteur` (`candidat_id`, `recruteur_id`, `sujet`, `ajout`, `message`, `lu`) VALUES (null, '238', 'Offre d\'emploi: TRAVAIL A TEMPS PARTIEL AUX ETUDIANTS PAS ENCORE DIPLOMES', '2015-07-03 10:19:24', 'Tolno Raymond \r\nTel:669674590\r\nEmail: slamy3289@yahoo.fr\r\nAdresse: koloma 1\r\n             Gestion marketing \r\n       expérience professionnels:\r\n• gestionnaire planète service (2011-2013)\r\n      Compétences professionnels:\r\n•capacité de gère les relations clients\r\n•capacité de vente de produit ( be to be)\r\n•capacité propose des stratégies de vente de produit\r\n•capacité de développé le Porte-feuille client\r\n•capacité de faire des études de marché \r\n•capacité d\'analyse du comportement du consommateurs \r\n•capacité de gestionnaire d\'entreprise \r\n       expérience Scolaire \r\n•étude en cours en master & gestion marketing \r\n•Licence gestion & marketing université kofi annnan (2013-2014) \r\n •diplôme de bac unique session (2008-2009) école semyg2\r\n•diplome de brevet session (2005-2006) école Anastasis \r\n•diplôme d\'examen d\'entre 6em (2001-2002) \r\n     Langue parler \r\n•Langue international : anglais de base; français soutenu \r\n•Langue nationale: soussou,malinke,peulh,kissi.\r\n                 Loisirs:\r\nLire, promenade, se connecter \r\n      statut :\r\n• célibataire \r\n\r\n', 0)" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-07-03 10:19:29 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'candidat_id' cannot be null with query: "INSERT INTO `messagerecruteur` (`candidat_id`, `recruteur_id`, `sujet`, `ajout`, `message`, `lu`) VALUES (null, '238', 'Offre d\'emploi: TRAVAIL A TEMPS PARTIEL AUX ETUDIANTS PAS ENCORE DIPLOMES', '2015-07-03 10:19:29', 'Tolno Raymond \r\nTel:669674590\r\nEmail: slamy3289@yahoo.fr\r\nAdresse: koloma 1\r\n             Gestion marketing \r\n       expérience professionnels:\r\n• gestionnaire planète service (2011-2013)\r\n      Compétences professionnels:\r\n•capacité de gère les relations clients\r\n•capacité de vente de produit ( be to be)\r\n•capacité propose des stratégies de vente de produit\r\n•capacité de développé le Porte-feuille client\r\n•capacité de faire des études de marché \r\n•capacité d\'analyse du comportement du consommateurs \r\n•capacité de gestionnaire d\'entreprise \r\n       expérience Scolaire \r\n•étude en cours en master & gestion marketing \r\n•Licence gestion & marketing université kofi annnan (2013-2014) \r\n •diplôme de bac unique session (2008-2009) école semyg2\r\n•diplome de brevet session (2005-2006) école Anastasis \r\n•diplôme d\'examen d\'entre 6em (2001-2002) \r\n     Langue parler \r\n•Langue international : anglais de base; français soutenu \r\n•Langue nationale: soussou,malinke,peulh,kissi.\r\n                 Loisirs:\r\nLire, promenade, se connecter \r\n      statut :\r\n• célibataire \r\n\r\n', 0)" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-07-03 10:19:36 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'candidat_id' cannot be null with query: "INSERT INTO `messagerecruteur` (`candidat_id`, `recruteur_id`, `sujet`, `ajout`, `message`, `lu`) VALUES (null, '238', 'Offre d\'emploi: TRAVAIL A TEMPS PARTIEL AUX ETUDIANTS PAS ENCORE DIPLOMES', '2015-07-03 10:19:36', 'Tolno Raymond \r\nTel:669674590\r\nEmail: slamy3289@yahoo.fr\r\nAdresse: koloma 1\r\n             Gestion marketing \r\n       expérience professionnels:\r\n• gestionnaire planète service (2011-2013)\r\n      Compétences professionnels:\r\n•capacité de gère les relations clients\r\n•capacité de vente de produit ( be to be)\r\n•capacité propose des stratégies de vente de produit\r\n•capacité de développé le Porte-feuille client\r\n•capacité de faire des études de marché \r\n•capacité d\'analyse du comportement du consommateurs \r\n•capacité de gestionnaire d\'entreprise \r\n       expérience Scolaire \r\n•étude en cours en master & gestion marketing \r\n•Licence gestion & marketing université kofi annnan (2013-2014) \r\n •diplôme de bac unique session (2008-2009) école semyg2\r\n•diplome de brevet session (2005-2006) école Anastasis \r\n•diplôme d\'examen d\'entre 6em (2001-2002) \r\n     Langue parler \r\n•Langue international : anglais de base; français soutenu \r\n•Langue nationale: soussou,malinke,peulh,kissi.\r\n                 Loisirs:\r\nLire, promenade, se connecter \r\n      statut :\r\n• célibataire \r\n\r\n', 0)" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2015-07-03 10:35:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:35:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 10:35:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:35:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 10:39:07 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-07-03 10:41:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:41:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 10:41:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:41:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 10:41:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 10:41:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 10:41:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:41:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 10:41:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:41:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 10:41:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:41:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 10:41:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:41:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 10:42:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 10:42:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 10:45:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 10:45:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 11:04:02 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 11:04:02 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 11:04:02 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 11:04:02 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 11:45:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 11:45:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 11:56:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 11:56:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 12:02:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 12:02:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 12:03:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 12:03:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 12:04:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:04:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 12:25:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:25:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 12:25:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:25:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 12:25:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:25:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 12:27:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:27:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 12:27:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:27:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 12:27:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 12:27:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 12:28:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:28:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 12:29:51 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:29:51 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 12:30:00 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-07-03 12:36:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:36:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 12:37:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:37:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 12:37:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 12:37:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 12:39:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:39:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 12:39:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 12:39:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 12:39:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:39:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 12:39:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:39:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 12:39:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 12:39:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 12:42:52 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 12:46:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 12:46:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:33:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:33:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:33:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:33:49 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:34:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:34:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 13:34:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 13:34:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 13:34:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:34:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:46:56 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 13:51:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:51:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:51:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:51:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:51:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:51:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:51:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:51:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:51:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:51:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:51:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:51:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:51:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:51:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:51:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:51:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:51:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:51:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 13:51:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 13:51:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 13:52:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 13:52:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 13:52:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 13:52:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 13:52:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 13:52:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 13:52:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 13:52:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 13:52:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 13:52:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 13:52:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 13:52:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 14:00:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:00:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 14:07:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:07:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 14:14:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:14:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 14:19:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:19:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 14:19:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:19:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 14:39:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:39:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 14:49:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:49:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 14:50:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:50:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 14:53:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 14:53:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 14:53:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:53:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 14:54:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 14:54:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 14:55:03 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 14:55:03 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 14:55:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:55:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 14:55:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 14:55:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 14:55:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 14:55:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 14:57:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 14:57:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 15:00:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 15:00:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 15:02:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 15:02:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 15:04:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 15:04:23 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 15:30:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 15:30:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 15:31:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:31:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 15:32:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 15:32:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 15:43:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 15:43:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 15:45:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:45:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 15:45:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:45:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 15:45:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:45:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 15:47:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:47:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 15:48:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:48:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 15:49:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:49:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 15:51:09 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:51:09 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 15:55:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 15:55:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 15:56:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:56:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 15:56:42 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-07-03 15:56:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:56:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 15:57:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:57:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 15:58:50 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 15:58:50 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 16:00:08 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 16:00:08 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 16:05:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 16:05:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 16:17:24 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 16:17:44 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 16:17:48 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 16:19:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 16:19:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 16:19:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 16:19:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 16:57:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 16:57:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 16:59:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 16:59:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 17:33:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 17:33:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 18:05:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 18:05:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 18:05:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 18:05:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 18:05:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 18:05:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 18:06:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 18:06:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 18:18:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 18:18:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 18:43:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 18:43:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 18:43:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 18:43:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 18:48:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 18:48:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 18:48:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 18:48:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 18:48:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 18:48:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 18:48:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 18:48:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 18:49:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 18:49:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 18:57:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 18:57:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 19:08:45 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 19:08:45 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 19:13:12 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-07-03 19:13:43 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/confirmation_inscription.php on line 34
Warning - 2015-07-03 19:29:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 19:29:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 19:29:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 19:29:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 19:32:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 19:32:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 19:33:53 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 19:33:53 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 19:34:19 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 19:34:19 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 19:43:39 --> 2003 - SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'sowib72.startlogicmysql.com' (113) in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2015-07-03 19:45:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 19:45:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 19:58:31 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/recruteur.php on line 628
Warning - 2015-07-03 20:24:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 20:24:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 20:24:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 20:24:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 20:25:39 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 20:25:39 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 20:31:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 20:31:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 20:33:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 20:33:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 20:35:11 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 20:35:11 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 20:35:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 20:35:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 20:36:03 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-07-03 20:36:53 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-07-03 20:41:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 20:41:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 20:41:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 20:41:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 20:41:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 20:41:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 20:41:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 20:41:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 20:42:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 20:42:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 20:43:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 20:43:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 21:08:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 21:08:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 21:09:21 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 21:22:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 21:22:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 21:40:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 21:40:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 21:40:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 21:40:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 21:41:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 21:41:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 21:41:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 21:41:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 21:42:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 21:42:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 21:42:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 21:42:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 22:24:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:24:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 22:24:44 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 22:47:48 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-07-03 22:52:46 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 22:52:46 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 22:52:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:52:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 22:52:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:52:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 22:53:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 22:53:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-07-03 22:58:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:58:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 22:58:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:58:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 22:58:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:58:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 22:58:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:58:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 22:58:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:58:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 22:58:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:58:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 22:58:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 22:58:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-07-03 23:00:10 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-07-03 23:00:11 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-07-03 23:00:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 23:00:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 23:04:13 --> 8 - Undefined index: date in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 195
Error - 2015-07-03 23:04:13 --> 8 - Undefined index: recruteur_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 207
Error - 2015-07-03 23:04:13 --> 8 - Undefined index: ville in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 207
Warning - 2015-07-03 23:04:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-07-03 23:04:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-07-03 23:07:27 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-07-03 23:07:36 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-07-03 23:46:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 23:46:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 23:51:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-07-03 23:51:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-07-03 23:52:53 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 166
