<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fuente de recursos</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-basic1.css">
	<script src = "js/ValidarSeccion4.js" ></script>
</head>
<body>

    <script>

        function habilitar(value){
            if(value=="1")
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
                document.getElementById("text1_5").disabled=false;
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
                document.getElementById("text1_5").disabled=true;

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

                
            }else if (value == "0") {
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
                document.getElementById("text1_5").disabled=true;
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
            }
        }
    </script>
	<div class="main-content">
		<form class="form-basic" method="post" action="#" onsubmit="return ValidarS4();">

			<div class="form-title-row">
                <h1>FUENTE DE LOS RECURSOS INVERTIDOS EN EL NEGOCIO</h1>
            </div>

            <div class="form-row">
            		<label>
                    <span>¿su producto ha sido financiado?</span>
                    <select name="selecion1_7" id="selecion1_7" onchange="habilitar(this.value);">
                        <option value="0">selecciona una respuesta</option>
                    	<option value="1">si</option>
                    	<option value="2">no</option>
                    </select>
                    </label>
            </div>
           
            <div class="form-row">
                    <label>
            		<span>Si tu respuesta fue afirmativa selecciona las siguientes opciones que te apliquen</span>
					</label>
                    <label>
                    <span>Si tu respuesta fue negativa selecciona las siguientes opciones que te correspondan</span>
                    </label>
            </div>

            <div class="form-row">

                <label>
                <span>Mi proyecto ha sido financiado por</span>
                </label>
                <label>
                <span>Mi proyecto no ha sido financiado, pero he identificado estas opciones:</span>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Ahorros personales</span>
                    <input type="checkbox" name="checkbox1_7" id="checkbox1_7" disabled>
                </label>
                <label>
                    <span>Ahorros personales</span>
                    <input type="checkbox" name="checkbox1_7_1" id="checkbox1_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>prestamo de amigos/familiares</span>
                    <input type="checkbox" name="checkbox2_7" id="checkbox2_7" disabled>
                </label>
                <label>
                    <span>prestamo de amigos/familiares</span>
                    <input type="checkbox" name="checkbox2_7_1" id="checkbox2_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Aportacion economica de socios</span>
                    <input type="checkbox" name="checkbox3_7" id="checkbox3_7" disabled>
                </label>
                <label>
                    <span>Aportacion economica de socios</span>
                    <input type="checkbox" name="checkbox3_7_1" id="checkbox3_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Tomo recursos de otro trabajo que tengo para invertir en este proyecto</span>
                    <input type="checkbox" name="checkbox4_7" id="checkbox4_7" disabled>
                </label>
                <label>
                    <span>Tomo recursos de otro trabajo que tengo para invertir en este proyecto</span>
                    <input type="checkbox" name="checkbox4_7_1" id="checkbox4_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Patrocinadores</span>
                    <input type="checkbox" name="checkbox5_7" id="checkbox5_7" disabled>
                </label>
                <label>
                    <span>Patrocinadores</span>
                    <input type="checkbox" name="checkbox5_7_1" id="checkbox5_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Solicitud de creditos de alta disponibilidad</span>
                    <input type="checkbox" name="checkbox6_7" id="checkbox6_7" disabled>
                </label>
                <label>
                    <span>Solicitud de creditos de alta disponibilidad</span>
                    <input type="checkbox" name="checkbox6_7_1" id="checkbox6_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Instituciones publicas</span>
                    <input type="checkbox" name="checkbox7_7" id="checkbox7_7" disabled>
                </label>
                <label>
                    <span>Instituciones publicas</span>
                    <input type="checkbox" name="checkbox7_7_1" id="checkbox7_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Instituciones privadas</span>
                    <input type="checkbox" name="checkbox8_7" id="checkbox8_7" disabled>
                </label>
                <label>
                    <span>Instituciones privadas</span>
                    <input type="checkbox" name="checkbox8_7_1" id="checkbox8_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Creditos bancarios</span>
                    <input type="checkbox" name="checkbox9_7" id="checkbox9_7" disabled>
                </label>
                <label>
                    <span>Creditos bancarios</span>
                    <input type="checkbox" name="checkbox9_7_1" id="checkbox9_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Angeles inversionistas</span>
                    <input type="checkbox" name="checkbox10_7" id="checkbox10_7" disabled>
                </label>
                <label>
                    <span>Angeles inversionistas</span>
                    <input type="checkbox" name="checkbox10_7_1" id="checkbox10_7_1" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Crowdfunding</span>
                    <input type="checkbox" name="checkbox11_7" id="checkbox11_7" disabled>
                </label>
                <label>
                    <span>Crowdfunding</span>
                    <input type="checkbox" name="checkbox11_7_1" id="checkbox11_7_1" disabled>
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Otro. Especificar</span>
                    <input type="text" name="text1_5" id="text1_5" pattern="[a-Za-z ]+" placeholder="Sólo letras" disabled>
                </label>
                <label>
                    <span>Aun no lo se</span>
                    <input type="checkbox" name="checkbox12_7_1" id="checkbox12_7_1" onclick="activar()" disabled>
                </label>
            </div>

            <div class="form-rows">
                <button type="submit">Enviar</button>
            </div>
		</form>

	</div>
</body>
</html>