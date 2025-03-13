<?php
include_once('ddbb/conexion.php');

/**
 * Clase de acceso a datos para la tabla productos. Implementa todos los métodos que necesiten atacar
 * la tabla productos de la base de datos.
 */
class ProductoDAO {

    // Atributo con la conexión a la BBDD.
    public $db_con;

    // Constructor que inicializa la conexión a la BBDD.
    public function __construct() {
        $this->db_con = Database::open_connection();
    }

    // Método que devuelve un array con todos los productos existentes en la base de datos.
    public function getAllProducts() {
        $stmt = $this->db_con->prepare("SELECT * FROM Productos");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Método que devuelve toda la información de un producto dado su id.
    public function getProductById($id) {
        $stmt = $this->db_con->prepare("SELECT * FROM Productos WHERE id_producto = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Insertar un producto en la base de datos.
    /**
     * Parámetros: 
     *  $nombre, nombre del producto.
     *  $descrip, descripción del producto.
     *  $precio, precio del producto.
     *  $proc, procedencia del producto.
     * 
     *  Retorna true si la inserción fue exitosa y false en caso contrario.
     */
    public function insertProduct($nombre, $descrip, $precio, $proc) {
        $stmt = $this->db_con->prepare("INSERT INTO Productos (nombre, descripcion, precio, procedencia) VALUES (:nombre, :descripcion, :precio, :procedencia)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descrip);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':procedencia', $proc);

        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
?>