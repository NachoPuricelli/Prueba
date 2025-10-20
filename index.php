<!--Inicio de sesion-->
<?php
session_start();

if (isset($_POST['AceptarLogin'])) {
  LogTrue();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shorcut icon" href="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tesis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Estilos de iconos en header y body -->
  <style>
    .Cuerpo {
      background-color: #f8f9fa;
    }

    .navbar-nav {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-inline-start: 10%;
    }

    #EnlaceAdmin {
      width: 35px;
      height: 35px;
      display: flex;
      margin-bottom: 10px;
      margin-right: 2px;
      position: absolute;
      right: 0;
    }

    #IconoAdmin:hover {
      border-radius: 0px;
      transform: scale(1.2);
      vertical-align: middle;
      transition: transform 0.3s ease;
      filter: drop-shadow(2px 2px 2px #000);
    }

    @media screen and (max-width: 1024px) {
      #EnlaceAdmin {
        right: 10px;
        /* Para pantallas pequeñas */
        bottom: 150px;
      }
    }

    /*Menú de hamburguesa*/
    .navbar-toggler:focus {
      box-shadow: none;
    }

    .card {
      font-size: large;
    }

    .card:hover {
      border-radius: 5px;
      filter: drop-shadow(2px 2px 2px #000);
      /*Sombra eje x eje y bordes*/
    }

    /* Para el texto de las tarjetas */
    .card-text {
      text-align: left;
      line-height: 1.6;
    }

    /* Estilos para las cards con imágenes */
.card-img-responsive {
  max-width: 100%;
  height: auto;
  object-fit: cover;
}

/* Media query para pantallas pequeñas */
@media (max-width: 768px) {
  .card-img-responsive {
    max-height: 300px;
    width: 100%;
    object-fit: cover;
  }
  
  .card-body .row {
    margin: 0;
  }
  
  .card-text {
    text-align: left !important;
  }
}

    /* Media query para pantallas pequeñas */
    @media (max-width: 768px) {
      .card-text {
        text-align: left !important;
        font-size: 14px;
        line-height: 1.5;
      }

      .card-title {
        font-size: 18px;
      }

      .card-body {
        padding: 15px;
      }

      /* Footer responsive en tablets */
      #footer {
        padding: 15px 10px;
        gap: 15px !important;
      }

      #footer a {
        margin: 8px 15px;
        font-size: 15px;
      }
    }

    @media (max-width: 576px) {
      .card-text {
        font-size: 18px;
      }

      /* Footer responsive en móviles */
      #footer {
        flex-direction: column !important;
        gap: 15px !important;
        padding: 20px 10px;
      }
      
      #footer a {
        margin: 10px 0;
        justify-content: center;
        font-size: 18px;
      }

      #footer img {
        width: 22px !important;
        height: 22px !important;
      }
    }

    /*Botones del Login*/
    #btnAceptarLogin:hover,
    #btnCancelarLogin:hover {
      transform: none;
      border-radius: 5px;
      filter: drop-shadow(2px 2px 2px #000);
    }
  </style>
  
  <!--Estilo del carousel-->
  <style>
    .carousel-fade .carousel-item {
      opacity: 0;
      transition-duration: .6s;
      transition-property: opacity;
    }

    .carousel-fade .carousel-item.active {
      opacity: 1;
    }

    /* Estilos de botones */
    .btn {
      font-size: large;
    }

    .btn:hover {
      transform: scale(1.2);
      transition: transform 0.3s ease;
      border-radius: 5px;
      filter: drop-shadow(2px 2px 2px #000);
    }
  </style>
  
  <!-- Estilos dentro de footer -->
  <style>
    /* Estilos base del footer */
    .footer {
      padding: 15px 10px;
    }

    .footer a {
      text-decoration: none;
      color: #000;
      white-space: nowrap;
      display: flex;
      align-items: center;
    }

    .footer a:hover {
      text-shadow: 0px 0px 0px;
      color: #000;
      text-decoration: underline;
    }

    .footer img {
      flex-shrink: 0;
    }

    #Facebook:hover {
      border-radius: 0px;
      transform: scale(1.2);
      transition: transform 0.3s ease;
      filter: drop-shadow(2px 2px 2px #000);
    }

    #Whatsapp:hover {
      transform: scale(1.2);
      transition: transform 0.3s ease;
      border-radius: 5px;
      filter: drop-shadow(2px 2px 2px #000);
    }

    #Regresar:hover {
      transform: scale(1.2);
      transition: transform 0.3s ease;
      border-radius: 0px;
      filter: drop-shadow(2px 2px 2px #000);
    }

    /*Botones de terminos y condiciones*/
    #btnNoAcepto:hover,
    #btnAcepto:hover {
      transform: none;
      border-radius: 5px;
      filter: drop-shadow(2px 2px 2px #000);
    }

    /*Botones de politicas de privacidad*/
    #btnNoAceptar:hover,
    #btnAceptar:hover {
      transform: none;
      border-radius: 5px;
      filter: drop-shadow(2px 2px 2px #000);
    }
  </style>

</head>

<body class="Cuerpo">
  <!-- Contenedor total -->
  <div class="container py-2">
    <!--Header de Navegación-->
    <div class="card bg-light mb-4" id="inicial">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container bg-light">
          <a class="navbar-brand" href="#">
            <img src="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png" alt="" height="100px">
          </a>
          <h1 class="justify-content-start">PCRepair</h1>
          <!-- Botón de navegación Hamburguesa para pantallas pequeñas -->
          <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Menú Navegación -->
          <div class="collapse navbar-collapse ms-4 mt-4" id="mi-menu">
            <ul class="navbar-nav mt-2">
              <li class="nav-item h5">
                <a class="btn btn-primary me-1" href="#">Inicio</a>
              </li>
              <li class="nav-item h5">
                <a class="btn btn-success me-1" href="#ContenidoRep" onclick="scrollToSection(ContenidoRep)">Reparaciones</a>
              </li>
              <li class="nav-item h5">
                <a class="btn btn-warning me-1" href="#ContenidoSobre" onclick="scrollToSection(ContenidoSobre)">Sobre nosotros</a>
              </li>
              <li class="nav-item h5">
                <a class="btn btn-danger" href="#footer" onclick="scrollToSection(footer)">Contacto</a>
              </li>
            </ul>
            <a href="" data-bs-toggle="modal" data-bs-target="#modalLogin" id="EnlaceAdmin">
              <img src="img/Admin.png" id="IconoAdmin" alt="">
            </a>
          </div>
        </div>
      </nav>
    </div>

    <!--Modal Login -->
    <form action="" method="POST">
      <div class="modal fade" id="modalLogin" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-light">
              <h1 class="modal-title col-11 text-center">Login</h1>
              <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalBodyLogin" style="max-height: 300px; overflow-y: auto;">
              <label class="form-label" for="Usuario">Usuario</label>
              <input class="form-control" type="text" name="txtUsuario" placeholder="Por favor, ingrese su usuario." required>

              <label class="form-label" for="Contraseña">Contraseña</label>
              <input class="form-control" type="password" name="txtContraseña" placeholder="Por favor, ingrese su contraseña." required>
            </div>
            <div class="modal-footer justify-content-center">
              <input type="submit" class="btn btn-primary" id="btnAceptarLogin" name="AceptarLogin" value="Aceptar">
              <button class="btn btn-danger" id="btnCancelarLogin" data-bs-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!--Fin de sesion dentro de función-->
    <?php
    function LogTrue()
    {
      // Conexión a la Base de Datos   
      $conex = new mysqli('localhost', 'root', '', 'tesis');
      if ($conex->connect_errno) {
        die("Error en la conexión: " . $conex->connect_error);
      }

      $usuario = $conex->real_escape_string($_POST["txtUsuario"]);
      $contraseña = $conex->real_escape_string($_POST["txtContraseña"]);

      $query = "SELECT * FROM login WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
      $result = $conex->query($query);

      if ($result->num_rows > 0) {
        // Redirección si el pass es correcto
        $_SESSION['usuario'] = $usuario;
        header("Location: tesisAdmin.php");
        exit;
      } else {
        echo "<div id='successAlert' class='alert alert-success mt-3 text-center'>
      Por favor, ingrese un usuario y contraseña correctos.</div>";
      }
      $conex->close();
    }
    session_destroy();
    ?>

    <!-- Carousel de Imágenes -->
    <div id="carouselPrincipal" class="carousel slide carousel-fade mx-auto" style="width:70%;" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="6000">
          <img src="https://i.pinimg.com/originals/b4/1f/d1/b41fd112914efb56f1b74f15f6a97f6d.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="6000">
          <img src="img/asus.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="6000">
          <img src="https://wallpapers.com/images/hd/dell-logo-in-neon-blue-nboc1b4b3hcbvfiz.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="6000">
          <img src="img/acer.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="6000">
          <img src="https://i.pinimg.com/originals/78/5e/c4/785ec443693ccae43d60fcbe588420c3.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="6000">
          <img src="https://wallpapers.com/images/hd/green-amd-logo-mesh-4h2u5iwc66fj1n7p.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="6000">
          <img src="https://getwallpapers.com/wallpaper/full/8/d/4/1240738-intel-atom-wallpaper-3840x2160-for-windows.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="6000">
          <img src="https://getwallpapers.com/wallpaper/full/c/a/f/999323-free-download-intel-wallpaper-1920x1080.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="6000">
          <img src="https://wallpapercave.com/wp/wp3931480.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="6000">
          <img src="https://cdn.wallpapersafari.com/25/87/ojZFGH.jpg" class="d-block w-100" alt="">
        </div>
      </div>
      <!--Control de Botón anterior-->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <!--Control de Botón siguiente-->
      <button class="carousel-control-next" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--DIVISOR-->
    <hr>
    <!--Cards-->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <!--Setup-->
      <div class="col d-flex">
        <div class="card bg-light">
          <div class="card-header bg-primary">
            <h1 class="h3 card-title text-center">Instalación de</h1>
            <h1 class="h3 card-title text-center">Software</h1>
          </div>
          <div class="card-body">
            <p class="card-text text-align: justify;">
            <ul>
              <li>Instalación de Sistema Operativo (Windows - Linux - MacOs)</li>
              <li>Le brindamos el SO más adecuado para sacarle el mayor provecho a su Hardware</li>
              <li>Solicite el software que necesita para (Trabajo - Estudio - Ocio)</li>
            </ul>
            </p>
            <div class="d-flex justify-content-center">
              <form method="POST" action="tesisSetup.php">
                <input type="submit" class="btn btn-primary mt-1" value="Ingresar" name="btnIngreso">
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--Salud-->
      <div class="col d-flex">
        <div class="card bg-light w-100">
          <div class="card-header bg-success">
            <h1 class="h3 card-title text-center">Salud del</h1>
            <h1 class="h3 card-title text-center"> PC</h1>
          </div>
          <div class="card-body">
            <p class="card-text text-align: justify;">
            <ul>
              <li>Eliminamos cualquier amenaza</li>
              <li>Realizamos un diagnóstico detallado</li>
              <li>Reducimos cualquier riesgo futuro</li>
              <li>Reparamos y/o reemplazamos su hardware defectuoso</li>
            </ul>
            </p>
            <div class="d-flex justify-content-center mt-4">
              <form method="POST" action="tesisHealth.php">
                <input type="submit" class="btn btn-success mt-4" value="Ingresar" name="btnIngreso">
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--Building-->
      <div class="col d-flex">
        <div class="card bg-light">
          <div class="card-header bg-warning">
            <h1 class="h3 card-title text-center">PC </h1>
            <h1 class="h3 card-title text-center"> Building</h1>
          </div>
          <div class="card-body">
            <p class="card-text text-align: justify;">
            <ul>
              <li>Guiamos en la información del Hardware que es adecuado para usted</li>
              <li>Actualizamos su hardware existente</li>
              <li>Analizamos y lo asesoramos ante la posibilidad de actualizar su hardware existente</li>
            </ul>
            </p>
            <div class="d-flex justify-content-center mt-4">
              <form method="POST" action="tesisBuilding.php">
                <input type="submit" class="btn btn-warning mt-4" value="Ingresar" name="btnIngreso">
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--Electrónica-->
      <div class="col d-flex">
        <div class="card bg-light w-100">
          <div class="card-header bg-danger">
            <h1 class="h3 card-title text-center">Tienda</h1>
            <h1 class="h3 card-title text-center">Electrónica</h1>
          </div>
          <div class="card-body">
            <p class="card-text text-align: justify;">
            <ul>
              <li>Lo redireccionamos a nuestros proveedores de confianza</li>
              <li>Poseen todos los métodos de pago</li>
              <li>Ofrecen envío gratis dentro de Provincia</li>
              <li>Acceda y comience la adquisición de sus componentes</li>
            </ul>
            </p>
            <div class="d-flex justify-content-center">
              <form method="POST" action="https://www.venex.com.ar/configurador-de-pc.htm">
                <input type="submit" class="btn btn-danger mt-1" value="Ingresar" name="btnIngreso">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--DIVISOR-->
    <hr>
    <!-- Reparaciones -->
<div class="card bg-light">
  <div class="card-header">
    <h1 class="h3 card-title text-center" id="ContenidoRep">Reparaciones</h1>
  </div>
  <div class="card-body">
    <div class="row align-items-center">
      <div class="col-md-6 col-12 mb-3 mb-md-0">
        <img src="img\taller.jpg" class="card-img-responsive img-fluid rounded">
      </div>
      <div class="col-md-6 col-12">
        <p class="card-text px-3">
          Realizamos todo tipo de reparaciones incluyendo Hardware y Software. Analizamos el problema de su Hard
          en nuestro taller de trabajo con el equipamiento adecuado para controlar la salud de todos sus dispositivos
          electrónicos que limitan el rendimiento de su PC. También le ofrecemos el Software adecuado para que usted
          pueda exprimir al máximo su ordenador, y utilizarlo para el área para la cual está orientado su uso. Puede
          solicitar los programas que usted necesite para sus estudios, trabajo o simplemente disfrutar del ocio.
        </p>
      </div>
    </div>
  </div>
</div>

<!--DIVISOR-->
<hr>

<!-- Sobre Nosotros -->
<div class="card bg-light">
  <div class="card-header">
    <h1 class="h3 card-title text-center" id="ContenidoSobre">Sobre nosotros</h1>
  </div>
  <div class="card-body">
    <div class="row align-items-center">
      <div class="col-md-6 col-12 order-md-1 order-2">
        <p class="card-text px-3">
          Somos una empresa familiar dedicada a brindarle el mejor asesoramiento en Sistemas que usted necesite.
          Tenemos más de 10 años de experiencia en el rubro de la reparación y recientemente incorporamos la venta
          completa del Hardware que sea necesario para cubrir las necesidades de nuestros clientes, contamos con equipo
          especializado en nuestro taller y nuestro Shop virtual. Estamos al tanto de la situación
          económica del país por lo tanto podemos ofrecerles diversas formas de pago con la mejor financiación.
        </p>
      </div>
      <div class="col-md-6 col-12 order-md-2 order-1 mb-3 mb-md-0">
        <img src="img\Sobre.jpg" class="card-img-responsive img-fluid rounded">
      </div>
    </div>
  </div>
</div>
    <!--DIVISOR-->
    <hr>
    <!-- Footer Enlaces -->
    <div class="card bg-light">
      <div class="footer d-flex flex-wrap justify-content-center align-items-center bg-light mt-2 gap-3 py-3" id="footer">
        <a href="#inicial" class="ms-0 me-4 d-flex align-items-center"><img src="img/Regresar.png" style="width: 25px;height: 25px;" id="Regresar" onclick="scrollToSection(inicial)"></a>
        <a href="" class="ms-0 me-4 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#poli">Políticas de privacidad</a>
        <a href="" class="ms-0 me-4 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#termi">Términos y Condiciones</a>
        <p class="mt-3">Contáctenos</p>
        <a href="https://wa.me/3564638423" target="_blank" class="ms-0 me-4 d-flex align-items-center"><img src="img/Whatsapp.png" style="width: 25px;height: 25px;" id="Whatsapp" alt=""></a>
        <p class="mt-3">Siganos en nuestra red social</p>
        <a href="https://www.facebook.com/people/Pcs-Repair/61559353245060/" target="_blank" class="ms-0 me-4 d-flex align-items-center"><img src="img/Facebook.png" style="width: 30px;height: 30px;" id="Facebook" alt=""></a>
      </div>
    </div>
    <!-- Modal de politicas de privacidad -->
    <div class="modal fade" id="poli" data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title col-11 text-center">Políticas de privacidad</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body" id="contenidoModal" style="max-height: 300px; overflow-y: auto;">
            <p><strong>Introducción</strong></p>
            <p>En PCRepair, valoramos tu privacidad. Esta política de privacidad describe cómo recopilamos, utilizamos, compartimos y protegemos tu información personal cuando visitas nuestro sitio web
              o utilizas nuestros servicios.</p>

            <p><strong>1. Información que recopilamos</strong></p>
            <p>• Información de contacto: Nombre, dirección de correo electrónico, número de teléfono, cuando te pones en contacto con nosotros.</p>
            <p>• Información de la computadora: Tipo de equipo, sistema operativo, problemas técnicos, con el fin de proporcionarte un mejor servicio.</p>
            <p>• Información de navegación: Utilizamos cookies y tecnologías similares para recopilar información sobre cómo utilizas nuestro sitio web, como las páginas que visitas y los enlaces en los que
              haces clic.</p>

            <p><strong>2. Tus derechos</strong></p>
            <p>• Acceder a tu información: Puedes solicitar una copia de la información que tenemos sobre ti.</p>
            <p>• Corregir tu información: Si la información que tenemos sobre ti es incorrecta, puedes solicitar que la corrijamos.</p>
            <p>• Eliminar tu información: Puedes solicitar que eliminemos tu información de nuestros registros.</p>
            <p>• Oponerte al procesamiento de tu información: Puedes oponerte al procesamiento de tu información en ciertas circunstancias.</p>

            <p><strong>3. Cambios a esta política</strong></p>
            <p>Podemos actualizar esta política de privacidad ocasionalmente. Te notificaremos sobre cualquier cambio importante.</p>

            <p><strong>4. Cómo contactarnos</strong></p>
            <p>Si tienes alguna pregunta sobre esta política de privacidad, puedes contactarnos a través de [nachopuricelli87@gmail.com].</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success" disabled id="btnAceptar">Acepto</button>
            <button class="btn btn-danger" id="btnNoAceptar" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      const contenidoModal = document.getElementById('contenidoModal'); // Usar id correcto  
      const btnAceptar = document.getElementById('btnAceptar');

      contenidoModal.addEventListener('scroll', () => {
        // Verificamos si hemos llegado al final del contenedor para habilitar el botón aceptar  
        if (contenidoModal.scrollTop + contenidoModal.clientHeight >= contenidoModal.scrollHeight) {
          btnAceptar.disabled = false; // Habilitamos el botón "Acepto"  
        } else {
          btnAceptar.disabled = true; // Deshabilitamos el botón "Acepto" si no estamos al final  
        }
      });

      btnAceptar.addEventListener('click', () => {
        // Si se acepta se va a cerrar el modal
        console.log('Políticas aceptadas');
        // Otra forma de cerrar el modal  
        const modal = bootstrap.Modal.getInstance(document.getElementById('poli'));
        modal.hide();
      });


      //Funcion para desaparecer alertas
      // Oculta el mensaje de éxito después de 1 segundo
      setTimeout(function() {
        var successAlert = document.getElementById('successAlert');
        if (successAlert) {
          successAlert.style.display = 'none';
        }
      }, 2000);
    </script>


    <!--Modal Terminos y condiciones -->
    <div class="modal fade" id="termi" data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title col-11 text-center"> Términos y Condiciones</h5> <!-- Corrección aquí -->
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body" id="contenidoModalTer" style="max-height: 300px; overflow-y: auto;"> <!-- Añadido id para referencia -->

            <p><strong>Última actualización: [22/09/2024]</strong></p>

            <p>Bienvenido a PCRepair. Al acceder a nuestro sitio web y utilizar nuestros servicios, aceptas y te comprometes a cumplir con los siguientes términos y condiciones. Si no estás de acuerdo con alguno de estos términos, te pedimos que no utilices nuestro sitio y servicios.</p>

            <p><strong>1. Aceptación de los Términos</strong></p>
            <p>Al utilizar PCRepair, declaras que tienes al menos 18 años de edad o que has obtenido el consentimiento de tus padres o tutores para utilizar nuestros servicios.</p>

            <p><strong>2. Servicios</strong></p>
            <p>PCRepair ofrece servicios de reparación y mantenimiento de computadoras y dispositivos relacionados. Nos reservamos el derecho de modificar o descontinuar nuestros servicios en cualquier momento sin previo aviso.</p>

            <p><strong>3. Propiedad Intelectual</strong></p>
            <p>Todo el contenido y materiales disponibles en PCRepair, incluidos, entre otros, textos, gráficos, logos, imágenes, y software, son propiedad de PCRepair o de sus licenciatarios y están protegidos por leyes de propiedad intelectual. No está permitido reproducir, distribuir, modificar o utilizar el contenido sin nuestro consentimiento por escrito.</p>

            <p><strong>4. Uso Aceptable</strong></p>
            <p>Al utilizar nuestro sitio y servicios, te comprometes a:</p>
            <ul>
              <li>No utilizar el sitio para actividades ilegales o no autorizadas.</li>
              <li>No acceder ni intentar acceder a áreas no autorizadas del sitio.</li>
              <li>No transmitir virus u otros tipos de código malicioso.</li>
            </ul>

            <p><strong>5. Limitación de Responsabilidad</strong></p>
            <p>En la máxima medida permitida por la ley, PCRepair no será responsable por ningún daño indirecto, incidental, especial o consecuente. Esto incluye, pero no se limita a, la pérdida de beneficios, datos o uso, que surjan de o en conexión con el uso de nuestros servicios.</p>

            <p><strong>6. Indemnización</strong></p>
            <p>Te comprometes a indemnizar y mantener indemne a PCRepair y sus empleados, agentes, y representantes de cualquier reclamo, demanda, pérdida, responsabilidad, costos o gastos que surjan de tu uso del sitio o de la violación de estos términos.</p>

            <p><strong>7. Modificaciones a los Términos</strong></p>
            <p>PCRepair se reserva el derecho de modificar estos términos en cualquier momento. Los cambios entrarán en vigencia una vez que se publiquen en el sitio. Se recomienda revisar periódicamente los términos para estar al tanto de las actualizaciones.</p>

            <p><strong>8. Legislación Aplicable</strong></p>
            <p>Estos términos se rigen por las leyes de [Argentina]. Cualquier disputa que surja en relación con estos términos será resuelta en los tribunales competentes de [tu jurisdicción].</p>

            <p><strong>9. Contacto</strong></p>
            <p>Si tienes alguna pregunta sobre estos términos, por favor contáctanos en [nachopuricelli87@gmail.com].</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success" disabled id="btnAcepto">Acepto</button>
            <button class="btn btn-danger" id="btnNoAcepto" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      const contenidoModalTer = document.getElementById('contenidoModalTer'); // Usar id correcto  
      const btnAcepto = document.getElementById('btnAcepto');

      contenidoModalTer.addEventListener('scroll', () => {
        // Verificamos si hemos llegado al final del contenedor para habilitar el botón aceptar
        if (contenidoModalTer.scrollTop + contenidoModalTer.clientHeight >= contenidoModalTer.scrollHeight) {
          btnAcepto.disabled = false; // Habilitamos el botón "Acepto"  
        } else {
          btnAcepto.disabled = true; // Deshabilitamos el botón "Acepto" si no estamos al final  
        }
      });

      btnAcepto.addEventListener('click', () => {
        // Si se acepta se va a cerrar el modal  
        console.log('Términos aceptados');
        // Otra forma de cerrar el modal  
        const modal = bootstrap.Modal.getInstance(document.getElementById('termi'));
        modal.hide();
      });
    </script>
  </div>


  <script>
    function scrollToSection(id) {
      document.getElementById(id).scrollIntoView({
        behavior: 'smooth' // Desplazamiento a sección a través de esta función
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>