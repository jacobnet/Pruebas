<?php 

	include("conexion.php");

	session_start();
	if (isset($_SESSION['u_usuario'])) {
		$usuario=$_SESSION['u_usuario'];
	}else{
		header("Location: index.php");
	}
	$Puntuacion= 0;
	$Nombre = $_POST['Nombre'];
	$Establecido = $_POST['Establecido'];
	if ($Establecido == "Si") {
		$Calle = $_POST['Calle'];
		$Colonia = $_POST['Colonia'];
		$Num = $_POST['Num'];
		$Municipio = $_POST['Municipio'];
		$Region = $_POST['Region'];
		$Estado = $_POST['Estado'];
		$CP = $_POST['CodigoPostal'];
		$Puntuacion= 4;
	 } else {
	 	$Calle = "No Tiene";
		$Colonia = "No Tiene";
		$Num = "No Tiene";
		$Municipio = "No Tiene";
		$Region = "No Tiene";
		$Estado = "No Tiene";
		$CP = "No Tiene";
	 }

	 $query = "INSERT INTO cedula_proyecto (id_Email_Usuario, Nombre, Establecido, Calle, Colonia, Num, Municipio, Region, Estado, CP,Contestado_proyecto, Puntuacion_proyecto) VALUES ('$usuario','$Nombre', '$Establecido', '$Calle', '$Colonia', '$Num', '$Municipio', '$Region', '$Estado', '$CP','Si','$Puntuacion')";
	 $resultado = $conexion->query($query);
	 $sql = "UPDATE calificaciones SET Calificacion_Sec_2 ='$Puntuacion' WHERE id_Email_Usuario = '$usuario'";
	 $resultado2= $conexion->query($sql);
	 if ($resultado2) {
	 }else{
	 	echo "hubo problemas al actualizar los datos";
	 }
	 if ($resultado) {
	 	header("Location: ../Seccion1.php");
	  }else {
	  	echo "Error";
	 // 	echo '<script> 
		// 			alert("Hubo problemas al intetar registrar los datos");
		// 			window.history.go(-1);
		// 			</script>';
	 }




 ?>