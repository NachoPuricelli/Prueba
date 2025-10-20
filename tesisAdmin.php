<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: Tesis.php");
    exit;
}

$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shorcut icon" href="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    
/* Estilos de botones */
.btn{
      font-size: large;
      margin-inline-start: 20px;
    }
.btn:hover{
      border-radius: 5px;
      filter: drop-shadow(2px 2px 2px #000);
    }

  .form-label{
    margin-bottom: 0px;
    margin-top: 4px;
  }
/*Tabla*/
  table {  
    width: 100%;  
    border-collapse: collapse;
}  

th, td {  
    border: 1px solid #ccc;  
    padding: 10px;  
    text-align: left; 
}  

th {  
    border-radius: 15px; 
    background-color: #f2f2f2; 
}  

tr:hover {  
    background-color: #f1f1f1; 
}

  select {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  /*Footer*/
  .Contenedorfooter{
    position: sticky;
    bottom: 0;
    width: 100%;
    margin-bottom: 4px;
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
        <!--Menú de Navegación-->
        <div class="card bg-light" id="header-border2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid position-relative">
                <a class="navbar-brand" href="Tesis.php">
                    <img src="https://cdn.icon-icons.com/icons2/656/PNG/512/settings_online_web_pc_mac_monitor_icon-icons.com_59975.png" alt="" height="100px">
                </a>
                <h1 class="me-auto">PCRepair</h1>
                <div class="position-absolute top-50 start-50 translate-middle-x text-center w-100">
                    <h2 class="mt-2 text-primary" id="AdminTitulo">Administración de Solicitudes</h2>
                </div>
            </div>
        </nav>
    </div>
        <!--Administrador consultas-->
        <hr>
        <div class="card bg-light">
            <div class="card-body">
        <p class="card-text">
            <select class="InforMostrada" id="InforMostrada">
                <option>Elija una opción de contenido</option>
                <option value="opcion1">Solicitudes de Software</option>
                <option value="opcion2">Solicitudes de Desinfección</option>
            </select>
        </p>
        <div id="contenido">
            </div>
    </div>

    <script>
    // Función para cargar datos en el modal setup
    function cargarDatosModal(id, nombre, email, so, soft) {
        document.getElementById('idSetup').value = id;
        document.getElementById('nombreS').value = nombre;
        document.getElementById('emailS').value = email;
        document.getElementById('soDeseado').value = so;
        document.getElementById('softSolicitados').value = soft;
    }

    // Función para cargar datos en el modal health
    function cargarDatosModalHealth(id, nombre, email, descripcion) {
        document.getElementById('idHealth').value = id;
        document.getElementById('nombreH').value = nombre;
        document.getElementById('emailH').value = email;
        document.getElementById('descripcionH').value = descripcion;
    }

    function actualizarContenido() {
        const selectElement = document.getElementById('InforMostrada');
        const contenidoDiv = document.getElementById('contenido');
        const valorSeleccionado = selectElement.value;
        
        
        if (valorSeleccionado == 'opcion1') {
            contenidoDiv.innerHTML = `<?php
                $conex = new mysqli('localhost', 'root', '', 'tesis');
                $consulta = "select * from setup";
                $resultado = mysqli_query($conex, $consulta);

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {  
                    if ($_POST['action'] == 'AceptarCambios') {
                        $idSetup = $_POST['idSetup'];  
                        $nombreS = $_POST['nombreS'];  
                        $emailS = $_POST['emailS'];  
                        $soDeseado = $_POST['soDeseado'];
                        $softSolicitados = $_POST['softSolicitados'];  

                        $actualizar = "UPDATE setup SET nombreS = '$nombreS', emailS = '$emailS', soDeseado= '$soDeseado', softSolicitados = '$softSolicitados' WHERE idSetup = '$idSetup'";    
                        mysqli_query($conex, $actualizar);
                        $resultado = mysqli_query($conex, $consulta);  
                        
                        
                    } elseif ($_POST['action'] == 'delete') {  
                        $idSetup = $_POST['idSetup'];  
                        $eliminar = "DELETE FROM setup WHERE idSetup = '$idSetup'";  
                        mysqli_query($conex, $eliminar);
                        $resultado = mysqli_query($conex, $consulta);
                        
                    }
                } 
                
                echo "<table id='table'>";
                echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Software Operativo</th><th>Software Deseado</th><th>Edición</th><th>Eliminación</th></tr>";

                while ($x = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $x["idSetup"] . "</td>";
                    echo "<td>" . $x["nombreS"] . "</td>";
                    echo "<td>" . $x["emailS"] . "</td>";
                    echo "<td>" . $x["soDeseado"] . "</td>";
                    echo "<td>" . $x["softSolicitados"] . "</td>";
                    
                    echo "<td>
                        <button type='button' class='btn btn-primary ms-4' data-bs-toggle='modal' 
                            data-bs-target='#modalActualiza' 
                            onclick='cargarDatosModal(\"" . 
                            htmlspecialchars($x["idSetup"]) . "\", \"" . 
                            htmlspecialchars($x["nombreS"]) . "\", \"" . 
                            htmlspecialchars($x["emailS"]) . "\", \"" . 
                            htmlspecialchars($x["soDeseado"]) . "\", \"" . 
                            htmlspecialchars($x["softSolicitados"]) . "\")'>
                            Modificar
                        </button>
                    </td>";

                    echo "<td>
                        <form method='POST' action='' style='display:inline;'>
                            <input type='hidden' name='idSetup' value='" . $x["idSetup"] . "'>  
                            <input type='hidden' name='action' value='delete'>  
                            <input type='submit' class='btn btn-danger ms-4' value='Eliminar' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\");'>  
                        </form>
                    </td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_close($conex);
            ?>`;
            

        } else if (valorSeleccionado == 'opcion2') {
            contenidoDiv.innerHTML = `<?php
                $conex = new mysqli('localhost', 'root', '', 'tesis');
                $consulta = "select * from health";
                $resultado = mysqli_query($conex, $consulta);
                
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {  
                    if ($_POST['action'] == 'cambia') {
                        $idHealth = $_POST['idHealth'];  
                        $nombreH = $_POST['nombreH'];  
                        $emailH = $_POST['emailH'];  
                        $descripcionH = $_POST['descripcionH'];
                        
                        $actualizar = "UPDATE health SET nombreH = '$nombreH', emailH = '$emailH', descripcionH = '$descripcionH' WHERE idHealth = '$idHealth'";    
                        mysqli_query($conex, $actualizar);
                        $resultado = mysqli_query($conex, $consulta);

                    } elseif ($_POST['action'] == 'kill') {  
                        $idHealth = $_POST['idHealth'];  
                        $eliminar = "DELETE FROM health WHERE idHealth = '$idHealth'";
                        mysqli_query($conex, $eliminar);
                        $resultado = mysqli_query($conex, $consulta);
                        
                    }  
                } 
                
                echo "<table id='table'>";
                echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Descripción</th><th>Edición</th><th>Eliminación</th></tr>";
                while ($x = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $x["idHealth"] . "</td>";
                    echo "<td>" . $x["nombreH"] . "</td>";
                    echo "<td>" . $x["emailH"] . "</td>";
                    echo "<td>" . $x["descripcionH"] . "</td>";
                    echo "<td>
                        <button type='button' class='btn btn-primary ms-4' data-bs-toggle='modal' 
                            data-bs-target='#modalActualizaHealth' 
                            onclick='cargarDatosModalHealth(\"" . 
                            htmlspecialchars($x["idHealth"]) . "\", \"" . 
                            htmlspecialchars($x["nombreH"]) . "\", \"" . 
                            htmlspecialchars($x["emailH"]) . "\", \"" . 
                            htmlspecialchars($x["descripcionH"]) . "\")'>
                            Modificar
                        </button>
                    </td>";
                    echo "<td>
                        <form method='POST' action='' style='display:inline;'>
                            <input type='hidden' name='idHealth' value='" . $x["idHealth"] . "'>  
                            <input type='hidden' name='action' value='kill'>  
                            <input type='submit' class='btn btn-danger ms-4' value='Eliminar' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\");'>  
                        </form>
                    </td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_close($conex);
            ?>`;
        }

    selectElement.value = valorSeleccionado;
}

// Se actualiza nuestro evento listener cuando cambia el valor del select
const selectElement = document.getElementById('InforMostrada');
selectElement.addEventListener('change', () => {
    actualizarContenido();
});

    

    </script>

    <!-- Modal de Actualización Setup -->
<div class="modal fade" id="modalActualiza" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h3 class="modal-title text-center">Actualización de Datos</h3>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="action" value="AceptarCambios">
            
                    <div>
                        <label class="form-label">ID:</label>
                        <input type="text" class="form-control" id="idSetup" name="idSetup" readonly>
                    </div>
                    
                    <div>
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombreS" name="nombreS" required>
                    </div>
                    
                    <div>
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" id="emailS" name="emailS" required>
                    </div>
                    
                    <div>
                        <label class="form-label">Sistema Operativo Deseado:</label>
                        <select class="form-control" id="soDeseado" name="soDeseado" required>
                            <option value="">Seleccione SO deseado</option>
                            <option value="Microsoft Windows 10 Pro">Microsoft Windows 10 Pro</option>
                            <option value="Microsoft Windows 11 Pro">Microsoft Windows 11 Pro</option>
                            <option value="GNU/Linux">GNU/Linux</option>
                            <option value="MacOs">MacOs</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="form-label">Software Solicitado:</label>
                        <textarea class="form-control" id="softSolicitados" name="softSolicitados" rows="2" required></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de Actualización Health -->
<div class="modal fade" id="modalActualizaHealth" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h3 class="modal-title text-center">Actualización de Datos de Desinfección</h3>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="action" value="cambia">
                    
                    <div>
                        <label class="form-label">ID:</label>
                        <input type="text" class="form-control" id="idHealth" name="idHealth" readonly>
                    </div>
                    
                    <div>
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombreH" name="nombreH" required>
                    </div>
                    
                    <div>
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" id="emailH" name="emailH" required>
                    </div>
                    
                    <div>
                        <label class="form-label">Descripción:</label>
                        <textarea class="form-control" id="descripcionH" name="descripcionH" rows="2" required></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
<hr>
    <!-- Footer Enlaces -->
     <div class="Contenedorfooter">
        <!--DIVISOR-->           

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
