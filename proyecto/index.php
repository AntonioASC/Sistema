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
		<h1>Iniciar sesion</h1>
		<input type="text" name="username" placeholder="Usuario">
		<input type="password" name="password" placeholder="Contraseña">
		<button onclick="location.href='registrar.php'">Registrate</button>
		<button onclick="location.href='clientes.php'">Iniciar Sesion</button>
		<!--
		 -->


	</body>
</html>