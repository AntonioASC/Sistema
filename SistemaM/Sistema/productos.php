<?php
	include('conexion2.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>HervVy: Al alcance de un click</title>
	</head>
	
	<body>
		<h1>Lista de Productos</h1>

		<table>
			<thead>
				<th>Id</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Contenido</th>
				<th>Nomenclatura</th>
				<th>PrecioMen</th>
				<th>PrecioMay</th>
			</thead>
			<tbody>
				<?=mostrarProd($conexion2); ?>
			</tbody>
		</table>
	</body>
</html>