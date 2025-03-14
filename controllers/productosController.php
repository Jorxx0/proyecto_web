<?php


/**
 *  Controlador de Productos. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a productos de la tienda.
 */
include_once("views/View.php");
class ProductController
{

    /**
     * Método que obtiene todos los productos de la BBDD y los muestra a través de la vista listaProductos.
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
     */
    public function getAllProducts()
    {
        require_once("models/productos.php");
        $pDAO = new ProductoDAO();
        $productos = $pDAO->getAllProducts();
        $pDAO = null;
        View::show("showProducts", $productos);
    }

    /**
     * Método que añade un producto a la BBDD recogiendo los datos que llegan a través de $_POST. Previo
     * a la inserción realiza la validación de los datos.
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
                include("models/productos.php");
                $pDAO = new ProductoDAO();
                if ($pDAO->insertProduct($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['stock'], $_POST['img']))
                $this->getAllProducts();
            else {
                $errores['general'] = "Problemas al insertar";
                View::show("addProduct", $errores);
            }
        } else
        View::show("addProduct", $errores);
    }
    /**
     * Si el array está vacío es que no hay errores. Si instancia un ProductoDAO y se trata de insertar
     * el nuevo producto en la BBDD. 
     * Si se produce la inserción, se llama al método que muestra todos los productos de la tienda.
     * Si hay error, se muestra la vista de inserción pasándole el array de errores.
     */
        // Si no se pulsó el botón insertar, se muestra la vista con el formulario.
        else {
            View::show("addProduct", null);
        }
    }

    #############################################################
    public function aniadirCesta($id) {
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }

        #$productDAO = new ProductoDAO();
        #$producto_carrito = $productDAO->addProductCarrito($id);


        if (!in_array($id, $_SESSION['carrito'])) {
            $_SESSION['carrito'][] = $id;
        }    

        View::show('showProducts');
        exit();
    }
public function showCarrito() {
        $cesta = [];
        if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
            $cesta = $_SESSION['carrito'];
        }
        View::show('showCarrito', $cesta);
    }
}
?>