<?php
// Obtener los valores del formulario
$idProveedor = $_POST['idProveedorP'];
$nombre = $_POST['nombreP'];
$domicilio = $_POST['domicilioP'];
$telefono = $_POST['telefonoP'];
$cif = $_POST['CIFP'];

// Conectar a la base de datos MySQL
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Insertar los valores en la tabla proveedores
$sql = "INSERT INTO proveedores (idProveedor, nombre, domicilio, telefono, CIF) VALUES ('$idProveedor', '$nombre', '$domicilio', '$telefono', '$cif')";

