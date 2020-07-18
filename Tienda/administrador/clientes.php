<?php include ("header.php"); ?>
<h1 class="display-4 text-center">Clientes</h1>
<div class="container-fluid">
    <div class="row mt-4 justify-content-center">
        <!-- Modal para agregar clientes -->
        <button class="btn col-8 btn-lg btn-primary boton_productos" data-toggle="modal" data-target="#agregar">Agregar cliente</button>
        <form method="post">
            <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-6"><!-- Nombre -->
                                    <label for="nombre" class="">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" autocomplete="off" id="nombre" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6"><!-- N° registro fiscal -->
                                    <label for="registro_fiscal" class="">N° registro fiscal</label>
                                    <input type="text" class="form-control" name="registro_fiscal" autocomplete="off" id="registro_fiscal" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12"><!-- Direccion -->
                                    <label for="direccion" class="">Dirección</label>
                                    <input type="text" class="form-control" name="direccion" autocomplete="off" id="direccion" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-6"><!-- Teléfono -->
                                    <label for="telefono" class="">Teléfono</label>
                                    <input type="tel" class="form-control" name="telefono" autocomplete="off" id="telefono">
                                </div>
                                <div class="form-group col-xs-12 col-sm-6"><!-- Celular -->
                                    <label for="celular" class="">Celular</label>
                                    <input type="tel" class="form-control" name="celular" autocomplete="off" id="celular">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-6"><!-- DUI -->
                                    <label for="dui" class="">DUI</label>
                                    <input type="text" class="form-control" name="dui" autocomplete="off" id="dui">
                                </div>
                                <div class="form-group col-xs-12 col-sm-6"><!-- NIT -->
                                    <label for="nit" class="">NIT</label>
                                    <input type="text" class="form-control" name="nit" autocomplete="off" id="nit">
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
        <!-- Fin modal para agregar clientes -->
        <div class="col-12 mt-3 table-responsive">
            <table class="table table-striped table-hover shadow mb-4 mt-2 bg-white rounded table-bordered" id="tabla">
                <thead class="thead-dark">
                    <tr>
                        <th class="align-middle text-center">Nombre</th>
                        <th class="align-middle text-center">DUI</th>
                        <th class="align-middle text-center">Registro fiscal</th>
                        <th class="align-middle text-center">Celular</th>
                        <th class="align-middle text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $consulta="SELECT * FROM clientes";
                        $result=$conexion->query($consulta);
                        while ($row=$result->fetch_assoc()) {?>
                            <tr class="text-center">
                                <td class="align-middle"><?php echo $row['nombre'] ?></td>
                                <td class="align-middle"><?php echo $row['dui'] ?></td>
                                <td class="align-middle"><?php echo $row['registro_fiscal'] ?></td>
                                <td class="align-middle"><?php echo $row['celular'] ?></td>
                                <td class="align-middle"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cliente<?php echo $row['id_cliente']; ?>">Ver / Editar</button></td>
                            </tr>
                        <?php
                            }
                        ?>
                </tbody>
            </table>
            <?php
                $consulta="SELECT * FROM clientes";
                $result=$conexion->query($consulta);
                while ($row=$result->fetch_assoc()) {?>
            <!-- Modal -->
            <form method="post">
                <div class="modal fade" id="cliente<?php echo $row['id_cliente']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"><?= $row['nombre'];?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id_cliente" id="id_cliente" value="<?= $row['id_cliente']; ?>">
                                <div class="form-row">
                                    <div class="form-group col-xs-12 col-sm-6"><!-- Nombre -->
                                        <label for="nombre_edit" class="">Nombre</label>
                                        <input type="text" class="form-control" name="nombre_edit" autocomplete="off" id="nombre_edit" value="<?=$row['nombre'];?>" required>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6"><!-- N° registro fiscal -->
                                        <label for="registro_fiscal_edit" class="">N° registro fiscal</label>
                                        <input type="text" class="form-control" name="registro_fiscal_edit" autocomplete="off" id="registro_fiscal_edit" value="<?=$row['registro_fiscal'];?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12"><!-- Direccion -->
                                        <label for="direccion_edit" class="">Dirección</label>
                                        <input type="text" class="form-control" name="direccion_edit" autocomplete="off" id="direccion_edit" value="<?=$row['direccion'];?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-xs-12 col-sm-6"><!-- Teléfono -->
                                        <label for="telefono_edit" class="">Teléfono</label>
                                        <input type="tel" class="form-control" name="telefono_edit" autocomplete="off" id="telefono_edit" value="<?=$row['telefono'];?>">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6"><!-- Celular -->
                                        <label for="celular_edit" class="">Celular</label>
                                        <input type="tel" class="form-control" name="celular_edit" autocomplete="off" id="celular_edit" value="<?=$row['celular'];?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-xs-12 col-sm-6"><!-- DUI -->
                                        <label for="dui_edit" class="">DUI</label>
                                        <input type="text" class="form-control" name="dui_edit" autocomplete="off" id="dui_edit" value="<?=$row['dui'];?>">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6"><!-- NIT -->
                                        <label for="nit_edit" class="">NIT</label>
                                        <input type="text" class="form-control" name="nit_edit" autocomplete="off" id="nit_edit" value="<?=$row['nit'];?>">
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
                if (isset($_POST['aceptar'])){ //Actualizar clientes
                    //Postear las variables
                    $id_cliente=$_POST['id_cliente'];
                    $nombre_edit=$_POST['nombre_edit'];
                    $registro_fiscal_edit=$_POST['registro_fiscal_edit'];
                    $direccion_edit=$_POST['direccion_edit'];
                    $telefono_edit=$_POST['telefono_edit'];
                    $celular_edit=$_POST['celular_edit'];
                    $dui_edit=$_POST['dui_edit'];
                    $nit_edit=$_POST['nit_edit'];
                    $consulta = "UPDATE clientes SET nombre='$nombre_edit', registro_fiscal='$registro_fiscal_edit', direccion='$direccion_edit', telefono='$telefono_edit', celular='$celular_edit', dui='$dui_edit', nit='$nit_edit' WHERE id_cliente=$id_cliente";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            // Swal.fire({
                            //     type: 'success',
                            //     title: 'Registro actualizado con éxito',
                            //     showConfirmButton: false,
                            //     timer: 4000
                            // });
                            window.location.href="./clientes.php";
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
                else if (isset($_POST['guardar'])){ //Ingresar un nuevo cliente
                    //Postear las variables
                    $id_cliente=$_POST['id_cliente'];
                    $nombre=$_POST['nombre'];
                    $registro_fiscal=$_POST['registro_fiscal'];
                    $direccion=$_POST['direccion'];
                    $telefono=$_POST['telefono'];
                    $celular=$_POST['celular'];
                    $dui=$_POST['dui'];
                    $nit=$_POST['nit'];
                    $consulta = "INSERT INTO clientes (nombre, direccion, telefono, celular, dui, nit, registro_fiscal) VALUES ('$nombre', '$direccion', '$telefono', '$celular', '$dui', '$nit', '$registro_fiscal')";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            // Swal.fire({
                            //     type: 'success',
                            //     title: 'Registro actualizado con éxito',
                            //     showConfirmButton: false,
                            //     timer: 4000
                            // });
                            window.location.href="./clientes.php";
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