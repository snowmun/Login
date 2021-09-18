<?php
//seguridad de sessiones paginacion
include("../db.php");
session_start();
error_reporting(0);
$varsesion = $_SESSION['correo'];
if ($varsesion == null || $varsesion = '') {
  header("location:./index.php");
  die();
}

$iduser = $_SESSION['id'];
$sql = "SELECT id, nombre,correo FROM usuarios WHERE id ='$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();


$id = $_GET['id'];
$editar = "SELECT * FROM usuarios WHERE id ='" . $id . "'";
$res = $conexion->query($editar);

while ($filas = mysqli_fetch_assoc($res)) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Editar</title>
  </head>

  <body>
    <div class="container  ">
      <div class="row">
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">

          <a class="navbar-brand" href="#">Bienvenido</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link" href="ver_perfil.php">Ver Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="usuarios_registrados.php">Usuarios registrados</a>
              </li>

              <li class="nav-item">
              <a class="nav-link " href="../controller/logout.php">LogOut</a>
              </li>


            </ul>
          </div>
        </nav>
        <br>
        <h1>Editar</h1>
        <form id="formulario_login" action="../controller/editarbd.php" method="POST">
          <div class="mb-4  col-xs-2  col-md-8 col-xl-12">
            <input type="hidden" class="form-control" name="txtid" value="<?php echo $filas['id'] ?>">

          </div>
          <div class="mb-4  col-xs-2  col-md-8 col-xl-12">
            <label for="text" class="form-label">usuario</label>
            <input type="text" class="form-control" name="txtnombre" value="<?php echo $filas['nombre'] ?>">

          </div>
          <div class="mb-4  col-xs-2  col-md-8 col-xl-12">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" name="txtcorreo" value="<?php echo $filas['correo'] ?>">

          </div>

          <br>

          <br>
          <div class="d-grid  col-xs-2  col-md-8 col-xl-12">
            <button type="submit" value="actualizar" class="btn btn-primary">Editar</button>
          </div>
        </form>
      <?php } ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

  </html>