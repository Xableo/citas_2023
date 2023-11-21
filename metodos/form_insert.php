<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<form action="metodos/insert.php" method="post">
<p class="text-danger"><b>Los datos con (*) son obligatorios.</b></p>

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Datos Personales
      </button>
    </h2>
<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">
    <!-- Campos de Datos Personales -->
              <div class="form-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tus nombres" required>
                    <small class="form-text text-muted">Si tienes dos nombres, colócalos aquí.</small>
                </div>

                <div class="form-group">
                    <label for="apellidos">Apellidos Completos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escribe tu apellido paterno y materno" required>
                    <small class="form-text text-muted">Coloca tus apellidos.</small>
                </div>
    
                <div class="form-group">
                    <label for="numero">Numero de telefono</label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Escribe tu numero de telefono" required>
                    <small class="form-text text-muted">Coloca tu numero de telefono.</small>
                </div>

                <div class="form-group">
                     <label for="correo">Correo Electronico</label>
                     <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@gmail.com" required>
                     <small class="form-text text-muted">Coloca tu correo electronico</small>
                </div>

                <div class="form-group">
                      <label for="direccion">Direccion y codigo postal</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Escribe de direccion" required>
                        <small class="form-text text-muted">Coloca tus direccion.</small>
                </div>
             </div>
         </div>
 <!-- Fin de Campos de Datos Personales -->

 <!-- Datos de equipos -->
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"></div>
                </div>
                </div>
                <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                     Servicios   
                    </button>
                 </h2>
                 
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <div class="form-group">
                    <label for="servicio">Selecciona un servicio *</label>
                    <select class="custom-select" id="servicio" name="servicio" required>
                    <option value="" selected>Elige...</option>
                    <option value="Instalación de camaras">Instalación de camaras</option>
                    <option value="Intalacion de cercos electricos">Intalacion de cercos electricos</option>
                    <option value="Instalacion de paneles solares">Instalacion de paneles solares</option>
                    <option value="Instalacion de videoporteros">Instalacion de videoporteros - Interfon</option>
                    <option value="Cotizacion en Domicilios">Cotizacion en Domicilios</option>
                    <option value="Cotizacion-Computacion e Impresoras">Cotizacion-Computacion e Impresoras</option>
                </select>
            </div>
        </div>
    </div>
 </div>
                <!-- Fin Datos de equipos -->
<div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Datos de la cita
                     </button>
                        </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                     <!-- Fecha de cita -->
                                     <div class="form-group">
                                <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        <div id="mensaje-error" style="color: red;">
                     </div>
                </div>
                <div class="form-group">
                <label for="hora">Hora:</label>
                <select class="form-control" id="hora" name="hora" required>
                <option value="" selected>Elige la hora</option>
                <option value="09:00">09:00 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="12:00">12:00 PM</option>
                <option value="13:00">13:00 PM</option>
                <option value="14:00">14:00 PM</option>
                <option value="15:00">15:00 PM</option>
                <option value="16:00">16:00 PM</option>
                <option value="17:00">17:00 PM</option>
                <option value="18:00">18:00 PM</option>
                <option value="19:00">19:00 PM</option>
                <option value="20:00">20:00 PM</option>
            </select>
        </div>

    <div class="form-group">
        <label for="mensaje">Mensaje adicional :</label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
    </div>
    <input type="hidden" name="estado" value="Pendiente">
    <input type="hidden" name="oculto" value="1">
    <button type="reset" class="btn btn-warning">Limpiar</button>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

      </div>
    </div>
  </div>
</div>
<!-- Fin de la Fecha de cita -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Función para validar si la fecha es válida
    function esFechaValida(fecha) {
        return fecha instanceof Date && !isNaN(fecha);
    }

    // Función para validar la fecha
    function validarFecha() {
        var fechaInput = document.getElementById("fecha");
        // Dividimos la entrada para evitar conversiones de zona horaria
        var partesFecha = fechaInput.value.split('-');
        // Creamos la fecha en UTC
        var fechaSeleccionada = new Date(Date.UTC(partesFecha[0], partesFecha[1] - 1, partesFecha[2]));
        var mensajeError = document.getElementById("mensaje-error");

        if (!esFechaValida(fechaSeleccionada)) {
            mensajeError.textContent = "Por favor, introduce una fecha válida.";
            fechaInput.value = "";
            return;
        }

        var diaSemana = fechaSeleccionada.getUTCDay(); // Usamos getUTCDay para obtener el día en UTC

        /*
            0: Domingo
            1: Lunes
            2: Martes
            3: Miércoles
            4: Jueves
            5: Viernes
            6: Sábado
            6: Domingo
        */


        // Coloca únicamente los dias que deseas habilitar
        if (diaSemana !== 1 && diaSemana !== 2 && diaSemana !== 3 && diaSemana !== 4 && diaSemana !== 5 && diaSemana !== 6 && diaSemana !== 7) {
            fechaInput.value = ""; // Borrar la fecha seleccionada
            mensajeError.textContent = "Este día no se cuenta con servicio, selecciona uno distinto.";
        } else {
            mensajeError.textContent = "";
        }
    }

    // Agregar un evento onchange al campo de fecha
    document.getElementById("fecha").addEventListener("change", validarFecha);
});

</script>

