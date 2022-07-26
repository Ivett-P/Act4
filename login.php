<?php 
session_start();
if(isset($_SESSION["dat"])){
    header('location:index.php');
}else{
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="act4";
        $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$conn){
            die("Error al intentar acceder a base de datos" .mysqli_connect_error());
        }
        if(isset($_POST['Nombre']) && isset ($_POST['Email']));
        $Email = $_POST['Email'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE Email = '"+ $Email +"' AND Nombre = '"+ 
        $Nombre +"' AND Apellido  = '"+ $Apellido +"'");
        $cr = mysqli_num_rows($sql);
        if(isset($_SESSION['dat'])){
            $_SESSION['dat'] = $Email;
            header('location:index.php');
        }else{
            header('location:Iniciar.php');
        }
    }

?>