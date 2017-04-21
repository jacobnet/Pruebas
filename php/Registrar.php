<?php
include("conexion.php");
	if (isset($_REQUEST['Tipo'])) {
		$tipo = $_REQUEST['Tipo'];
	}else{
		$tipo = "";
	}
	$email = $_POST["Correo"];
	$contrasena = $_POST["Contrasena"];
	$validacion = "SELECT Email FROM usuarios WHERE email = '$email'";
	$resultado = $conexion->query($validacion);
		if ($resultado->num_rows > 0) {			
			echo '<script> 
					alert("El email ya ha sido registrado con anterioridad");
					window.history.go(-1);
					</script>';
	}//Termina primer if
	else{ // else 1

		if ($tipo == "Interno") {
			$var = "Int";
		}else if ($tipo == "Externo") {
			$var = "Ext";
		}
		$result =mysqli_query($conexion,"SELECT count(*) total FROM usuarios WHERE Ced_tipo_usuario ='$tipo'");
		$conteo = mysqli_fetch_row($result);
		$conteo = $conteo[0] + 1;
		$folio = "Cognitivo-".$var."-0".$conteo;
		$pass=password_hash($contrasena, PASSWORD_DEFAULT);
		$query = "INSERT INTO usuarios (Email,Contrasena,Ced_tipo_usuario,Ced_Emp_Folio) VALUES ('$email','$pass','$tipo','$folio')";
		if ($conexion->query($query)) {
			# code...
			header("Location: ../index.php");
		}else{
			echo '<script> 
					alert("Error al registrar en el sistema");
					window.history.go(-1);
					</script>';
		}

	}// Termina else 1

  ?>	
