<?php
    include ("conexion.php");
    session_start();
    $usuario=$_POST['usuario']; //Recogemos el nombre del usuario ingresado en el login
    $clave=$_POST['clave']; //Recogemos la clave ingresada en el login
    $_SESSION['usuario']=$usuario; //Nombre del usuario que inicia la sesión
    $sql="SELECT * FROM usuarios WHERE usuario='".$usuario."' AND clave='".$clave."'";
    $result=$conexion->query($sql);
    if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            if ($row['tipo']==1){
                $_SESSION['tipo']=$row['tipo']; //Tipo de usuario que inicia la sesión
                header("Location:./administrador/index.php");
            }
            else{
                $_SESSION['tipo']=$row['tipo']; //Tipo de usuario que inicia la sesión
                header("Location:./usuario/index.php");
            }
        }
    }
    else {
        header("Location:./index.php");
    }
?>