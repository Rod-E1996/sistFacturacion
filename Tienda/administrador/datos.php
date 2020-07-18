<?php 
$conexion=mysqli_connect('localhost','root','','tienda');
$descripcion=$_POST['descripcion'];

	$sql="SELECT * FROM productos WHERE descripcion='$descripcion'";

	$result=mysqli_query($conexion,$sql);

	while ($ver=mysqli_fetch_row($result)) {
        $cadena="
            <input type='text' class='form-control' name='precio_1' id='num2' value='".$ver[4]."' title='Precio 1' readonly='readonly'>
        ";
        echo $cadena;
	}
?>