<?php 
session_start();
include("config/bd.php");

if(isset($_POST['usuario']) && isset($_POST['clave'])){
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave ='$clave'";
   
        $result = $conexion->query($sql);
        $row = $result-> fetch(PDO::FETCH_OBJ);
        
        if($row-> usuario===$usuario && $row -> clave===$clave){
            $_SESSION['usuario'] = $row-> usuario;
            $_SESSION['nombre'] = $row -> nombre;
            header('location:inicio.php');
            exit();
        }else{
            header('location:index.php?error=El usuario o clave son incorrectas');
            exit();
        }
    
}else{
    header('location:index.php?error=El usuario o clave son incorrectas a');
    exit();
}
