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
        $this->Auth = new Authentication();
        $this->Session = new Session();
        $this->render();
        $this->handleLogin();
    }

    public function render()
    {
        require_once 'Resources/View/Auth/LoginView.php';
    }

    public function handleLogin()
    {
        $request = ['user' => '12000140442', 'password' => '1231345678'];

      
        if($this->Auth->validate($request)){
            $this->Session->initiate($this->Auth->getID());
            echo("Log in success");
        }else{
           echo("Wrong Credentials");
        }

    }
}
if(isset($_POST['function'])){
    $function =  $_POST['function'];
    LoginController::$function(); 
}
