<?php
	session_start();
	if (isset($_SESSION['u_usuario'])) {
		$usuario=$_SESSION['u_usuario'];
	}else{
		header("Location: index.php");
	}
include("conexion.php");
$sec7=0;
$sec8=0;

if (isset($_REQUEST["TotalEmp"])) {
	$hrsEmp = $_POST["TotalEmp"];
}else {
	$hrsEmp = "00:00";
}

if (isset($_REQUEST['TotalEqu'])) {
	$hrsEqu = $_POST['TotalEqu'];
}else {
	$hrsEqu = "00:00";
}

$grado = $_POST['sec6'];
$horasEmp = (int)($hrsEmp[0].$hrsEmp[1]);
$horasEqu = (int) ($hrsEqu[0].$hrsEqu[1]);
if ($horasEmp > 10) {
	$sec7 = $sec7 + 2;
}

if ($horasEqu > 10) {
	$sec7 = $sec7 + 2;
}

if ($grado == "a") {
	$sec8 = $sec8 + 1;
	$grado = "Es muy imitable ya que para el diseño del proyecto tome referencia uno que ya existe";
}else if ($grado == "b") {
	$sec8 = $sec8 + 1;
	$grado ="El proyecto resulta facilmente imitable por un posible competidor";
}else if ($grado == "c") {
	$sec8 = $sec8 + 3;
	$grado = "El proyecto es dificilmente imitable por un posible competidor";
}else if ($grado == "d") {
	$sec8 = $sec8 +3;
	$grado = "La invencion desarrollada es inédita(que yo tenga conocimiento no se tiene antecedentes de ningun tipo)";
}else if ($grado == "e") {
	$grado = "Desconozco el grado de imitabilidad del proyecto";
}


// Preparamos para la inserción en la BD

$query = "INSERT INTO preevaluacion5_6(Id_Email_Usuario, Pre5_Hora_emprendedor, Pre5_Hora_equipo, Pre5_Calificacion,Pre5_6Grado, Pre6_Calificacion, Pre5_Contestado) VALUES ('$usuario','$horasEmp','$horasEqu','$sec7','$grado','$sec8','Si')";

$resultado = $conexion->query($query);
if ($resultado) {
	$sql="UPDATE calificaciones SET Calificacion_Sec_7 = '$sec7', Calificacion_Sec_8 = '$sec8' WHERE calificaciones.id_Email_Usuario = '$usuario'";
			$resultado2 = $conexion->query($sql);
			if ($resultado2) {
			}else{
				echo "Hubo problemas al actualizar los datos";
				}
}else
	echo "hubo pedos al ingresar en la BD";
?>