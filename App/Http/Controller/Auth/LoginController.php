<?php

namespace app\Http\Controller\Auth;

use App\Common\Authentication;
use App\Common\Session;

session_start();

class LoginController
{
    public $Auth;
    public $Session;
    public function __construct()
    {
        $Auth = new Authentication;
        $Session = new Session;
        $this->render();
    }

    public function render()
    {
        require_once 'Resources/View/Auth/LoginView.php';
    }

    public static function handleLogin()
    {
        $request = $_POST;
       
        if(self::$Auth->validate($request)){
            self::$Session->initiate(self::$Auth->getID());
        }else{
           echo("Wrong Credentials");
        }

    }
}
if(isset($_POST['function'])){
    $function =  $_POST['function'];
    LoginController::$function(); 
}
