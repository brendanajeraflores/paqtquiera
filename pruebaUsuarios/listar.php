<?php  
include_once 'conexion.php';

$sql = "SELECT
    U.nombre || ' ' || U.primerApellido || ' ' || U.segundoApellido AS nombre_completo,
    U.usuario,
    U.correo,
    U.telefono,
    P.nombrePerfil
FROM
    usuario U
INNER JOIN perfil P
ON(U.idPerfil = P.idPerfil)
;";

$usuarios = queryPSQL($sql);

//echo $usuarios;
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="peticiones.js"></script>
  

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre completo</th>
                    <th>Nombre de usuario</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Tipo de cuenta</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

               
                while ($usuario = pg_fetch_assoc($usuarios)) :
                    //var_dump($usuario);
                    ?>
                    <tr>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                            <button class="btn btn-danger">Eliminar</button>

                        </td>              
                        <td><?php echo $usuario['nombre_completo']; ?></td>
                        <td><?php echo $usuario['usuario']; ?></td>
                        <td><?php echo $usuario['correo']; ?></td>
                        <td><?php echo $usuario['telefono']; ?></td>
                        <td><?php echo $usuario['nombreperfil']; ?></td>
                    </tr>
                    <?php
                endwhile;
                 ?>
            </tbody>
        </table>