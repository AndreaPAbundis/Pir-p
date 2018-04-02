<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>UI Toolkit | Contacto</title>
  <link rel="icon" type="image/png" href="https://dummyimage.com/64x64/000/fff" sizes="64x64">
  <link rel="icon" type="image/png" href="https://dummyimage.com/180x180/000/fff" sizes="180x180">
  <!-- [#TODO] Dont forget to update the FAVICON IMAGES in the next route -->
  <!-- <link rel="icon" type="image/png" href="assets/images/favicon-180x180.png" sizes="128x128"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="./assets/styles/main.css" rel="stylesheet">
</head>

<body>
  <!--  Header  -->
<?php include('header.php'); ?>
  <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap">
      <h2 class="contacto">Contacto</h2>
      <div class="main-contact-content">
        <form id="contact-form"  action="#" method="POST" enctype="multipart/form-data">
            <!-- Text input -->
            <div class="input-container">
              <label for="nombre">Nombre</label>
              <input id="nombre" name="nombre" type="text">
            </div>
            <div class="input-container">
            <!-- Text input -->
              <label for="apellido">Apellido</label>
              <input id="apellido" name="apellido" type="text">
            </div>
            <div class="input-container">
            <!-- Email -->
              <label>Correo</label>
              <input type="email" name="correo">
            </div>
            <div class="input-container">
            <!--  Telephone-->
              <label>Telefono</label>
              <input type="tel" name="telefono" id="telefono">
            </div>
            <div class="input-container">
              <label>Mensaje</label>
						  <textarea cols="30" rows="5" placeholder="Escribe aqui..." name="mensaje"></textarea>
            </div>
						<button class="bg-color-success" type="submit">ENVIAR</button>
        </form>
        <div class="information-content">
            <div class="p-img-left">
                <img src="https://dummyimage.com/800x800/000/fff" alt="[#TODO]">
                  <p>Telefono:</p>
                  <p>Datos</p>
                  <p>Datos</p>
                  <p>Datos</p>
						</div>
        </div>
      </div>

    </div>
  </main>
  <?php include('footer.php'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="assets/scripts/ripple.js"></script>
	<script src="assets/scripts/header.js"></script>
  <!-- SweetAlert2 -->
  <script src="assets/scripts/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- validar formulario-->
  <script src="assets/scripts/enviarForm.js"></script>
	<script>
		    $('#contact-form').submit(function(e){
      	e.preventDefault();
      	$('input').removeClass('error');

      	$('textarea').removeClass('error');
      	$('label.error').remove();
				var tel =$("input[name='telefono']");
      	var name=$("input[name='nombre']");
        var apellido=$("input[name='apellido']");
      	var mensaje=$("textarea[name='mensaje']");
      	var email=$("input[name='correo']");
      	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      	if(name.val() === ""){
      		$(name).addClass('error');
      		$(name).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(apellido.val() === ""){
      		$(apellido).addClass('error');
      		$(apellido).after('<label class="error"> Campo obligatorio</label>');
				}
      	if(mensaje.val() === ""){
      		$(mensaje).addClass('error');
      		$(mensaje).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(!pattern.test(email.val())){
      		$(email).addClass('error');
      		$(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');
				}
      	if($('label.error').length == 0){

          console.log("se enviara un correo");
          contactoEnviarMensajeBtn_click();
          contactoEnviarDatos();   //DESCOMENTAR SOLO CUANDO SE TENGA EL CORREO DEL ADMIN DE LA PAGINA EN EL ARCHIVO send-data.php EN LA VARIABLE $admin

          //estas funciones se encuentran en el script "enviarForm.js"
          //contactoEnviarDatos();
      	}
          return false;
      });
	</script>

</body>
</html>
