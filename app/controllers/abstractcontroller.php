<?php
namespace PHPMVC\Controllers; 
use  PHPMVC\Lib\FrontController;

class AbstractController 

{
    protected $_controller;
    protected $_action;
    protected $_params;
    protected $_data=[];

    public function notFoundAction()
    {
        $this->_view();
        //echo 'soory not found';
    }

    public function setController($controllerName)
    {
        $this->_controller=$controllerName;

    }

    public function setAction($actionName)
    {
        $this->_action=$actionName;

    }

    public function setParams ($paramsName)
    {
        $this->_params=$paramsName;

    }
    protected function _view()
    {
        
        if($this->_action == FrontController:: Not_Found_Action)
        {
           require_once VIEWS_PATH . DS .  'notfound'. DS.'notfound.view.php';

        }else{

            $view= VIEWS_PATH .DS. $this->_controller . DS . $this->_action . '.view.php';

            if(file_exists($view))
            {
                extract($this->_data);
                require_once $view;
            }else
            {
                require_once VIEWS_PATH . DS. 'notfound' . DS . 'notview.view.php';
            }

        }
        
    }




}