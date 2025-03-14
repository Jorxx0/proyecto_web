<?php

session_start();

include_once("views/header.php");
include_once ("controllers/userController.php");
include_once("controllers/productosController.php");

// Punto de entrada a la aplicación. Si no se recibe parámetro action y controller en la url
// se muestra la página de inicio (texto HTML).
// En caso de que sí se reciba, se instancia el controlador y se invoca la acción indicada.

if (isset($_REQUEST['action']) && isset($_REQUEST['controller'])) {
    $act = $_REQUEST['action'];
    $cont = $_REQUEST['controller'];

    // Instanciación del controlador e invocación del método
    $controller = new $cont();
    $controller->$act();

} else {
    
    echo '<div class="d-flex justify-content-center mt-4">';
    echo '<h1 class="text-light ">Bienvenido a Computer Tecnology</h1>';
    echo '</div>';
    echo '<div class="d-flex justify-content-center mt-5 mb-5">';
    echo '<a href="index.php?controller=userController&action=iniciarSesion" class="btn btn-secondary me-2">Iniciar Sesión</a>';
    echo '<a href="index.php?controller=ProductController&action=getAllProducts#" class="btn btn-secondary me-2">Listar productos</a>';
    echo '</div>';


    // Página de entrada: mostrar productos
    //$controller = new ProductController();
    //$controller->listProduct();
}

require_once("views/footer.php");

?>