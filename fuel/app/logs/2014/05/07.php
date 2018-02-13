<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Error - 2014-05-07 00:28:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 00:28:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 00:56:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 00:56:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 00:57:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 00:57:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 00:57:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 00:57:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 01:10:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 01:10:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 01:17:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 01:17:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 01:24:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 01:24:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 01:24:43 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 01:31:09 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2014-05-07 01:31:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 01:31:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 01:31:23 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2014-05-07 01:31:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 01:31:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 01:33:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 01:33:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 01:33:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 01:33:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 01:34:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 01:34:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 01:34:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 01:34:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 01:43:17 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='N'Zérékoré' AND 1=1 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2014-05-07 01:43:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 01:43:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 01:59:03 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 02:43:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 02:43:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 03:09:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 03:09:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 03:09:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 03:09:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 03:09:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 03:09:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 03:46:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 03:46:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 03:46:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 03:46:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 03:46:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 03:46:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 04:02:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 04:02:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 04:54:32 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 04:56:21 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 05:09:13 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 05:23:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 05:23:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 05:23:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 05:23:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 05:33:50 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 05:47:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 05:47:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 05:49:15 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 05:51:21 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 05:54:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 05:54:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 06:02:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 06:02:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 06:27:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 06:27:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:09:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:09:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:09:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:09:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:14:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:14:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:14:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:14:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:14:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:14:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:14:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:14:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:14:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:14:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:15:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:15:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:16:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:16:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:17:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:17:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:17:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:17:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:17:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:17:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:38:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:38:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:43:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:43:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:43:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:43:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:49:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:49:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 07:55:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 07:55:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 08:23:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 08:23:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 08:24:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 08:24:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 08:24:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 08:24:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 08:33:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 08:33:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 08:33:53 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 08:33:53 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 08:36:04 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:36:14 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:36:26 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:36:36 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:36:47 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:37:01 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:37:23 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:37:47 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:37:50 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:37:58 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:38:16 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:38:19 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:38:28 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:38:33 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 08:38:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 08:38:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 08:38:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 08:38:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 08:38:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 08:38:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 08:38:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 08:38:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 09:31:24 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 09:39:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 09:39:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 09:53:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 09:53:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 09:53:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 09:53:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 09:53:45 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 10:04:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:04:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:07:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:07:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:07:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:07:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:08:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:08:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:08:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:08:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:09:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:09:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 10:13:39 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 10:13:39 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 10:13:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:13:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:14:41 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 10:14:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:14:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:15:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:15:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:16:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:16:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:16:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:16:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:18:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:18:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:19:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:19:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:19:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:19:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:40:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:40:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:40:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:40:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:40:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:40:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:49:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:49:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:49:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:49:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:50:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:50:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:51:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:51:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:54:17 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 503
Error - 2014-05-07 10:55:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:55:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:55:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:55:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 10:58:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 10:58:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:04:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:04:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:05:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:05:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:06:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:06:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:13:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:13:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:13:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:13:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:13:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:13:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 11:15:38 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-05-07 11:18:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:18:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:20:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:20:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:20:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:20:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:20:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:20:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:30:20 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:30:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 11:33:21 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 503
Warning - 2014-05-07 11:39:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:39:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 11:40:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:40:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 11:40:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:40:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 11:41:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:41:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 11:41:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:41:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:41:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 11:41:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 11:56:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:56:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 11:56:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:56:28 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 11:57:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:57:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 11:57:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 11:57:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 11:58:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:58:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 11:59:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 11:59:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:00:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:00:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:00:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:00:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:00:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:00:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:00:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:00:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:00:20 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:00:20 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:00:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:00:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:00:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:00:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:00:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:00:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:02:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:02:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 12:02:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 12:02:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 12:08:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 12:08:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 12:08:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 12:08:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 12:20:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 12:20:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 12:20:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 12:20:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 12:29:28 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-05-07 12:30:25 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:30:25 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:30:33 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:30:33 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:30:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:30:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:31:07 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:31:07 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 12:31:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:31:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 12:31:14 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND 1=1 AND offre.fonction_id=5 AND offre.type_contrat='CDI' AND 1=1 AND 1=1 AND LOWER(ville) LIKE '%conakry%'  AND offre.id < 156 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2014-05-07 12:33:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 12:33:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 13:27:00 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 13:27:00 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 13:31:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 13:31:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 13:36:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 13:36:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 13:38:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 13:38:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 13:38:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 13:38:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 13:38:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 13:38:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 13:42:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 13:42:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 13:47:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 13:47:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 13:48:21 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-05-07 13:48:21 --> 8 - Undefined variable: recruteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/recruteur_header.php on line 3
Error - 2014-05-07 13:48:21 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/recruteur_header.php on line 3
Error - 2014-05-07 13:48:21 --> Error - Property "categorie" not found for Model_Secteur. in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/packages/orm/classes/model.php on line 865
Warning - 2014-05-07 13:49:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 13:49:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 13:50:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 13:50:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 13:51:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 13:51:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 13:51:47 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 13:51:47 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 13:57:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 13:57:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 13:57:07 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 14:00:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:00:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 14:01:52 --> 8 - Undefined index: monfichier in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/candidat.php on line 503
Error - 2014-05-07 14:02:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:02:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 14:02:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:02:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 14:02:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:02:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 14:05:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:05:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 14:05:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:05:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 14:05:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:05:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 14:06:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:06:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 14:06:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:06:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 14:07:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:07:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 14:14:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:14:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 14:14:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:14:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 14:15:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:15:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 14:15:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:15:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 14:16:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:16:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 14:16:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:16:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 14:16:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:16:26 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 14:17:22 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:17:22 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 14:18:35 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/recruteur_header.php on line 3
Error - 2014-05-07 14:18:38 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND 1=1 AND offre.fonction_id=18 AND 1=1 AND 1=1 AND 1=1 AND LOWER(ville) LIKE '%conakry%'  AND offre.id < 137 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2014-05-07 14:19:23 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:19:23 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 14:33:41 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 14:34:34 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Warning - 2014-05-07 14:36:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:36:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 14:36:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:36:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 14:36:39 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:36:39 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 14:36:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 14:36:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 14:36:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 14:36:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 15:07:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:07:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 15:08:20 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-05-07 15:09:34 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2014-05-07 15:09:37 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2014-05-07 15:17:17 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'candidat_id' cannot be null with query: "INSERT INTO `messagerecruteur` (`candidat_id`, `recruteur_id`, `sujet`, `ajout`, `message`, `lu`) VALUES (null, '82', 'Offre d\'emploi: un(e)  Responsable du service ', '2014-05-07 15:17:17', 'suite a votre avis de recrutement au poste de responsable du service et reinstallation  j\'ai l\'honneur de venir três respectueusement au pres de vous solliciter mon intention me porter candidats a ce poste qui a atire mon attention  et je pense etre capable de vos satisfaire  vue mes competentes et mês experiences ici en guinee et au cap vert ', 0)" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2014-05-07 15:19:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:19:25 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:20:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:20:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:20:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:20:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 15:31:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 15:31:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 15:31:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:31:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:52:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:52:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:52:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:52:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:03 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 15:53:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 15:53:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 16:03:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 16:03:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 16:14:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 16:14:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 16:14:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 16:14:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 16:16:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 16:16:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 16:49:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 16:49:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 16:49:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 16:49:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 16:49:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 16:49:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 16:57:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 16:57:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 16:57:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 16:57:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 16:57:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 16:57:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 17:02:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 17:02:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 17:02:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 17:02:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 17:03:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 17:03:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 17:03:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 17:03:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 17:03:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 17:03:48 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 17:13:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 17:13:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 18:20:32 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 19:15:25 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 19:51:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 19:51:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 20:15:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 20:15:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 21:03:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 21:03:18 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 21:04:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 21:04:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 21:04:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 21:04:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 21:04:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 21:04:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 21:54:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 21:54:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Error - 2014-05-07 22:08:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 22:08:51 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 22:12:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 22:12:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 22:12:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 22:12:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 22:12:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 22:12:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 22:13:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 22:13:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
Warning - 2014-05-07 22:14:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 22:14:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 22:15:18 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/recruteur/detail.php on line 21
Error - 2014-05-07 22:21:56 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/classes/controller/recruteur.php on line 633
Warning - 2014-05-07 22:34:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 22:34:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 22:35:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 22:35:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 22:35:29 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 22:35:29 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2014-05-07 23:00:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2014-05-07 23:00:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2014-05-07 23:56:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 5
Error - 2014-05-07 23:56:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/jobsite/fuel/app/views/404.php on line 45
