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
  <h2>Iniciar sesión</h2>
  <form method="POST" action="/paqtquiera/php/usuarios/autenticacion.php">
    <div class="form-group">
      <label for="usuario">Usuario:</label>
      <input type="text" class="form-control" id="usuario" placeholder="usuario" name="usuario">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="contrasenia">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Recordar datos
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
  </form>
</div>

<?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/footer.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>
</body>
</html>