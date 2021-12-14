<?php
namespace PHPMVC;
use PHPMVC\core\FrontController;


if(!define('DS',DIRECTORY_SEPARATOR))
{
    define('DS',DIRECTORY_SEPARATOR);
}


require_once  'app'. DS .'Config.php';
require_once APP_PATH . DS .'core'. DS . 'AutoLoad.php';


$frontcontroller=new FrontController();
$frontcontroller->dispatch();



       



