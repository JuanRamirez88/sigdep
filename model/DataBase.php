<?php
    class DataBase{

        public static function conexion (){
            $pdo = new PDO ('mysql:host=localhost; dbname=sigdepbasedatos;charset=utf8', 'root', '');
            $pdo -> setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } 

    }
   


?>