<?php 
include("conexion.php");
session_start();
if (isset($_SESSION['u_usuario'])) {
	$usuario = $_SESSION['u_usuario'];
	var_dump($usuario);
//querys para verificar si los ha contestado o no
	$Cedula_emp = "SELECT Ced_Contestado FROM cedula_emprendedor WHERE id_Email_Usuario = '$usuario' ";

	$Cedula_pro = "SELECT Contestado_proyecto FROM cedula_proyecto WHERE id_Email_Usuario = '$usuario'";

	$Seccion1 = "SELECT Pre1_Contestado FROM preevaluacion1 WHERE id_Email_Usuario = '$usuario'";

	$Seccion2 = "SELECT Pre2_3_4_Contestado FROM preevaluacion2_3_4 WHERE id_Email_Usuario = '$usuario'";

	$Seccion3 = "SELECT Pre5_Contestado FROM preevaluacion5_6 WHERE id_Email_Usuario = '$usuario' ";

	$Seccion4 = "SELECT  Pre7_Contestado FROM preevaluacion7 WHERE id_Email_Usuario ='$usuario'";

	$Seccion5 = "SELECT estatus_pre8_9 FROM preevaluacion8_9 WHERE id_Email_Usuario = '$usuario'";



//Terminan todos lo querys
	$Emprendedor = $conexion->query($Cedula_emp);
	$Proyecto = $conexion->query($Cedula_pro);
	$Sec1 = $conexion-> query($Seccion1);
	$Sec2 = $conexion-> query($Seccion2);
	$Sec3 = $conexion-> query($Seccion3);
	$Sec4 = $conexion-> query($Seccion4);
	$Sec5 = $conexion-> query($Seccion5);



//Comparaciones para ver si está contestado 
	if ($Emprendedor->num_rows>0 && $Proyecto->num_rows>0 && $Sec1->num_rows>0 && $Sec2->num_rows>0 && $Sec3->num_rows>0 && $Sec4->num_rows>0 && $Sec5->num_rows>0) {
		echo "Formularios terminados";
	}else if ($Emprendedor->num_rows>0 && $Proyecto->num_rows>0 && $Sec1->num_rows>0 && $Sec2->num_rows>0 && $Sec3->num_rows>0 && $Sec4->num_rows>0 && !$Sec5->num_rows>0){
		header("Location: ../Seccion5.php");
	}else if ($Emprendedor->num_rows>0 && $Proyecto->num_rows>0 && $Sec1->num_rows>0 && $Sec2->num_rows>0 && $Sec3->num_rows>0 && !$Sec4->num_rows>0 && !$Sec5->num_rows>0) {
		header("Location: ../Seccion4.php");
	}else if ($Emprendedor->num_rows>0 && $Proyecto->num_rows>0 && $Sec1->num_rows>0 && $Sec2->num_rows>0 && !$Sec3->num_rows>0 && !$Sec4->num_rows>0 && !$Sec5->num_rows>0) {
		header("Location: ../Seccion3.php");
	}else if ($Emprendedor->num_rows>0 && $Proyecto->num_rows>0 && $Sec1->num_rows>0 && !$Sec2->num_rows>0 && !$Sec3->num_rows>0 && !$Sec4->num_rows>0 && !$Sec5->num_rows>0) {
		header("Location: ../Seccion2.php");
	}else if ($Emprendedor->num_rows>0 && $Proyecto->num_rows>0 && !$Sec1->num_rows>0 && !$Sec2->num_rows>0 && !$Sec3->num_rows>0 && !$Sec4->num_rows>0 && !$Sec5->num_rows>0) {
		header("Location: ../Seccion1.php");
	}else if ($Emprendedor->num_rows>0 && !$Proyecto->num_rows>0 && !$Sec1->num_rows>0 && !$Sec2->num_rows>0 && !$Sec3->num_rows>0 && !$Sec4->num_rows>0 && !$Sec5->num_rows>0) {
		header("Location: ../Cedula_Proyecto.php");
	}else if (!$Emprendedor->num_rows>0 && !$Proyecto->num_rows>0 && !$Sec1->num_rows>0 && !$Sec2->num_rows>0 && !$Sec3->num_rows>0 && !$Sec4->num_rows>0 && !$Sec5->num_rows>0) {
		header("Location: ../Cedula.php");
	}


}
else {
	header("../index.php");
}
 ?>