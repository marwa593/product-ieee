<?php
namespace PHPMVC\Lib;

class Helper
{
    public function redirect($path)
    {
       header('Location: ' . $path);
    }

}