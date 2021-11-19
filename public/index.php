<?php
namespace PHPMVC;

use  PHPMVC\Lib\FrontController;


if(!define('DS',DIRECTORY_SEPARATOR))
{
    define('DS',DIRECTORY_SEPARATOR);
}

require_once '..' . DS . 'app' . DS . 'config.php';
require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';


//echo APP_PATH;


$frontcontroller=new FrontController();
$frontcontroller->dispatch();



        // $url=(parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH));
        // $url=(str_replace('mvc',"",$url));
        // echo $url ."          ";
        // list($controller ,$action, $params)=explode('/',trim($url,'/'),3);
        // $params =explode('/',$params);
        // var_dump($controller,$action,$params);

       



