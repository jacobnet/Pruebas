<?php

try{
	
	$login=htmlentities(addslashes($_POST["u-email"]));
	
	$password=htmlentities(addslashes($_POST["u-pass"]));
	$contador=0;
	
	$base=new PDO("mysql:host=localhost; dbname=prueba" , "root", "");
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql="SELECT * FROM usuarios WHERE email= :login";
	
	$resultado=$base->prepare($sql);	
		
	$resultado->execute(array(":login"=>$login));
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){			
			
			//echo "Usuario: " . $registro['email'] . " Contraseña: " . $registro['contrasena'] . "<br>";			
			if (password_verify($password, $registro['contrasena'])) {
						# code...
				$contador++;
					}		//fin if
		}//fin while

		if ($contador>0) {
			# code...
			echo "Usuario registrado: ";
		}else{
			echo "Usuario no registrado";
		}

		
		$resultado->closeCursor();
	
	
}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
		
}

?>