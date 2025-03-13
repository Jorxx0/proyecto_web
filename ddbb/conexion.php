<?php

    class Database {

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