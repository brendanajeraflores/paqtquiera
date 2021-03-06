<?php  
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/php/conexion.php";

  $sql = "SELECT idcolonia,iddelegacion, nombrecolonia FROM colonia";

  $resultado = [];
  $resultado = pg_fetch_all(queryPSQL($sql));
  //var_dump($resultado);
  $max = count($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrar usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../../js/registro.js"></script>
</head>
<body>
<?php 
  include "$_SERVER[DOCUMENT_ROOT]/paqtquiera/vistas/plantillas/header.php";
  //include_once('/paqtquiera/vistas/plantillas/header.php');
?>
<div class="container">
  <h2>Registrar usuario</h2>
  <form method="POST" action="../../php/usuarios/agregarUsuario.php">
    <?php session_start();
      if(!empty($_SESSION['perfil'])){
          if($_SESSION['perfil'] == 1){
    ?>  
    <div class="form-group">
      <label for="perfil">Tipo de cuenta</label><br>        
        <label class="radio-inline">
            <input type="radio" name="radio" value="1">Administrador
        </label>
        <label class="radio-inline">
            <input type="radio" name="radio" value="2">Empleado
        </label>
        <label class="radio-inline">
            <input type="radio" name="radio" value="3">Cliente
        </label>
    </div>
    <?php }} ?>
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
    </div>
    <div class="form-group">
      <label for="primerApellido">Primer apellido</label>
      <input type="text" class="form-control" id="primerApellido" placeholder="Primer apellido" name="primerApellido">
    </div>
    <div class="form-group">
      <label for="segundoApellido">Segundo apellido</label>
      <input type="text" class="form-control" id="segundoApellido" placeholder="Segundo apellido" name="segundoApellido">
    </div>
    <div id="direccion"class = "row">
        <div class = 'col-sm-6'>
            <label for="calle">Calle</label>
            <input type="text" class="form-control" name="calle" >
        </div>
        <div class = "col-sm-3">
            <label for="numExt">Número exterior</label>
            <input type="text" class="form-control" name="numExt">
        </div>
        <div class = "col-sm-3">
            <label for="numInt">Número interior:</label>
            <input type="text" class="form-control" name="numInt">
        </div>
    </div>
    <div id="direccion2"class = "row">
        
        <div class = 'col-sm-6'>
            <label for="colonia">Colonia</label>
            <select id="selectcolonia" class="form-control" name="colonias">
                <?php 
                for ($i=0; $i < $max; $i++) { ?>
                <option id="optcolonia<?php //echo $resultado[$i]['iddelegacion']?>" value="<?php echo $resultado[$i]['iddelegacion'] ?>"><?php echo $resultado[$i]['nombrecolonia']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class = 'col-sm-3'>
            <label for="delegacion1">Delegacion</label>
            <select class="form-control" name="delegacion">
                <option id="delegacion" ></option>
            </select>
        </div>
        
        <div class = "col-sm-3">
            <label for="cp">Codigo postal</label>
            <input type="text" class="form-control" name="cp">
        </div>
    </div>
    
    <div class="form-group">
      <label for="telefono">Telefono</label>
      <input type="tel" class="form-control" id="telefono" placeholder="" name="telefono">
    </div>
    <div class="form-group">
      <label for="correo">Correo</label>
      <input type="email" class="form-control" id="correo" placeholder="" name="correo">
    </div>
    <div class="form-group">
      <label for="usuario">Usuario</label>
      <input type="text" class="form-control" id="usuario" placeholder="usuario" name="usuario">
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="contrasenia">
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