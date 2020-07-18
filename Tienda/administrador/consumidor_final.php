<?php 
    include ("header.php");
    date_default_timezone_set('America/El_Salvador');
?>
<h1 class="display-4 text-center">Factura de consumidor final</h1>
<div class="container mt-4">
    <hr width="75%">
    <form method="post">
        <div class="form-row">
            <div class="form-group col-xs-12 col-sm-9"><!-- Nombre -->
                <label for="nombre" class="">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" autocomplete="off" required>
            </div>
            <div class="form-group col-xs-12 col-sm-3"><!-- Fecha de hoy -->
                <label for="fecha_hoy" class="">Fecha y hora</label>
                <input type="text" class="form-control" name="fecha" id="fecha" value="<?php echo date("d-m-Y"); ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-xs-12 col-sm-6"><!-- Dirección -->
                <label for="direccion" class="">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" autocomplete="off">
            </div>
            <div class="form-group col-xs-12 col-sm-3"><!-- DUI -->
                <label for="dui" class="">DUI</label>
                <input type="text" class="form-control" name="dui" id="dui" autocomplete="off">
            </div>
            <div class="form-group col-xs-12 col-sm-3"><!-- NIT -->
                <label for="nit" class="">NIT</label>
                <input type="text" class="form-control" name="nit" id="nit" autocomplete="off">
            </div>
        </div>
        <hr>
        <div class="col-12 table-responsive">
            <table class="table table-striped table-hover shadow bg-white rounded table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th class="align-middle text-center">Cantidad</th>
                        <th class="align-middle text-center">Descripción del producto</th>
                        <th class="align-middle text-center">Precio</th>
                        <th class="align-middle text-center">Ventas afectas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i=1; $i<=10; $i++){
                            echo "
                                <tr>
                                    <td class='align-middle'>
                                        <input type='number' class='form-control' name='cantidad_$i' id='cantidad_$i' min='1' step='1' autocomplete='off' title='Cantidad $i'>
                                    </td>
                                    <td class='align-middle'>
                                        <select class='form-control' name='descripcion_$i' id='descripcion_$i'>
                                        <option value='' selected disabled>-- Seleccione un producto --</option>";
                                        $consulta="SELECT * FROM productos WHERE cantidad>0 ORDER BY descripcion ASC";
                                        $result=$conexion->query($consulta);
                                        while ($row=$result->fetch_assoc()) {
                                            echo "
                                            <option value='";echo $row['descripcion'];echo "'>";echo $row['descripcion'];echo "</option>";
                                        }
                                    echo "
                                    </select>
                                    </td>
                                    <td class='align-middle'>
                                        <input type='text' class='form-control' name='precio_$i' id='precio_$i' disabled title='Precio $i'>
                                    </td>
                                    <td class='align-middle'>
                                        <input type='number' class='form-control' name='ventas_afectas_$i' id='ventas_afectas_$i' disabled title='Total $i'>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                    <tr>
                        <td colspan="3" class="text-center align-middle text-success alert-success">TOTAL A CANCELAR</td>
                        <td>
                            <input type="number" class="form-control" name="total" id="total" autocomplete="off" title="Total" disabled>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <button type="submit" name="aceptar" class="btn btn-primary btn-lg col-12 mb-4">Facturar orden</button>
    </form>
    <?php
        if (isset($_POST['aceptar'])){
            $nombre=$_POST['nombre'];
            $fecha_hoy=date("Y-m-d");
            $direccion=$_POST['direccion'];
            $dui=$_POST['dui'];
            $nit=$_POST['nit'];
            $cantidad_1=$_POST['cantidad_1'];
            $cantidad_2=$_POST['cantidad_2'];
            $cantidad_3=$_POST['cantidad_3'];
            $cantidad_4=$_POST['cantidad_4'];
            $cantidad_5=$_POST['cantidad_5'];
            $cantidad_6=$_POST['cantidad_6'];
            $cantidad_7=$_POST['cantidad_7'];
            $cantidad_8=$_POST['cantidad_8'];
            $cantidad_9=$_POST['cantidad_9'];
            $cantidad_10=$_POST['cantidad_10'];
            $descripcion_1=$_POST['descripcion_1'];
            $descripcion_2=$_POST['descripcion_2'];
            $descripcion_3=$_POST['descripcion_3'];
            $descripcion_4=$_POST['descripcion_4'];
            $descripcion_5=$_POST['descripcion_5'];
            $descripcion_6=$_POST['descripcion_6'];
            $descripcion_7=$_POST['descripcion_7'];
            $descripcion_8=$_POST['descripcion_8'];
            $descripcion_9=$_POST['descripcion_9'];
            $descripcion_10=$_POST['descripcion_10'];
            $precio_1=$_POST['precio_1'];
            $precio_2=$_POST['precio_2'];
            $precio_3=$_POST['precio_3'];
            $precio_4=$_POST['precio_4'];
            $precio_5=$_POST['precio_5'];
            $precio_6=$_POST['precio_6'];
            $precio_7=$_POST['precio_7'];
            $precio_8=$_POST['precio_8'];
            $precio_9=$_POST['precio_9'];
            $precio_10=$_POST['precio_10'];
            $ventas_afectas_1=$_POST['ventas_afectas_1'];
            $ventas_afectas_2=$_POST['ventas_afectas_2'];
            $ventas_afectas_3=$_POST['ventas_afectas_3'];
            $ventas_afectas_4=$_POST['ventas_afectas_4'];
            $ventas_afectas_5=$_POST['ventas_afectas_5'];
            $ventas_afectas_6=$_POST['ventas_afectas_6'];
            $ventas_afectas_7=$_POST['ventas_afectas_7'];
            $ventas_afectas_8=$_POST['ventas_afectas_8'];
            $ventas_afectas_9=$_POST['ventas_afectas_9'];
            $ventas_afectas_10=$_POST['ventas_afectas_10'];
            $total=$_POST['total'];
            if ($total==""){
                $total=0;
            }
            if (($descripcion_1=="")&&($descripcion_2=="")&&($descripcion_3=="")&&($descripcion_4=="")&&($descripcion_5=="")&&($descripcion_6=="")&&($descripcion_7=="")&&($descripcion_8=="")&&($descripcion_9=="")&&($descripcion_10=="")){
                ?>
                    <script type="text/javascript">
                        window.location.href="consumidor_final.php";
                    </script>
                <?php
            }
            else {
                if ($ventas_afectas_1==""){
                    $cantidad_1=0;
                    $descripcion_1=" ";
                    $precio_1=0;
                    $ventas_afectas_1=0;
                }
                if ($ventas_afectas_2==""){
                    $cantidad_2=0;
                    $descripcion_2=" ";
                    $precio_2=0;
                    $ventas_afectas_2=0;
                }
                if ($ventas_afectas_3==""){
                    $cantidad_3=0;
                    $descripcion_3=" ";
                    $precio_3=0;
                    $ventas_afectas_3=0;
                }
                if ($ventas_afectas_4==""){
                    $cantidad_4=0;
                    $descripcion_4=" ";
                    $precio_4=0;
                    $ventas_afectas_4=0;
                }
                if ($ventas_afectas_5==""){
                    $cantidad_5=0;
                    $descripcion_5=" ";
                    $precio_5=0;
                    $ventas_afectas_5=0;
                }
                if ($ventas_afectas_6==""){
                    $cantidad_6=0;
                    $descripcion_6=" ";
                    $precio_6=0;
                    $ventas_afectas_6=0;
                }
                if ($ventas_afectas_7==""){
                    $cantidad_7=0;
                    $descripcion_7=" ";
                    $precio_7=0;
                    $ventas_afectas_7=0;
                }
                if ($ventas_afectas_8==""){
                    $cantidad_8=0;
                    $descripcion_8=" ";
                    $precio_8=0;
                    $ventas_afectas_8=0;
                }
                if ($ventas_afectas_9==""){
                    $cantidad_9=0;
                    $descripcion_9=" ";
                    $precio_9=0;
                    $ventas_afectas_9=0;
                }
                if ($ventas_afectas_10==""){
                    $cantidad_10=0;
                    $descripcion_10=" ";
                    $precio_10=0;
                    $ventas_afectas_10=0;
                }
                $insertar = "INSERT INTO facturas (nombre, fecha, direccion, dui, nit, tipo, dias_credito, cantidad_1, cantidad_2, cantidad_3, cantidad_4, cantidad_5, cantidad_6, cantidad_7, cantidad_8, cantidad_9, cantidad_10, descripcion_1, descripcion_2, descripcion_3, descripcion_4, descripcion_5, descripcion_6, descripcion_7, descripcion_8, descripcion_9, descripcion_10, precio_1, precio_2, precio_3, precio_4, precio_5, precio_6, precio_7, precio_8, precio_9, precio_10, ventas_afectas_1, ventas_afectas_2, ventas_afectas_3, ventas_afectas_4, ventas_afectas_5, ventas_afectas_6, ventas_afectas_7, ventas_afectas_8, ventas_afectas_9, ventas_afectas_10, total) VALUES ('$nombre', '$fecha_hoy', '$direccion', '$dui', '$nit', '2', '0', '$cantidad_1', '$cantidad_2', '$cantidad_3', '$cantidad_4', '$cantidad_5', '$cantidad_6', '$cantidad_7', '$cantidad_8', '$cantidad_9', '$cantidad_10', '$descripcion_1', '$descripcion_2', '$descripcion_3', '$descripcion_4', '$descripcion_5', '$descripcion_6', '$descripcion_7', '$descripcion_8', '$descripcion_9', '$descripcion_10', '$precio_1', '$precio_2', '$precio_3', '$precio_4', '$precio_5', '$precio_6', '$precio_7', '$precio_8', '$precio_9', '$precio_10', '$ventas_afectas_1', '$ventas_afectas_2', '$ventas_afectas_3', '$ventas_afectas_4', '$ventas_afectas_5', '$ventas_afectas_6', '$ventas_afectas_7', '$ventas_afectas_8', '$ventas_afectas_9', '$ventas_afectas_10', '$total')";
                if ($conexion->query($insertar)==true) {
                ?>
                    <script type="text/javascript">
                        window.location.href="./consumidor_final.php";
                    </script>
                <?php
                    }
                else {
                    echo mysqli_error($conexion);
                ?>
                    <script type="text/javascript">
                        Swal.fire({
                            type: 'error',
                            title: 'Error al ingresar factura',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    </script>
                <?php
                }
            }
        }
    ?>
</div>
