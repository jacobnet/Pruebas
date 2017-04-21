function ValidarCedula_Proyecto() {
	Nombre = document.getElementById("Nombre").value;
	Establecido = document.getElementById("Establecido").value;
	Calle = document.getElementById("Calle").value;
	Colonia = document.getElementById("Colonia").value;
	Num = document.getElementById("Num").value;
	Municipio = document.getElementById("Municipio").value;
	Region = document.getElementById("Region").value;
	Estado = document.getElementById("Estado").value;
	CP = document.getElementById("CodigoPostal").value;
	expLetras =  /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*$/;
	expLeNu = 	/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ,.\s]*$/;
	expLePu = 	/^[a-zA-ZñÑáéíóúÁÉÍÓÚ,.\s]*$/;
	expCP = /^([0-9]+){6}$/;
	expNum = /[0-9]+-+[0-9]/;

	if (Nombre === "") {
		document.getElementById("Nombre").focus();
		alert("Ingresa el nombre de tu proyecto");
		return false;
	}else if (!expLetras.test(Nombre)) {
		document.getElementById("Nombre").focus();
		alert("El nombre solo puede contener letras");
		return false;
	}else if (Nombre.length > 100 ) {
		document.getElementById("Nombre").focus();
		alert("El nombre no puede tener más de 100 caracteres");
		return false;
	}else if (Establecido === "") {
		document.getElementById("Establecido").focus();
		alert("Define si tu proyecto está establecido");
		return false;
	}else if (Establecido === "Si" && Calle === "") {
		document.getElementById("Calle").focus();
		alert("El Campo Calle está vacio");
		return false;
	}else if (Establecido === "Si" && !expLeNu.test(Calle)) {
		document.getElementById("Calle").focus();
		alert("El campo solo admite letras, numeros, puntos y comas");
		return false;
	}else if (Establecido === "Si" && Calle.length >150) {
		document.getElementById("Calle").focus();
		alert("El campo no puede tener más de 150 caracteres");
		return false;
	}else if (Establecido === "Si" && Colonia === "") {
		document.getElementById("Colonia").focus();
		alert("El Campo Colonia está vacio ");
		return false;
	}else if (Establecido === "Si" && !expLePu.test(Colonia)) {
		document.getElementById("Colonia").focus();
		alert("El campo sólo admite letras, puntos y comas");
		return false;
	}else if (Establecido === "Si" && Colonia.length >150) {
		document.getElementById("Colonia").focus();
		alert("El campo no puede tener más de 150 caracteres");
		return false;
	}else if (Establecido === "Si" && Num === "") {
		document.getElementById("Num").focus();
		alert("El campo num Está vacio");
		return false;
	}else if (Establecido === "Si" && !expNum.test(Num)) {
		document.getElementById("Num").focus();
		alert("El formato no coincide\n Ejemplo 001-000");
		return false;
	}else if (Establecido === "Si" && Num.length >20) {
		document.getElementById("Num").focus();
		alert("Num demasido extenso");
		return false;
	}else if (Establecido === "Si" && Municipio === "") {
		document.getElementById("Municipio").focus();
		alert("El Campo Municipio está vacio");
		return false;
	}else if (Establecido === "Si" && !expLePu.test(Municipio)) {
		document.getElementById("Municipio").focus();
		alert("El campo sólo admite letras, puntos y comas");
		return false;
	}else if (Establecido === "Si" && Municipio.length >150) {
		document.getElementById("Municipio").focus();
		alert("El campo no puede tener mas de 150 caracteres");
		return false;
	}else if (Establecido === "Si" && Region === "") {
		document.getElementById("Region").focus();
		alert("El Campo Region está vacio");
		return false;
	}else if (Establecido === "Si" && !expLePu.test(Region)) {
		document.getElementById("Region").focus();
		alert("El campo sólo adminte letras, puntos y comas");
		return false;
	}else if (Establecido === "Si" && Region.length > 150) {
		document.getElementById("Region").focus();
		alert("El campo no puede tener más de 150 caracteres");
		return false;
	}else if (Establecido === "Si" && Estado === "") {
		document.getElementById("Estado").focus();
		alert("El Campo Estado está vacio");
		return false;
	}else if (Establecido === "Si" && !expLetras.test(Estado)) {
		document.getElementById("Estado").focus();
		alert("El campo sólo admite letras");
		return false;
	}else if (Establecido === "Si" && Estado.length >150) {
		document.getElementById("Estado").focus();
		alert("El campo no puede tener más de 150 caracteres");
		return false;
	}else if (Establecido === "Si" && CP === "") {
		document.getElementById("CodigoPostal").focus();
		alert("El campos Código Postal está vacio");
		return false;
	}else if (Establecido === "Si" && !expCP.test(CP)) {
		document.getElementById("CodigoPostal").focus();
		alert("El campo sólo acepta números");
		return false;
	}else if (Establecido === "Si" && CP.length > 6) {
		document.getElementById("CodigoPostal").focus();
		alert("El campo solo admite 6 digitos");
		return false;
	}else {
		return true;
	}


}//Termina Validar_CedulaProyecto