<?php 
	session_start();
	if (isset($_SESSION['u_usuario'])) {
		$usuario=$_SESSION['u_usuario'];
	}else{
		header("Location: index.php");
	}
include("conexion.php");

$Total =0;
$query = "SELECT * FROM calificaciones WHERE id_Email_Usuario = '$usuario'";
$resultado = $conexion -> query($query);

while ($datos = mysqli_fetch_array($resultado)) {
	$Calificacion[0]= (int) $datos['Calificacion_Sec_1'];
	$Calificacion[1]= (int) $datos['Calificacion_Sec_2'];
	$Calificacion[2]= (int) $datos['Calificacion_Sec_3'];
	$Calificacion[3]= (int) $datos['Calificacion_Sec_4'];
	$Calificacion[4]= (int) $datos['Calificacion_Sec_5'];
	$Calificacion[5]= (int) $datos['Calificacion_Sec_6'];
	$Calificacion[6]= (int) $datos['Calificacion_Sec_7'];
	$Calificacion[7]= (int) $datos['Calificacion_Sec_8'];
	$Calificacion[8]= (int) $datos['Calificacion_Sec_9'];
	$Calificacion[9] = (int) $datos['Calificacion_Sec_10'];
	$Calificacion[10] = (int) $datos['Calificacion_Sec_11'];
}// Termina While

	for ($i=0; $i < 10 ; $i++) { 
		 $Total += $Calificacion[$i];
	}
	//Asignamos el nivel del emprededor
	if ($Total < 18 ) {
		$Nivel = "Pre-Nivel";
	}else if ($Total >= 18 && $Total <= 26) {
		$Nivel = "Emprendedor_en_Entrenamiento";
	}else if ($Total >= 27 && $Total <= 37) {
		$Nivel = "Emprendedor_Junior";
	}else if ($Total >= 38 && $Total <= 50) {
		$Nivel = "Emprendedor_Master";
	}else if ($Total >= 51 && $Total <= 63) {
		$Nivel = "Emprendedor_en_Senior";
	}else if ($Total >= 64 && $Total <= 75) {
		$Nivel = "Emprendedor_Autonomo";
	}

//Creamos el query para guardar los datos en la BD
	$sql="UPDATE calificaciones SET Calificacion_Total = '$Total', Nivel_Detectado = '$Nivel'   WHERE id_Email_Usuario = '$usuario'";
	$resultado2 = $conexion->query($sql);
	if ($resultado2) {
	}else{
		echo "Hubo problemas al actualizar los datos";
		}

 ?>