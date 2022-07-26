<?php
    include("conexion.php");
    $con = conectar();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

$sql ="INSERT INTO users(Nombre, Apellido, Tel, Email) VALUES('$nombre', '$apellido', '$telefono', '$email')";
if(($resultado = mysqli_query($con,$sql))===false){
    die(mysqli_error($con));
}
header('location:index.php');       
?>