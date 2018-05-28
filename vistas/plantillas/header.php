<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/paqtquiera/js/peticiones.js"></script>
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <img src="../img/logoPaqtquiera.jpeg" alt="paqtquiera" width="100" height="100">
        <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menú <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Globos</a></li>
          <li><a href="#">Peluches</a></li>
          <li><a href="#">Chocolates</a></li>
        </ul>
      </li>
    </ul>
    <?php session_start();
          if(!empty($_SESSION['perfil'])){
    ?>        
    <ul class="nav navbar-nav navbar-right">
            <?php
              if($_SESSION['perfil'] == 1){ ?>
              <li><button id="btnusuarios" type="button" class="btn btn-link">Administrar usuarios</button></li>                
            <?php } ?>
        <li><a href="../usuarios/agregar.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nombre']?></a></li>
        <li><a href="php/usuarios/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></a></li>
        
    </ul>
         <?php } else {?>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="agregar.php"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
        <li><a href="vistas/usuarios/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></a></li>
        <?php }?>
    </ul>
  </div>
</nav>
</body>
</html>