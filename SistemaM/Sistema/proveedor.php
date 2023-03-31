<?php
    include('conexion2.php');
?>
<?php
    include('conexion2.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Proveedor</title>

        <h1>Administrador</h1>
        <h1>Registro de provedor</h1>
    </head>
    <body>
        <form action="conexion2.php" name='regisProv' method="post" ;>

            <label for="pidProveedor">idProveedor:</label>
            <input type="text" name="idProveedorP" id="pidProveedor" required>
            <br>
            <br>
            <label for="pNombre">Nombre:</label>
            <input type="text" name="nombreP" id="pNombre" required>
            <br>
            <br>
            <label for="pDomicilio">Domicilio:</label>
            <input type="text" name="domicilioP" id="pDomicilio" required>
            <br>
            <br>
            <label for="pTelefono">Telefono:</label>
            <input type="number" name="telefonoP" id="pTelefono" required>
            <br>
            <br>
            <label for="pCIF">CIF:</label>
            <input type="text" name="CIFP" id="pCIF" required>
            <br>
            <br>

            <button type="submit" value="insertarProv">Enviar</button>
            
            <button type="reset">Limpiar</button>
        </form>  
    </body>
</html>