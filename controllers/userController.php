<?php

include_once("views/View.php");

class UserController {

    public function iniciarSesion() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require_once("models/user.php");
            $userDAO = new UserDAO();
            $user = $userDAO->iniciarSesion($_POST['NOMBRE'], $_POST['CONTRA']);

            if ($user) {
                // Iniciar sesión y almacenar el rol del usuario
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['usuario'] = $user;

                // Redirigir según el rol del usuario
                if ($user['ROL'] == 'Admin') {
                    header("Location: index.php?controller=ProductController&action=addProduct");
                } else {
                    header("Location: index.php?controller=ProductController&action=showCarrito");
                }
                exit(); // Asegúrate de que el script se detenga después de redirigir
            } else {
                // Mostrar mensaje de error con SweetAlert
                $error = "Nombre o contraseña incorrectos";
                View::show("login", ['error' => $error]);
            }
        } else {
            View::show("login");
        }
    }

    // public function cerrarSesion() {
    //     if (session_status() == PHP_SESSION_NONE) {
    //         session_start();
    //     }
    //     session_unset();
    //     session_destroy();
    //     header("Location: index.php");
    //     exit();
    // }
}
?>