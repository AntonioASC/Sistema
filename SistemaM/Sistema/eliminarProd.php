<!DOCTYPE html>
<html>
<head>
	<title>EliminaRegistros</title>
</head>
<body>
	<h1>Eliminar registros de la base de datos</h1>

	<?php
	// Conexión a la base de datos
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "mydb";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Error de conexión: " . mysqli_connect_error());
	}

	// Obtener las tablas de la base de datos
	$tables = array();
	$sql = "SHOW TABLES";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		while ($row = mysqli_fetch_row($result)) {
			$tables[] = $row[0];
		}
	}

	// Mostrar las tablas de la base de datos
	if (count($tables) > 0) {
		echo "<h2>Tablas en la base de datos:</h2>";
		echo "<ul>";
		foreach ($tables as $table) {
			echo "<li><a href='?table=$table'>$table</a></li>";
		}
		echo "</ul>";
	}

	// Eliminar registro
	if (isset($_GET['table']) && isset($_GET['id'])) {
		$table = $_GET['table'];
		$id = $_GET['id'];
		$sql = "DELETE FROM $table WHERE id=$id";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<p>Registro eliminado correctamente.</p>";
		} else {
			echo "<p>Error al eliminar registro: " . mysqli_error($conn) . "</p>";
		}
	}

	// Mostrar los registros de la tabla seleccionada
	if (isset($_GET['table'])) {
		$table = $_GET['table'];
		$sql = "SELECT * FROM $table";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<h2>Registros en la tabla $table:</h2>";
			echo "<table>";
			echo "<tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>" . $row['id'] . "</td><td>" . $row['nombre'] . "</td><td><a href='?table=$table&id=" . $row['id'] . "'>Eliminar</a></td></tr>";
			}
			echo "</table>";
		} else {
			echo "<p>Error al obtener registros: " . mysqli_error($conn) . "</p>";
		}
	}

	// Cerrar la conexión a la base de datos
	mysqli_close($conn);
	?>

</body>
</html>
