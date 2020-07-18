<?php include ("header.php"); ?>
<h1 class="display-4 text-center">Productos</h1>
<div class="container-fluid">
    <div class="row mt-4 justify-content-center">
        <!-- Modal para agregar producto -->
        <button class="btn col-8 btn-lg btn-success boton_productos" data-toggle="modal" data-target="#agregar">Agregar producto</button>
        <form method="post">
            <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo producto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-6"><!-- Código -->
                                    <label for="codigo" class="">Código</label>
                                    <input type="number" class="form-control" name="codigo" autocomplete="off" id="codigo" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6"><!-- Descripción -->
                                    <label for="descripcion" class="">Descripción</label>
                                    <input type="text" class="form-control" name="descripcion" autocomplete="off" id="descripcion" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-6"><!-- Costo -->
                                    <label for="costo" class="">Costo</label>
                                    <input type="number" class="form-control" name="costo" min="0.01" step="0.01" autocomplete="off" id="costo">
                                </div>
                                <div class="form-group col-xs-12 col-sm-6"><!-- Precio -->
                                    <label for="precio" class="">Precio</label>
                                    <input type="number" class="form-control" name="precio" min="0.01" step="0.01" autocomplete="off" id="precio" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-6"><!-- Cantidad -->
                                    <label for="cantidad" class="">Cantidad</label>
                                    <input type="number" class="form-control" name="cantidad" min="1" step="1" autocomplete="off" id="cantidad" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6"><!-- Fecha de vencimiento -->
                                    <label for="fecha_vencimiento" class="">Fecha de vencimiento</label>
                                    <input type="date" class="form-control" name="fecha_vencimiento" autocomplete="off" id="fecha_vencimiento" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Fin modal para agregar producto -->
        <div class="col-12 mt-3 table-responsive">
            <table class="table table-striped table-hover shadow mb-4 mt-2 bg-white rounded table-bordered" id="tabla">
                <thead class="thead-dark">
                    <tr>
                        <th class="align-middle text-center">Código</th>
                        <th class="align-middle text-center">Descripción</th>
                        <th class="align-middle text-center">Cantidad</th>
                        <th class="align-middle text-center">Fecha de vencimiento</th>
                        <th class="align-middle text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $consulta="SELECT * FROM productos ORDER BY descripcion ASC";
                        $result=$conexion->query($consulta);
                        while ($row=$result->fetch_assoc()) {?>
                            <tr class="text-center">
                                <td class="align-middle"><?php echo $row['codigo'] ?></td>
                                <td class="align-middle"><?php echo $row['descripcion'] ?></td>
                                <td class="align-middle"><?php echo $row['cantidad'] ?></td>
                                <?php //Formato para la fecha de vencimiento
                                    $fecha=date_create($row['fecha_vencimiento']);
                                ?>
                                <td class="align-middle"><?php echo date_format($fecha, 'd/m/Y') ?></td>
                                <td class="align-middle"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#producto<?php echo $row['id_producto']; ?>">Ver / Editar</button></td>
                            </tr>
                        <?php
                            }
                        ?>
                </tbody>
            </table>
            <?php
                $consulta="SELECT * FROM productos ORDER BY descripcion ASC";
                $result=$conexion->query($consulta);
                while ($row=$result->fetch_assoc()) {?>
            <!-- Modal -->
            <form method="post">
                <div class="modal fade" id="producto<?php echo $row['id_producto']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"><?= $row['descripcion'];?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id_producto" id="id_producto" value="<?= $row['id_producto']; ?>">
                                <div class="form-row">
                                    <div class="form-group col-xs-12 col-sm-6"><!-- Código -->
                                        <label for="codigo_edit" class="">Código</label>
                                        <input type="text" class="form-control" name="codigo_edit" autocomplete="off" id="codigo_edit" value="<?=$row['codigo'];?>" required>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6"><!-- Descripción -->
                                        <label for="descripcion_edit" class="">Descripción</label>
                                        <input type="text" class="form-control" name="descripcion_edit" autocomplete="off" id="descripcion_edit" value="<?=$row['descripcion'];?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-xs-12 col-sm-6"><!-- Costo -->
                                        <label for="costo_edit" class="">Costo</label>
                                        <input type="number" class="form-control" name="costo_edit" min="0.01" step="0.01" autocomplete="off" id="costo_edit" value="<?=$row['costo'];?>">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6"><!-- Precio -->
                                        <label for="precio_edit" class="">Precio</label>
                                        <input type="number" class="form-control" name="precio_edit" min="0.01" step="0.01" autocomplete="off" id="precio_edit" value="<?=$row['precio'];?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-xs-12 col-sm-6"><!-- Cantidad -->
                                        <label for="cantidad_edit" class="">Cantidad</label>
                                        <input type="number" class="form-control" name="cantidad_edit" min="1" step="1" autocomplete="off" id="cantidad_edit" value="<?=$row['cantidad'];?>" required>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6"><!-- Fecha de vencimiento -->
                                        <label for="fecha_vencimiento_edit" class="">Fecha de vencimiento</label>
                                        <input type="date" class="form-control" name="fecha_vencimiento_edit" autocomplete="off" id="fecha_vencimiento_edit" value="<?=$row['fecha_vencimiento'];?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="submit" name="aceptar" class="btn btn-primary">Guardar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin modal -->
            </form>
            <?php
                }
                if (isset($_POST['aceptar'])){ //Actualizar productos
                    //Postear las variables
                    $id_producto=$_POST['id_producto'];
                    $codigo_edit=$_POST['codigo_edit'];
                    $descripcion_edit=$_POST['descripcion_edit'];
                    $costo_edit=$_POST['costo_edit'];
                    $precio_edit=$_POST['precio_edit'];
                    $cantidad_edit=$_POST['cantidad_edit'];
                    $fecha_vencimiento_edit=$_POST['fecha_vencimiento_edit'];
                    $consulta = "UPDATE productos SET codigo='$codigo_edit', descripcion='$descripcion_edit', costo='$costo_edit', precio='$precio_edit', cantidad='$cantidad_edit', fecha_vencimiento='$fecha_vencimiento_edit' WHERE id_producto=$id_producto";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            // Swal.fire({
                            //     type: 'success',
                            //     title: 'Registro actualizado con éxito',
                            //     showConfirmButton: false,
                            //     timer: 4000
                            // });
                            window.location.href="./productos.php";
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'No se pudo actualizar',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
                else if (isset($_POST['guardar'])){ //Ingresar un nuevo producto
                    //Postear las variables
                    $id_producto=$_POST['id_producto'];
                    $codigo=$_POST['codigo'];
                    $descripcion=$_POST['descripcion'];
                    $costo=$_POST['costo'];
                    $precio=$_POST['precio'];
                    $cantidad=$_POST['cantidad'];
                    $fecha_vencimiento=$_POST['fecha_vencimiento'];
                    $consulta = "INSERT INTO productos (codigo, descripcion, costo, precio, cantidad, fecha_vencimiento) VALUES ('$codigo', '$descripcion', '$costo', '$precio', '$cantidad', '$fecha_vencimiento')";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            // Swal.fire({
                            //     type: 'success',
                            //     title: 'Registro actualizado con éxito',
                            //     showConfirmButton: false,
                            //     timer: 4000
                            // });
                            window.location.href="./productos.php";
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'Error al ingresar producto',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
            ?>
        </div>
    </div>
</div>