<!DOCTYPE html>
<html>
<head>
    <?php require 'php/ComprobarSesion.php'; ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>disponibilidad</title>
    <script src = "js/ValidarSeccion3.js"></script>
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/form-basic1.css">
    <link rel="stylesheet" href="css/stylo5.css">
    <?php require 'Barra2.php'; require 'material/indicador5.php'; ?>
    
</head>
<body>

	<div class="main-content">
		<form class="form-basic" method="POST" action="php/Seccion3_ins.php" onsubmit="return validarH();">
			<div class="form-title-row">
                <h1>DISPONIBILIDAD DE TIEMPO PARA INVERTIR EN CAPACITACION, GESTION EMPRESARIAL Y REALIZACION DE TRAMITES</h1>
            </div>

            <label><span>Horario disponible del emprendedor</span></label>
            <br><br>

            <div class="form-rows">
                <label>
                    <span>Lunes hora inicio</span>
                    <input type="text" name="time1_5" id="time1_5" value="00:00" >
                </label>
                <label>
                    <span>Lunes hora termino</span>
                    <input type="text" name="time2_5" id="time2_5" value="00:00" onchange="LunesEmp()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Martes hora inicio</span>
                    <input type="text" name="time3_5" id="time3_5" value="00:00">
                </label>
                <label>
                    <span>Martes hora termino</span>
                    <input type="text" name="time4_5" id="time4_5" value="00:00" onchange="MartesEmp()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Miercoles hora inicio</span>
                    <input type="text" name="time5_5" id="time5_5" value="00:00">
                </label>

                <label>
                    <span>Miercoles hora termino</span>
                    <input type="text" name="time6_5" id="time6_5" value="00:00" onchange="MiercolesEmp()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Jueves hora inicio</span>
                    <input type="text" name="time7_5" id="time7_5" value="00:00">
                </label>
                <label>
                    <span>Jueves hora termino</span>
                    <input type="text" name="time8_5" id="time8_5" value="00:00" onchange="JuevesEmp()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>viernes hora inicio</span>
                    <input type="text" name="time9_5" id="time9_5" value="00:00">
                </label>
                <label>
                    <span>viernes hora termino</span>
                    <input type="text" name="time10_5" id="time10_5" value="00:00" onchange="ViernesEmp()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>sabado hora inicio</span>
                    <input type="text" name="time11_5" id="time11_5" value="00:00">
                </label>
                <label>
                    <span>sabado hora termino</span>
                    <input type="text" name="time12_5" id="time12_5" value="00:00" onchange="SabadoEmp()">
                </label>
            </div>
            <div class="form-rows">
                <label><span>Total de horas del emprendedor</span></label>
                <input type="text" name="TotalEmp" id="TotalEmp" readonly value="00:00">
            </div>
            <br><br>


            	<!-- horario del equipo de trabajo-->

             <label><span>Horario disponible del resto del equipo de trabajo</span></label>
            <br><br>
            <div class="form-rows">
                <label>
                    <span>Lunes hora inicio</span>
                    <input type="text" name="time13_5" id="time13_5" value="00:00">
                </label>
                <label>
                    <span>Lunes hora termino</span>
                    <input type="text" name="time14_5" id="time14_5" value="00:00" onchange="LunesEqu()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Martes hora inicio</span>
                    <input type="text" name="time15_5" id="time15_5" value="00:00">
                </label>
                <label>
                    <span>Martes hora termino</span>
                    <input type="text" name="time16_5" id="time16_5" value="00:00" onchange="MartesEqu()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Miercoles hora inicio</span>
                    <input type="text" name="time17_5" id="time17_5" value="00:00">
                </label>
                <label>
                    <span>Miercoles hora termino</span>
                    <input type="text" name="time18_5" id="time18_5" value="00:00" onchange="MiercolesEqu()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Jueves hora inicio</span>
                    <input type="text" name="time19_5" id="time19_5" value="00:00">
                </label>
                <label>
                    <span>Jueves hora termino</span>
                    <input type="text" name="time20_5" id="time20_5" value="00:00" onchange="JuevesEqu()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>viernes hora inicio</span>
                    <input type="text" name="time21_5" id="time21_5" value="00:00">
                </label>
                <label>
                    <span>viernes hora termino</span>
                    <input type="text" name="time22_5" id="time22_5" value="00:00" onchange="ViernesEqu()">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>sabado hora inicio</span>
                    <input type="text" name="time23_5" id="time23_5" value="00:00">
                </label>
                <label>
                    <span>sabado hora termino</span>
                    <input type="text" name="time24_5" id="time24_5" value="00:00" onchange="SabadoEqu()">
                </label>
            </div>
            <div class="form-rows">
                <label><span>Total de horas del equipo emprendedor</span></label>
                <input type="text" id="TotalEqu" name="TotalEqu" readonly value="00:00">
            </div>
            <br><br>
            <label><span><h2>Grado de diferenciación del proyecto</h2></span></label><br>
            <div class="form-rows">
                <br><label for="sec6">¿Qué tanto consideras que otros pueden imitar tu proyecto?</label><br><br>
                <select name="sec6" id="sec6">
                    <option value="">Seleccione una opción</option>
                    <option value="a">a) Es muy imitable ya que para el diseño del proyecto tome referencia uno que ya existe</option>
                    <option value="b">b) El proyecto resulta facilmente imitable por un posible competidor</option>
                    <option value="c">c) El proyecto es dificilmente imitable por un posible competidor</option>
                    <option value="d">d) La invencion desarrollada es inédita(que yo tenga conocimiento no se tiene antecedentes de ningun tipo)</option>
                    <option value="e">e) Desconozco el grado de imitabilidad del proyecto</option>
                </select>
            </div>

            <div class="form-rows">
                <button type="submit">Enviar</button>
            </div>
		</form>
	
	</div>

</body>
</html>