<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Error - 2013-08-29 10:31:00 --> 8 - Undefined variable: title in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/views/404.php on line 5
Error - 2013-08-29 10:31:00 --> 8 - Undefined variable: title in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/views/404.php on line 45
Error - 2013-08-29 10:33:56 --> 8 - Undefined variable: title in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/views/404.php on line 5
Error - 2013-08-29 10:33:57 --> 8 - Undefined variable: title in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/views/404.php on line 45
Error - 2013-08-29 10:34:26 --> 8 - Undefined variable: title in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/views/404.php on line 5
Error - 2013-08-29 10:34:28 --> 8 - Undefined variable: title in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/views/404.php on line 45
Warning - 2013-08-29 10:37:23 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2013-08-29 10:38:14 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Error - 2013-08-29 10:41:46 --> 8 - Undefined variable: title in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/views/404.php on line 5
Error - 2013-08-29 10:41:46 --> 8 - Undefined variable: title in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/views/404.php on line 45
Error - 2013-08-29 10:45:49 --> 2 - unlink(/hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/public/assets/upload/no-profile.jpg): No such file or directory in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/candidat.php on line 255
Error - 2013-08-29 10:48:55 --> 8 - Undefined index: monfichier in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/candidat.php on line 441
Error - 2013-08-29 10:57:03 --> 2 - Illegal offset type in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/packages/email/classes/email/driver.php on line 315
Error - 2013-08-29 11:00:21 --> 2 - Illegal offset type in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/packages/email/classes/email/driver.php on line 315
Warning - 2013-08-29 11:07:48 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:07:48 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:17:05 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:17:05 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:17:10 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:17:10 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:17:14 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:17:14 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:17:35 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:17:35 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2013-08-29 11:17:46 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=2 AND offre.fonction_id=2 AND offre.type_contrat='CDI' AND offre.recruteur_id=44 AND recruteur.id=44 AND 1=1 AND LOWER(ville) LIKE '%paris%'  AND offre.id < 107 ORDER BY offre.id DESC LIMIT 0,20" in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2013-08-29 11:17:48 --> Error - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'ville' in where clause is ambiguous with query: "SELECT distinct offre.id AS id,titre,recruteur.logo, recruteur.nom,vues,
        date_debut,type_contrat,offre.recruteur_id,offre.ville,DATE_FORMAT(date_fin,'%d/%m/%Y') AS date_fin,nom AS recruteur,
        offre.fonction_id,SUBSTRING(offre.description FROM 1 FOR 200) as descrip                 
        FROM offre
        INNER JOIN fonction ON fonction.id=offre.fonction_id
        LEFT JOIN recruteur ON offre.recruteur_id=recruteur.id
        WHERE 1=1 AND offre.recruteur_id=recruteur.id AND recruteur.secteur_id=2 AND offre.fonction_id=2 AND offre.type_contrat='CDI' AND offre.recruteur_id=44 AND recruteur.id=44 AND 1=1 AND LOWER(ville) LIKE '%paris%'  AND offre.id < 107 ORDER BY offre.id DESC LIMIT 0,20" in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2013-08-29 11:17:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:17:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:18:28 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:18:28 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:18:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:18:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:18:44 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:18:44 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:18:47 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:18:47 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:18:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:18:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:19:17 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:19:17 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:19:18 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:19:18 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:21:22 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:21:22 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:21:43 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:21:43 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:45:47 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:45:47 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:45:49 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:45:50 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:46:02 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:46:02 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:46:28 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:46:28 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:46:41 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:46:41 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:46:42 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:46:42 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:46:50 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:46:50 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:46:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:46:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:46:56 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:46:56 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:47:02 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:47:02 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:47:03 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:47:03 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:47:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:47:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:47:23 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:47:23 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:47:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:47:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:47:26 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:47:26 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:47:27 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:47:27 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-29 11:50:36 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-29 11:50:36 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
