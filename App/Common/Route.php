<?php

namespace App\Common;

class Route{
   

    public static function get($path, $action)
    {
        $controller = new $action[0](); // create an instance of LoginController
        $controller->{$action[1]}(); // call the render() method on the instance
        
    }

    public function put(){
    }
    public function post(){
    }

}

?>