<?php

    $conexion2 = mysqli_connect('localhost', 'root', 'root', 'mydb') or die(mysqli_error($mysqli));

    botones($conexion2);

    function botones($conexion2){
        if(isset($_POST['insertarProd'])){
            insertarProd($conexion2);
        }

        if(isset($_POST['eliminarProd'])){
            eliminarProd($conexion2);
        }

        if(isset($_POST['mostrarProd'])){
            mostrarProd($conexion2);
        }

        if(isset($_POST['registrarProd'])){
           registrarProd($conexion2);
        }
    }

     function insertarProd($conexion2){
        $idProd=$_POST['idProd'];
        $nom=$_POST['nomP'];
        $desc=$_POST['descP'];
        $cont=$_POST['contP'];
        $nomen=$_POST['nomenP'];
        $preMe=$_POST['preMen'];
        $preMa=$_POST['preMay'];

        $consulta = "INSERT INTO producto(idProducto, Nombre, Descripcion, Contenido, Nomenclatura, PrecioMen, PrecioMay)
        VALUES ('$idProd', '$nom', '$desc', '$cont', '$nomen', '$preMe', '$preMa')";
        mysqli_query($conexion2, $consulta);
        //mysqli_close($conexion2);
        //header("Location:producto.php");
        
        
    }

    function eliminarProd($conexion2){
        $idProd=$_POST['idProd'];

        $consulta="DELETE FROM producto WHERE idProducto=''";
        mysqli_query($conexion2, $consulta);
        mysqli_close($conexion2);
        header("Location:index.php");
    }

    function mostrarProd($conexion2){
        $consulta = "SELECT * FROM producto";
        $resultado = mysqli_query($conexion2, $consulta);

        while($fila = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$fila['idProducto'];
            echo "<td>".$fila['Nombre'];
            echo "<td>".$fila['Descripcion'];
            echo "<td>".$fila['ApeMat'];
            echo "<td>".$fila['Contenido'];
            echo "<td>".$fila['Direccion'];
            echo "<td>".$fila['Nomenclatura'];
            echo "<td>".$fila['PrecioMen'];
            echo "<td>".$fila['PrecioMay'];
            echo "<tr>";
        }
       // mysqli_close($conexion2);
    
    };





    botones1($conexion2);

    function botones1($conexion2){
        if(isset($_POST['insertarProv'])){
            insertarProv($conexion2);
        }

        if(isset($_POST['eliminarProv'])){
            eliminarProv($conexion2);
        }

        if(isset($_POST['mostrarProv'])){
            mostrarProv($conexion2);
        }

        if(isset($_POST['registrarProv'])){
           registrarProv($conexion2);
        }
    }

    function insertarProv($conexion2){
        $idProv=$_POST['idProvedor'];
        $nomProv=$_POST['nomProv'];
        $domProv=$_POST['domProv'];
        $telefono=$_POST['tel'];
        $nomen=$_POST['CIF'];
    

        $consulta = "INSERT INTO proveedor(idProveedor, Nombre, Domicilio, Telefono, CIF)
        VALUES ('$idProv', '$nomProv', '$domProv', '$telefono', '$nomen')";
        mysqli_query($conexion2, $consulta);
        //mysqli_close($conexion2);
        //header("Location:index.php");
        
    }

    function eliminarProv($conexion2){
        $idPro=$_POST['idProv'];
        $consulta="DELETE FROM proveedor WHERE idProveedor=''";
        mysqli_query($conexion2, $consulta);
        //mysqli_close($conexion2);
        //header("Location:index.php");
    }

    function mostrarProv($conexion2){
        $consulta = "SELECT * FROM proveedor";
        $resultado = mysqli_query($conexion2, $consulta);

        while($fila = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$fila['idProveedor'];
            echo "<td>".$fila['Nombre'];
            echo "<td>".$fila['Domicilio'];
            echo "<td>".$fila['Telefono'];
            echo "<td>".$fila['CIF'];
            echo "<tr>";
        }
        mysqli_close($conexion2);
    
    };
    
?>