<?php
    include 'conexion.php';
    
    $nombre_completo = $_POST['nombre_completo1'];
    $correo = $_POST['correo1'];
    $usuario = $_POST['usuario1'];
    $clave = $_POST['clave1'];
    if(strlen($nombre_completo)< 1 && (strlen($correo)< 1) && (strlen($usuario)< 1) &&(strlen($clave)<1)){ 
        header("location: ../error_credenciales.php"); // REDIRECCION A ERROR
    }else{
        $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, clave) VALUES ('$nombre_completo','$correo','$usuario','$clave')";
        $resultado = mysqli_query($conexion, $query);
        if($resultado){
            header("location: ../principal.php");
        }
        else{
            header("location: ../error.php");
        }
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);





?>