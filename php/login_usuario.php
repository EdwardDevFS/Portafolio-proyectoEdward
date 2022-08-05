<?php
    include 'conexion.php';

    $usuario_c = $_POST['usuario1'];
    $clave = $_POST['clave1'];
    if(strlen($usuario)< 1 && (strlen($clave)< 1)){
        
        header("location: ../error_credenciales.php"); 
    }else{
        $query = "SELECT * FROM `usuarios` WHERE usuario = '$usuario_c' or correo = '$usuario_c' and clave = '$clave'";
        $resultado = mysqli_query($conexion, $query);
        $filas = mysqli_num_rows($resultado);
        if($filas>0){
            header("location: ../principal.php"); 
        }
        else{
            header("location: ../error_credenciales.php");
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }

?>
