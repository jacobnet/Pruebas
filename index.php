<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Inicio/Registro</title>
      <link rel="stylesheet" href="css/index.css">
      <script src = "js/ValidarIndex.js"></script>
      <link rel="stylesheet" type="text/css" href="css/CSS.css">
      <?php require 'Barra.php';?>
</head>
<body>
  <div class="logmod">
  <div class="logmod__wrapper">
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Inicio</a></li>
        <li data-tabtar="lgm-1"><a href="#">Registro</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Ingresa tu correo y contraseña <strong>para crear una cuenta</strong></span>
                <label class="logmod__heading-subtitle2" id="texto">
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="php/Registrar.php" class="simform" onsubmit="return ValidarRegistro();" method="POST">
            <div class="sminputs">
              <div class="input full">

                <label class="string optional" for="Correo">Correo*</label>
                <input class="string optional" name="Correo" id="Correo" placeholder="Correo" type="email" required/>
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="Contrasena">Contraseña *</label>
                <input class="string optional" name="Contrasena" id="Contrasena" placeholder="Contraseña" type="password" pattern="[A-Za-z0-9!?-]{8,12}" required />
              </div>
              <div class="input string optional">
                <label class="string optional" for="Contrasena2">Repite tu contraseña *</label>
                <input class="string optional" id="Contrasena2" placeholder="Repite tu contraseña" type="password" pattern="[A-Za-z0-9!?-]{8,12}" required />
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="submit" value="Crear Cuenta" />
              <strong> Tipo de Proyecto</strong></label><br>
                <label class="logmod__heading-subtitle" for="Interno">Interno</label>
                <input type="radio" name="Tipo" id="Interno" value="Interno">
                <label class="logmod__heading-subtitle" for="Externo">Externo</label>
                <input type="radio" name="Tipo" id="Externo" value="Externo">
            </div>
            <div class="simform__actions">
              <span class="simform__actions-sidetext">Los campos solo aceptan los caracteres <a class="special" target="_blank">Letras,Numeros y signos(!,?,-) </a></span>
            </div>
          </form>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Ingresa tu Correo y Contraseña <strong> para acceder</strong></span>
        </div> 
        <div class="logmod__form">
        <!-- Aqui empieza el form para iniciar sesion -->
          <form accept-charset="utf-8" action="php/Iniciar2.php" class="simform" onsubmit="return ValidarInicio();" method="POST">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="u-email">Correo*</label>
                <input class="string optional" name="u-email" id="u-email" placeholder="Correo" type="email" required/>
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="u-pass">Contraseña *</label>
                <input class="string optional" name="u-pass" id="u-pass" placeholder="Contrasena" type="password" required pattern="[A-Za-z0-9!?-]{8,12}"/>
                						<span class="hide-password">Mostrar</span>
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="submit" value="Enviar" />
              <span class="simform__actions-sidetext"><a class="special">Olvidaste tu contraseña?<br>Ponte en contacto con tu asesor</a></span>
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
