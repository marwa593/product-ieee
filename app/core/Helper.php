<?php
namespace PHPMVC\core;

class Helper
{
    public function redirect($path)
    {
       header('Location: ' . $path);
    }

}