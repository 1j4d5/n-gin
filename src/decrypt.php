<?php
namespace N_Gin;
class decrypt extends crypt
{
    public static function run($key, $data){
        return parent::decrypt($key, $data);         
    }
}