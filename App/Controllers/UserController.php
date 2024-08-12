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

        exit;
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

        $request = $user->where('id', "$id_user")->first();

        return $this->view('myAccount', compact('request'));
    }

    public function myAccountRequest()
    {
        $user = new User();
        
        $id_user = $_SESSION['id_user'];

        $request = $_POST;

        $current_user = $user->where('id', "$id_user")->first();

        if ($current_user['email'] != $request['email'])
        {
            $user_test = new User();

            $email = $request['email'];

            $validation_email = $user_test->where('email', "$email")->first();

            if ($validation_email)
            {
                $_SESSION['error_message'] = "El email ya existe";

                header("Location: ../public/myAccount");

                exit;
            }
        }

        if ($current_user['email'] == $request['email'])
        {
            unset($request['email']);
        }

        $validation = $user->update("$id_user", $request);

        if ($validation)
        {
            $_SESSION['error_message'] = "Cuenta actualizada";

            header("Location: ../public/myAccount");

            exit;
        }
        else
        {
            $_SESSION['error_message'] = "Error al actualizar cuenta";

            header("Location: ../public/myAccount");

            exit;
        }
    }

    public function changePassword()
    {
        $requestPassword = "Texto";

        return $this->view('myAccount', compact('requestPassword'));
    }
    public function changePasswordRequest()
    {
        $user = new User();

        $id_user = $_SESSION['id_user'];

        $update_password = $_POST;

        $current_password = $user->where('id', "$id_user")->first();

        if ($current_password['password'] == $update_password['current_password'])
        {
            if ($current_password['password'] == $update_password['new_password'])
            {
                if ($update_password['new_password'] == $update_password['confirm_new_password'])
                {
                    $validation = $user->update("$id_user", $update_password);

                    if ($validation)
                    {
                        header("Location: ../public/login");

                        exit;
                    }
                    else
                    {
                        $_SESSION['error_message'] = "Error al actualizar contraseña";
                    }
                }
                else
                {
                    $_SESSION['error_message'] = "La nueva contraseña y la confirmación no coinciden";
                }
            }
            else
            {
                $_SESSION['error_message'] = "La nueva contraseña y na actual no pueden ser iguales";
            }
        }
        else
        {
            $_SESSION['error_message'] = "Tu contrseña actual no coincide";
        }
        
        header("Location: ../public/changePassword");

        exit;
    }
}