<?php

namespace app\Http\Controller\Auth;

session_start();

 class LoginController{
    public function LoginController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/View/Auth/LoginView.php';
    }
    public function 

}

