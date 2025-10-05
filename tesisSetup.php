<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shorcut icon" href="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup</title>
    <link rel="stylesheet" href="Tesis.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Estilos de botones */
        .btn {
            font-size: large;
        }

        .btn:hover {
            border-radius: 5px;
            filter: drop-shadow(2px 2px 2px #000);
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
  .Contenedorfooter{
    position: absolute; bottom: 0px;
    width: 85%;
    margin-bottom: 8px;
    align-items: center;
  }

  .footer a{
      text-decoration: none;
      color: #000;
    }

    .footer a:hover{
      text-shadow: 0px 0px 0px;
      color:#000;
      text-decoration: underline;
     }

     #Facebook:hover{
      border-radius: 0px;
      transform: scale(1.2);
      transition: transform 0.3s ease;
      filter: drop-shadow(2px 2px 2px #000);
     }
     #Whatsapp:hover{
      transform: scale(1.2);
      transition: transform 0.3s ease;
      border-radius: 5px;
      filter: drop-shadow(2px 2px 2px #000);
     }
     #Regresar:hover{
      transform: scale(1.2);
      transition: transform 0.3s ease;
      border-radius: 0px;
      filter: drop-shadow(2px 2px 2px #000);
     }
    </style>

</head>

<body>
    <div class="container py-2">
        <div class="card bg-light" id=header-border2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container d-flex justify-content-start">
                    <a class="navbar-brand" href="Tesis.php">
                        <img src="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png" alt="" height="100px">
                    </a>
                    <h1>PCRepair</h1>
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <h2 class="mt-2 text-primary">Solicitudes de Software</h2>
                    </div>
                </div>
            </nav>
        </div>

        <form action="" method="POST" id="consultaForm" onsubmit="return validateForm(event)">
            <div>
                <label class="form-label" for="nombreS">Nombre completo</label>
                <input class="form-control" name="nombreS" placeholder="Por favor, ingrese su nombre completo." type="text" id="nombreS" required minlength="2">
            </div>

            <div>
                <label class="form-label" for="emailS">Email</label>
                <input class="form-control mb-2" name="emailS" placeholder="Por favor, ingrese su dirección de correo electrónico." type="email" id="emailS" required>
            </div>
            <div>
                Solicitud de Software base
                <select class="form-control mb-2" name="soDeseado" id="soDeseado" required>
                    <option value="">Por favor, seleccione su SO deseado.</option>
                    <option value="Microsoft Windows 10 Pro">Microsoft Windows 10 Pro</option>
                    <option value="Microsoft Windows 11 Pro">Microsoft Windows 11 Pro</option>
                    <option value="GNU/Linux">GNU/Linux</option>
                    <option value="MacOs">MacOs</option>
                </select>
            </div>
            <div>
                <label for="softSolicitados">Solicitud de programas</label>
                <textarea class="form-control" name="softSolicitados" placeholder="Por favor, complete los campos con el o los programas que necesita para su PC." cols="20" rows="5" required minlength="5"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-primary mt-2" style="width:50%" name="enviarConsulta" value="Cargar datos">
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validación del lado del servidor
            $nombreS = trim($_POST['nombreS'] ?? '');
            $emailS = trim($_POST['emailS'] ?? '');
            $soDeseado = trim($_POST['soDeseado'] ?? '');
            $softSolicitados = trim($_POST['softSolicitados'] ?? '');

            // Conexión a la Base de Datos
            $conex = new mysqli('localhost', 'root', '', 'tesis');
            if ($conex->connect_errno) {
                die("Error en la conexión: " . $conex->connect_error);
            }

            if (!empty($nombreS) && !empty($emailS) && !empty($soDeseado) && !empty($softSolicitados)) {
                // Conexión a la Base de Datos
                $conex = new mysqli('localhost', 'root', '', 'tesis');
                if ($conex->connect_errno) {
                    die("Error en la conexión: " . $conex->connect_error);
                }

            // Sanitización de datos
            $nombreS = $conex->real_escape_string($nombreS);
            $emailS = $conex->real_escape_string($emailS);
            $soDeseado = $conex->real_escape_string($soDeseado);
            $softSolicitados = $conex->real_escape_string($softSolicitados);

            // Consulta de inserción
            $insertar = "INSERT INTO setup (nombreS, emailS, soDeseado, softSolicitados) 
                        VALUES ('$nombreS', '$emailS', '$soDeseado', '$softSolicitados')";

    if ($conex->query($insertar) == TRUE) {
        echo "<div id='successAlert' class='alert alert-success mt-3'>Datos guardados correctamente.</div>";
        // Limpiar el formulario después de un envío exitoso
        echo "<script>document.getElementById('consultaForm').reset();</script>";
    } else {
        echo "<div id='errorAlert' class='alert alert-danger mt-3'>Error: " . $conex->error . "</div>";
    }

            $conex->close();
        }
    }
        ?>
        
        
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script>

            //Funcion para desaparecer alertas
             // Oculta el mensaje de éxito después de 1 segundo
                setTimeout(function() {
                var successAlert = document.getElementById('successAlert');
                if (successAlert) {
                successAlert.style.display = 'none';
                }
            }, 1000);

            // Oculta el mensaje de error después de 1 segundo
            setTimeout(function() {
                var errorAlert = document.getElementById('errorAlert');
                if (errorAlert) {
                errorAlert.style.display = 'none';
                }
            }, 1000);


            function validateForm(event) {
                event.preventDefault();

                // Obtener y limpiar los datos de entrada
                const nombreS = document.getElementById('nombreS').value.trim();
                const emailS = document.getElementById('emailS').value.trim();
                const soDeseado = document.getElementById('soDeseado').value.trim();
                const softSolicitados = document.getElementsByName('softSolicitados')[0].value.trim();

                // Validar que ningún campo esté vacío
                if (!nombreS || !emailS || !soDeseado || !softSolicitados) {
                    alert('Recuerde que todos los campos son obligatorios.');
                    return false;
                }

                // Validar longitud mínima del nombre
                if (nombreS.length < 2) {
                    alert('El nombre debe tener al menos 2 caracteres.');
                    return false;
                }

                // Validar longitud mínima de los programas solicitados
                if (softSolicitados.length < 5) {
                    alert('La lista de programas debe tener al menos 5 caracteres.');
                    return false;
                }

                // Mostrar los datos en un mensaje de confirmación
                const mensaje = `Nombre: ${nombreS}
            Email: ${emailS}
            Sistema Operativo deseado: ${soDeseado}
            Programas solicitados: ${softSolicitados}

            ¿Está seguro de que desea enviar esta información?`;

                if (confirm(mensaje)) {
                    event.target.submit();
                }
                
            }

            // Prevenir el envío del formulario al recargar la página
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }

            function recargarPagina() {
                window.location.reload();
            }


        </script>

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
</body>

</html>