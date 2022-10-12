<?php
include('./config/config.php');
//$routes  = new Routes();
function loadApplication()
{
    $method = $_SERVER['REQUEST_METHOD'];
    $url   = explode('/', ltrim($_SERVER['PATH_INFO'], '/'));
    /**
     *  $url[0] => filename;
     *  $url[1] => method;
     *  $url[2.....n] => args;
     */
    $file  = ($url[0] == '') ? 'home' : $url[0];
    $action  = ($url[1] == '')? 'index' : $url[1];
    if (file_exists(CONTROLLER . $file . ".php")) {
        require_once CONTROLLER . $file . ".php";
        $file = ucfirst($file);
        $instance  = new $file($file);
        print $instance->$action();
    } else {
        echo "404";
    }

}
