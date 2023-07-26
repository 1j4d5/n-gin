<?php
namespace N_Gin;
class encrypt extends crypt
{
    public static function run($key, $data){
        if ($encrypted_data = parent::encrypt($key, $data)) {
            return $encrypted_data;
        }       
    }
    
}