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
        $pass = null;
        $user = new User;
        $list = $user->where(['id'], ['='], [$data['user']])->get(['id', 'email', 'password']);
        foreach($list as $dbdata){
            self::$userID = $dbdata['id'];  
            $pass = $dbdata['password'];
        }
        return password_verify($data['password'],$pass);
        
    }
    public static function getID(){
        return self::$userID;
    }
    public static function make($args){
        return password_hash($args,PASSWORD_BCRYPT,  self::$options);
    }



}

?>