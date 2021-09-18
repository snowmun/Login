<?php
    $conexion=mysqli_connect("localhost","root","","login");
 $id=$_GET['id'];
 $sql="DELETE FROM usuarios where id='$id'";
 $conexion->query($sql);
 header('location:../view/usuarios_registrados.php');