<?php
    include_once("../conexion.php");

    if(isset($_POST['usuario'])){
        $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['contrasenia'])){
        $contrasenia = $_POST['contrasenia'];
    }


    if(empty($usuario) || empty($contrasenia)){
        echo "estan vacios";
        //header("Location: ../../index.php");
    }

    $query = "SELECT U.nombre, U.contrasenia, U.idPerfil 
                FROM usuario U
                WHERE usuario = '$usuario'";

    $resultado = [];
    $resultado = pg_fetch_all(queryPSQL($query));

    if (!empty($resultado)) {
        $resultado = array_pop($resultado);
    }
    //Mostrar arreglo del usuario, es como un echo
    //var_dump($usuario);

    if(strcmp($resultado['contrasenia'],$contrasenia)===0){
        session_start();
        echo "Sesión iniciada";
        $_SESSION['nombre'] = $resultado['nombre'];
        $_SESSION['perfil'] = $resultado['idperfil'];
        header("Location: ../../index.php");
    }



?>