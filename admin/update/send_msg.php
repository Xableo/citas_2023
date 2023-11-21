<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "citas";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
$numero = $_GET['id'];
$sql = "SELECT ID , Numero FROM reservas WHERE reservas.ID = '$numero'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $idReserva = $row["ID"];
    $numeroReserva = $row["Numero"];

    $conn->close();
} else {
    echo "No se encontraron reservas.";
    $conn->close();
    exit; 
}
?>

<?php 
include "header.php";
include "navbar.php";
?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><script src="https://kit.fontawesome.com/01e994df18.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style/estilo.css">
</head>
<style>
#uni_modal .modal-content > .modal-footer {
    display: none;
}

#uni_modal .modal-body {
    padding-top: 0 !important;
}
#msg {
            font-size: 20px;
            width: 300px; /* Puedes ajustar este valor según tus necesidades */
            max-width: 400px; /* Puedes ajustar este valor según tus necesidades */
    
        }
</style>
<body>
    




<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <h5 for="Reservas" class="control-label">Mensaje a <?php echo $numeroReserva; ?></h5>
                    <textarea class="form-control" id="msg" rows="3" required></textarea><br>
                </div>
            </div>
            <div class="col-1">
            <a id="btn-send-msg" href="https://wa.me/+52<?php echo $numeroReserva; ?>/?text=" target='_blank' class='btn btn-md btn-success'>Enviar</a>
            </div>
            <div class="col-1">
            <a id="btn-send-msg" href="http://localhost/citas/admin/mod_reservas.php" class='btn btn-md btn-danger'>Regresar</a></div>

        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal" tabindex="-1" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"href="https://wa.me/+52<?php echo $numeroReserva; ?>&subject=Título del Correo&body=" target='_blank' class='btn btn-md btn-success'>Enviar</a></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Contenido del correo electrónico -->
                    <p>Contenido del correo electrónico...</p>
                </div>
                <div class="modal-footer">
                    <a href="https://wa.me/+52<?php echo $numeroReserva; ?>&subject=Título del Correo&body=" target='_blank' class='btn btn-md btn-success'>Enviar</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>




<script>
    // Obtén el elemento textarea y el enlace de WhatsApp
    var textarea = document.getElementById('msg');
    var whatsappLink = document.getElementById('btn-send-msg');

    // Agrega un evento de escucha al evento 'input' en el textarea
    textarea.addEventListener('input', function () {
        // Obtén el texto del textarea
        var mensaje = textarea.value;

        // Actualiza el atributo href del enlace de WhatsApp con el nuevo mensaje
        whatsappLink.href = "https://wa.me/+52<?php echo $numeroReserva; ?>/?text=" + encodeURIComponent(mensaje);
    });
</script>
<!-- Termina pie de pagina -->


</body>

<script>
    var url = $("#btn-send-msg").attr("href");

    $(document).on("keyup", "#msg", function() {
        $("#btn-send-msg").attr("href", url + $("#msg").val());
    });
</script>
</html>
<?php include "footer.php";?>