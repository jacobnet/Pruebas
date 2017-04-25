<?php 
		session_start();
	if (isset($_SESSION['u_usuario'])) {
		$usuario=$_SESSION['u_usuario'];
	}else{
		header("Location: index.php");
	}
	include("conexion.php");

	$modalidad1_1    = $_POST['modalidad11'];
	$modalidad1_2    = $_POST['modalidad12'];
	if ($modalidad1_1 == "No" && $modalidad1_2 == "No") {
		$modalidad2_1 = $_POST["modalidad21"];
		$modalidad2_2 = $_POST['modalidad22'];
		$modalidad2_3 = $_POST['modalidad23'];
		$modalidad1_1 = "vacio";
		$modalidad1_2 = "vacio";
	}else {
		$modalidad2_1 = "vacio";
		$modalidad2_2 = "vacio";
		$modalidad2_3 = "vacio";
	}

	$opcion = $_POST['p3_1'];
	if ($opcion == "Si") {
		$Direccion = $_POST['t1_1'];
	}else{
		$Direccion = $_POST['t2_2'];
	}

	$Persona = $_POST['persona'];
	if ($Persona == "Si") {
		$opPersona = $_POST['op1'];
		$desconoce = "";
		if ($opPersona == "Otro") {
			$opPersona = $_POST['4_1'];
		}//Termina if $opPersona
	}//Termina if $persona
	else if ($Persona =="No") {
		$opPersona = $_POST['op2'];
		$desconoce = "";
		if ($opPersona == "Otro") {
			$opPersona = $_POST['4_2'];
		}//Termina if $OpPersona
	}//Termina else if $persona
	else if (isset($_POST['check']) && $_POST['check'] == '1'){
		$desconoce = $_POST['check'];
		$opPersona = "vacio";
	}
// Codigo para empezar a asignar calificacion
	//Seccion 2
	//Modalidad 1
	$sec2 =0;
	if ($modalidad1_1 == "Si" && $modalidad1_2 == "Si") {
		$sec2 = $sec2 + 1;
	}else if ($modalidad1_1 == "Si" && $modalidad1_2 =="No") {
		$sec2 = 0;
	}
	//Termina modalidad1

	//Modalidad 2
	if ($modalidad2_1 == "Si" && $modalidad2_2 == "No" && $modalidad2_3 == "Si") {
		$sec2 = $sec2 + 4;
	 } else if ($modalidad2_1 == "Si" && $modalidad2_2 == "No" && $modalidad2_3 == "No") {
	 	$sec2 = $sec2 +2;
	 }else if ($modalidad2_1 == "Si" && $modalidad2_2 == "Si" && $modalidad2_3 == "No") {
	 	$sec2 = $sec2 + 3;
	 }else if ($modalidad2_1 == "Si" && $modalidad2_2 == "Si" && $modalidad2_3 == "Si") {
	 	$sec2 = $sec2 + 6;
	 }else if ($modalidad2_1 == "No" && $modalidad2_2 == "Si" && $modalidad2_3 == "No") {
	 	$sec2 = $sec2 + 1;
	 }// termina modalidad 2
	//Termina seccion 2

	 //Empieza seccion 3
	 $sec3 = 0;
	 if ($opcion == "Si") {
	 	$sec3 = $sec3 + 4;
	 }else if ($opcion == "No") {
	 	$sec3 = $sec3 + 1;
	 }
	 //Termina seccion 3

	 //Empieza seccion 4
	 $sec4 = 0;
	 if ($Persona == "Si") {
	 	$sec4 = $sec4 + 5;
	 }else if ($Persona == "No" && $desconoce =="") {
	 	$sec4 = $sec4 + 3;
	 }else if ($Persona == "No" && !$desconoce =="") {
	 	$sec4 = 0;
	 }
	 //Termina seccion 4



		echo "modalidad1_1 "; var_dump($modalidad1_1);
		echo "<br>modalidad1_2 "; var_dump($modalidad1_2);  
		echo "<br>modalidad2_1 "; var_dump($modalidad2_1);
		echo "<br>modalidad2_2 "; var_dump($modalidad2_2);
		echo "<br>modalidad2_3 "; var_dump($modalidad2_3);   
		echo "<br>opcion "; var_dump($opcion);
		echo "<br>Direccion "; var_dump($Direccion);
		echo "<br>Persona "; var_dump($Persona);
		echo "<br>opPersona "; var_dump($opPersona);
		echo "<br>checkbox "; var_dump($desconoce);
		echo "<br>Puntuacion sec2 = "; var_dump($sec2);
		echo "<br>Puntuacion sec3 = "; var_dump($sec3);
		echo "<br>Puntuacion sec4 = "; var_dump($sec4);

		//insertamos los registros dentro de la BD
		$query = "INSERT INTO preevaluacion2_3_4 (id_Email_Usuario, Modalidad_1_1, Modalidad_1_2, Modalidad_2_1, Modalidad_2_2, Modalidad_2_3, CalificacionSec2, Analisis_com_proyecto, Donde, CalificacionSec3, Figura_juridica, Elemento, CalificacionSec4, Pre2_3_4_Contestado) VALUES ('$usuario', '$modalidad1_1', '$modalidad1_2', '$modalidad2_1', '$modalidad2_2', '$modalidad2_3', '$sec2', '$opcion', '$Direccion', '$sec3', '$Persona', '$opPersona', '$sec4', 'Si')";
		$resultado = $conexion->query($query);
		if ($resultado) {
			echo "<br>Datos ingresados correctamente";
			//Mandamos la calificación a la tabla "Calificaciones"
			$sql="UPDATE calificaciones SET Calificacion_Sec_4 = '$sec2', Calificacion_Sec_5 = '$sec3', Calificacion_Sec_6 = '$sec4'   WHERE id_Email_Usuario = '$usuario'";
			$resultado2 = $conexion->query($sql);
			if ($resultado2) {
			}else{
				echo "Hubo problemas al actualizar los datos";
				}



		}else {
			echo "<br>Error al ingresar los datos";
		}

 ?>