function ValidarS4() {
	selec = document.getElementById('selecion1_7').value;
	if (selec == "" ) {
        document.getElementById('selecion1_7').focus();
		alert("Define si tu proyecto ha sido financiado");
		return false;
	}
}

function activar(){
	ch = document.getElementById('checkbox12_7_1').checked;
			if (ch === true) {

                document.getElementById('checkbox1_7').checked=false;
                document.getElementById('checkbox2_7').checked=false;
                document.getElementById('checkbox3_7').checked=false;
                document.getElementById('checkbox4_7').checked=false;
                document.getElementById('checkbox5_7').checked=false;
                document.getElementById('checkbox6_7').checked=false;
                document.getElementById('checkbox7_7').checked=false;
                document.getElementById('checkbox8_7').checked=false;
                document.getElementById('checkbox9_7').checked=false;
                document.getElementById('checkbox10_7').checked=false;
                document.getElementById('checkbox11_7').checked=false;

                document.getElementById('checkbox1_7_1').checked=false;
                document.getElementById('checkbox2_7_1').checked=false;
                document.getElementById('checkbox3_7_1').checked=false;
                document.getElementById('checkbox4_7_1').checked=false;
                document.getElementById('checkbox5_7_1').checked=false;
                document.getElementById('checkbox6_7_1').checked=false;
                document.getElementById('checkbox7_7_1').checked=false;
                document.getElementById('checkbox8_7_1').checked=false;
                document.getElementById('checkbox9_7_1').checked=false;
                document.getElementById('checkbox10_7_1').checked=false;
                document.getElementById('checkbox11_7_1').checked=false;

            }
}


 function habilitar(){
    value = document.getElementById('selecion1_7').value;
            if(value =="1")
            {
                // habilitamos
                document.getElementById("checkbox1_7").disabled=false;
                document.getElementById("checkbox2_7").disabled=false;
                document.getElementById("checkbox3_7").disabled=false;
                document.getElementById("checkbox4_7").disabled=false;
                document.getElementById("checkbox5_7").disabled=false;
                document.getElementById("checkbox6_7").disabled=false;
                document.getElementById("checkbox7_7").disabled=false;
                document.getElementById("checkbox8_7").disabled=false;
                document.getElementById("checkbox9_7").disabled=false;
                document.getElementById("checkbox10_7").disabled=false;
                document.getElementById("checkbox11_7").disabled=false;
                document.getElementById("checkbox1_7_1").disabled=true;
                document.getElementById("checkbox2_7_1").disabled=true;
                document.getElementById("checkbox3_7_1").disabled=true;
                document.getElementById("checkbox4_7_1").disabled=true;
                document.getElementById("checkbox5_7_1").disabled=true;
                document.getElementById("checkbox6_7_1").disabled=true;
                document.getElementById("checkbox7_7_1").disabled=true;
                document.getElementById("checkbox8_7_1").disabled=true;
                document.getElementById("checkbox9_7_1").disabled=true;
                document.getElementById("checkbox10_7_1").disabled=true;
                document.getElementById("checkbox11_7_1").disabled=true;
                document.getElementById("checkbox12_7_1").disabled=true;


                document.getElementById("checkbox1_7_1").checked=false;
                document.getElementById("checkbox2_7_1").checked=false;
                document.getElementById("checkbox3_7_1").checked=false;
                document.getElementById("checkbox4_7_1").checked=false;
                document.getElementById("checkbox5_7_1").checked=false;
                document.getElementById("checkbox6_7_1").checked=false;
                document.getElementById("checkbox7_7_1").checked=false;
                document.getElementById("checkbox8_7_1").checked=false;
                document.getElementById("checkbox9_7_1").checked=false;
                document.getElementById("checkbox10_7_1").checked=false;
                document.getElementById("checkbox11_7_1").checked=false;
                document.getElementById("checkbox12_7_1").checked=false;

            
            }else if(value=="2"){
                // deshabilitamos
                document.getElementById("checkbox1_7").disabled=true;
                document.getElementById("checkbox2_7").disabled=true;
                document.getElementById("checkbox3_7").disabled=true;
                document.getElementById("checkbox4_7").disabled=true;
                document.getElementById("checkbox5_7").disabled=true;
                document.getElementById("checkbox6_7").disabled=true;
                document.getElementById("checkbox7_7").disabled=true;
                document.getElementById("checkbox8_7").disabled=true;
                document.getElementById("checkbox9_7").disabled=true;
                document.getElementById("checkbox10_7").disabled=true;
                document.getElementById("checkbox11_7").disabled=true;

                document.getElementById("checkbox1_7_1").disabled=false;
                document.getElementById("checkbox2_7_1").disabled=false;
                document.getElementById("checkbox3_7_1").disabled=false;
                document.getElementById("checkbox4_7_1").disabled=false;
                document.getElementById("checkbox5_7_1").disabled=false;
                document.getElementById("checkbox6_7_1").disabled=false;
                document.getElementById("checkbox7_7_1").disabled=false;
                document.getElementById("checkbox8_7_1").disabled=false;
                document.getElementById("checkbox9_7_1").disabled=false;
                document.getElementById("checkbox10_7_1").disabled=false;
                document.getElementById("checkbox11_7_1").disabled=false;
                document.getElementById("checkbox12_7_1").disabled=false;


                document.getElementById("checkbox1_7").checked=false;
                document.getElementById("checkbox2_7").checked=false;
                document.getElementById("checkbox3_7").checked=false;
                document.getElementById("checkbox4_7").checked=false;
                document.getElementById("checkbox5_7").checked=false;
                document.getElementById("checkbox6_7").checked=false;
                document.getElementById("checkbox7_7").checked=false;
                document.getElementById("checkbox8_7").checked=false;
                document.getElementById("checkbox9_7").checked=false;
                document.getElementById("checkbox10_7").checked=false;
                document.getElementById("checkbox11_7").checked=false;
                document.getElementById("checkbox12_7_1").checked=false;

                

                
            }else if (value == "") {
                document.getElementById("checkbox1_7").disabled=true;
                document.getElementById("checkbox2_7").disabled=true;
                document.getElementById("checkbox3_7").disabled=true;
                document.getElementById("checkbox4_7").disabled=true;
                document.getElementById("checkbox5_7").disabled=true;
                document.getElementById("checkbox6_7").disabled=true;
                document.getElementById("checkbox7_7").disabled=true;
                document.getElementById("checkbox8_7").disabled=true;
                document.getElementById("checkbox9_7").disabled=true;
                document.getElementById("checkbox10_7").disabled=true;
                document.getElementById("checkbox11_7").disabled=true;
                
                document.getElementById("checkbox1_7_1").disabled=true;
                document.getElementById("checkbox2_7_1").disabled=true;
                document.getElementById("checkbox3_7_1").disabled=true;
                document.getElementById("checkbox4_7_1").disabled=true;
                document.getElementById("checkbox5_7_1").disabled=true;
                document.getElementById("checkbox6_7_1").disabled=true;
                document.getElementById("checkbox7_7_1").disabled=true;
                document.getElementById("checkbox8_7_1").disabled=true;
                document.getElementById("checkbox9_7_1").disabled=true;
                document.getElementById("checkbox10_7_1").disabled=true;
                document.getElementById("checkbox11_7_1").disabled=true;
                document.getElementById("checkbox12_7_1").disabled=true;
                document.getElementById("checkbox1_7").checked=false;
                document.getElementById("checkbox2_7").checked=false;
                document.getElementById("checkbox3_7").checked=false;
                document.getElementById("checkbox4_7").checked=false;
                document.getElementById("checkbox5_7").checked=false;
                document.getElementById("checkbox6_7").checked=false;
                document.getElementById("checkbox7_7").checked=false;
                document.getElementById("checkbox8_7").checked=false;
                document.getElementById("checkbox9_7").checked=false;
                document.getElementById("checkbox10_7").checked=false;
                document.getElementById("checkbox11_7").checked=false;
                document.getElementById("checkbox12_7_1").checked=false;
                document.getElementById("checkbox1_7_1").checked=false;
                document.getElementById("checkbox2_7_1").checked=false;
                document.getElementById("checkbox3_7_1").checked=false;
                document.getElementById("checkbox4_7_1").checked=false;
                document.getElementById("checkbox5_7_1").checked=false;
                document.getElementById("checkbox6_7_1").checked=false;
                document.getElementById("checkbox7_7_1").checked=false;
                document.getElementById("checkbox8_7_1").checked=false;
                document.getElementById("checkbox9_7_1").checked=false;
                document.getElementById("checkbox10_7_1").checked=false;
                document.getElementById("checkbox11_7_1").checked=false;
                document.getElementById("checkbox12_7_1").checked=false;
            }
        }
