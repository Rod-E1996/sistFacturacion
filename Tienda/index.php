<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="icon" href="./assets/ico.png"/>
    <title>Login</title>
</head>
<body style="background-color: #0b1129">
    <div class="container">
        <div class="row row-login justify-content-md-center">
            <div class="col col-xs-12 col-md-6 bg-light text-center shadow pt-5" style="border-radius: 10px;">
                <!-- <div class="img-responsive">
                    <img src="./assets/logo.png" width="250px" class="img-fluid" alt="image">
                </div> -->
                <h1 class="display-4" style="font-size: 50px !important;">Bienvenido</h1>
                <p class="mb-5" style="font-size: 20px !important;">Inicie sesión con sus credenciales</p>
                <form action="./session.php" method="post">
                    <div class="input-group input-group-lg px-4 mb-2">
                        <input type="text" name="usuario" class="form-control login" id="usuario" autocomplete="off" placeholder="Usuario" autofocus required>
                    </div>
                    <div class="input-group input-group-lg px-4">
                        <input type="password" name="clave" class="form-control login" id="clave" autocomplete="off" placeholder="Contraseña" required>
                    </div>
                    <div class="px-4 mt-4">
                        <button type="submit" class="btn btn-primary btn-block btn-lg login">Acceder</button>
                    </div>
                </form>
                <hr>
                <p class="text-primary pb-2">Recuerda tus credenciales de inicio de sesión</p>
            </div>
        </div>
    </div>
</body>
</html>