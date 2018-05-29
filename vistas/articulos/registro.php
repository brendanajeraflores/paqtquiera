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
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/header.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>
<div class="container">
  <h2>Registrar articulo</h2>
  <form method="POST" action="../../php/articulos/agregarArticulo.php">
    <div class="form-group">
      <label for="tipo">Tipo de articulo</label><br>        
        <label class="radio-inline">
            <input type="radio" name="tipo" value="1">Globo
        </label>
        <label class="radio-inline">
            <input type="radio" name="tipo" value="2">Flor
        </label>
        <label class="radio-inline">
            <input type="radio" name="tipo" value="3">Chocolate
        </label>
        <label class="radio-inline">
            <input type="radio" name="tipo" value="4">Peluche
        </label>
    </div>
    <div class="form-group">
      <label for="nombre">Nombre del articulo</label>
      <input type="text" class="form-control" id="nombreArticulo" name="nombre">
    </div>
    <div class="form-group">
      <label for="tipo">Ocasion</label><br>        
        <label class="radio-inline">
            <input type="radio" name="ocasion" value="1">Cumpleaños
        </label>
        <label class="radio-inline">
            <input type="radio" name="ocasion" value="2">Día de las madres
        </label>
        <label class="radio-inline">
            <input type="radio" name="ocasion" value="3">Boda
        </label>
        <label class="radio-inline">
            <input type="radio" name="ocasion" value="4">Aniversario
        </label>
    </div>
    <div class="form-group">
      <label>Descripción
        <br>
      <textarea name="descripcion" class="form-control" rows="4" cols="50"></textarea>
    </label>
    </div>
    <div id="direccion"class = "form-group row">
        <div class="col-sm-4">
          <label class="custom-file">Foto
            <input type="file" name="file" class="custom-file-input">
            <span class="custom-file-control"></span>
          </label>
        </div>
        <div class = 'col-sm-4'>
            <label for="existencia">Existencia</label>
            <input type="text" class="form-control" name="existencia" placeholcer="Indicar valor númerico.">
        </div>
        <div class = "col-sm-4">
            <label for="descuento">Descuento</label>
            <input type="text" class="form-control" name="descuento" placeholder="25">
        </div>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>

<?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/footer.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>
</body>
</html>