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

    // public function loginRequest()
    // {
    //     $user = new User();

    //     $request = $_POST;

    //     $email = $request['email'];

    //     $password = $request['password'];

    //     $validation_email = $user->where('email', "$email")->first();

    //     $user_validation = new User();

    //     $validation = $user_validation->where('email', "$email")->where('password', "$password")->first();

    //     if ($validation)
    //     {
    //         session_start();

    //         $_SESSION['id_user'] = $validation['id'];

    //         header("Location: ../public/");
    //     }
    //     else
    //     {
    //         $_SESSION['error_message'] = "Error al iniciar sesion";

    //         header("Location: ../public/login");
    //     }
    // }

    public function loginRequest()
    {
        $user = new User();

        $request = $_POST;

        $email = $request['email'];

        $password = $request['password'];

        $validation_email = $user->where('email', "$email")->first();

        if ($validation_email)
        {
            $user_diosito = new User();

            $validation_user = $user_diosito->where('email', "$email")->where('password', "$password")->first();

            if ($validation_user)
            {
                $_SESSION['id_user'] = $validation_user['id'];

                if ($_SESSION['id_user'])
                {
                    $_SESSION['message'] = "Sesión iniciada";

                    header("Location: ../public/");

                    exit;
                }
                else
                {
                    $_SESSION['error_message'] = "Error al iniciar sesion";
                }
            }
            else
            {
                $_SESSION['error_message'] = "Contraseña incorrecta";
            }
        }
        else
        {
            $_SESSION['error_message'] = "El usuario no existe";
        }

        header("Location: ../public/login");
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

        if (isset($_POST['current_password']))
        {
            $update_request_user = $_POST;
            $email = $_POST['email'];

            echo var_dump($update_request_user);

            $current_user = $user->where('id', "$id_user")->first();

            $cant_users = $user->where('email', "lolo@lolo.com")->get();

            echo var_dump($cant_users);

            if ($update_request_user['current_password'] == $current_user['password'])
            {
                if ($update_request_user['new_password'] == $update_request_user['repeat_new_password'])
                {
                    $update_user['first_name'] = $update_request_user['first_name'];
                    $update_user['last_name'] = $update_request_user['last_name'];
                    $update_user['email'] = $update_request_user['email'];
                    $update_user['password'] = $update_request_user['new_password'];

                    $validation = $user->update("$id_user", $update_user);

                    if ($validation)
                    {
                        $id_user = $_SESSION['id_user'];

                        // header('Location: ../public/myAccount');
                    } else
                    {
                        $_SESSION['error_message'] = "Error al subir a la base de datos";
                    }
                } else {
                    $_SESSION['error_message'] = "Las contrasenias no coinciden";
                }
            } else {
                $_SESSION['error_message'] = "La nueva contrasenia no coincide con la actual";
            }

            // header('Location: ../public/myAccount');

        } else
        {
            $request = $user->where('id', "$id_user")->first();

            return $this->view('myAccount', compact('request'));
        }
    }

}