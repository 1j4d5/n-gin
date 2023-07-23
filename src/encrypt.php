<?php
namespace N_Gin;
class encrypt extends crypt
{
    public static function run($key, $data){
        return parent::encrypt($key, $data);      
    }
}