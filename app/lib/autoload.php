<?php
namespace PHPMVC\Lib;

class AutoLoad
{
    public static function autoload($classname)
    {
        
        $classname=str_replace('PHPMVC' ,'',$classname);
        $classname=str_replace("\\" ,'/',$classname);
        $classname=$classname . '.php';
        $classname=strtolower($classname);
     
         //echo $classname ;
         if(file_exists(APP_PATH . $classname))
         {
            require_once APP_PATH . $classname;
         }

    }
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');