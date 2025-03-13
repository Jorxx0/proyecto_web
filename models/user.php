<?php

    include ('ddbb/conexion.php');

    class UserDAO
    {
        public $db_con;

        public function __construct()
        {
            $this->db_con = Database::open_connection();
        }

        public function getUser($user, $password)
        {
            $stmt = $this->db_con->prepare("SELECT * FROM Usuarios WHERE usuario = :user AND password = :password");
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':password', $password);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetch();
        }
    }

?>