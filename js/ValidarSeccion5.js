function ValidarS5() {
	op1 = document.getElementById('seleccion1').value; 
	op2 = document.getElementById('seleccion2').value; 
	op3 = document.getElementById('seleccion3').value; 
	op4 = document.getElementById('seleccion4').value; 
	op5 = document.getElementById('seleccion5').value;

	if (op1 === "") {
		alert("Todos los campos son requeridos");
		return false;
	}else if (op2 === "") {
		alert("Todos los campos son requeridos");
		return false;
	}else if (op3 === "") {
		alert("Todos los campos son requeridos");
		return false;
	}else if (op4 === "") {
		alert("Todos los campos son requeridos");
		return false;
	}else if (op5 === "") {
		alert("Todos los campos son requeridos");
		return false;
	}
}