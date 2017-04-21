<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="css/form-basic2.css">
		<script src="js/ValidarSeccion2.js" ></script>
	</head>
	<body>
		<div class="main-content">
		   
		<!-- PARTE 1-->
			<form class="form-basic" method="POST" action="php/Seccion2_ins.php" onsubmit="return ValidarS1();">
			<div class="form-radio-buttons">
			<div class="form-title-row">
                <h1>Titulo</h1>
            </div>

		        </div><br><br>

				<!--PARTE 2-->
				<span><b>2.-Selecciona la modalidad en que se encuantra tu emprendimiento actualmente:</b> Debes de contestar a todas las opciones solo en la modalidad que aplique.</span><br><br>

				<table border="0" width="100%">
					<tr><div class="form-row">
						<td width="50%"><center><b>MODALIDAD 1</b>
						<br>Por el momento solo contamos con una idea del proyecto.<br>
							<label>
							<select name="modalidad11" id="modalidad11" onchange=" mod = this.value;
							  if (mod ==='No' && mod2 ==='No') {
							  	alert('Por favor rellene la modalidad 2');
                    			document.getElementById('modalidad21').disabled = false;
                        		document.getElementById('modalidad22').disabled = false;
                        		document.getElementById('modalidad23').disabled = false;
							  	}  else {
							  		document.getElementById('modalidad21').disabled = true;
                        			document.getElementById('modalidad22').disabled = true;
                        			document.getElementById('modalidad23').disabled = true;
                        			document.getElementById('modalidad21').value = '';
                        			document.getElementById('modalidad22').value = '';
                        			document.getElementById('modalidad23').value = '';

							  	}
							  	">
								<option value="">Seleccione una opción</option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select><br></label>

							Y por alguna razon tuvimos que ser dados de alta en el SAT para este proyecto.<br>

							<label>
							<select name="modalidad12" id="modalidad12" onchange="mod2 = this.value;
							if(mod2==='No' && mod ==='No') 
                    {   alert('Por favor rellene la modalidad 2');
                    	document.getElementById('modalidad21').disabled = false;
                        document.getElementById('modalidad22').disabled = false;
                        document.getElementById('modalidad23').disabled = false;

                    } else {
                    	document.getElementById('modalidad21').disabled = true;
                        document.getElementById('modalidad22').disabled = true;
                        document.getElementById('modalidad23').disabled = true;
                        document.getElementById('modalidad21').value = '';
                        document.getElementById('modalidad22').value = '';
                       	document.getElementById('modalidad23').value = '';
                    }
							">
								<option value="">Seleccione una opción</option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select></label>

							<br></center></td>
							
							<td><center><b>MODALIDAD 2</b>
							
							<br>En algun momento el proyecto ha sido puesto en marcha satisfactoriamente:<br>
							
							<select name="modalidad21" id="modalidad21" disabled>
								<option value="">Seleccione una opción</option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>

							<br>Y nos dimos de alta en el SAT<br>

							<select name="modalidad22" id="modalidad22" disabled>
								<option value="">Seleccione una opción</option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>

							<br>Actualmente el proyecto se encuentra en operacion:<br>
							
							<select name="modalidad23" id="modalidad23" disabled>
								<option value="">Seleccione una opción</option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
							</center>
						</div></td>
					</tr>
				</table><br><br>

				<span class="myclass"><i><b>*SAT: </b>Servicio de Administracion Tributaria</i></span>

				<!--PARTE 3-->
				<br><br>
				<p><b>3.-Analisis comercial del proyecto.</b> Solo puedes elegir una opci&oacute;n</p>

				<table border="0" width="100%">
					<tr>
						<td rowspan="2">Actualmente tus productos o servicios se estan comercializando, o estan impactando de alguna forma en la sociedad?</td>
						<td><center><input type="radio" value="Si" name="p3_1" id="p3_1" onclick="
						document.getElementById('t1_1').disabled =false;
						document.getElementById('t2_2').disabled =true;
						">Si</center></td>
						<td><center><input type="radio" value="No" name="p3_1" id="p3_1" onclick="
						document.getElementById('t1_1').disabled =true;
						document.getElementById('t2_2').disabled =false;
						">No</center></td>
					</tr>

					<tr>
						<td><center>¿Donde?<br><br><br><input type="text" name="t1_1" id="t1_1" disabled><br><br></center></td>
						<td><center>¿Donde piensas vender tus productos o servicios?<br><input type="text" name="t2_2" id="t2_2" width="80%" disabled><br></td>
					</tr>
				</table>
				
				<!--PARTE 4-->
				<td><p><b>4.- Indique en la siguiente tabla el tipo de figura juridica de su empresa o la que respaldara su proyecto.</b> Solo puedes elegir una opcion.</p>

				<table border="0" width="100%">
					<tr>
						<td colspan="2"><center>¿Su empresa ya cuenta con alguna forma juridica?<br>
							<select name="persona" id="persona" onchange="
							if (this.value === 'Si') {
								document.getElementById('op1').disabled = false;
								document.getElementById('op2').disabled = true;
								document.getElementById('op2').value = '';
								document.getElementById('4_2').disabled = true;
								document.getElementById('4_2').value ='';
								document.getElementById('check').disabled = true;
							} else if (this.value ==='No') {
								document.getElementById('op2').disabled = false;
								document.getElementById('op1').disabled = true;
								document.getElementById('op1').value = '';
								document.getElementById('4_1').disabled = true;
								document.getElementById('4_1').value ='';
								document.getElementById('check').disabled = false;
								
							}else if (this.value === '') {
								document.getElementById('op2').disabled = true;
								document.getElementById('op1').disabled = true;
								document.getElementById('op2').value = '';
								document.getElementById('op1').value = '';
								document.getElementById('4_1').disabled = true;
								document.getElementById('4_2').disabled = true;
								document.getElementById('4_1').value = '';
								document.getElementById('4_2').value = '';
								document.getElementById('check').disabled = true;
							}">
								<option value="">Seleccione una opción</option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select></center>
						</td>
					</tr>

					<tr>
						<td>Si tu respuesta fue positiva selecciona una de las siguientes opciones:<br>Nuestro proyecto cuenta con la siguiente personalidad juridica:</td>
						<td>Si tu respuesta fue negativa selecciona una de las siguientes opciones:<br>Nuestro proyecto no cuenta con ninguna personalidad juridica pero se conformara como:</td>
					</tr>

					<tr>
						<td rowspan="2"><center><br><select name="op1" id="op1" disabled onchange="
						if (this.value === 'Otro') {
							document.getElementById('4_1').disabled = false;
							document.getElementById('4_2').disabled = true;
						}else{
							document.getElementById('4_1').disabled = true;
						}


						">
							<option value="">Elige una de las opciones...</option>
							<option value="Sociedad de Producción Rural de Responsabilidad Limitada (S.P.R de R.L)">Sociedad de Producción Rural de Responsabilidad Limitada (S.P.R de R.L)</option>
							<option value="Sociedad de Responsabilidad Limitada Microindustrial (S. de R.L.M.I)">Sociedad de Responsabilidad Limitada Microindustrial (S. de R.L.M.I)</option>

							<option value="Sociedad Cooperativa de Responsabilidad Limitada  (S.C de R.L)">Sociedad Cooperativa de Responsabilidad Limitada  (S.C de R.L)</option>

							<option value="Sociedad Cooperativa de Responsabilidad Ilimitada  (S.C de R.I)">Sociedad Cooperativa de Responsabilidad Ilimitada  (S.C de R.I)</option>

							<option value="Sociedad anónima de capital variable (S.A de C.V)">Sociedad anónima de capital variable (S.A de C.V)</option>

							<option value="Sociedad civil (S.C)">Sociedad civil (S.C)</option>

							<option value="Asociación civil (A.C)">Asociación civil (A.C)</option>

							<option value="Persona física con actividad empresarial o de servicios">Persona física con actividad empresarial o de servicios</option>

							<option value="Otro">Otro</option>
						</select><br><br>
						Otra Especificar: <input type="text" name="4_1" id="4_1" disabled>
						</center></td>

						<td><center><br><select disabled name="op2" id="op2" onchange="
						if (this.value === 'Otro') {
							document.getElementById('4_2').disabled = false;
							document.getElementById('4_1').disabled = true;
						}else {
							document.getElementById('4_2').disabled = true;
						}

						">
							<option value="">Elige una de las opciones...</option>
							<option value="Sociedad de Producción Rural de Responsabilidad Limitada (S.P.R de R.L)">Sociedad de Producción Rural de Responsabilidad Limitada (S.P.R de R.L)</option>
							<option value="Sociedad de Responsabilidad Limitada Microindustrial (S. de R.L.M.I)">Sociedad de Responsabilidad Limitada Microindustrial (S. de R.L.M.I)</option>

							<option value="Sociedad Cooperativa de Responsabilidad Limitada  (S.C de R.L)">Sociedad Cooperativa de Responsabilidad Limitada  (S.C de R.L)</option>

							<option value="Sociedad Cooperativa de Responsabilidad Ilimitada  (S.C de R.I)">Sociedad Cooperativa de Responsabilidad Ilimitada  (S.C de R.I)</option>

							<option value="Sociedad anónima de capital variable (S.A de C.V)">Sociedad anónima de capital variable (S.A de C.V)</option>

							<option value="Sociedad civil (S.C)">Sociedad civil (S.C)</option>

							<option value="Asociación civil (A.C)">Asociación civil (A.C)</option>

							<option value="Persona física con actividad empresarial o de servicios">Persona física con actividad empresarial o de servicios</option>

							<option value="Otro">Otro</option>
						</select><br><br>
						Otra Especificar: <br><input type="text" name="4_2" id="4_2" disabled><br><br>
						</center></td>
					</tr>

					<tr><div class="form-row">
						<td><input type="checkbox" name="check" id="check" value="1" disabled onclick="
						if (document.getElementById('check').checked) {
							document.getElementById('op2').disabled = true;
							document.getElementById('4_2').disabled = true;
							document.getElementById('op2').value = '';
							document.getElementById('4_2').value = '';
							}">Desconozco el tipo de figura juridica que respaldara el proyecto</td>
					</div></tr>
				</table>

				<span class="myclass"><i><b>*Figura juridica:</b> Actividad o documento que define la forma en la que esta constituida legalemente la empresa</i></span>
				
				<div class="form-row">
                <center><button type="submit">Enviar Respuestas</button></center>
            </div>
			</form>
		</div>
	</body>
</html>