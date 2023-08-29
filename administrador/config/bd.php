<?php
$host="localhost";
    $bd="id21187391_proyect_farmacia";
    $usuario="id21187391_lleon";
    $contrasenia="Lleon_123";

    try {
        $conexion= new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
        //if($conexion){ echo "conectado al sistema";} comprobar conexion
    } catch ( PDOException $ex ) {
        echo $ex->getMessage();
    }
?>