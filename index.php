<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
  include_once('vistas/plantillas/header.php');
?>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="pruebaChocolates/listar.php"><img src="img/articulos/carrusel/chocolates.jpeg" alt="Chocolates" style="width:80%;"></a>
      </div>

      <div class="item">
        <a href="pruebaFlores/listar.php"><img src="img/articulos/carrusel/flores.jpeg" alt="Flores" style="width:80%;"></a>
      </div>
    
      <div class="item">
        <a href="pruebaPeluches/listar.php"><img src="img/articulos/carrusel/peluches.jpeg" alt="Peluches" style="width:80%;"></a>
      </div>

      <div class="item">
        <a href="pruebaGlobos/listar.php"><img src="img/articulos/carrusel/globos.jpeg" alt="Globos" style="width:80%;"></a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control tamano" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control tamano" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php 
  //include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/footer.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>
</body>

</html>
