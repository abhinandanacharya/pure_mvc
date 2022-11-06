<?php
include('./service/response.php');
$response = new Response();
define('HTTP_RESPONSE', $response);


define('SITE_URL','http://localhost/phpdevtools/pure_mvc/');
define('CONTROLLER',dirname(__DIR__).'/controller/');
define('MODEL',dirname(__DIR__).'/model/');
define('VIEW',dirname(__DIR__).'/view/');
define('APP_CSS',SITE_URL.'public/css/');
define('UPLOAD',dirname(__DIR__).'/upload/');


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

function content_echo($str, $length)
{
  if(strlen($str)<=$length)
  {
    return $str;
  }
  else
  {
    $y=substr($str,0,$length) . '...';
    return $y;
  }
}





?>