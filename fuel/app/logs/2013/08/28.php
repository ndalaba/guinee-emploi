<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Error - 2013-08-28 08:28:58 --> 8 - Undefined index: HTTP_REFERER in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/front.php on line 47
Warning - 2013-08-28 08:44:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 08:44:38 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 08:44:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-28 08:44:38 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-28 08:55:43 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 08:55:43 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2013-08-28 08:59:45 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'undefined' in 'where clause' with query: "SELECT *,candidat.id AS id,candidat.experience AS experience,candidat.ajout AS ajout FROM candidat 
            JOIN candidats_offres ON candidats_offres.candidat_id=candidat.id 
            JOIN offre ON candidats_offres.offre_id=offre.id
            WHERE offre.id=105  AND 1=1 AND 1=1 AND 1=1 AND statut='Chaumeur' AND 1=1 AND 1=1  AND candidat.ajout < undefined ORDER BY candidat.ajout DESC LIMIT 0,20" in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2013-08-28 08:59:48 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 08:59:48 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-28 09:02:08 --> Fuel\Core\Request::execute - The Controller_Front::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 09:02:08 --> Fuel\Core\Request::execute - The Controller_Front controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-28 09:02:47 --> Fuel\Core\Request::execute - The Controller_Candidat::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 09:02:47 --> Fuel\Core\Request::execute - The Controller_Candidat controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2013-08-28 09:05:46 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/candidat.php on line 443
Error - 2013-08-28 09:06:43 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/candidat.php on line 443
Error - 2013-08-28 09:07:00 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/candidat.php on line 443
Error - 2013-08-28 09:07:24 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/candidat.php on line 443
Error - 2013-08-28 09:09:37 --> 8 - Undefined index: canditats in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/recruteur.php on line 567
Error - 2013-08-28 09:09:37 --> 8 - Undefined index: canditats in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/recruteur.php on line 567
Error - 2013-08-28 09:09:37 --> 2 - Invalid argument supplied for foreach() in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/recruteur.php on line 569
Error - 2013-08-28 09:09:37 --> 2 - Invalid argument supplied for foreach() in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/recruteur.php on line 569
Warning - 2013-08-28 09:09:37 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 09:09:37 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 09:09:37 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-28 09:09:37 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2013-08-28 09:09:59 --> 8 - Undefined index: canditats in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/recruteur.php on line 567
Error - 2013-08-28 09:09:59 --> 2 - Invalid argument supplied for foreach() in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/recruteur.php on line 569
Warning - 2013-08-28 09:09:59 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 09:09:59 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2013-08-28 09:10:06 --> Error - Call to undefined method Orm\Query::save() in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/app/classes/controller/candidat.php on line 443
Warning - 2013-08-28 09:20:40 --> Fuel\Core\Validation::errors - This method is deprecated. Please use Validation::error() instead.
Warning - 2013-08-28 11:19:00 --> Fuel\Core\Request::execute - The Controller_Offre::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 11:19:00 --> Fuel\Core\Request::execute - The Controller_Offre controller should return a string or a Response object, support for the $controller->response object is deprecated.
Error - 2013-08-28 11:20:08 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'undefined' in 'where clause' with query: "SELECT *,candidat.id AS id,candidat.experience AS experience,candidat.ajout AS ajout FROM candidat 
            JOIN candidats_offres ON candidats_offres.candidat_id=candidat.id 
            JOIN offre ON candidats_offres.offre_id=offre.id
            WHERE offre.id=35  AND 1=1 AND 1=1 AND 1=1 AND statut='Chaumeur' AND 1=1 AND 1=1  AND candidat.ajout < undefined ORDER BY candidat.ajout DESC LIMIT 0,20" in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Error - 2013-08-28 11:20:08 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'undefined' in 'where clause' with query: "SELECT *,candidat.id AS id,candidat.experience AS experience,candidat.ajout AS ajout FROM candidat 
            JOIN candidats_offres ON candidats_offres.candidat_id=candidat.id 
            JOIN offre ON candidats_offres.offre_id=offre.id
            WHERE offre.id=35  AND 1=1 AND 1=1 AND 1=1 AND statut='Chaumeur' AND 1=1 AND 1=1  AND candidat.ajout < undefined ORDER BY candidat.ajout DESC LIMIT 0,20" in /hermes/bosoraweb154/b694/sl.sowib72/public_html/guineewebdev/preprod/jobsite/fuel/core/classes/database/pdo/connection.php on line 137
Warning - 2013-08-28 11:21:52 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 11:21:52 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
Warning - 2013-08-28 11:22:08 --> Fuel\Core\Request::execute - The Controller_Recruteur::after() method should accept and return the Controller's response, empty return for the after() method is deprecated.
Warning - 2013-08-28 11:22:08 --> Fuel\Core\Request::execute - The Controller_Recruteur controller should return a string or a Response object, support for the $controller->response object is deprecated.
