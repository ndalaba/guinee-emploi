<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Error - 2015-03-13 00:23:18 --> 2013 - SQLSTATE[HY000] [2013] Lost connection to MySQL server at 'reading initial communication packet', system error: 113 in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 86
Error - 2015-03-13 00:23:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 00:23:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 00:30:37 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 01:07:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 01:07:39 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 01:26:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 01:26:42 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 01:36:49 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 163
Error - 2015-03-13 01:37:28 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 163
Warning - 2015-03-13 01:47:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 01:47:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 01:51:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 01:51:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 01:54:19 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 01:54:19 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 01:55:06 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND 1=1 AND offre.fonction_id=17 AND 1=1 AND 1=1 AND 1=1 AND LOWER(ville) LIKE '%conakry%'  AND offre.id < 134 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-03-13 01:55:28 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND 1=1 AND offre.fonction_id=17 AND 1=1 AND 1=1 AND 1=1 AND LOWER(ville) LIKE '%conakry%'  AND offre.id < 134 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-03-13 01:56:03 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 01:56:03 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 01:56:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 01:56:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 01:56:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 01:56:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 01:56:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 01:56:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 01:56:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 01:56:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 01:56:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 01:56:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 01:56:11 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND 1=1 AND offre.fonction_id=17 AND 1=1 AND 1=1 AND 1=1 AND LOWER(ville) LIKE '%conakry%'  AND offre.id < 134 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2015-03-13 01:57:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 01:57:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 01:57:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 01:57:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 02:03:04 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 02:23:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 02:23:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 02:23:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 02:23:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 02:30:46 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 02:59:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 02:59:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 03:26:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 03:26:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 03:26:07 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 03:32:57 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 04:31:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 04:31:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 04:41:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 04:41:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 05:16:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 05:16:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 05:19:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 05:19:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 05:19:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 05:19:53 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 05:49:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 05:49:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 06:06:07 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 163
Error - 2015-03-13 06:13:57 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-03-13 06:20:52 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 06:20:52 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 07:10:00 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-03-13 07:17:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 07:17:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 07:47:45 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 07:47:45 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 07:52:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 07:52:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 07:53:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 07:53:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 08:02:56 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-03-13 08:20:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 08:20:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 08:20:21 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 08:20:21 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 08:24:10 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'offre de superviseur pour suivie ??valuation %' OR LOWER(offre.description) LIKE' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Conakry' AND (LOWER(offre.titre) LIKE '%terre des hommes appel d'offre de superviseur pour suivie ã©valuation %' OR LOWER(offre.description) LIKE '%terre des hommes appel d'offre de superviseur pour suivie ã©valuation %') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-03-13 08:24:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 08:24:11 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 08:24:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 08:24:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 08:24:29 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'offre de superviseur pour suivie ??valuation %' OR LOWER(offre.description) LIKE' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Conakry' AND (LOWER(offre.titre) LIKE '%terre des hommes appel d'offre de superviseur pour suivie ã©valuation %' OR LOWER(offre.description) LIKE '%terre des hommes appel d'offre de superviseur pour suivie ã©valuation %') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-03-13 08:24:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 08:24:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 08:24:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 08:24:30 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 08:28:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 08:28:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 08:28:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 08:28:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 08:38:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 08:38:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 09:06:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 09:06:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 09:47:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 09:47:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 09:48:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 09:48:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 09:52:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 09:52:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 09:53:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 09:53:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 10:05:35 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-03-13 10:11:09 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:11:09 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:11:40 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:11:40 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:13:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:13:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:14:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:14:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:14:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:14:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:14:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:14:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:15:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:15:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:16:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:16:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:16:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:16:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:18:32 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:18:32 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:20:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:20:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:32:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:32:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 10:32:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 10:32:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 10:33:51 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:33:51 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:34:30 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:34:30 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 10:35:36 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-03-13 10:36:30 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 10:39:48 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:39:48 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:42:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:42:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:42:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:42:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:44:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:44:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 10:45:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:45:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 10:47:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 10:47:06 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 10:48:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 10:48:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 10:48:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 10:48:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 10:48:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 10:48:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 10:53:16 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 10:53:16 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 11:10:53 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:10:53 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 11:32:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 11:32:24 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 11:36:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 11:36:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 11:37:42 --> 8 - Undefined index: date in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 192
Error - 2015-03-13 11:37:42 --> 8 - Undefined index: fonction_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 204
Error - 2015-03-13 11:37:42 --> 8 - Undefined index: type_contrat in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 204
Error - 2015-03-13 11:37:42 --> 8 - Undefined index: secteur_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 204
Error - 2015-03-13 11:37:42 --> 8 - Undefined index: recruteur_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 204
Error - 2015-03-13 11:37:42 --> 8 - Undefined index: ville in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 204
Warning - 2015-03-13 11:37:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:37:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 11:37:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:37:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 11:37:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:37:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 11:38:14 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:38:14 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 11:38:14 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:38:14 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 11:38:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 11:38:15 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 11:44:45 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:44:45 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 11:45:11 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:45:11 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 11:45:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:45:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 11:45:40 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 11:45:40 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 11:48:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 11:48:01 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 11:50:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 11:50:12 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 12:52:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 12:52:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 12:52:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 12:52:56 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 13:06:57 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 13:06:57 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 13:06:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 13:06:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 13:07:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 13:07:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 13:07:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 13:07:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 13:08:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 13:08:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 13:08:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 13:08:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 13:08:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 13:08:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 13:08:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 13:08:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 13:16:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 13:16:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 14:28:37 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 14:28:37 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 14:28:53 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-03-13 14:30:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 14:30:29 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 14:39:02 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 163
Error - 2015-03-13 14:52:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 14:52:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 14:52:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 14:52:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 14:52:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 14:52:44 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 14:52:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 14:52:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 14:52:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 14:52:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 14:53:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 14:53:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 14:53:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 14:53:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 15:08:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 15:08:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 15:13:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 15:13:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 15:22:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 15:22:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 15:25:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 15:25:37 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 15:28:06 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 15:28:06 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 15:28:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 15:28:16 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 15:29:15 --> 8 - Undefined index: date in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 221
Error - 2015-03-13 15:29:15 --> 8 - Undefined index: fonction_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:15 --> 8 - Undefined index: type_contrat in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:15 --> 8 - Undefined index: secteur_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:15 --> 8 - Undefined index: recruteur_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:15 --> 8 - Undefined index: ville in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:15 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=0 AND offre.fonction_id=0 AND offre.type_contrat='' AND offre.recruteur_id=0 AND recruteur.id=0 AND 1=1 AND LOWER(ville) LIKE '%%'  AND offre.id < 280 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2015-03-13 15:29:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 15:29:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 15:29:24 --> 8 - Undefined index: date in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 221
Error - 2015-03-13 15:29:24 --> 8 - Undefined index: fonction_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:24 --> 8 - Undefined index: type_contrat in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:24 --> 8 - Undefined index: secteur_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:24 --> 8 - Undefined index: recruteur_id in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:24 --> 8 - Undefined index: ville in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 233
Error - 2015-03-13 15:29:24 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE offre.actif=1 AND offre.publier=1 AND 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=0 AND offre.fonction_id=0 AND offre.type_contrat='' AND offre.recruteur_id=0 AND recruteur.id=0 AND 1=1 AND LOWER(ville) LIKE '%%'  AND offre.id < 156 ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2015-03-13 15:29:24 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 15:29:24 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 15:29:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 15:29:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 15:30:16 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 15:31:47 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 15:31:48 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 15:31:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 15:31:50 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 16:01:10 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 16:01:46 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 16:03:26 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-03-13 16:05:40 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 16:31:47 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 16:33:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 16:33:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 16:34:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 16:34:45 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 17:04:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 17:04:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 17:05:08 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 17:10:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 17:10:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 17:11:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 17:11:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 17:11:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 17:11:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 17:14:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 17:14:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 17:14:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 17:14:07 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 17:23:40 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 17:23:40 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 17:27:39 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 17:27:39 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 17:28:38 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 17:29:07 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 17:29:12 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-03-13 17:31:00 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 17:32:43 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 17:51:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 17:51:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 17:59:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 17:59:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 18:14:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 18:14:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 18:14:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 18:14:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 18:20:51 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 18:20:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 18:20:52 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 19:04:49 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 19:04:49 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 19:05:01 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 19:05:01 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 19:05:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 19:05:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 19:06:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 19:06:59 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 19:31:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 19:31:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 19:33:13 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 19:33:13 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 19:33:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 19:33:14 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 19:42:55 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 19:46:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 19:46:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 19:50:47 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 19:50:47 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 19:52:46 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'offre mtn%' OR LOWER(offre.description) LIKE '%appel d'offre mtn%') ORDER BY off' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Conakry' AND (LOWER(offre.titre) LIKE '%appel d'offre mtn%' OR LOWER(offre.description) LIKE '%appel d'offre mtn%') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-03-13 19:52:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 19:52:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 19:52:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 19:52:47 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 19:54:54 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 19:54:54 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 19:54:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 19:54:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 19:55:31 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 19:55:31 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 19:55:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 19:55:33 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 19:57:15 --> Error - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'emploi 2015%' OR LOWER(offre.description) LIKE '%offre d'emploi 2015%') ORDER BY' at line 7 with query: "SELECT distinct offre.id,titre,recruteur.logo, recruteur.nom,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,
                 date_debut,type_contrat,offre.recruteur_id,offre.ville,
                 offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as description
                 FROM offre
                 INNER JOIN fonction ON fonction.id=offre.fonction_id
                 LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
                 WHERE offre.actif=1 AND offre.publier=1 AND 1=1 and offre.ville='Conakry' AND (LOWER(offre.titre) LIKE '%offre d'emploi 2015%' OR LOWER(offre.description) LIKE '%offre d'emploi 2015%') ORDER BY offre.id DESC LIMIT 0,10" in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2015-03-13 19:58:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 19:58:02 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 20:06:08 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-03-13 20:21:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 20:21:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 20:24:03 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 20:24:03 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 20:26:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 20:26:13 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 20:46:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 20:46:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 20:50:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 20:50:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 20:57:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 20:57:08 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 20:58:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 20:58:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 20:58:34 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 20:58:34 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 20:58:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 20:58:35 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 20:58:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 20:58:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 20:59:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 20:59:00 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 21:00:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 21:00:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 21:03:12 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 21:03:12 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 21:06:18 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 21:08:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 21:08:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 21:19:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 21:19:54 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 21:30:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 21:30:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 21:30:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 21:30:19 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 21:31:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 21:31:58 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 21:31:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 21:31:58 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 21:31:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 21:31:58 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 21:41:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 21:41:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 21:58:52 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 21:58:52 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 21:59:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 21:59:04 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 21:59:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 21:59:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 21:59:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 21:59:57 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 22:00:34 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-03-13 22:03:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:03:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:03:59 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:03:59 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:05:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:05:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 22:07:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:07:09 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 22:09:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:09:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:10:37 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:10:37 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:11:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:11:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:12:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:12:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:12:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:12:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:12:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:12:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:12:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:12:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:12:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:12:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 22:29:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:29:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 22:35:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:35:32 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 22:36:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:36:21 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 22:42:17 --> Error - Call to a member function getOffres() on a non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/classes/controller/offre.php on line 163
Error - 2015-03-13 22:43:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:43:22 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 22:44:55 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:44:55 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 22:44:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:44:55 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 22:55:15 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 22:55:15 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 22:57:25 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-03-13 22:57:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:57:31 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 22:58:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:58:17 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 22:58:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:58:27 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 22:58:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:58:40 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 22:59:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 22:59:34 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Warning - 2015-03-13 23:01:35 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 23:13:38 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 23:15:07 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 23:15:28 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 23:16:22 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2015-03-13 23:17:01 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-03-13 23:17:42 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 23:30:04 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 23:30:04 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2015-03-13 23:30:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 23:30:05 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 23:43:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 23:43:36 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 23:43:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 23:43:38 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 23:44:26 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 23:44:37 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 23:44:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 23:44:43 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 23:44:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 23:44:46 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 23:45:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 23:45:10 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 23:45:21 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 23:45:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 5
Error - 2015-03-13 23:45:41 --> 8 - Undefined variable: title in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/404.php on line 45
Error - 2015-03-13 23:45:44 --> 8 - Trying to get property of non-object in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 23:45:52 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Error - 2015-03-13 23:45:53 --> 8 - Undefined property: Orm\Query::$secteur in /hermes/bosnaweb02a/b694/sl.sowib72/public_html/guinee-emploi/fuel/app/views/recruteur/detail.php on line 21
Warning - 2015-03-13 23:51:57 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2015-03-13 23:51:57 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2015-03-13 23:52:54 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 23:53:33 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 23:54:46 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2015-03-13 23:55:06 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
