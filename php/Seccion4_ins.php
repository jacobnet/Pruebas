<?php
	session_start();
	if (isset($_SESSION['u_usuario'])) {
		$usuario=$_SESSION['u_usuario'];
	}else{
		header("Location: index.php");
	}
include("conexion.php");

$sec9 = 0;
$opcion = $_POST['selecion1_7'];

if ($opcion = "1") {
	$opcion = "Si ha sido financiado";
	if (isset($_REQUEST['checkbox1_7'])) {
		$check1 = $_REQUEST['checkbox1_7'];
	}else{
		$check1 = "No";
	}

	if (isset($_REQUEST['checkbox2_7'])) {
		$check2 = $_REQUEST['checkbox2_7'];
	}else{
		$check2 = "No";
	}

	if (isset($_REQUEST['checkbox3_7'])) {
		$check3 = $_REQUEST['checkbox3_7'];
	}else{
		$check3 = "No";
	}
	
	if (isset($_REQUEST['checkbox4_7'])) {
		$check4 = $_REQUEST['checkbox4_7'];
	}else{
		$check4 = "No";
	}

	if (isset($_REQUEST['checkbox5_7'])) {
		$check5 = $_REQUEST['checkbox5_7'];
	}else{
		$check5 = "No";
	}

	if (isset($_REQUEST['checkbox6_7'])) {
		$check6 = $_REQUEST['checkbox6_7'];
	}else{
		$check6 = "No";
	}

	if (isset($_REQUEST['checkbox7_7'])) {
		$check7 = $_REQUEST['checkbox7_7'];
	}else{
		$check7 = "No";
	}

	if (isset($_REQUEST['checkbox8_7'])) {
		$check8 = $_REQUEST['checkbox8_7'];
	}else{
		$check8 = "No";
	}
	
	if (isset($_REQUEST['checkbox9_7'])) {
		$check9 = $_REQUEST['checkbox9_7'];
	}else{
		$check9 = "No";
	}

	if (isset($_REQUEST['checkbox10_7'])) {
		$check10 = $_REQUEST['checkbox10_7'];
	}else{
		$check10 = "No";
	}

	if (isset($_REQUEST['checkbox11_7'])) {
		$check11 = $_REQUEST['checkbox11_7'];
	}else{
		$check11 = "No";
	}

	


}else if ($opcion == "2") {
	$opcion ="No ha sido financiado";
	if (isset($_REQUEST['checkbox12_7_1'])) {
	$check1  = "Aun no lo se";
	$check2  = "Aun no lo se";
	$check3  = "Aun no lo se";
	$check4  = "Aun no lo se";
	$check5  = "Aun no lo se";
	$check6  = "Aun no lo se";
	$check7  = "Aun no lo se";
	$check8  = "Aun no lo se";
	$check9  = "Aun no lo se";
	$check10 = "Aun no lo se";
	$check11 = "Aun no lo se";
	}else{
		

	if (isset($_REQUEST['checkbox1_7_1'])) {
		$check1 = "Identificado";
	}else{
		$check1 = "No";
	}

	if (isset($_REQUEST['checkbox2_7_1'])) {
		$check2 = "Identificado";
	}else{
		$check2 = "No";
	}

	if (isset($_REQUEST['checkbox3_7_1'])) {
		$check3 = "Identificado";
	}else{
		$check3 = "No";
	}
	
	if (isset($_REQUEST['checkbox4_7_1'])) {
		$check4 = "Identificado";
	}else{
		$check4 = "No";
	}

	if (isset($_REQUEST['checkbox5_7_1'])) {
		$check5 = "Identificado";
	}else{
		$check5 = "No";
	}

	if (isset($_REQUEST['checkbox6_7_1'])) {
		$check6 = "Identificado";
	}else{
		$check6 = "No";
	}

	if (isset($_REQUEST['checkbox7_7_1'])) {
		$check7 = "Identificado";
	}else{
		$check7 = "No";
	}

	if (isset($_REQUEST['checkbox8_7_1'])) {
		$check8 = "Identificado";
	}else{
		$check8 = "No";
	}
	
	if (isset($_REQUEST['checkbox9_7_1'])) {
		$check9 = "Identificado";
	}else{
		$check9 = "No";
	}

	if (isset($_REQUEST['checkbox10_7_1'])) {
		$check10 = "Identificado";
	}else{
		$check10 = "No";
	}

	if (isset($_REQUEST['checkbox11_7_1'])) {
		$check11 = "Identificado";
	}else{
		$check11 = "No";
	}
}
}

if ($check1 == "on" || $check2 == "on" || $check3 == "on" || $check4 == "on") {
	$sec9 += 5;
}else if ($check1 == "Identificado" || $check2 == "Identificado" || $check3 == "Identificado" || $check4 == "Identificado") {
	$sec9 += 5;
}

if ($check5 == "on" || $check6 == "on" || $check7 == "on" || $check8 == "on") {
	$sec9 += 2;
}else if ($check5 == "Identificado" || $check6 == "Identificado" || $check7 == "Identificado" || $check8 == "Identificado") {
	$sec9 += 2;
}

if ($check9 == "on" || $check10 == "on" || $check11 == "on") {
	$sec9 += 1;
}else if ($check9 == "Identificado" || $check10 == "Identificado" || $check11 == "Identificado") {
	$sec9 += 1;
}

//Preparamos elquery para insersion a la BD

$query = "INSERT INTO preevaluacion7(id_Email_Usuario,	Pre7_Proyecto_financiado,	Pre7_Ahorros_personales,	Pre7_Prestamos_amigos,	Pre7_Aportacion,	Pre7_Recursos,	Pre7_Patrocinadores,	Pre7_Solicitud_creditos,	Pre7_Instituciones_publicas,	Pre7_Instituciones_privadas,	Pre7_Creditos_bancarios,	Pre7_Angeles_inversionistas,	Pre7_Crow,	Pre7_Contestado,	Pre7_Calificacion) VALUES ('$usuario','$opcion' ,'$check1', '$check2', '$check3', '$check4', '$check5', '$check6', '$check7', '$check8', '$check9', '$check10', '$check11', 'Si', '$sec9')";
$resultado = $conexion->query($query);
if ($resultado) {
	$sql="UPDATE calificaciones SET Calificacion_Sec_9 = '$sec9' WHERE id_Email_Usuario = '$usuario'";
			$resultado2 = $conexion->query($sql);
			if ($resultado2) {
			}else{
				echo "Hubo problemas al actualizar los datos";
				}
}else{
	echo "Hubo problemas el insertar los Datos";
}

 ?>