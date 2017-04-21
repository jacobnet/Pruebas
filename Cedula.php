<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cognitivo</title>
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-basic.css">
    <script src = "js/ValidarCedula.js" ></script>
    <?php require 'Barra2.php';?>
</head>


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="php/Cedula_ins.php" onsubmit="return ValidarCedula();">

            <div class="form-title-row">
                <h1>CEDULA DE REGISTRO</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Nombre Completo</span>
                    <input type="text" name="Nombre" id="Nombre" pattern="[a-Za-z ]+" placeholder="Sólo letras">
                </label>
            </div>
            <div class="form-row">
            	<label>
            		<span>Fecha de Nacimiento</span>
            		 <input type="text" name="Fecha" id="Fecha" placeholder="ejem: 01/03/1990">
            	</label>
            </div>

            <div class="form-row">
                <label>
                    <span>Lugar de nacimiento</span>
                     <input type="text" name="Lugar" id="Lugar" placeholder="Sólo letras">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Domicilio particular</span>
                     <input type="text" name="Domicilio" id="Domicilio" placeholder="Sólo letras">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Estado Civil</span>
                    <select name="Estado" id="Estado">
                        <option value="">Selecione una opción</option>
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                        <option value="Union Libre">Unión Libre</option>
                        <option value="Separado(a)">Separado(a)</option>
                    </select>
                </label>
            </div>



                        <div class="form-row">
                <label>
                    <span>Sexo</span>
                    <select name="Sexo" id="Sexo">
                        <option value="">Selecione una opción</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </label>
            </div>








            <div class="form-row">
                <label>
                    <span>Escolaridad</span>
                    <select name="Escolaridad" id="Escolaridad">
                        <option value="">Seleccione una opción</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Bachillerato/Preparatoria">Bachillerato/Preparatoria</option>
                        <option value="Carrera Técnica">Carrera Técnica</option>
                        <option value="Carrera Trunca">Carrera Trunca</option>
                        <option value="Licenciatura">Licenciatura</option>
                        <option value="Maestría">Maestría</option>
                        <option value="Doctorado">Doctorado</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Ocupación</span>
                    <select name="Ocupacion" id="Ocupacion" onchange="if(this.value=='Otro') {document.getElementById('Otro_es').disabled = false} else {document.getElementById('Otro_es').disabled = true} ">
                        <option value="">Seleccione una opción</option>
                        <option value="Empleado de Gobierno">Empleado de Gobierno</option>
                        <option value="Empleado de Institución  Privada">Empleado de Institución  Privada</option>
                        <option value="Autoempleado">Autoempleado</option>
                        <option value="Campesino">Campesino</option>
                        <option value="Técnico">Técnico</option>
                        <option value="Ama de Casa">Ama de Casa</option>
                        <option value="Estudiante">Estudiante</option>
                        <option value="Productor">Productor</option>
                        <option value="Comerciante">Comerciante</option>
                        <option value="Empresario">Empresario</option>
                        <option value="Ganadero">Ganadero</option>
                        <option value="Desempleado">Desempleado</option>
                        <option value="Otro">Otro(Especificar)</option>
                    </select>
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Otro</span>
                     <input type="text" name="Otro_es" id="Otro_es" pattern="[A-Za-z ]+" placeholder="Sólo letras" disabled>
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Telefono Local</span>
                     <input type="text" name="Local" id="Local" placeholder="Sólo Números">
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Telefono Celular</span>
                     <input type="text" name="Celular" id="Celular" placeholder="Sólo Números">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Correo de Referencia</span>
                     <input type="email" name="Email" id="Email" placeholder="Correo">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>¿Cuenta con RFC como empresa</span>
                    <select name="sRFC" id="sRFC" onchange="if(this.value=='Si y esta activo') 
                    {   document.getElementById('rfc').disabled = false;
                        document.getElementById('Personalidad').disabled = false;
                        document.getElementById('Razon').disabled = false;
                    } else {
                            document.getElementById('rfc').disabled = true;
                            document.getElementById('Personalidad').disabled = true;
                            document.getElementById('Razon').disabled = true;
                            document.getElementById('rfc').value = '';
                            document.getElementById('Personalidad').value = '';
                            document.getElementById('Razon').value = '';
                    } ">
                        <option value="">Selecione una opción</option>
                        <option value="Si y esta activo">Si y está activo</option>
                        <option value="Si pero esta suspendido">Si pero esta suspendido</option>
                        <option value="No">No</option>
                    </select>
                </label>
            </div>



            <div class="form-row">
                <label>
                    <span>RFC con homoclave</span>
                     <input class="Orfc" type="text" name="rfc" id="rfc" placeholder="rfc" pattern="[A-Za-z0-9]{10}" disabled>
                </label>
            </div>



            <div class="form-row">
                <label>
                    <span>Personalidad Jurídica</span>
                    <select name="Personalidad" id="Personalidad" disabled>
                        <option value="">Seleccione una opción</option>
                        <option value="Persona fisica con actividad empresarial">Persona física con actividad empresarial</option>
                        <option value="Persona moral">Persona moral</option>
                        <option value="Regimen de Incorporacion Fiscal(RIF)">Regimen de Incorporacion Fiscal(RIF)</option>
                    </select>
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Razón Social</span>
                     <input type="text" name="Razon" id="Razon" placeholder="Razon  " pattern="[A-Za-z0-9 ]+{10}" disabled>
                </label>
            </div>



            <div class="form-row">
                <label>
                    <span>Sector y tipo de emprendimiento</span>
                    <select name="Sector" id="Sector" onchange="if(this.value=='Otro') {document.getElementById('Otro').disabled = false} else {document.getElementById('Otro').disabled = true} ">
                        <option value="">Seleccione una opción</option>
                        <option value="Productores primarios">Productores primarios</option>
                        <option value="Industria">Industria</option>
                        <option value="Emprendimiento Tecnologico">Emprendimiento Tecnologico</option>
                        <option value="Comercio y servicios">Comercio y servicios</option>
                        <option value="Emprendimiento Social">Emprendimiento Social</option>
                        <option value="Empresas de Economia social y Solidaria">Empresas de Economia social y Solidaria</option>
                        <option value="Productores">Productores</option>
                        <option value="Otro">Otro(Especificar)</option>
                    </select>
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Otro</span>
                     <input type="text" name="Otro" id="Otro" placeholder="Sólo letras" pattern="[A-Za-z ]+" disabled>
                </label>
            </div>





            <div class="form-row">
                <button type="submit">Enviar Datos</button>
            </div>

        </form>

    </div>


</html>
