<?php
namespace N_Gin;
class crypt extends n_Gingene
{
    
    protected static function encrypt(mixed $key, mixed $data):string
    {
        $em5mU3Q4cERRTyt6dGJudTY4b2t0UT09OjrLa6QBm8kmhIej9gseC70c = base64_decode($key);$NDhtRGp3SXUzaGl3K2tidHhsazdwQT09OjpW8jRfgqB08Ze4hkV437YH=openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-128-cbc'));$Vk11dmc5UFdTWHhFcTYzS1B3SFIydz09OjodWeVwdUPi35qJAAhle5K4=openssl_encrypt($data, 'aes-128-cbc', $em5mU3Q4cERRTyt6dGJudTY4b2t0UT09OjrLa6QBm8kmhIej9gseC70c, 0, $NDhtRGp3SXUzaGl3K2tidHhsazdwQT09OjpW8jRfgqB08Ze4hkV437YH);return base64_encode($Vk11dmc5UFdTWHhFcTYzS1B3SFIydz09OjodWeVwdUPi35qJAAhle5K4 . '::' . $NDhtRGp3SXUzaGl3K2tidHhsazdwQT09OjpW8jRfgqB08Ze4hkV437YH);
    }
    protected static function decrypt(mixed $key, mixed $data)
    {
        $Vk11dmc5UadTWHhFcTYzS1B3SFIydz09OjodWeVwdUPi35qJAAhle5K4 = base64_decode($key);
        list($Vk11dmc5UadTWHh2341B3SFIydz09OjodWeVwdUPi35qJAAhle5K4, $Vk11dmc5UawerfgfdsdTWHh2341B3SFIydz09OjodWeVwdUPi35qJAAhle5K4) = array_pad(explode('::', base64_decode($data), 2),2,null);
        return openssl_decrypt($Vk11dmc5UadTWHh2341B3SFIydz09OjodWeVwdUPi35qJAAhle5K4, 'aes-128-cbc', $Vk11dmc5UadTWHhFcTYzS1B3SFIydz09OjodWeVwdUPi35qJAAhle5K4, 0, $Vk11dmc5UawerfgfdsdTWHh2341B3SFIydz09OjodWeVwdUPi35qJAAhle5K4);
    }   
}
    