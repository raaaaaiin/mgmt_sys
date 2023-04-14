<?php

namespace app\Common;

class Route{

    public static function get($path, $action)
    {
        
        if($path == Route::getAbsolute()){
            $controller = new $action[0](); // create an instance of LoginController
            $controller->{$action[1]}();
        }else{

        }
        
    }
    public static function getAbsolute() : string {
        $request = $_SERVER['REQUEST_URI'];
        $removeRoot = str_replace('/mgmt_sys/', '', $request, );
        $curdir = dirname($_SERVER['REQUEST_URI']);
        $baseUri = str_replace($curdir, '', $request);
        $absolute = basename(parse_url($removeRoot, PHP_URL_PATH));
        return $absolute;
    }
    public function put(){
    }
    public function post(){
    }

}

?>