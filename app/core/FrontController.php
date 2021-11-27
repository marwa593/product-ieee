<?php
namespace PHPMVC\core;

class FrontController
{
    public function __construct()
    {
        $this->_parseurl();
    }

    const Not_Found_Action='notfoundaction';
    const Not_Found_Controller='PHPMVC\Controllers\\NotFoundController';

    private $_controller='index';
    private $_action='default';
    private $_params=array();


    private function _parseurl()
    {
            $url=explode('/' ,trim(parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH),'/'),4);
            $url=(str_replace('mvc',"",$url));

            if(isset($url[1]) && $url[1] != '')
            {
                $this->_controller=$url[1];
            }

            if(isset($url[2]) && $url[2] != '')
            {
                $this->_action=$url[2];
            }

            if(isset($url[3]) && $url[3] != '')
            {
                $this->_params=explode('/',$url[3]);
            }

    }

    public function dispatch()
    {
      $controllerClassName='PHPMVC\Controllers\\' .ucfirst($this->_controller) . 'Controller';
      $actionName =$this->_action . 'Action';

      if(!class_exists($controllerClassName))
      {
        $controllerClassName=self::Not_Found_Controller;
      }

      $controller=new $controllerClassName();

      if(!method_exists($controller,$actionName))
      {
          $this->_action=$actionName=self::Not_Found_Action;      
      }
      
      $controller->setController($this->_controller);
      $controller->setAction($this->_action);
      $controller->setParams($this->_params);
      $controller->$actionName();
     
    }
     
  
}
