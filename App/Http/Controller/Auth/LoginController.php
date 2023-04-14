<?php

namespace app\Http\Controller\Auth;

session_start();

 class LoginController{
    public function LoginController(): void{
        $this->render();
    }
    function render(): void
    {
        include '..\Resources\Views\Auth\LoginView.php';
    }


}

