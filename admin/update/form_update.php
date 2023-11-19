<?php
include("../header.php");
include("../navbar.php");
include("../model/conexion.php");

#validar que no viajen datos vacios
if (!isset($_GET['id'])) {
    header('Location: http://localhost/citas/admin/error.php');
}
#conexion db
include '../model/conexion.php';
#select sql
$id = $_GET['id'];
$sentencia = $db->prepare("SELECT * FROM reservas WHERE id=?");
$resultado = $sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
#prueva
#print_r($persona);

?>

<div class="container"><!-- Comienza Container -->
    <br><br>
    <div class="md-5"><!-- Comienza Row -->
        <form action="update.php" method="post" class="form-group">
            <h2>Actualiza el registro</h2>
            <p class="text-primary"><b>Ingresa los datos correspondientes:</b></p>

            <div class="form-row">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo ($persona->Nombre); ?>">
            </div>

            <div class="form-row">
                <label for="apellidos" class="col-form-label">Apellidos:</label>
                <input type="text" name="apellidos" class="form-control" value="<?php echo ($persona->Apellidos); ?>">
            </div>

            <div class="form-row">
                <label for="numero" class="col-form-label">Numero de telefono:</label>
                <input type="text" name="numero" class="form-control" value="<?php echo ($persona->Numero); ?>">
            </div>

            <div class="form-row">
                <label for="numero" class="col-form-label">Correo:</label>
                <input type="email" name="correo" class="form-control" value="<?php echo ($persona->Correo); ?>">
            </div>

            <div class="form-row">
                <label for="direccion" class="col-form-label">Direccion:</label>
                <input type="text" name="direccion" class="form-control" value="<?php echo ($persona->Direccion); ?>">
            </div>

            <div class="form-row">
                <label for="equipos" class="col-form-label">nombre del Equipo:</label>
                <input type="text" name="equipos" class="form-control" value="<?php echo ($persona->Equipos); ?>">
            </div>

            <div class="form-row">
                <label for="contraseña" class="col-form-label">Contraseña del equipo:</label>
                <input type="text" name="contraseña" class="form-control" value="<?php echo ($persona->Contraseña); ?>">
            </div>

            <div class="form-row">
                <label for="rasgos" class="col-form-label">Rasgos y fallas:</label>
                <input type="text" name="rasgos" class="form-control" value="<?php echo ($persona->Rasgos); ?>">
            </div>

            <div class="form-row">
                <label for="accesorios" class="col-form-label">Accesorios:</label>
                <input type="text" name="accesorios" class="form-control" value="<?php echo ($persona->Accesorios); ?>">
            </div>

            <div class="form-row">
                <label for="servicio" class="col-form-label">Servicio:</label>
                <input type="text" name="servicio" class="form-control" value="<?php echo ($persona->Servicio); ?>">
            </div>

            <div class="form-row">
                <label for="fecha" class="col-form-label">Fecha:</label>
                <input type="date" name="fecha" class="form-control" value="<?php echo $persona->Fecha; ?>">
            </div>

            <div class="form-row">
                <label for="hora" class="col-form-label">Hora:</label>
                <input type="time" name="hora" class="form-control" value="<?php echo ($persona->Hora); ?>">
            </div>

            <div class="form-row">
                <label for="mensaje" class="col-form-label">Mensaje:</label>
                <input type="text" name="mensaje" class="form-control" value="<?php echo ($persona->MensajeAdicional); ?>">
            </div>

            <div class="form-group">
                <label for="estado">Estado de la cita:</label>
                <select class="form-control" id="estado" name="estado">
                    <option value="<?php echo ($persona->Estado); ?>"><?php echo ($persona->Estado); ?></option>
                    <option value="" disabled>Elige estado de la cita</option>
                    <option value="Confirmado">Confirmado</option>
                    <option value="Cancelado">Cancelado</option>
                    <option value="Pendiente">Pendiente</option>
                </select>
                <kbd>
                    <small class="text-white">(Estado actual: <?php echo ($persona->Estado); ?>)</small>
                </kbd>
            </div>

            <br>
            <input type="hidden" name="id2" value="<?php echo ($persona->ID); ?>">
            <a href="../mod_reservas.php" class="btn btn-warning">Cancelar</a>
            <input type="submit" class="btn btn-success"value="Guardar">
        </form>
    </div><!-- Finaliza Row -->
</div><!-- Finaliza Container -->

<?php include("../../footer.php"); ?>
