<?php

define( "ECMASCRIPT_PATH", dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."js");
define( "DATA_PATH", dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."data");
define( "CLASSES_PATH", APPLICATION_PATH.DIRECTORY_SEPARATOR."classes");
define( "MULTIDEVICE_MVC_PATH" , APPLICATION_PATH . DIRECTORY_SEPARATOR . "MVC");
define( "TEMPLATE_PATH" , APPLICATION_PATH . DIRECTORY_SEPARATOR . "templates");
define( "INCLUSIONS_HTML_PATH" , TEMPLATE_PATH . DIRECTORY_SEPARATOR . "_include");

/*
 DEFINITION DES PÄRAMETRES DE CONNECTION
 Elle doit être modifiée en fonction du type de base de données
 */
define('BD_PDO_DSN',"mysql:host=localhost;dbname=xxx");
define('BD_USER', 'xxx');
define('BD_PASS', 'xxxxxxxxxxxxxx');


require CLASSES_PATH.DIRECTORY_SEPARATOR."wymd.core.class.php";