function ValidarS1(){
modalidad1_1    =	document.getElementById('modalidad11').value;
modalidad1_2    =	document.getElementById('modalidad12').value;
modalidad2_1    =	document.getElementById('modalidad21').value;
modalidad2_2    =	document.getElementById('modalidad22').value;
modalidad2_3    =	document.getElementById('modalidad23').value;
opcion          =	document.getElementById('p3_1').value;
opSi            =	document.getElementById('t1_1').value;
opNo            =	document.getElementById('t2_2').value;
opPersona       =	document.getElementById('persona').value;
OpPersonaSi     =	document.getElementById('op1').value;
OpPersonaNo     =	document.getElementById('op2').value;
OpPersonaSiOtro =	document.getElementById('4_1').value;
OpPersonaNoOtro =	document.getElementById('4_2').value;
desconoce       =	document.getElementById('check').checked;
// Empezamos validaciones para contestar

if (modalidad1_1 === "" || modalidad1_2 === "") {
	alert("Verifica todos los campos");
	return false;
}else if (modalidad1_1 === "No" && modalidad1_2 === "No" && modalidad2_1 === "") {
	alert("Verifica todos los campos");
	return false;
}else if (modalidad1_1 === "No" && modalidad1_2 === "No" && modalidad2_2 === "") {
	alert("Verificar todos los campos");
	return false;
}else if (modalidad1_1 === "No" && modalidad1_2 === "No" && modalidad2_3 === "") {
	alert("Verificar todos los campos");
	return false;
}else if (opcion === "Si" && opSi === "") {
	alert("Verificar todos los campos");
	return false;
}else if (opcion === "No" && opNo === "") {
	alert("Verificar todos los campos");
	return false;
}else if (opPersona === "" ) {
	alert("Verificar todos los campos");
	return false;
}else if (opPersona === "Si" && OpPersonaSi === "") {
	alert("Verificar todos los campos");
	return false;
}else if (opPersona === "No" && OpPersonaNo === "") {
	alert("Verificar todos los campos");
	return false;
}else if (OpPersonaSi === "Otro" && OpPersonaSiOtro === "") {
	alert("Verifica todos los campos");
	return false;
}else if (OpPersonaNo === "Otro" && OpPersonaNoOtro === "") {
	alert("Verificar todos los campos");
	return false;
}else if (desconoce == false) {
	alert("Verificar todo los campos");
}
}//Termina validarS1