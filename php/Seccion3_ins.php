<?php
include("conexion.php");
$usuario = "asdas@asd.asd";
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

echo "<br>Total de horas del emprendedor "; var_dump($hrsEmp);
echo "<br>Total de horas del equipo emprendedor "; var_dump($hrsEqu);
echo "<br>Grado de diferencia ";var_dump($grado);
$horas = (int)($hrsEmp[0].$hrsEmp[1]);
var_dump($horas);


// $query = "INSERT INTO horario(EntradaLunes, SalidaLunes, EntradaMartes, SalidaMartes) VALUES ('$EmpLunesE')";
// $resultado = $conexion->query($query);
// if ($resultado) {
// 	echo "Datos ingreados correctamente";
// }else
// 	echo "hubo pedos al ingresar en la BD";
 ?>