<?php
    include_once("../conexion.php");
    if(isset($_POST['radio'])){
        $radio = filter_var($_POST['radio'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['nombre'])){
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['primerApellido'])){
        $primerApellido = filter_var($_POST['primerApellido'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['segundoApellido'])){
        $segundoApellido = filter_var($_POST['segundoApellido'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['calle'])){
        $calle = filter_var($_POST['calle'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['numExt'])){
        $numext = filter_var($_POST['numExt'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['numInt'])){
        $numint = filter_var($_POST['numInt'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['colonias'])){
        $colonia = filter_var($_POST['colonias'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['cp'])){
        $cp = filter_var($_POST['cp'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['correo'])){
        $correo = filter_var($_POST['correo'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['telefono'])){
        $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['usuario'])){
        $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['contrasenia'])){
        $contrasenia = $_POST['contrasenia'];
    }


    /*echo $colonia;
    echo $delegacion;*/


    $query = "INSERT INTO usuario VALUES(4,'".$nombre."','".$primerApellido."','".$segundoApellido."','".$usuario."','".$contrasenia."','".$correo."','".$telefono."',2,".$radio.");";

    $resultado = [];
    $resultado = pg_fetch_all(queryPSQL($query));

    var_dump($resultado);

    /*if (!empty($resultado)) {
        $resultado = array_pop($resultado);
    }*/
    //Mostrar arreglo del usuario, es como un echo
    //var_dump($usuario);

    /*if(strcmp($resultado['contrasenia'],$contrasenia)===0){
        session_start();
        echo "Sesión iniciada";
        $_SESSION['nombre'] = $resultado['nombre'];
        $_SESSION['perfil'] = $resultado['idperfil'];
        header("Location: ../../index.php");
    }*/



?>