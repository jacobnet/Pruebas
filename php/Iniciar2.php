<?php 
include("conexion.php");
session_start();

	$email=$_POST["u-email"];
	$contrasena=$_POST["u-pass"];

	$query = "SELECT Email,Contrasena FROM usuarios WHERE Email ='$email'";
	if ($resultado = $conexion->query($query)) {
		# code...
		if ($resultado->num_rows > 0){
			$row = $resultado->fetch_assoc();
			if (password_verify($contrasena, $row['Contrasena'])) {
				$_SESSION['u_usuario'] = $email;
				header("Location: VerfCedula.php");
				exit;
			}else {
				header("Location: ../index.php");
			}
			
		}
	}
 ?>