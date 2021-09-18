<?php 

    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $conexion=mysqli_connect("localhost","root","","login");

    $id1=$_POST['txtid'];
    $nombre1=$_POST['txtnombre'];
    $correo1=$_POST['txtcorreo'];
    if($nombre1 != null || $correo1!=null){
      $reemplazo ="UPDATE usuarios set nombre='$nombre1', correo='$correo1' where id='$id1'";
      $conexion->query($reemplazo);
      header("location:../view/usuarios_registrados.php");
    }

    ?>
