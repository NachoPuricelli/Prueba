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
        /* Estilos para los headers de las cards */
        .card-header {
            padding: 15px;
            position: relative;
            z-index: 1;
        }

        .card-header h1,
        .card-header .h3 {
            margin: 0;
            padding: 10px 0;
        }

        /* Media queries para headers responsivos */
        @media (max-width: 768px) {
            .card-header {
                padding: 12px 10px;
            }

            .card-header h1,
            .card-header .h3 {
                font-size: 1.3rem;
                padding: 8px 0;
            }
        }

        @media (max-width: 576px) {

            .card-header h1,
            .card-header .h3 {
                font-size: 1.1rem;
                padding: 5px 0;
            }
        }

        /* Asegura que el navbar no tape contenido */
        .navbar {
            z-index: 1030;
        }

        /* Espaciado superior para el body si tienes navbar fixed */
        body.Cuerpo {
            padding-top: 0;
        }

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
        .Contenedorfooter {
            width: 100%;
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

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>