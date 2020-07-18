<?php
    session_start(); //Reanudando la sesión iniciada
    error_reporting(0); //Quitar errores cuando se finaliza la sesión
    $varsesion=$_SESSION['usuario'];
    $tipo=$_SESSION['tipo'];
    if ($varsesion==null || $varsesion==""){
        header("Location:../index.php"); //Enviar al login si no existe una sesión previamente creada
        die();
    }
    if ($tipo!=1){
        header("Location:../logout.php"); //Cerrar la sesión si trata de cambiarse de usuario
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Estilos de datatable -->
    <link rel="stylesheet" href="../css/datatable.css">
    <!-- jQuery -->
    <script src="../js/jQuery.js"></script>
    <!-- Bootstrap modal -->
    <script src="../js/bootstrapmodal.js"></script>
    <!-- Sweet Alert -->
    <script src="../css/sweetalert.css"></script>
    <!-- Data table -->
    <script src="../js/datatables.js"></script>
    <!-- Google charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Icono de la aplicacion -->
    <!-- <link rel="icon" href="../assets/ico.png"/> -->
    <title>Administrador</title>
</head>
<body>
    <?php include ("../conexion.php"); ?> <!-- Conexión con la base de datos -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">TIENDA MANÁ
            <!-- <img src="../assets/image.jpg" height="30"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#usuario" aria-controls="usuario" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="usuario">
            <div class="navbar-nav text-center ml-auto mr-auto">
                <a href="index.php" class="nav-item nav-link" active>Inicio</a>
                <a href="productos.php" class="nav-item nav-link" active>Productos<span class="sr-only">(current)</span></a>
                <a href="clientes.php" class="nav-item nav-link" active>Clientes</a>
                <a href="facturacion.php" class="nav-item nav-link" active>Facturas</a>
                <a href="creditos.php" class="nav-item nav-link" active>Créditos</a>
            </div>
            <div>
                <a class="navbar-brand btn btn-danger d-block" href="../logout.php">Cerrar sesión</a>
            </div>
        </div>
    </nav>
    <!-- <div class="footer">
        <p class="text-center text-secondary mt-3 bg-light">© 2020 Samuel González</p>
    </div>
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            border-top: 1px solid #e5e5e5;
        }
    </style> -->
    <script src="../js/Popper.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>