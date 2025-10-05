<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shorcut icon" href="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Building</title>
  <link rel="stylesheet" href="Tesis.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
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

    .form-label {
      margin-bottom: 0px;
      margin-top: 4px;
    }

    .card:hover {
      border-radius: 5px;
      filter: drop-shadow(2px 2px 2px #000);
    }

    .form-label {
      margin-bottom: 0px;
      margin-top: 4px;
    }
  </style>
  <style>
    /*Footer*/
    .Contenedorfooter {
      position: absolute;
      bottom: 0px;
      width: 85%;
      margin-bottom: 8px;
      align-items: center;
    }

    .footer a {
      text-decoration: none;
      color: #000;
    }

    .footer a:hover {
      text-shadow: 0px 0px 0px;
      color: #000;
      text-decoration: underline;
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
  </style>

</head>

<body>

  <div class="container py-2">
    <!--Menú de Navegación-->
    <div class="card bg-light" id=header-border>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="Tesis.php">
          <img src="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png" class="ms-3" alt="" height="100px">
        </a>
        <h1 class="justify-content-start">PCRepair</h1>
        <div class="position-absolute top-50 start-50 translate-middle">
          <h2 class="mt-2 text-primary">Especificaciones generales</h2>
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
      <form method="POST" action="tesis.php">
        <input type="submit" class="btn btn-primary mt-0" value="Regresar" name="btnIngreso">
      </form>
    </div>
    <!-- Footer Enlaces -->
    <div class="Contenedorfooter">
      <!--DIVISOR-->
      <hr>
      <div class="card bg-light">
        <div class="footer d-flex justify-content-center bg-light mt-2" id="footer">
          <a href="#inicial" class="ms-0 me-4"><img src="img/Regresar.png" style="width: 25px;height: 25px;" id="Regresar" onclick="scrollToSection(inicial)"></a>
          <a href="" class="me-2 " data-bs-toggle="modal" data-bs-target="#poli">Políticas de privacidad</a>
          <a href="" class="me-2 " data-bs-toggle="modal" data-bs-target="#termi">Términos y Condiciones</a>
          <p class="ms-4">Contáctenos</p>
          <a href="https://wa.me/3564638423" target="_blank" class="ms-2 me-2"><img src="img/Whatsapp.png" style="width: 25px;height: 25px;" id="Whatsapp" alt=""></a>
          <p>Siganos en nuestra red social</p>
          <a href="https://www.facebook.com/people/Pcs-Repair/61559353245060/" target="_blank" class="ms-2"><img src="img/Facebook.png" style="width: 30px;height: 30px;" id="Facebook" alt=""></a>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>