<?php
// seguridad de session
$conexion = mysqli_connect("localhost", "root", "", "login");
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['correo'] = $correo;

$conexion = mysqli_connect("localhost", "root", "", "login");

// nos direccionaremos a la tabla usuarios y buscaremos el usuario y la contraseña 
$consulta = "SELECT * FROM usuarios where correo = '$correo' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);
//obtendremos los datos almacenandolo 
$filas =  mysqli_fetch_array($resultado);

if($filas){
  
    header("location:../view/home.php");

}else{
    ?>
   <script type="text/javascript">
            alert("Contraseña o correo Mal Ingresado");
            window.location.href = "../view/index.php";
        </script>';
  <?php
}

    

?>
       

<?php
    

// haremos los resultados  para que los bote y terminaremos la conexion 
mysqli_free_result($resultado);
mysqli_close($conexion);


