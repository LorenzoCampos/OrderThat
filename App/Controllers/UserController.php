<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\Product;

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
            $products = new Product();

            $request = $products->all();

            session_start();

            $_SESSION['id'] = $validation['id'];

            return $this->view('home', compact('request'));
        }

        return $this->view('/');
    }

    public function logout()
    {

        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        // destruye todo lo que tenga que ver con la sesion o todas sus variables al establecer $_SESSION como un array vacio
        $_SESSION = array();

        session_destroy();

        header("Location: ../");

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

        $data_user['email'] = $email;
        $data_user['password'] = $password;

        $validation_email = $user->where('email', "$email")->first();

        if ($validation_email)
        {
            $_SESSION['error_message'] = "El email ya existe";

            return $this->view('register', [
                'email' => $email,
                'password' => $password
            ]);
        }
        else
        {

            $user_create = $user->create($request);

            if ($user_create['id'])
            {
                return $this->view('login');
            }
            else
            {
                $_SESSION['error_message'] = "Error al crear registro";
            }
        }

        
    }

    public function myAccount()
    {
        $id = $_SESSION['id'];

        $user = new User();

        $validation = $user->where('id', "$id")->first();

        return $this->view('myAccount', compact("validation"));
    }

}