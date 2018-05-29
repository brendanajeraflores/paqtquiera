<?php  
include_once 'conexion.php';

$sql = "SELECT
    U.nombre || ' ' || U.primerApellido || ' ' || U.segundoApellido AS nombre_completo,
    U.usuario,
    U.correo,
    U.telefono,
    P.nombrePerfil
FROM
    usuarios U
INNER JOIN perfil P
ON(U.idPerfil = U.idPerfil)
;";

$usuarios = queryPSQL($sql);
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="/paqtquiera/js/peticiones.js"></script>
 <?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/header.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?> 

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre completo</th>
                    <th>Nombre de usuario</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Tipo de cuenta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($usuario = pg_fetch_assoc($usuarios)) :
                    ?>
                    <tr>             
                        <td><?php echo $usuario['nombre_completo']; ?></td>
                        <td><?php echo $usuario['usuario']; ?></td>
                        <td><?php echo $usuario['correo']; ?></td>
                        <td><?php echo $usuario['telefono']; ?></td>
                        <td><?php echo $usuario['nombrePerfil']; ?></td>
                    </tr>
                    <?php
                endwhile;
                 ?>
            </tbody>
        </table>
        <?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/footer.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>