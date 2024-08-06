<?php

namespace App\Controllers;
use App\Models\User;

class UserController extends Controller
{

    public function login()
    {
        return $this->view('login');
    }

    public function loginRequest()
    {
        $user = new User();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $validation = $user->where('email', "$email")->where('password', "$password")->first();

        if ($validation)
        {
            session_start();
            $_SESSION['email'] = $validation['email'];
            return $this->view('myAccount', compact("validation"));
        }

        return $this->view('/');
    }

    public function register()
    {
        return $this->view('register');
    }

    public function registerRequest()
    {
        $user = new User();

        $request = $_POST;

        $email = $_POST['email'];
        $password = $_POST['password'];

        $validation = $user->where('email', "$email")->where('password', "$password")->get();
        if ($validation)
        {
            return $this->view('');
        }
        else
        {
            $user->create($request);

            session_start();
            $_SESSION['email'] = $email;
        }

        return $this->view('myAccount');
    }

}