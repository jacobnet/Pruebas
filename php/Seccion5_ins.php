<?php
	session_start();
	if (isset($_SESSION['u_usuario'])) {
		$usuario=$_SESSION['u_usuario'];
	}else{
		header("Location: index.php");
	}
include("conexion.php");

$Respuesta1 = $_POST['seleccion1'];
$Respuesta2 = $_POST['seleccion2'];
$sec10 =0;
$Respuesta3 = $_POST['seleccion3'];
$Respuesta4 = $_POST['seleccion4'];
$Respuesta5 = $_POST['seleccion5'];
$sec11 = 0;
if ($Respuesta1 == "Menos de un anio") {
	$sec10 += .5;
}else if ($Respuesta1 == "Un anio") {
	$sec10 += 1;
}else if ($Respuesta1 == "Dos anios") {
	$sec10 += 1.5;
}else if ($Respuesta1 == "Mas de dos anios") {
	$sec10 += 2;
}

if ($Respuesta2 == "Si") {
	$sec10 += 3;
}else if ($Respuesta2 == "Insuficiente") {
	$sec10 += 1;
}

if ($Respuesta3 == "Si") {
	$sec11 += 3;
}else if ($Respuesta3 == "Parcialmente") {
	$sec11 += 2;
}

if ($Respuesta4 == "Si") {
	$sec11 += 3;
}else if ($Respuesta4 == "Parcialmente") {
	$sec11 += 2;
}

if ($Respuesta5 == "Si") {
	$sec11 += 5;
}else if ($Respuesta5 == "Parcialmente") {
	$sec11 += 2;
}

//creamos el query para almacenar los datos en la BD

$query = "INSERT INTO preevaluacion8_9(id_Email_Usuario,	pre9_Tiempo_experiencia,	pre9_Conocimiento,	Pre8_Calificacion,	pre9_Documento_actualizado,	pre9_Aproximacion,	pre9_Plan_actualizado,	pre9_calificacion,	estatus_pre8_9) VALUES  ('$usuario', '$Respuesta1', '$Respuesta2', '$sec10', '$Respuesta3', '$Respuesta4', '$Respuesta5', '$sec11','Si')";
$resultado = $conexion->query($query);
if ($resultado) {
	$sql="UPDATE calificaciones SET Calificacion_Sec_10 = '$sec10', Calificacion_Sec_11 = '$sec11' WHERE id_Email_Usuario = '$usuario'";
			$resultado2 = $conexion->query($sql);
			if ($resultado2) {
				header("Location: Sumatoria.php");
			}else{
				echo "Hubo problemas al actualizar los datos";
				}
}else
echo "Hubo pedos al ingresar los datos";
 ?>