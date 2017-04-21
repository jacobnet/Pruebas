//Validamos que los inputs tenga el formato solicitado
function validarH() {
	lunesEn     = document.getElementById('time1_5').value;
	lunesSa     = document.getElementById('time2_5').value;
	martesEn    = document.getElementById('time3_5').value;
	martesSa    = document.getElementById('time4_5').value;
	miercolesEn = document.getElementById('time5_5').value;
	miercolesSa = document.getElementById('time6_5').value;
	juevesEn    = document.getElementById('time7_5').value;
	juevesSa    = document.getElementById('time8_5').value;
	viernesEn   = document.getElementById('time9_5').value;
	viernesSa   = document.getElementById('time10_5').value;
	sabadoEn    = document.getElementById('time11_5').value;
	sabadoSa    = document.getElementById('time12_5').value;
	EqlunesEn     = document.getElementById('time13_5').value;
	EqlunesSa     = document.getElementById('time14_5').value;
	EqmartesEn    = document.getElementById('time15_5').value;
	EqmartesSa    = document.getElementById('time16_5').value;
	EqmiercolesEn = document.getElementById('time17_5').value;
	EqmiercolesSa = document.getElementById('time18_5').value;
	EqjuevesEn    = document.getElementById('time19_5').value;
	EqjuevesSa    = document.getElementById('time20_5').value;
	EqviernesEn   = document.getElementById('time21_5').value;
	EqviernesSa   = document.getElementById('time22_5').value;
	EqsabadoEn    = document.getElementById('time23_5').value;
	EqsabadoSa    = document.getElementById('time24_5').value;
	OPcion		  = document.getElementById('sec6').value;
	expresion = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;

	if (!expresion.test(lunesEn)){
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(lunesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(martesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(martesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(miercolesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(miercolesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(juevesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(juevesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(viernesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(viernesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(sabadoEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(sabadoSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqlunesEn)){
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqlunesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqmartesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqmartesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqmiercolesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqmiercolesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqjuevesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqjuevesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqviernesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqviernesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqsabadoEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqsabadoSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (OPcion === "") {
		document.getElementById('sec6').focus();
		alert("Elige una opcion");
		return false;
	}
}//Termina validarH


//Funciones para realizar la suma de horas
//Horas del emprendedor
function SumEmp(total,total2) {

	inicioMinutos = parseInt(total.substr(3,2));
	inicioHoras = parseInt(total.substr(0,2));

	finMinutos = parseInt(total2.substr(3,2));
	finHoras = parseInt(total2.substr(0,2));

	transcurridoMinutos = finMinutos + inicioMinutos;
	transcurridoHoras = finHoras + inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos = 60 + transcurridoMinutos;
	}

	horas = transcurridoHoras.toString();
	minutos = transcurridoMinutos.toString();

	if(horas.length < 2) {
	horas = "0"+horas;
	}

	if(horas.length < 2) {
	horas = "0"+horas;
	}
	document.getElementById("TotalEmp").value = horas+":"+minutos;
}//Termina SumEmp
//Horas del equipo emprendedor
function SumEqu(total,total2) {

	inicioMinutos = parseInt(total.substr(3,2));
	inicioHoras = parseInt(total.substr(0,2));

	finMinutos = parseInt(total2.substr(3,2));
	finHoras = parseInt(total2.substr(0,2));

	transcurridoMinutos = finMinutos + inicioMinutos;
	transcurridoHoras = finHoras + inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos = 60 + transcurridoMinutos;
	}

	horas = transcurridoHoras.toString();
	minutos = transcurridoMinutos.toString();

	if(horas.length < 2) {
	horas = "0"+horas;
	}

	if(horas.length < 2) {
	horas = "0"+horas;
	}
	document.getElementById("TotalEqu").value = horas+":"+minutos;
}//Termina SumEmp


//Funciones para restar horas del emprendedor
//Funcion para lunes
function LunesEmp() {
	inicio	=	document.getElementById('time1_5').value;
	fin		=	document.getElementById('time2_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}
	totalhoras	=	document.getElementById("TotalEmp").value;
	if(totalhoras == "00:00" || totalhoras === "") {
	document.getElementById("TotalEmp").value = horas+":"+minutos;
	}else{
	total = horas+":"+minutos;
	total2 = document.getElementById("TotalEmp").value;
	SumEmp(total,total2);
	}
}// Termina LunesEmp
//Funcion para martes
function MartesEmp() {
	inicio	=	document.getElementById('time3_5').value;
	fin		=	document.getElementById('time4_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();
	
	if(horas.length < 2) {
	horas = "0"+horas;
	}

	if(horas.length < 2) {
	horas = "0"+horas;
	}

	totalhoras	=	document.getElementById("TotalEmp").value;
	if(totalhoras == "00:00" || totalhoras === "") {
		document.getElementById("TotalEmp").value = horas+":"+minutos;
	}else{
		total	=	horas+":"+minutos;
		total2	=	document.getElementById("TotalEmp").value;
		SumEmp(total,total2);
	}
}//Termina MartesEmp
//Funcion para miercoles
function MiercolesEmp() {
	inicio	=	document.getElementById('time5_5').value;
	fin		=	document.getElementById('time6_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();
	
	if(horas.length < 2) {
	horas = "0"+horas;
	}

	if(horas.length < 2) {
	horas = "0"+horas;
	}

	totalhoras	=	document.getElementById("TotalEmp").value;
	if(totalhoras == "00:00" || totalhoras === "") {
		document.getElementById("TotalEmp").value = horas+":"+minutos;
	}else{
		total	=	horas+":"+minutos;
		total2	=	document.getElementById("TotalEmp").value;
		SumEmp(total,total2);
	}
}//Termina MiercolesEmp
//Funcion para jueves
function JuevesEmp() {
	inicio	=	document.getElementById('time7_5').value;
	fin		=	document.getElementById('time8_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();
	
	if(horas.length < 2) {
	horas = "0"+horas;
	}

	if(horas.length < 2) {
	horas = "0"+horas;
	}

	totalhoras	=	document.getElementById("TotalEmp").value;
	if(totalhoras == "00:00" || totalhoras === "") {
		document.getElementById("TotalEmp").value = horas+":"+minutos;
	}else{
		total	=	horas+":"+minutos;
		total2	=	document.getElementById("TotalEmp").value;
		SumEmp(total,total2);
	}
}//Termina JuevesEmp
//Funcion para viernes
function ViernesEmp() {
	inicio	=	document.getElementById('time9_5').value;
	fin		=	document.getElementById('time10_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();
	
	if(horas.length < 2) {
	horas = "0"+horas;
	}

	if(horas.length < 2) {
	horas = "0"+horas;
	}

	totalhoras	=	document.getElementById("TotalEmp").value;
	if(totalhoras == "00:00" || totalhoras === "") {
		document.getElementById("TotalEmp").value = horas+":"+minutos;
	}else{
		total	=	horas+":"+minutos;
		total2	=	document.getElementById("TotalEmp").value;
		SumEmp(total,total2);
	}
}//Termina ViernesEmp
//Funcion para sabado
function SabadoEmp() {
	inicio	=	document.getElementById('time11_5').value;
	fin		=	document.getElementById('time12_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();
	
	if(horas.length < 2) {
	horas = "0"+horas;
	}

	if(horas.length < 2) {
	horas = "0"+horas;
	}

	totalhoras	=	document.getElementById("TotalEmp").value;
	if(totalhoras == "00:00" || totalhoras === "") {
		document.getElementById("TotalEmp").value = horas+":"+minutos;
	}else{
		total	=	horas+":"+minutos;
		total2	=	document.getElementById("TotalEmp").value;
		SumEmp(total,total2);
	}
}//Termina MartesEmp
//Terminan funciones para restar horas del emprendedor


//Funciones para restar horas del equipo emprendedor 
//Funcion para lunes 
function LunesEqu() {
	inicio	=	document.getElementById('time13_5').value;
	fin		=	document.getElementById('time14_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}
	totalhoras	=	document.getElementById("TotalEqu").value;
	if(totalhoras == "00:00" || totalhoras === "") {
	document.getElementById("TotalEqu").value = horas+":"+minutos;
	}else{
	total = horas+":"+minutos;
	total2 = document.getElementById("TotalEqu").value;
	SumEmp(total,total2);
	}
}// Termina LunesEqu
//Funcion para martes
function MartesEqu() {
	inicio	=	document.getElementById('time15_5').value;
	fin		=	document.getElementById('time16_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}
	totalhoras	=	document.getElementById("TotalEqu").value;
	if(totalhoras == "00:00" || totalhoras === "") {
	document.getElementById("TotalEqu").value = horas+":"+minutos;
	}else{
	total = horas+":"+minutos;
	total2 = document.getElementById("TotalEqu").value;
	SumEmp(total,total2);
	}
}// Termina MartesEqu
//Funcion para miercoles
function MiercolesEqu() {
	inicio	=	document.getElementById('time17_5').value;
	fin		=	document.getElementById('time18_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}
	totalhoras	=	document.getElementById("TotalEqu").value;
	if(totalhoras == "00:00" || totalhoras === "") {
	document.getElementById("TotalEqu").value = horas+":"+minutos;
	}else{
	total = horas+":"+minutos;
	total2 = document.getElementById("TotalEqu").value;
	SumEmp(total,total2);
	}
}// Termina MiercolesEqu
//Funcion para jueves
function JuevesEqu() {
	inicio	=	document.getElementById('time19_5').value;
	fin		=	document.getElementById('time20_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}
	totalhoras	=	document.getElementById("TotalEqu").value;
	if(totalhoras == "00:00" || totalhoras === "") {
	document.getElementById("TotalEqu").value = horas+":"+minutos;
	}else{
	total = horas+":"+minutos;
	total2 = document.getElementById("TotalEqu").value;
	SumEmp(total,total2);
	}
}// Termina JuevesEqu
//Funcion para viernes
function ViernesEqu() {
	inicio	=	document.getElementById('time21_5').value;
	fin		=	document.getElementById('time22_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}
	totalhoras	=	document.getElementById("TotalEqu").value;
	if(totalhoras == "00:00" || totalhoras === "") {
	document.getElementById("TotalEqu").value = horas+":"+minutos;
	}else{
	total = horas+":"+minutos;
	total2 = document.getElementById("TotalEqu").value;
	SumEmp(total,total2);
	}
}// Termina ViernesEqu
//Funcion para sabado
function SabadoEqu() {
	inicio	=	document.getElementById('time23_5').value;
	fin		=	document.getElementById('time24_5').value;

	inicioMinutos	=	parseInt(inicio.substr(3,2));
	inicioHoras	=	parseInt(inicio.substr(0,2));

	finMinutos	=	parseInt(fin.substr(3,2));
	finHoras	=	parseInt(fin.substr(0,2));

	transcurridoMinutos	=	finMinutos - inicioMinutos;
	transcurridoHoras	=	finHoras - inicioHoras;

	if(transcurridoMinutos < 0) {
	transcurridoHoras--;
	transcurridoMinutos	=	60 + transcurridoMinutos;
	}

	horas	=	transcurridoHoras.toString();
	minutos	=	transcurridoMinutos.toString();

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}

	if(horas.length < 2) {
	horas	=	"0"+horas;
	}
	totalhoras	=	document.getElementById("TotalEqu").value;
	if(totalhoras == "00:00" || totalhoras === "") {
	document.getElementById("TotalEqu").value = horas+":"+minutos;
	}else{
	total = horas+":"+minutos;
	total2 = document.getElementById("TotalEqu").value;
	SumEmp(total,total2);
	}
}// Termina SabadoEqu

