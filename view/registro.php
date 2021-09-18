<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css  -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Registro</title>
</head>

<body>
    <!-- creamos un form con el direccionamiento a validar y le enviaremos 
    nuestro formulario con el metodo post -->
    <div class="container ">
        <div class="row">
            <img id="imagenn" class="imagenlogin" src="../image/registro.png" alt="Login">


            <h1>Registrarse</h1>
            <form id="formulario_login" action="../controller/registrobd.php" method="POST">
                <div class="mb-4  col-xs-2  col-md-8 col-xl-12">
                    <label for="text" class="form-label">usuario</label>
                    <input type="text" class="form-control" name="txtNombre" placeholder="Nombre Usuario">

                </div>
                <div class="mb-4  col-xs-2  col-md-8 col-xl-12">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="txtCorreo" placeholder="Correo electronico">

                </div>
                <div>
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control " placeholder="Ingrese su Contraseña" name="txtContraseña">
                </div>
                <br>

                <br>
                <div class="d-grid  col-xs-2  col-md-8 col-xl-12">
                    <button type="submit" value="Registrarse" class="btn btn-primary">Registrarse</button>
                </div>
                <a href="index.php">Volver</a>


            </form>



        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>