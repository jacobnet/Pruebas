<?php

	include("conexion.php"); 
	// session_start();
// if (isset($_SESSION['u_usuario'])) {
	// $usuario=$_SESSION['u_usuario'];
// }else{
    // header("Location: index.php");
// }

	$usuario="correo@algo.com";
	$Valor= 0;
	$Nombre	=$_POST['Nombre']; 
	$Fecha	=$_POST['Fecha'];
	$Lugar	=$_POST['Lugar'];
	$Domicilio	=$_POST['Domicilio'];
	$Estado = $_POST['Estado'];
	$Sexo = $_POST['Sexo'];
	$Escolaridad = $_POST['Escolaridad'];
	$Ocupacion =$_POST['Ocupacion'];
	//Comparar si ocupación es "Otro" y asignar el valor de $Otro
	if ($Ocupacion == "Otro") {
		$Otro = $_POST['Otro_es'];
		$Ocupacion = $Otro;
	}
	$Local = $_POST['Local'];
	$Celular = $_POST['Celular'];
	$Correo = $_POST['Email'];
	$OpRFC = $_POST['sRFC'];
	if ($OpRFC == "Si y esta activo") {
		$RFC = $_POST['rfc'];
		$Personalidad = $_POST['Personalidad'];
		$Razon = $_POST['Razon'];
		$Puntuacion = 2;
	}else {
	$RFC = "No hay";
	$Personalidad = "No hay";
	$Razon = "No hay"; 
	}
	$Sector = $_POST['Sector'];
	//Comprar si Sector es "Otro" y asignar el valor de $OtroSector
	if ($Sector == "Otro") {
		$OtroSector = $_POST['Otro'];
		$Sector = $OtroSector;
	}

	$query = "INSERT INTO cedula_emprendedor (id_Email_Usuario,Ced_Nombre_emp, Ced_nac, Ced_Lugar_nac, Ced_Dom_par, Ced_Estado_civil, Ced_Sexo, Ced_Escolaridad, Ced_Ocupacion, Ced_Tel_local, Ced_Tel_celular, Ced_Correo_alterno, Ced_Cuenta_rfc,Ced_Rfc ,Ced_Personalidad_juridica, Ced_Razon_social, Ced_Giro_actividad, Ced_Contestado,Ced_Puntuacion) VALUES ('$usuario','$Nombre', '$Fecha', '$Lugar','$Domicilio', '$Estado', '$Sexo', '$Escolaridad', '$Ocupacion', '$Local', '$Celular', '$Correo', '$OpRFC','$RFC', '$Personalidad', '$Razon', '$Sector', 'Si','$Puntuacion')";
	$resultado = $conexion->query($query);
	$calificacion = "INSERT INTO calificaciones (id_Email_Usuario, Calificacion_Sec_1) VALUES ('$usuario', '$Puntuacion')";
	$resultado2 = $conexion->query($calificacion);
	if ($resultado2) {
	}else{
		echo "está mal la consulta";
	}

	if ($resultado) {
		header("Location: ../Cedula_Proyecto.php");
	}else {
		echo "Error al ingresar datos";
	}
 ?>