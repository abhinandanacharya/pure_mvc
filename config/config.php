<?php

define('SITE_URL','http://localhost/phpdevtools/pure_mvc/');
define('CONTROLLER',dirname(__DIR__).'/controller/');
define('MODEL',dirname(__DIR__).'/model/');
define('VIEW',dirname(__DIR__).'/view/');


/**
 * Database connection;
 */

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'pure_mvc');

function pr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}





?>