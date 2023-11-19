<?php
include("header.php");
include("navbar.php");
?>

<style>
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
            
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            text-align: center; /* Añadido para centrar contenido */

        }

        .btn {
            text-decoration: none;
            padding: 10px 15px;
            border: 1px solid #17a2b8;
            color: #17a2b8;
            border-radius: 5px;
            display: inline-block;
            
        }

        .card-text {
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center; /* Añadido para centrar el texto */

        }
    </style>
    <br>
    <div class="container"><!--Comienza Container-->
        <div class="card text-center">
        <div class="card-header">
            Soporte Técnico
        </div>
        <div class="card-body">
        <h5 class="card-title">Medios de contacto</h5>

<table>
      <tr>
        <td>
            <p class="card-text">Pc Systems y Computacion</p><br>
            <a href="mailto:rgsystems@gmail.com" class="alert alert-success" role="alert">Correo Electrónico:</a>
        </td>
        <td>
            <p class="card-text">WhatsApp:</p><br>
            <a href="https://wa.me/5219241782211" class="alert alert-success" role="alert">Enviar mensaje</a> 
    </tr>
    </td>
</table><br>
            <a href="inicio.php" class="btn btn-warning">Regresar al panel</a>
        </div>
        <div class="card-footer text-muted">
            Reponderemos en breve a su mensaje <b>(unicamente mensajes)</b>
        </div>
        </div>

    </div><!--Finaliza Container-->



<?php
include("../footer.php");
?>