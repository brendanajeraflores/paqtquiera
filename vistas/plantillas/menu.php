<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menú para administración</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../../pruebaUsuarios/peticiones.js"></script>
  <script src="../../pruebaArticulos/peticiones.js"></script>

</head>
<body>
<?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/header.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>

<?php session_start();
          if(!empty($_SESSION['perfil'])){
?>   
<div class="container">
  <h2>Menú para administración</h2>
  <div class="row">
  	<div class="col-sm-6">
  		<button id="btnarticulos" class="btn btn-primary">Administración de articulos</button>
  	</div>
  	<?php
        if($_SESSION['perfil'] == 1 ){ ?>
  	<div class="col-sm-6">
  		<button id="btnusuarios" class="btn btn-primary">Administración de usuarios</button>
  	</div>
  	<?php }?>
  </div>
  <div id="divusuarios">
	</div>
	<div id="divarticulos">
	</div>
</div>
<?php }?>

<?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/footer.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>
</body>
</html>