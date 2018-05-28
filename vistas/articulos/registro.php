<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrar usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
  include_once('../vistas/plantillas/header.php');
?>
<div class="container">
  <h2>Registrar articulo</h2>
  <form action="../php/agregarArticulo.php">
    <div class="form-group">
      <label for="tipo">Tipo de articulo</label><br>        
        <label class="radio-inline">
            <input type="radio" name="globo">Globo
        </label>
        <label class="radio-inline">
            <input type="radio" name="flor">Flor
        </label>
        <label class="radio-inline">
            <input type="radio" name="chocolate">Chocolate
        </label>
        <label class="radio-inline">
            <input type="radio" name="peluche">Peluche
        </label>
    </div>
    <div class="form-group">
      <label for="nombre">Nombre del articulo</label>
      <input type="text" class="form-control" id="nombreArticulo" name="nombreArticulo">
    </div>
    <div class="form-group">
      <label for="tipo">Ocasion</label><br>        
        <label class="radio-inline">
            <input type="radio" name="cumple">Cumpleaños
        </label>
        <label class="radio-inline">
            <input type="radio" name="madre">Día de las madres
        </label>
        <label class="radio-inline">
            <input type="radio" name="boda">Boda
        </label>
        <label class="radio-inline">
            <input type="radio" name="aniversario">Aniversario
        </label>
    </div>
    <div id="direccion"class = "form-group row">
        <div class = 'col-sm-6'>
            <label for="existencia">Existencia</label>
            <input type="text" class="form-control" id="existencia">
        </div>
        <div class = "col-sm-3">
            <label for="descuento">Descuento</label>
            <input type="text" class="form-control" id="descuento">
        </div>
    </div>
    <div class="form-group">
        <label class="custom-file">Foto
            <input type="file" id="file" class="custom-file-input">
            <span class="custom-file-control"></span>
        </label>
    </div>
    
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>

<?php 
  include_once('../vistas/plantillas/footer.php');
?>
</body>
</html>