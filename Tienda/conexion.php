<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="tienda";
    $conexion = new mysqli($host, $user, $password, $dbname);
    if ($conexion->connect_error){
        die("Error de conexión: ".$conexion ->connect_error);
    }
?>