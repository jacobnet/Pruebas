<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require 'php/ComprobarSesion.php'; ?>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cognitivo</title>
  <script src="js/ValidarSeccion1.js" ></script>
	<link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/seccion1.css">
  <link rel="stylesheet" href="css/stylo3.css">
  <?php require 'Barra2.php'; require 'material/indicador3.php';?>
    
  </head>  
  <body>
  <center>
      <div class="main-content">
      <div>
          
              <form action="php/Seccion1_ins.php" method="post" class="form_1" onsubmit=" return ValidarSec1();">
                  <strong>1.- Definici&oacute;n del equipo de trabajo que respaldar&aacute; el proyecto</strong>
              <i>(Puedes elegir mas de una opci&oacute;n)</i>
              <br><br><table style="text-align: center;" class="table_1">
              <tr>
                  <td><b>&Aacute;reas de gesti&oacute;n empresarial</b></td>
                  <td style="width: 200px;"><b>Cuento con un equipo que me respalda en el &aacute;rea de:</b></td>
                  <td><b>No cuento con un equipo de trabajo todavia pero<br> requiero colaboradores en las areas de:</b></td>
              </tr>
              <tr>
                  <td>Administraci&oacute;n empresarial</td>
                  <td><input type="radio" name="radio1_1" id="radio1_1" value="Si"></td>
                  <td><input type="radio" name="radio1_1" id="radio1_1" value="No"></td>
              </tr>
              <tr>
                  <td>Comercializaci&oacute;n</td>
                  <td><input type="radio" name="radio1_2" value="Si"></td>
                  <td><input type="radio" name="radio1_2" value="No"></td>
              </tr>
              <tr>
                  <td>Procesos de producci&oacute;n</td>
                  <td><input type="radio" name="radio1_3" value="Si"></td>
                  <td><input type="radio" name="radio1_3" value="No"></td>
              </tr>
              <tr>
                  <td>Gesti&oacute;n jur&iacute;dica y legal</td>
                  <td><input type="radio" name="radio1_4" value="Si"></td>
                  <td><input type="radio" name="radio1_4" value="No"></td>
              </tr>
              <tr>
                  <td>Imagen corporativa</td>
                  <td><input type="radio" name="radio1_5" value="Si"></td>
                  <td><input type="radio" name="radio1_5" value="No"></td>
              </tr>
              <tr>
                  <td>Diseño industrial</td>
                  <td><input type="radio" name="radio1_6" value="Si"></td>
                  <td><input type="radio" name="radio1_6" value="No"></td>
              </tr>
              <tr>
                  <td>Gesti&oacute;n financiera y fiscal</td>
                  <td><input type="radio" name="radio1_7" value="Si"></td>
                  <td><input type="radio" name="radio1_7" value="No"></td>
              </tr>
              <tr>

                  <td colspan="3" style="text-align: left"><br><br>
            <br><br>El n&uacute;mero de socios o colaboradores formales en el proyecto o empresa son 2 o m&aacute; de 2 personas
                  <input type="radio" name="radio1" id="radio1" value="a">
                  </td>
              </tr>
               <tr>
                  <td colspan="3" style="text-align: left">Soy solo yo el que está iniciando o manejando el negocio pero me gustaría integrar socios
                  <input type="radio" name="radio1" id="radio2" value="b">
                  </td>
              </tr>
               <tr>
                  <td colspan="3" style="text-align: left">Soy solo yo el que está iniciando o manejando el negocio pero no me interesa formar un 
                      equipo de trabajo, siento que puedo tener buenos resultados trabajando yo solo
                  <input type="radio" name="radio1" id="radio3" value="c">
                  </td>
              </tr>
              </table><br>
               <div class="form-row">
                   <center><button type="submit" >Enviar Datos</button></center>
            </div>
              </form>
      </div>
      </div>
  </center>
  </body>
</html>