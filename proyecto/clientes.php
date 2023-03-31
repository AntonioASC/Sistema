<?php
	include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>HervVy: Al alcance de un click</title>
	</head>
	
	<body>
		<h1>Lista de clientes</h1>

		<table>
			<thead>
				<th>Id</th>
				<th>Nombre</th>
				<th>Ap.Paterno</th>
				<th>Ap.Materno</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Email</th>
			</thead>
			<tbody>
				<?=cargarTabla($conexion); ?>
			</tbody>
		</table>
	</body>
</html>