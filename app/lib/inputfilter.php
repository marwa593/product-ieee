<?php
namespace PHPMVC\Lib;

class InputFilter
{
    public function filterint($input)
    {
        return filter_var($input ,FILTER_SANITIZE_NUMBET_INT);
    }


    public function filterstring($input)
    {
        return htmlentities(strip_tags($input),ENT_QUOTES,'UTF-8');
    }


}