<?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/php/conexion.php";
  if(isset($_GET['value'])){
        $valor = $_GET['value'];
    }
    //console.log($valor);
    //$valor = 1;
	
	$sql = "SELECT D.iddelegacion, D.nombredelegacion FROM delegacion D INNER JOIN colonia C ON(D.iddelegacion = C.iddelegacion) WHERE C.idDelegacion = ".$valor."";

  $resultado = [];
  $resultado = pg_fetch_all(queryPSQL($sql));
  echo $resultado[0]['nombredelegacion'];


 ?>