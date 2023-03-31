<?php
/*
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";*/

//Conexión con el Servidor
$conn=mysql_connect('localhost', 'root', '');
//Verificación de Conexión
if(!$conn){
    echo "No se pudo conectar con el servidor";
}else{
    $base=mysql_select_db('mydb');
    if(!$base){
        echo "No se encontró la Base de Datos";
    }
}

//Recuperar variables
$idProd = $_POST['idProductoO'];
$nombreO = $_POST['nombreO'];
$descO = $_POST['descripcionO'];
$contO = $_POST['contenidoO'];
$preMeO = $_POST['precioMenO'];
$preMaO = $_POST['precioMayO'];
//Sentencia SQL para insertar
$sql="INSERT INTO Proveedor VALUES('$idProP',
                                   '$nombreP',
                                   '$domicP',
                                   '$telP',
                                   '$cifP')";

//Ejecutar sentencia SQL
$ejecutar=mysql_query($sql);

if(!$ejecutar){
    echo "Error al insertar datos";
}else{
    echo "Datos almacenados exitosamente<br><a href='compras.html'>Volver</a>";
}

?>

