<?php 

ini_set('display_errors',1);

define( "APPLICATION_PATH", dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."application");

require APPLICATION_PATH.DIRECTORY_SEPARATOR."constantes.php";
require APPLICATION_PATH.DIRECTORY_SEPARATOR."autoloader.php";


$poo_v1_2 = new Classes\Application();
$poo_v1_2->launch();
