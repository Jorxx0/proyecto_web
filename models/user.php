<?php

    include ('ddbb/conexion.php');

    class UserDAO
    {
        public $db_con;

        public function __construct()
        {
            $this->db_con = Database::open_connection();
        }

        public function iniciarSesion($NOMBRE, $CONTRA)
        {
            $stmt = $this->db_con->prepare("SELECT * FROM usuarios WHERE NOMBRE = :NOMBRE AND CONTRA = :CONTRA");
            $stmt->bindParam(':NOMBRE', $NOMBRE);
            $stmt->bindParam(':CONTRA', $CONTRA);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = $stmt->fetch();
            if ($result) {
            if (!isset($_SESSION['usuario'])) {
                $_SESSION['usuario'] = [];
            }
            $_SESSION['usuario'] = [
                'nombre' => $result['NOMBRE'],
                'rol' => isset($result['rol']) ? $result['rol'] : null
            ];
            }
            return $result;
        }
        

    }

?>