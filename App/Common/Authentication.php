<?php

namespace App\Common;

class Authentication{
    public static $options;
    public function __construct() {
        $options = [
            'cost' => 10, 
        ];
        
    }
    
    public static function validate($request){
        return self::compare($request);
    }

    public static function compare($data): bool {
        return password_verify($data['pass'], $data);
        
    }

    public static function make($args){
        return password_hash($args,PASSWORD_BCRYPT,  self::$options);
    }


}

?>