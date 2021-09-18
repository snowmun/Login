<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

$conexion=mysqli_connect("localhost","root","","login");
$nombre=$_POST['txtNombre'];
$correo=$_POST['txtCorreo'];
$contraseña=$_POST['txtContraseña'];
$consulta="INSERT INTO `usuarios` (`nombre`, `correo`, `contraseña`) 
            VALUES ('$nombre', '$correo', '$contraseña');";

$resultado=mysqli_query($conexion,$consulta) or die('Correo Electronico Existente');

mysqli_close($conexion);

?>

<script type="text/javascript">
            alert("Usuario Registrado");
            window.location.href = "../view/index.php";
</script>';
