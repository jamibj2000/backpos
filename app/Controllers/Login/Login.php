<?php

namespace App\Controllers\Login;
use App\Controllers\CorsController;

class Login extends CorsController
{
    public function loginx()
    {
        $this->cors();
        return "Holis carebolis";
    }

    public function logInto(): string
    {
        return view('welcome_message');
    }

}
