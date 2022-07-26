<?php
include("conexion.php");
$Id = $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Proveedor = $_POST['Proveedor'];

$con = conectar();
$sql = "UPDATE products SET Nombre = '$Nombre', Descripcion = '$Descripcion', Proveedor = '$Proveedor'
WHERE Id = '$Id'";
if(($result = mysqli_query($con, $sql)) === false){
    die(mysqli_error($con));
}
header("location:index.php");
?>