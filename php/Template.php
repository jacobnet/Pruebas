<?php
	session_start();
	if (isset($_SESSION['u_usuario'])) {
		$usuario=$_SESSION['u_usuario'];
	}else{
		header("Location: index.php");
	}
include("conexion.php");
if (!$conexion) {
	echo "Error al realizar la conexion";
	exit();
}

require_once 'PHPWord.php';

$PHPWord = new PHPWord();


$Folio="1";
$query = "SELECT Nombre_emp,Nombre_pro,Razon,Giro FROM imprimir WHERE Folio = '$Folio' ";
$resultado =  mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) > 0) {

	while ($row = mysqli_fetch_array($resultado)) {
		$Nombre_emp	=	$row["Nombre_emp"];
		$Nombre_pro	=	$row["Nombre_pro"];
		$Razon		=	$row["Razon"];
		$Giro		=	$row["Giro"];
	}


}else{
	echo "Nel no hay datos vato";
}

$document = $PHPWord->loadTemplate('plantilla.docx');

$document->setValue('Nombre_Emprendedor', $Nombre_emp);
$document->setValue('Nombre_Proyecto', $Nombre_pro);
$document->setValue('Razon', $Razon);
$document->setValue('Giro', $Giro);
$document->save('Solarsystem'.$Folio.'.docx');
?>