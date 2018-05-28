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
    WHERE A.idTipo = 3
;";

$chocolates = queryPSQL($sql);

?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="peticiones.js"></script>
  

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
                </tr>
            </thead>
            <tbody>
                <?php

               
                while ($chocolate = pg_fetch_assoc($chocolates)) :
                    ?>
                    <tr>             
                        <td><?php echo $chocolate['nombrearticulo']; ?></td>
                        <td><?php echo $chocolate['existencia']; ?></td>
                        <td><?php echo $chocolate['descripcion']; ?></td>
                        <td><?php echo $chocolate['descuento']; ?></td>
                        <td><?php echo $chocolate['nombretipo']; ?></td>
                        <td><?php echo $chocolate['nombreocasion']; ?></td>
                        <td><?php echo $chocolate['foto']; ?></td>
                    </tr>
                    <?php
                endwhile;
                 ?>
            </tbody>
        </table>