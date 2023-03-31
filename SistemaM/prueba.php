<?php

    $conexion = mysqli_connect('localhost', 'root', 'daraen', 'empresa') or die(mysqli_error($mysqli));

    botones($conexion);

    function botones($conexion){
        if(isset($_POST['insertar'])){
            insertar($conexion);
        }

        if(isset($_POST['eliminar'])){
            eliminar($conexion);
        }

        if(isset($_POST['buscar'])){
            cargarTabla($conexion);
        }
    }

     function insertar($conexion){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $appat=$_POST['appat'];
        $apmat=$_POST['apmat'];
        $telefono=$_POST['telefono'];
        $dir=$_POST['dir'];
        $email=$_POST['email'];

        $consulta = "INSERT INTO persona(idPersona, Nombre, Appat, Apmat, Telefono, Direccion, Email)
        VALUES ('$id', '$nombre', '$appat', '$apmat', '$telefono', '$dir', '$email')";
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        header("Location:index.php");
        
    }

    function eliminar($conexion){
        $id=$_POST['id'];

        $consulta="DELETE FROM persona WHERE idPersona='$id'";
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        header("Location:index.php");
        
    }

    function buscar($conexion){
        $id=$_POST['id'];

        $consulta= "SELECT * FROM persona WHERE idPersona='$id'";
        //mysqli_query($conexion, $consulta);
        /*mysqli_close($conexion);
        cargarTabla($conexion);*/

        if($consulta = $conexion->query($consulta)){
            while($fila = $consulta->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$fila['idPersona'];
                echo "<td>".$fila['Nombre'];
                echo "<td>".$fila['Appat'];
                echo "<td>".$fila['Apmat'];
                echo "<td>".$fila['Telefono'];
                echo "<td>".$fila['Direccion'];
                echo "<td>".$fila['Email'];
                echo "<tr>";
            }
            //$result->free();
        }
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        header("Location:index.php");
    }
        
        

    function cargarTabla($conexion){
        $id=$_POST['id'];

        $consulta = "SELECT * FROM persona WHERE idPersona='id'";
        $resultado = mysqli_query($conexion, $consulta);

        while($fila = $resultado->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$fila['idPersona'];
            echo "<td>".$fila['Nombre'];
            echo "<td>".$fila['Appat'];
            echo "<td>".$fila['Apmat'];
            echo "<td>".$fila['Telefono'];
            echo "<td>".$fila['Direccion'];
            echo "<td>".$fila['Email'];
            echo "<tr>";
        }
        //mysqli_query($conexion, $consulta);
        header("Location:index.php");
        //mysqli_close($conexion);
        
    }

    
?>