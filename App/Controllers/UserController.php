<?php
namespace App\Controllers;

include "initSession.php";

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

            $_SESSION['id_user'] = $validation['id'];

            header("Location: ../public/");
        }    
    }

    public function logout()
    {
        // destruye todo lo que tenga que ver con la sesion o todas sus variables al establecer $_SESSION como un array vacio
        $_SESSION = array();

        session_destroy();

        $_SESION['message'] = "Sesión cerrada";

        header("Location: ../public/");
        
        exit();
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

        return $this->view('register');
    }

    public function myAccount()
    {
        $user = new User();

        $id_user = $_SESSION['id_user'];

        $before_request = $user->where('id', "$id_user")->first();

        return $this->view('myAccount', compact('before_request'));
    }

    public function myAccountRequest()
    {
        $user = new User();

        $id_user = $_SESSION['id_user'];

        $update_user = $_POST;



        return $this->view('myAccount', compact('request'));
    }

}