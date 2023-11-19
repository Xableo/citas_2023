<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "citas";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT ID , Numero FROM reservas";
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

<style>
#uni_modal .modal-content > .modal-footer {
    display: none;
}

#uni_modal .modal-body {
    padding-top: 0 !important;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="Reservas" class="control-label">Mensaje a <?php echo $numeroReserva; ?></label>
                <textarea class="form-control" id="msg" rows="3" required></textarea>
            </div>
        </div>
        <div class="form-group d-flex justify-content-end w-100 form-group">
            <a id="btn-send-msg" href="https://wa.me/+52<?php echo $numeroReserva; ?>/?text=" target='_blank' class='btn btn-md btn-success'>Enviar</a>
            <button class="btn-light btn ml-2" id='msg-cancel' type="button" data-dismiss="modal">Cancelar</button>
        </div>
    </div>
</div>

<script>
    var url = $("#btn-send-msg").attr("href");

    $(document).on("keyup", "#msg", function() {
        $("#btn-send-msg").attr("href", url + $("#msg").val());
    });
</script>
