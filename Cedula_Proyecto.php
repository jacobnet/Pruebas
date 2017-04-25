<!DOCTYPE html>
<html>
<head>
    <?php require 'php/ComprobarSesion.php'; ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cognitivo</title>
    <script src ="js/ValidarCedulaProyecto.js"></script>
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-basic.css">
    <link rel="stylesheet" href="css/stylo2.css">
    <?php require 'Barra2.php'; require 'material/indicador2.php'; ?>


</head>


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="POST" action="php/CedulaProyecto_ins.php" onsubmit="return ValidarCedula_Proyecto();">

            <div class="form-title-row">
                <h1>Referencias Generales</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Nombre del proyecto</span>
                    <input type="text" name="Nombre" id="Nombre" pattern="[A-Za-z ]+" placeholder="Sólo letras">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>¿El proyecto está establecido en un domicilio específico?</span>
                    <select name="Establecido" id="Establecido" onchange="if(this.value=='Si') 
                    {   document.getElementById('Calle').disabled = false;
                        document.getElementById('Colonia').disabled = false;
                        document.getElementById('Num').disabled = false;
                        document.getElementById('Municipio').disabled = false;
                        document.getElementById('Region').disabled = false;
                        document.getElementById('Estado').disabled = false;
                        document.getElementById('CodigoPostal').disabled = false;
                    } else {
                        document.getElementById('Calle').disabled = true;
                        document.getElementById('Colonia').disabled = true;
                        document.getElementById('Num').disabled = true;
                        document.getElementById('Municipio').disabled = true;
                        document.getElementById('Region').disabled = true;
                        document.getElementById('Estado').disabled = true;
                        document.getElementById('CodigoPostal').disabled = true;
                        document.getElementById('Calle').value = '';
                        document.getElementById('Colonia').value = '';
                        document.getElementById('Num').value = '';
                        document.getElementById('Municipio').value = '';
                        document.getElementById('Region').value = '';
                        document.getElementById('Estado').value = '';
                        document.getElementById('CodigoPostal').value = '';
                    } ">
                        <option value="" >Seleccione una opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        <option value="Semifijo" >Semifijo</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
            	<label>
            		<span>Calle</span>
            		 <input type="text" name="Calle" id="Calle" placeholder="Sólo letras" disabled>
            	</label>
            </div>

            <div class="form-row">
                <label>
                    <span>Colonia</span>
                     <input type="text" name="Colonia" id="Colonia" placeholder="Sólo letras" disabled>
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Num Int/Ext</span>
                     <input type="text" name="Num" id="Num" placeholder="Ejem: 002-123" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Municipio</span>
                     <input type="text" name="Municipio" id="Municipio" placeholder="Sólo letras" disabled>
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Región</span>
                     <input type="text" name="Region" id="Region"  placeholder="Sólo letras" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Estado</span>
                     <input type="text" name="Estado" id="Estado" placeholder="Sólo letras" disabled>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Código Postal</span>
                     <input type="text" name="CodigoPostal" id="CodigoPostal" placeholder="Sólo Números" disabled>
                </label>
            </div>

            <div class="form-row">
                <button type="submit">Enviar Datos</button>
            </div>

        </form>

    </div>

</body>

</html>
