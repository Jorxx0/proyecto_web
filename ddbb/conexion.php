<?php

class Database {

    /*
        Abre una conexión a la base de datos
        Parámetros: no tiene
        Retorna: objeto PDO con la conexión a la base de datos
    */
    public static function open_connection(){
        try{
            $host = "mariadb";
            $dbname = "database";
            $user = "admin";
            $password = "changepassword";
        
            $dsn = "mysql:host=$host;dbname=$dbname";
            $dbh = new PDO($dsn, $user, $password);

            return $dbh;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }  
    }

}

?>