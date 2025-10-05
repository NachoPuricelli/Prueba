<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shorcut icon" href="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health</title>
    <link rel="stylesheet" href="Tesis.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        /* Estilos de botones y cards */
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
        <div class="card bg-light" id=header-border>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container d-flex justify-content-start">
                    <a class="navbar-brand" href="Tesis.php">
                        <img src="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png" alt="" height="100px">
                    </a>
                    <h1>PCRepair</h1>
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <h2 class="mt-2 text-primary">Solicitudes de reparación</h2>
                    </div>
                </div>
            </nav>
        </div>

        <form action="" method="POST" id="consultaH" onsubmit="return validateForm(event)">
            <div>
                <label class="form-label" for="nombreH">Nombre completo</label>
                <input class="form-control" name="nombreH" placeholder="Por favor, ingrese su nombre completo." type="text" id="nombreH" required minlength="2">
            </div>

            <div>
                <label class="form-label" for="emailH">Email</label>
                <input class="form-control" name="emailH" placeholder="Por favor, ingrese su dirección de correo electrónico." type="email" id="emailH" required>
            </div>

            <div>
                <label class="form-label" for="descripcionH">Descripción</label>
                <textarea class="form-control" name="descripcionH" placeholder="Por favor, ingrese su consulta." id="descripcionH" cols="20" rows="5" required minlength="10"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-primary mt-2" style="width:50%" name="enviarConsultaH" value="Enviar consulta">
            </div>
        </form>

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

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validación del lado del servidor
            $nombreH = trim($_POST['nombreH'] ?? '');
            $emailH = trim($_POST['emailH'] ?? '');
            $descripcionH = trim($_POST['descripcionH'] ?? '');

            // Conexión a la Base de Datos
            $conex = new mysqli('localhost', 'root', '', 'tesis');
            if ($conex->connect_errno) {
                die("Error en la conexión: " . $conex->connect_error);
            }

            if (!empty($nombreH) && !empty($emailH) && !empty($descripcionH)) {
                // Conexión a la Base de Datos
                $conex = new mysqli('localhost', 'root', '', 'tesis');
                if ($conex->connect_errno) {
                    die("Error en la conexión: " . $conex->connect_error);
                }

            // Sanitización de datos
            $nombreH = $conex->real_escape_string($nombreH);
            $emailH = $conex->real_escape_string($emailH);
            $descripcionH = $conex->real_escape_string($descripcionH);

            // Consulta de inserción
            $insertar = "INSERT INTO health (nombreH, emailH, descripcionH) 
                        VALUES ('$nombreH', '$emailH', '$descripcionH')";

            if ($conex->query($insertar) == TRUE) {
                echo "<div id='successAlert' class='alert alert-success mt-3'>Solicitud enviada correctamente.</div>";
                // Limpiar el formulario después de un envío exitoso

                echo "<script>document.getElementById('consultaH').reset();</script>";
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
    const nombreH = document.getElementById('nombreH').value.trim();
    const emailH = document.getElementById('emailH').value.trim();
    const descripcionH = document.getElementById('descripcionH').value.trim();

    // Validar que ningún campo esté vacío
    if (!nombreH || !emailH || !descripcionH) {
        alert('Recuerde que todos los campos son obligatorios.');
        return false;
    }

    // Validar formato de email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailH)) {
        alert('Por favor, ingrese un email válido.');
        return false;
    }

    // Validar longitud mínima del nombre
    if (nombreH.length < 2) {
        alert('El nombre debe tener al menos 2 caracteres.');
        return false;
    }

    // Validar longitud mínima de la descripción
    if (descripcionH.length < 10) {
        alert('La descripción debe tener al menos 10 caracteres.');
        return false;
    }

    // Mostrar los datos en un mensaje de confirmación
    const mensaje = `Nombre: ${nombreH}
Email: ${emailH}
Descripción: ${descripcionH}

¿Está seguro de que desea enviar esta información?`;

    if (confirm(mensaje)) {
        const form = event.target;
        form.submit();
        form.reset();
        return true;
    }
    return false;
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