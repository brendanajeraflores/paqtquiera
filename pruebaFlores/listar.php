<?php  
include_once 'conexion.php';

$sql = "SELECT
    A.nombreArticulo,
    A.existencia,
    A.descripcion,
    A.descuento,
    A.foto,
    T.nombreTipo,
    O.nombreOcasion    
    FROM
    articulo A
    INNER JOIN Ocasion O
    ON(A.idOcasion = O.idOcasion)
    INNER JOIN Tipo T
    ON(A.idTipo = T.idTipo)
    WHERE A.idTipo = 2
;";

$globos = queryPSQL($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Iniciar sesión</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/header.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>
<div class="container">
    <h2>Flores</h2>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Articulo</th>
                    <th>Existencia</th>
                    <th>Descripcion</th>
                    <th>Descuento</th>
                    <th>Tipo</th>
                    <th>Ocasion</th>
                    <th>Foto</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

               
                while ($globo = pg_fetch_assoc($globos)) :
                    
                    ?>
                    <tr>             
                        <td><?php echo $globo['nombrearticulo']; ?></td>
                        <td><?php echo $globo['existencia']; ?></td>
                        <td><?php echo $globo['descripcion']; ?></td>
                        <td><?php echo $globo['descuento']; ?></td>
                        <td><?php echo $globo['nombretipo']; ?></td>
                        <td><?php echo $globo['nombreocasion']; ?></td>
                        <td><img src="/paqtquiera/img/articulos/flores/arreglo.jpg"></td>
                        <td><a href="" class="btn btn-success glyphicon glyphicon-shopping-cart"></a></td>

                    </tr>
                    <?php
                endwhile;
                 ?>
            </tbody>
        </table>
</div>
<?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/footer.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>
</body>
</html>