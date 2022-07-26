<?php
    function conectar(){
        $server = "localhost";
        $user = "root";
        $password = "";
        $db = "act4";
        //Conexión
        $conn = mysqli_connect($server,$user,$password,$db);
        if(!$conn){
            die ("Error al intentar acceder a database: ". mysqli_connect_error());
        }else{
            echo "Conexión exitosa";
        }
        return $conn;
    } 
?>