<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shorcut icon" href="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Building</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="Estilos.css">

</head>

<body>

  <<div class="container py-2">
    <div class="card bg-light" id="header-border2">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <div class="d-flex align-items-center">
            <a class="navbar-brand" href="index.php">
              <img src="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png" alt="" height="100px" class="header-logo">
            </a>
            <h1 class="header-title mb-0">PCRepair</h1>
          </div>
          <h2 class="header-subtitle text-primary mb-0">Especificaciones generales</h2>
        </div>
      </nav>
    </div>
    
    <hr>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <div class="col d-flex">
        <div class="card bg-light">
          <div class="card-header bg-danger">
            <h1 class="h3 card-title text-center">PC</h1>
            <h1 class="h3 card-title text-center">Doméstica</h1>
          </div>
          <div class="card-body">
            <p class="card-text">
            <ul class="fw-bold">
              <li>Procesador: Gama media, suficiente para tareas básicas.</li>
              <li>Memoria RAM: Entre 4GB y 8GB.</li>
              <li>Almacenamiento: Disco duro de 500GB o 1TB.</li>
              <li>Tarjeta gráfica: Integrada.</li>
              <li>Usos: Navegación web, trabajo de oficina, entretenimiento, educación.</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

      <div class="col d-flex">
        <div class="card bg-light">
          <div class="card-header bg-success">
            <h1 class="h3 card-title text-center">PC</h1>
            <h1 class="h3 card-title text-center">Oficina</h1>
          </div>
          <div class="card-body">
            <p class="card-text">
            <ul class="fw-bold">
              <li>Procesador: Gama media a alta.</li>
              <li>Memoria RAM: Entre 8GB y 16GB.</li>
              <li>Almacenamiento: Disco duro de alta capacidad.</li>
              <li>Tarjeta gráfica: Integrada o de gama baja.</li>
              <li>Usos: Productividad, comunicación, gestión de datos, software específico.</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

      <div class="col d-flex">
        <div class="card bg-light">
          <div class="card-header bg-warning">
            <h1 class="h3 card-title text-center">PC </h1>
            <h1 class="h3 card-title text-center"> Gaming</h1>
          </div>
          <div class="card-body">
            <p class="card-text">
            <ul class="fw-bold">
              <li>Procesador: Gama alta.</li>
              <li>Memoria RAM: 16GB o más.</li>
              <li>Almacenamiento: SSD de alta velocidad.</li>
              <li>Tarjeta gráfica: De alta gama.</li>
              <li>Usos: Juegos, diseño gráfico, edición de video, desarrollo de software, realidad virtual.</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>

    <!--DIVISOR-->
    <hr>
    <div class="mt-auto d-flex justify-content-center">
      <form method="POST" action="index.php">
        <input type="submit" class="btn btn-primary mt-0" value="Regresar" name="btnIngreso">
      </form>
    </div>
    <!-- Footer Enlaces -->
    <div class="Contenedorfooter">
      <!--DIVISOR-->
      <hr>
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



    <script>
      function scrollToSection(id) {
        document.getElementById(id).scrollIntoView({
          behavior: 'smooth' // Desplazamiento a sección a través de esta función
        });
      }
    </script>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </div>
</body>

</html>