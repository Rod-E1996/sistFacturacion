<?php include ("header.php"); ?>
<div class="container-fluid">
    <h1 class="display-4 text-center">Pacientes</h1>
    <hr>
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#agregar">Nuevo paciente</button>
    <form method="post">
        <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="modalPacientes" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPacientes">Nuevo paciente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body mx-3">
                            <!-- Datos del paciente -->
                            <p class="text-center text-primary"><b>Información del paciente</b></p>
                            <hr class="btn-outline-primary mt-n2 mb-4" style="width: 90%;">
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-4"><!-- Nombres -->
                                    <label for="nombres_paciente" class="">Nombre(s)</label>
                                    <input type="text" class="form-control" name="nombres_paciente" autocomplete="off" id="nombres_paciente" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Apellido paterno -->
                                    <label for="paterno_paciente" class="">Apellido paterno</label>
                                    <input type="text" class="form-control" name="paterno_paciente" id="paterno_paciente" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Apellido materno -->
                                    <label for="materno_paciente" class="">Apellido materno</label>
                                    <input type="text" class="form-control" name="materno_paciente" id="materno_paciente" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-4"><!-- Fecha de nacimiento -->
                                    <label for="fecha_paciente" class="">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" min="10-01-2020" name="fecha_paciente" id="fecha_paciente" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Sexo -->
                                    <label for="sexo_paciente" class="">Sexo</label>
                                    <select name="sexo_paciente" class="form-control" id="sexo_paciente" required>
                                        <option value="" selected disabled>Seleccione una opción...</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Peso -->
                                    <label for="peso_paciente" class="">Peso (lbs)</label>
                                    <input type="number" name="peso_paciente" min="1" step="0.01" class="form-control" id="peso_paciente" required>
                                </div>
                            </div>
                            <!-- Datos del acompañante -->
                            <p class="text-center text-primary mt-2"><b>Información del acompañante</b></p>
                            <hr class="btn-outline-primary mt-n2 mb-4" style="width: 90%;">
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-4"><!-- Nombres -->
                                    <label for="nombres_acompaniante" class="">Nombre(s)</label>
                                    <input type="text" class="form-control" name="nombres_acompaniante" autocomplete="off" id="nombres_acompaniante" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Apellido paterno -->
                                    <label for="paterno_acompaniante" class="">Apellido paterno</label>
                                    <input type="text" class="form-control" name="paterno_acompaniante" id="paterno_acompaniante" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Apellido materno -->
                                    <label for="materno_acompaniante" class="">Apellido materno</label>
                                    <input type="text" class="form-control" name="materno_acompaniante" id="materno_acompaniante" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-4"><!-- Relación -->
                                    <label for="relacion_acompaniante" class="">Relación</label>
                                    <select name="relacion_acompaniante" class="form-control" id="relacion_acompaniante">
                                        <option value="" selected disabled>Seleccione una opción...</option>
                                        <option value="Hermano">Hermano</option>
                                        <option value="Hermana">Hermana</option>
                                        <option value="Papá">Papá</option>
                                        <option value="Mamá">Mamá</option>
                                        <option value="Tío">Tío</option>
                                        <option value="Tía">Tía</option>
                                        <option value="Abuelo">Abuelo</option>
                                        <option value="Abuela">Abuela</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Correo electrónico -->
                                    <label for="correo_acompaniante" class="">Correo electrónico</label>
                                    <input type="email" class="form-control" name="correo_acompaniante" id="correo_acompaniante">
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Fecha de nacimiento -->
                                    <label for="fecha_acompaniante" class="">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" name="fecha_acompaniante" id="fecha_acompaniante">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-4"><!-- Celular -->
                                    <label for="celular_acompaniante" class="">Teléfono celular</label>
                                    <input type="tel" class="form-control" name="celular_acompaniante" autocomplete="off" id="celular_acompaniante">
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Casa -->
                                    <label for="casa_acompaniante" class="">Teléfono de casa</label>
                                    <input type="tel" class="form-control" name="casa_acompaniante" autocomplete="off" id="casa_acompaniante">
                                </div>
                                <div class="form-group col-xs-12 col-sm-4"><!-- Oficina -->
                                    <label for="oficina_acompaniante" class="">Teléfono de oficina</label>
                                    <input type="tel" class="form-control" name="oficina_acompaniante" autocomplete="off" id="oficina_acompaniante">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-9"><!-- Dirección -->
                                    <label for="direccion_acompaniante" class="">Dirección</label>
                                    <input type="text" class="form-control" name="direccion_acompaniante" autocomplete="off" id="direccion_acompaniante">
                                </div>
                                <div class="form-group col-xs-12 col-sm-3"><!-- Estado civil -->
                                    <label for="estado_acompaniante" class="">Estado civil</label>
                                    <select name="estado_acompaniante" class="form-control" id="estado_acompaniante">
                                        <option value="" selected disabled>Seleccione una opción...</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Divorciado">Divorciado</option>
                                        <option value="Acompañado">Acompañado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-9"><!-- Notas -->
                                    <label for="notas_acompaniante" class="">Notas</label>
                                    <input type="text" class="form-control" maxlength="256" name="notas_acompaniante" autocomplete="off" id="notas_acompaniante">
                                </div>
                                <div class="form-group col-xs-12 col-sm-3"><!-- Ocupación -->
                                    <label for="ocupacion_acompaniante" class="">Ocupación</label>
                                    <input type="text" class="form-control" name="ocupacion_acompaniante" autocomplete="off" id="ocupacion_acompaniante">
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
    <table class="table table-striped table-hover table-bordered" id="tabla">
        <thead class="thead-dark">
            <tr class="text-center align-middle">
                <th>Paciente</th>
                <th>Última consulta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $consulta="SELECT * FROM pacientes ORDER BY paciente_nombres";
                $result=$conexion->query($consulta);
                while ($row=$result->fetch_assoc()) {?>
                    <tr>
                        <td class="text-center align-middle"><?php echo $row['paciente_nombres']; echo " ".$row['paciente_paterno']; echo " ".$row['paciente_materno']; ?></td>
                        <td class="text-center align-middle">
                        <?php //Dar formato para la fecha de nacimiento
                            $fecha_nacimiento=new DateTime($row['paciente_nacimiento']);
                            echo $fecha_nacimiento->format('d/m/Y'); ?>
                        </td>
                        <td class="text-center align-middle">
                            <a href="paciente.php?id=<?php echo $row['id_paciente']; ?>" class="btn btn-outline-primary">Ver paciente</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>
<?php
    if (isset($_POST['guardar'])){
        $nombres_paciente=$_POST['nombres_paciente'];
        $paterno_paciente=$_POST['paterno_paciente'];
        $materno_paciente=$_POST['materno_paciente'];
        $fecha_paciente=$_POST['fecha_paciente'];
        $sexo_paciente=$_POST['sexo_paciente'];
        $peso_paciente=$_POST['peso_paciente'];
        $nombres_acompaniante=$_POST['nombres_acompaniante'];
        $paterno_acompaniante=$_POST['paterno_acompaniante'];
        $materno_acompaniante=$_POST['materno_acompaniante'];
        $relacion_acompaniante=$_POST['relacion_acompaniante'];
        $correo_acompaniante=$_POST['correo_acompaniante'];
        $fecha_acompaniante=$_POST['fecha_acompaniante'];
        $celular_acompaniante=$_POST['celular_acompaniante'];
        $casa_acompaniante=$_POST['casa_acompaniante'];
        $oficina_acompaniante=$_POST['oficina_acompaniante'];
        $direccion_acompaniante=$_POST['direccion_acompaniante'];
        $estado_acompaniante=$_POST['estado_acompaniante'];
        $notas_acompaniante=$_POST['notas_acompaniante'];
        $ocupacion_acompaniante=$_POST['ocupacion_acompaniante'];
        $consulta="INSERT INTO pacientes (paciente_nombres, paciente_paterno, paciente_materno, paciente_nacimiento, paciente_sexo, paciente_peso, acompaniante_nombres, acompaniante_paterno, acompaniante_materno, acompaniante_relacion, acompaniante_correo, acompaniante_nacimiento, acompaniante_celular, acompaniante_casa, acompaniante_oficina, acompaniante_direccion, acompaniante_estado, acompaniante_notas, acompaniante_ocupacion) VALUES ('$nombres_paciente', '$paterno_paciente', '$materno_paciente', '$fecha_paciente', '$sexo_paciente', '$peso_paciente', '$nombres_acompaniante', '$paterno_acompaniante', '$materno_acompaniante', '$relacion_acompaniante', '$correo_acompaniante', '$fecha_acompaniante', '$celular_acompaniante', '$casa_acompaniante', '$oficina_acompaniante', '$direccion_acompaniante', '$estado_acompaniante', '$notas_acompaniante', '$ocupacion_acompaniante')";
        if ($conexion->query($consulta)==true) {
        ?>
            <script type="text/javascript">
                window.location.href="pacientes.php";
            </script>
        <?php
            }
        else {
        ?>
            <script type="text/javascript">
                Swal.fire({
                    type: 'error',
                    title: 'Error al ingresar paciente',
                    html: '<img class="img-fluid shadow p-3 mb-2 bg-white rounded" width="250px" src="../assets/gato.jpg">',
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        <?php
        }
    }
?>