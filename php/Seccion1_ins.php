<?php 


	include("conexion.php");
	$usuario ="asdas@asd.asd";
	$Puntuacion = 0;
	$Respuesta ="";
	if (isset($_REQUEST['radio1_1'])) {
		$elemento1 = $_REQUEST['radio1_1'];
	}else{
		$elemento1 = "No";
	}
	if (isset($_REQUEST['radio1_2'])) {
		$elemento2 = $_REQUEST['radio1_2'];
	}else{
		$elemento2 = "No";
	}
	if (isset($_REQUEST['radio1_3'])) {
		$elemento3 = $_REQUEST['radio1_3'];
	}else{
		$elemento3 = "No";
	}
	if (isset($_REQUEST['radio1_4'])) {
		$elemento4 = $_REQUEST['radio1_4'];
	}else{
		$elemento4 = "No";
	}
	if (isset($_REQUEST['radio1_5'])) {
		$elemento5 = $_REQUEST['radio1_5'];
	}else{
		$elemento5 = "No";
	}
	if (isset($_REQUEST['radio1_6'])) {
		$elemento6 = $_REQUEST['radio1_6'];
	}else{
		$elemento6 = "No";
	}
	if (isset($_REQUEST['radio1_7'])) {
		$elemento7 = $_REQUEST['radio1_7'];
	}else{
		$elemento7 = "No";
	}
	// Recibimos opcion obligatoria
	if (isset($_REQUEST['radio1'])) {
		$elemento8 = $_REQUEST['radio1'];
	}else{
		$elemento8 = "";
	}

	//Asignamos calificacion según haya elegido el usuario
	if ($elemento1 == "Si") {
		$Puntuacion = $Puntuacion + 2;
	}else if ($elemento1 == "No"){
		$Puntuacion = $Puntuacion + 1;
	}

	if ($elemento2 == "Si") {
		$Puntuacion = $Puntuacion + 2;
	}else if ($elemento2 == "No"){
		$Puntuacion = $Puntuacion + 1;
	}

	if ($elemento3 == "Si") {
		$Puntuacion = $Puntuacion + 2;
	}else if ($elemento3 == "No"){
		$Puntuacion = $Puntuacion + 1;
	}

	if ($elemento4 == "Si") {
		$Puntuacion = $Puntuacion + 2;
	}else if ($elemento4 == "No"){
		$Puntuacion = $Puntuacion + 1;
	}

	if ($elemento5 == "Si") {
		$Puntuacion = $Puntuacion + 2;
	}else if ($elemento5 == "No"){
		$Puntuacion = $Puntuacion + 1;
	}

	if ($elemento6 == "Si") {
		$Puntuacion = $Puntuacion + 2;
	}else if ($elemento6 == "No"){
		$Puntuacion = $Puntuacion + 1;
	}

	if ($elemento7 == "Si") {
		$Puntuacion = $Puntuacion + 2;
	}else if ($elemento7 == "No"){
		$Puntuacion = $Puntuacion + 1;
	}

 //Comparamos la opcion obligatoria
	if ($elemento8 == "a") {
		$Puntuacion = $Puntuacion + 2;
		$Respuesta = "El número de socios o colaboradores formales en el proyecto o empresa son 2 o má de 2 personas";
	}else if ($elemento8 =="b") {
		$Respuesta = "Soy solo yo el que está iniciando o manejando el negocio pero me gustaría integrar socios";
	}else if ($elemento8 == "c") {
		$Respuesta = "Soy solo yo el que está iniciando o manejando el negocio pero no me interesa formar un equipo de trabajo, siento que puedo tener buenos resultados trabajando yo solo";
	}
 // Hacemos la inserción en la BD
	//Mandamos la calificación a la tabla "Calificaciones"
	$sql="UPDATE calificaciones SET Calificacion_Sec_3 = '$Puntuacion'    WHERE id_Email_Usuario = '$usuario'";
	$resultado2 = $conexion->query($sql);
	if ($resultado2) {
	}else{
		echo "Hubo problemas al actualizar los datos";
	}
	//Creamos el query para registrar lo contestado
	$query = "INSERT INTO preevaluacion1 (id_Email_Usuario, Admin_empresarial, Comercializacion, Procesos_produccion, Juridica_legal, Imagen_corporativa, Diseno_industrial, Financiera_fiscal, Opcion, Pre1_Contestado, Pre1_Puntuacion) VALUES ('$usuario','$elemento1','$elemento2','$elemento3','$elemento4','$elemento5','$elemento6','$elemento7','$Respuesta','Si','$Puntuacion') ";
	//Ejecutamos el query con la conexion a la BD
	$resultado = $conexion->query($query);
	//Comprobamos si se realizó con exito el query
	if ($resultado) {
		echo "Datos ingresados satisfactoriamente";
		var_dump($Puntuacion);
	}else{
		echo "hubo pedos al ingresar los datos";
		echo "<br> string"; var_dump($usuario);
		echo "<br> elemento1 = "; var_dump($elemento1);
		echo "<br> elemento2 = "; var_dump($elemento2);
		echo "<br> elemento3 = "; var_dump($elemento3);
		echo "<br> elemento4 = "; var_dump($elemento4);
		echo "<br> elemento5 = "; var_dump($elemento5);
		echo "<br> elemento6 = "; var_dump($elemento6);
		echo "<br> elemento7 = "; var_dump($elemento7);
		echo "<br> elemento8 = "; var_dump($elemento8);
		echo "<br> Puntuacion "; var_dump($Puntuacion);
	}
 ?>