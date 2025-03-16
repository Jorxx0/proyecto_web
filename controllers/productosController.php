<?php


/**
 *  Controlador de Productos. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a productos de la tienda.
 */
include_once("views/View.php");
include_once("models/productos.php");

class ProductController
{

    /**
     * Método que obtiene todos los productos de la BBDD y los muestra a través de la vista listaProductos.
     * Parámetros: no tiene
     * Retorna: no tiene, muestra la vista listaProductos con los productos
     */
    public function listProduct()
    {
        require_once("models/productos.php");
        $pDAO = new ProductoDAO();
        $productos = $pDAO->getAllProducts();
        $pDAO = null;
        View::show("listaProductos", $productos);
    }

    /**
     * Método que obtiene todos los productos de la BBDD y los muestra a través de la vista showProducts.
     * Parámetros: no tiene
     * Retorna: no tiene, muestra la vista showProducts con los productos
     */
    public function getAllProducts()
    {
        $pDAO = new ProductoDAO();
        $productos = $pDAO->getAllProducts();
        View::show("showProducts", $productos);
    }

    /**
     * Método que añade un producto a la BBDD recogiendo los datos que llegan a través de $_POST. Previo
     * a la inserción realiza la validación de los datos.
     * Parámetros: no tiene
     * Retorna: no tiene, muestra la vista addProduct con los errores o la vista showProducts con los productos
     */
    public function aniadirProduct()
    {
        $errores = array();

        /* Si se ha pulsado en el botón insertar se validan los datos y en caso de error, éstos se almacenan
        en el array $errores*/
        if (isset($_POST['insertar'])) {
            if (!isset($_POST['nombre']) || strlen($_POST['nombre']) == 0)
                $errores['nombre'] = "El nombre no puede estar vacío.";
            if (!isset($_POST['descripcion']) || strlen($_POST['descripcion']) < 10)
                $errores['descripcion'] = "La descripción debe tener al menos 10 caracteres";
            if (!isset($_POST['precio']) || strlen($_POST['precio']) == 0)
                $errores['precio'] = "El precio no puede estar vacío.";
            if (!isset($_POST['stock']) || strlen($_POST['stock']) == 0)
                $errores['stock'] = "El stock no puede estar vacío.";
            if (!isset($_POST['img']) || strlen($_POST['img']) == 0)
                $errores['img'] = "El img no puede estar vacío.";

            if (empty($errores)) {
                include_once("models/productos.php");
                $pDAO = new ProductoDAO();
                if ($pDAO->insertProduct($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['stock'], $_POST['img']))
                    $this->getAllProducts();
                else {
                    $errores['general'] = "Problemas al insertar";
                    View::show("addProduct", $errores);
                }
            } else {
                View::show("addProduct", $errores);
            }
        } else {
            View::show("addProduct", null);
        }
    }

    #############################################################
    /**
     * Método que añade un producto al carrito.
     * Parámetros: no tiene
     * Retorna: no tiene, muestra la vista showProducts con los productos
     */
    public function aniadirCesta() {
        $id = $_GET['id']; // Obtener el ID del producto desde la URL

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }

        // Añadir el producto al carrito sin verificar si ya está presente
        $_SESSION['carrito'][] = $id;

        // Obtener todos los productos para mostrarlos en la vista showProducts
        $pDAO = new ProductoDAO();
        $productos = $pDAO->getAllProducts();
        View::show('showProducts', $productos);
    }

    /**
     * Método que muestra el carrito con los productos añadidos.
     * Parámetros: no tiene
     * Retorna: no tiene, muestra la vista showCarrito con los productos del carrito
     */
    public function showCarrito() {
        $cesta = [];
        if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
            $pDAO = new ProductoDAO();
            foreach ($_SESSION['carrito'] as $id) {
                $producto = $pDAO->getProductById($id);
                if ($producto) {
                    $cesta[] = $producto;
                }
            }
        }
        View::show('showCarrito', $cesta);
    }
}
?>