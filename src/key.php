<?php
namespace N_Gin;
class key extends n_Gingene
{
    public static function get($directory) {
        $file = fopen( $directory, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $directory );
         if ($filesize > 0) {
            $filetext = fread( $file, $filesize );
         }else{
            echo ( "Error: key cannot be empty" );
            $filetext = null;
         }
         
         fclose( $file );
         return $filetext;
    }
}