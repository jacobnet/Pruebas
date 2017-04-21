function ValidarRegistro() {
	// body...
	tipo1 = document.getElementById("Interno").checked;
	tipo2 = document.getElementById("Externo").checked;
	email = document.getElementById("Correo").value;
	pass1 = document.getElementById("Contrasena").value;
	pass2 = document.getElementById("Contrasena2").value;
	expresion = /\w+@\w+\.+[a-z]/;
	if (pass1 !== pass2) {
		alert("Las contraseñas no coinciden");
		document.getElementById("Contrasena").value = "";
		document.getElementById("Contrasena2").value = "";
		return false;
	}else if (email === "" || pass1 === "" || pass2 === "") {
		alert("Rellena todos los campos");
		return false;
	}else if (email.length>100) {
		alert("El Correo es demasiado largo");
		document.getElementById("Correo").value = "";
		return false;
	}else if (!expresion.test(email)) {
		alert("El correo no es valido");
		document.getElementById("Correo").value = "";
		return false;
	}else if (tipo1 === false && tipo2 === false) {
		document.getElementById("texto").focus();
		alert("Especifica el tipo de proyecto\nInterno: Alumno de la UT\nExterno: Foraneo");
		return false;
	}	else{
		return true;
	}
}//Termina la función ValidarResgistro

function ValidarInicio(){
	email = document.getElementById("u-email").value;
	pass = document.getElementById("u-pass").value;
	expresion = /\w+@\w+\.+[a-z]/;

	if (email === "" || pass === "") {
		alert("Todos los campos son requeridos");
		return false;
	}else if (!expresion.test(email)) {
		alert("El correo no es valido");
		return false;
	}else {
		return true;
	}

}//Termina funcion ValidarInicio