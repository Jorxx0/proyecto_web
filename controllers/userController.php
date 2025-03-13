<?php

include("views/View.php");

class UserController {

    public function iniciarSesion() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require_once("models/user.php");
            $userDAO = new UserDAO();
            $user = $userDAO->getUser($_POST['usuario'], $_POST['password']);

            if ($user) {
                // Iniciar sesión y almacenar el rol del usuario
                session_start();
                $_SESSION['usuario'] = $user['usuario'];
                $_SESSION['rol'] = $user['rol']; // Asumiendo que la columna de rol se llama 'rol'
                header("Location: index.php");
            } else {
                // Mostrar mensaje de error con SweetAlert
                $error = "Usuario o contraseña incorrectos";
                View::show("login", ['error' => $error]);
            }
        } else {
            View::show("login");
        }
    }

    public function cerrarSesion() {
        session_start();
        session_destroy();
        header("Location: index.php");
    }
}

?>