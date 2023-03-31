<?php
	include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Registrate</title>
	</head>
	
	<body>
		<form action="conexion.php" method="post">
			
			<input type="text" name="nombre" placeholder="Nombre">
			<input type="text" name="appat" placeholder="Apellido Paterno">
			<input type="text" name="apmat" placeholder="Apellido Materno">
			<input type="telefono" name="telefono" placeholder="Telefono">
			<input type="text" name="dir" placeholder="Direccion">
			<input type="email" name="email" placeholder="E-mail">
			<input type="text" name="user" placeholder="Usuario">
			<input type="password" name="pass" placeholder="Contraseña">
			<button type="submit" name="insertar">Registrar</button>
            <!-- <button type="submit" name="eliminar">Eliminar</button> -->

		</form>

	</body>
</html>