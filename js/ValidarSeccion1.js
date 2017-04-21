function ValidarSec1() {
	Opcion1 = document.getElementById("radio1").checked;
	Opcion2 = document.getElementById("radio2").checked;
	Opcion3 = document.getElementById("radio3").checked;

	if (Opcion1 === false && Opcion2 === false && Opcion3 === false) {
		alert("Selecciona una opción");
		document.getElementById("radio1").focus();
		return false;
	}

}