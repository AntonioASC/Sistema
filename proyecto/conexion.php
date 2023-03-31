<?php

    $conexion = mysqli_connect('localhost', 'root', 'daraen', 'mydb') or die(mysqli_error($mysqli));

    botones($conexion);

    function botones($conexion){
        if(isset($_POST['insertar'])){
            insertar($conexion);
        }

        if(isset($_POST['eliminar'])){
            eliminar($conexion);
        }

        if(isset($_POST['iniciar'])){
            iniciar($conexion);
        }

        if(isset($_POST['registrar'])){
           registrarse($conexion);
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
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $consulta = "INSERT INTO persona(Nombre, ApePat, ApeMat, Telefono, Direccion, CorreoE)
        VALUES ('$nombre', '$appat', '$apmat', '$telefono', '$dir', '$email')";
        $consulta2 = "INSERT INTO usuarios(Usuario,Contraseña,Rol)
        VALUES ('$user', '$pass','Cliente')";
        mysqli_query($conexion, $consulta);
        mysqli_query($conexion, $consulta2);
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

    function cargarTabla($conexion){
        $consulta = "SELECT * FROM persona";
        $resultado = mysqli_query($conexion, $consulta);

        while($fila = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$fila['idPersona'];
            echo "<td>".$fila['Nombre'];
            echo "<td>".$fila['ApePat'];
            echo "<td>".$fila['ApeMat'];
            echo "<td>".$fila['Telefono'];
            echo "<td>".$fila['Direccion'];
            echo "<td>".$fila['CorreoE'];
            echo "<tr>";
        }
        mysqli_close($conexion);
    }

    function iniciar($conexion){
        /*$username=$_POST['username'];
        $password=$_POST['password'];

        $query = "SELECT * FROM Usuarios WHERE Usuario = '$username' and Contraseña='$password'";
        $result = mysqli_query($conexion, $query);

        if($result->num_rows>0){
            $usuario = $result->fetch_assoc();
            header("Location:principal.php");
        } else{
            echo "Usuario o contraseña incorrecta";
        }*/

        echo "Usuario o contraseña incorrecta";
        mysqli_close($conexion);
    }

    
?>