<?php
include("conexion.php");
session_start();
if (isset($_SESSION['u_usuario'])) {
    $usuario=$_SESSION['u_usuario'];
    $sql = "SELECT Ced_Contestado FROM cedula_emprendedor WHERE id_email = '$usuario'";
    $result = $conexion->query($sql);
    if ($result -> num_rows > 0) {
        header("Location: Cedula_Proyecto.php");
    }
}else{
    header("Location: index.php");
}

 ?>