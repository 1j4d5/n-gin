<?php
namespace N_Gin;
use encrypt;
class key extends n_Gingene
{
   public function __construct($directory){
      $file = fopen( $directory, "r" );
         
         if( $file == false ) {
            echo ( "<b>Fatal Error</b>: wrong input<b> ".__file__."</b> on line: <b>0</b> error code: <b>5986567</b>" );
            exit();
         }
         
         $filesize = filesize( $directory );
         if ($filesize > 0) {
            $filetext = fread( $file, $filesize );
         }else{
            echo ( "<b>Fatal Error</b>: key cannot be empty in file<b> ".__file__."</b> on line: <b>0</b> error code: <b>5974876</b>" );
            $filetext = null;
            exit();
         }
         
         fclose( $file );
         $this->key =$filetext;
         
   }
    public function give() {
        return $this->key ;
    }
    public static function get() {
      echo ( "<b>Fatal Error</b>: key :: get have been replaced <b> </b>  error code: <b>7897887</b>" );
      exit();     
  }
}