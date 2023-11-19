<?php 
include "header.php";
include "navbar.php";
?>



<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4 text-center">
      <h2>Reserva una cita fácil</h2>

      <img src="img/pc.png" class="rounded mx-auto d-block border" width="80%" alt="..."><br>
      <p><kbd>Reserva con un solo clic</kbd></p>
      <h3>Medios de comunicacion</h3>

      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="mediosContacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/profile.php?id=61552364255322&mibextid=ZbWKwL" >Acerca de </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>

    
     <div class="col-sm-8">
      <div class="text-justify">
      <br><br><br><br><p class="alert alert-info">Has clic en el siguiente botón para iniciar tu reserva en el sistema, en cuánto sea procesada
            se te enviará un mensaje de confirmación al correo electrónico que ingreses en el formulario. 
            <br><b>Una forma mas fácil de reservar con un solo clic"</b>.
          </p>
      </div>
      <?php 
        include "modal_reserva.php";
        #include "metodos/form_insert.php";
      ?>

      <hr>
      <div class="text-justify">
          <p class="alert alert-warning">Quieres consultar el estatus de tu reserva?, no has recibido el mensaje
            de confirmación o falló el envio?.
          </p>
      </div>


    </div>
  </div>
</div><br><br><br>





      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/01e994df18.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/estilo.css">
      </head>
      <body>

      
 <!-- Google maps -->
<div class="card mb-3 ps-md-5 ms-md-5">
    <div class="row g-0">
        <div class="col-md-4 col-lg-4 col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3795.621334284227!2d-94.9118405!3d17.949807099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ea03b0b983efcf%3A0xb1fa53bee9dfedc1!2sPC%20SYSTEMS!5e0!3m2!1ses!2smx!4v1697574120654!5m2!1ses!2smx"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                class="rounded-start"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card-body">
                <h5 class="card-title">Nos encontramos en...</h5>
                <p class="card-text">
                    <i class="fa-solid fa-location-dot"></i>
                    Calle Vicente Guerrero Col. Centro #502 Cp. 96000 Acayucan Ver.</p>
                <p class="card-text">
                    <i class="fa-solid fa-envelope"></i>
                    rgsystems@gmail.com</p>
                <p class="card-text">
                    <i class="fa-solid fa-phone"></i>
                    924 178 2211</p>
            </div>
        </div>
    </div>
</div>
<!-- Termina Google maps -->



  
<!-- Pie de la página -->
<div class="container-fluid">
    <div class="row p-5 pb-2 bg-dark text-white">
        <div class="col-x5-12-md-6 col-lg-3">
            <p class="h3"></p>
        </div>
        <div class="col-x5-12-md-6 col-lg-3">
            <p class="h5">Nosotros</p>
            <div class="mb-3">
                <a class="text-white text-decoration-none" href="">Términos y condiciones</a>
            </div>
            <div class="mb-3">
                <a class="text-white text-decoration-none" href="">Política de privacidad</a>
            </div>
            <div class="mb-3">
                <a class="text-white text-decoration-none" href="">Trabaja con nosotros</a>
            </div>
          
        </div>
        <div class="col-x5-12-md-6 col-lg-3">
            <p class="h5">Plataforma</p>
            <div class="mb-3">
                <a class="text-white text-decoration-none" href="https://www.facebook.com/profile.php?id=61552364255322&mibextid=ZbWKwL">Facebook</a>
            </div>
            <div class="mb-3">
                <a class="text-white text-decoration-none" href="https://wa.me/5219241782211">WhatsApp Web</a>
            </div>
        </div>
        <div class="col-x5-12-md-6 col-lg-3">
            <p class="h5">Soporte</p>
            <div class="mb-3">
                <a class="text-white text-decoration-none" href="mailto:rgsystems@gmail.com">rgsystems@gmail.com</a>
            </div>
            <div class="mb-3">
                <a class="text-white text-decoration-none" href="https://www.facebook.com/profile.php?id=61552364255322&mibextid=ZbWKwL">Facebook</a>
            </div>
            <div class="mb-3">
                <a class="text-white text-decoration-none" href="https://wa.me/5219241782211">WhatsApp</a>
            </div>
        </div>
        <div class="col-xs-12 pt-4">
           
            <p class="text-white text-center">Todos los derechos reservados&copy; Copyright 2023- PC SYSTEMS Y COMPUTACION</p>
        </div>
    </div>
</div>

<!-- Termina pie de pagina -->


      </body>
      </html>

<?php include "footer.php";?>