<?php
    include('conexion2.php');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Producto</title>
    </head>
<body>
    <h1>Administrador</h1>
    <h1>Registro de Productos</h1>

    <form action="conexion2.php"  method="post">

        <input type="text" name="idProd" placeholder="idProducto" required>
        <input type="text" name="nomP" placeholder="Nombre" required>

        <input type="text" name="descP" placeholder="Descripcion" >

        <input type="text" name="contP" placeholder="Contenido" required>

        <input type="" name="nomenP" placeholder="Nomenclatura" list="listN" required>
        <datalist id="listN">
            <option value="Kg">Kilogramos</option>
            <option value="g">Gramos</option>
            <option value="L">Litros</option>
            <option value="ml">Mililitros</option>
        </datalist> 

        <input type="number" name="preMen" placeholder="PrecioMen" required>

        <input type="number" name="preMay" placeholder="PrecioMay" required>

        <button type="submit" value="insertarProd">Registrar</button>


    </form>  
</body>
</html>