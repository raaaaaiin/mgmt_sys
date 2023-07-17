<?php

namespace App\Common;

use App\Models\User;

class Authentication extends Model{
    public static $user;
    public static $options;
    public static int $userID;
    public function __construct() {
        $options = [
            'cost' => 10, 
        ];
        
    }
    
    public static function validate($request){
        return self::compare($request);
    }

    public static function compare($data): bool {
        $user = new User;
        $list = $user->where(['id'], ['='], [$data['user']])->get(['id', 'email', 'password']);
        return password_verify($data['pass'], $data);
        
    }
    public static function getID(){
        return /*self::userID*/1;
    }
    public static function make($args){
        return password_hash($args,PASSWORD_BCRYPT,  self::$options);
    }



}

?>