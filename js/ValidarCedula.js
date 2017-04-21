function ValidarCedula() {
	Nombre = document.getElementById("Nombre").value;
	Fecha = document.getElementById("Fecha").value;
	Lugar = document.getElementById("Lugar").value;
	Domicilio = document.getElementById("Domicilio").value;
	Estado = document.getElementById("Estado").value;
	Sexo = document.getElementById("Sexo").value;
	Escolaridad = document.getElementById("Escolaridad").value;
	Ocupacion = document.getElementById("Ocupacion").value;
	Otro_es = document.getElementById("Otro_es").value;
	Local = document.getElementById("Local").value;
	Celular = document.getElementById("Celular").value;
	Email = document.getElementById("Email").value;
	sRFC = document.getElementById("sRFC").value;
	rfc = document.getElementById("rfc").value;
	Personalidad = document.getElementById("Personalidad").value;
	Razon = document.getElementById("Razon").value;
	Sector = document.getElementById("Sector").value;
	Otro = document.getElementById("Otro").value;
	expLetras =  /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*$/;
	expLePu = 	/^[a-zA-ZñÑáéíóúÁÉÍÓÚ,.\s]*$/;
	expLeNu = 	/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ,.\s]*$/;
	expFec = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
	expresion = /\w+@\w+\.+[a-z]/;
	expNum = /^([0-9]+){10}$/;

	if (Nombre === "") {
		document.getElementById("Nombre").focus();
		return false;
	}else if (!expLetras.test(Nombre)) {
		alert("El nombre solo puede contener letras");
		document.getElementById("Nombre").focus();
		return false;
	}else if (Nombre.length > 100) {
		alert("El Nombre no puede tener más de 100 carateres");
		document.getElementById("Nombre").focus();
		return false;
	}else if (Fecha === "") {
		document.getElementById("Fecha").focus();
		return false;
	}else if (!expFec.test(Fecha)) {
		alert("El formato no coincide vuelve a intentarlo \nFormato: dd/mm/aaaa");
		document.getElementById("Fecha").focus();
		return false;
	}else if (Lugar === "") {
		document.getElementById("Lugar").focus();
		return false;
	}else if (!expLePu.test(Lugar)) {
		document.getElementById("Lugar").focus();
		alert("El compo solo admite letras, espacios, puntos y comas");
		return false;
	}else if (Lugar.length > 150 ) {
		document.getElementById("Lugar").focus();
		alert("El campo lugar no puede tener más de 150 caracteres");
		return false;
	}else if (Domicilio === "") {
		document.getElementById("Domicilio").focus();
		return false;
	}else if (!expLeNu.test(Domicilio)) {
		document.getElementById("Domicilio").focus();
		alert("El campo solo adminte letras, numeros, puntos y comas");
		return false;
	}else if (Domicilio.length > 150) {
		document.getElementById("Domicilio").focus();
		alert("El campo no puede tener más de 150 caracteres");
		return false;
	}else if (Estado === "") {
		document.getElementById("Estado").focus();
		alert("El campo Estado está vacio");
		return false;
	}else if (Sexo === "") {
		document.getElementById("Sexo").focus();
		alert("El campo sexo Está vacio");
		return false;
	} else if (Escolaridad === "") {
		document.getElementById("Escolaridad").focus();
		alert("El campo Escolaridad Está vacio");
		return false;
	}else if (Ocupacion === "") {
		document.getElementById("Ocupacion").focus();
		alert("El campo ocupacion está vacio");
		return false;
	}else if (Ocupacion === "Otro" && Otro_es === ""){
		document.getElementById("Otro_es").focus();
		alert("El campo esta vacio");
		return false;
	}else if (Local === "") {
		document.getElementById("Local").focus();
		return false;
	}else if (!expNum.test(Local)) {
		document.getElementById("Local").focus();
		alert("El campo solo admite números");
		return false;
	} else if (Local.length > 10  || Local.length < 10) {
		document.getElementById("Local").focus();
		alert("El número debe tener 10 digitos");
		return false;
	}else if (Celular === "") {
		document.getElementById("Celular").focus();
		return false;
	}else if (!expNum.test(Celular)) {
		document.getElementById("Celular").focus();
		alert("El campo sólo admite números");
		return false;
	}else if (Celular.length > 10 || Celular.length < 10 ) {
		document.getElementById("Celular").focus();
		alert("El numero debe tener 10 digitos");
		return false;
	}
	else if (Email === "") {
		document.getElementById("Email").focus();
		alert("Es Necesario un Email de referencia\nPara poder recuperar tu contraseña en caso de perderla");
		return false;
	}else if (!expresion.test(Email)) {
		document.getElementById("Email").focus();
		alert("El correo no tiene un ofrmato valido")
		return false;
	}else if (Email.length > 100) {
		document.getElementById("Email").focus();
		alert("El correo no puede tener más de 100 caracteres");
		return false;
	}else if (sRFC === "") {
		alert("El campo sRFC está vacio");
		return false;
	}else if (sRFC === "Si y esta activo" && rfc ==="") {
		document.getElementById("rfc").focus();
		alert("Ingresa tu rfc");
		return false;
	}else if (sRFC ==="Si y esta activo" && Personalidad === "") {
		document.getElementById("Personalidad").focus();
		alert("El campo personalidad está vacio");
		return false;
	}else if (sRFC === "Si y esta activo" && Razon === "") {
		document.getElementById("Razon").focus();
		alert("El campo razón está vacio");
		return false;
	}else if (Sector === "") {
		document.getElementById("Sector").focus();
		alert("El campo Sector está vacio");
		return false;
	}else if (Sector === "Otro" && Otro === "") {
		document.getElementById("Otro").focus();
		alert("Por favor ingresa el tipo de giro que tienes");
		return false;
	}else {
		return true;
	}
	// body...
}