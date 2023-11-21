<?php
#Verificar el envio de datos
#print_r ($_POST);

if (isset($_POST["oculto"])) {
    header("Location: http://localhost/citas/admin/error.php");
}

#conexion a db
include "../model/conexion.php";
#datos actualizados
$id2 = $_POST["id2"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$numero = $_POST["numero"];
$correo = $_POST["correo"];
$direccion = $_POST['direccion'];
$servicio = $_POST["servicio"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$mensaje = $_POST["mensaje"];
$estado = $_POST["estado"];

#sentencia sql para insertar registros actualizados
$sentencia = $db->prepare("UPDATE reservas SET Nombre=?, Apellidos=?, Numero=?, Correo=?, Direccion=?, Servicio=?, Fecha=?, Hora=?, MensajeAdicional=?, Estado=? WHERE ID=?;");
$resultado = $sentencia-> execute([$nombre, $apellidos, $numero, $correo, $direccion, $servicio, $fecha, $hora, $mensaje, $estado, $id2]);

#validar una direccion en casi de que se actualicen correctamente los datos
if ($resultado === true) {
    header("Location: http://localhost/citas/admin/mod_reservas.php");
}else{
    echo "Error no se pueden actualziar los registros";
}
?>