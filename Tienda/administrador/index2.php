<?php
	include "header.php";
?>
<body>
	<h2>Llenar un select a partir de otro select con jquery y php</h2>

			<label>SELECT 1 (Continentes)</label>
			<select id="lista1" name="lista1">
				<option value="0" selected disabled>Selecciona una opcion</option>
				<option value="1">America</option>
				<option value="2">Asia</option>
				<option value="3">Europa</option>
				<option value="4">Africa</option>
			</select>
			<br>
			<div id="select2lista"></div>
</body>
</html>