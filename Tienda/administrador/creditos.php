<?php include ("header.php"); ?>
<h1 class="display-4 text-center">Créditos</h1>
<div class="container-fluid">
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
</div>