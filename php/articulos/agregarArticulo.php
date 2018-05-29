<?php
	include_once("../conexion.php");
	if(isset($_POST['tipo'])){
		$tipo = filter_var($_POST['tipo'], FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['nombre'])){
		$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['ocasion'])){
		$ocasion = filter_var($_POST['ocasion'], FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['descripcion'])){
		$descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['existencia'])){
		$existencia = filter_var($_POST['existencia'], FILTER_SANITIZE_STRING);
	}
	if(isset($_POST['descuento'])){
		$descuento = filter_var($_POST['descuento'], FILTER_SANITIZE_STRING);
	}
	





$query = "INSERT INTO articulo VALUES(10,'".$nombre."','".$existencia."','".$descripcion."','".$descuento."','".$tipo."','".$ocasion."','ruta/foto/');";
	
	
	pg_fetch_all(queryPSQL($query));



	



?>