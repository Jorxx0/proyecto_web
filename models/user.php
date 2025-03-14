<?php

    include ('ddbb/conexion.php');

    class UserDAO
    {
        public $db_con;

        public function __construct()
        {
            $this->db_con = Database::open_connection();
        }

        public function getUser($usuario, $password)
        {
            $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";
            $stmt = $this->db_con->prepare($query);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            return $stmt->fetch();
        }

    }

?>