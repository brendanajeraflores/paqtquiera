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

    $query = "SELECT nombre, contrasenia, idPerfil FROM usuario WHERE usuario = '$usuario'";
    $resultado = pg_fetch_all(queryPSQL($query));

    if (!empty($resultado)) {
        $usuario = array_pop($resultado);
    }
    //Mostrar arreglo del usuario, es como un echo
    //var_dump($usuario);

    if(strcmp($usuario['contrasenia'],$contrasenia)===0){
        session_start();
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['perfil'] = $usuario['idperfil'];
        header("Location: ../../index.php");
    }



?>