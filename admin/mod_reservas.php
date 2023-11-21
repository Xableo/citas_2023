

<?php
include("header.php");
include("navbar.php");
#conexion de db
include 'model/conexion.php';
#select
$sentencia = $db->query("SELECT * FROM reservas;");
$dato = $sentencia->fetchAll(PDO::FETCH_OBJ);
#print_r ($dato);
?>



    <div class="container"><!--Comienza Container-->
    <br><br>
        <div class="row"><!--Comienza Row-->

                <div class="container">
                    <br><br>
                    <div class="text-center">
                        <h3>Lista de registros</h3>
                        <a href="./inicio.php" class="btn btn-success"><i class="fas fa-home"></i> Regresar al inicio</a>
                        <a href="/citas/index.php" class="btn btn-primary"><i class="fas fa-plus"></i>  Nuevo Registro</a>
                        

                    </div><br>

                    <table class="table table-striped" id="tablaReservas">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>APELLIDOS</th>
                                <th>NUMERO</th>
                                <th>CORREO</th>
                                <th>DIRECCION</th>
                                <th>SERVICIOS</th>
                                <th>FECHA</th>
                                <th>HORA</th>
                                <th>MENSAJE</th>
                                <th>ACCIONES</th>
                                <th>ELIMINAR</th>
                                <th>EDITAR</th>
                                <th>NOTIFICAR</th>
                                <th>CORREO</th>

                            </tr>
                        </thead>
                        <tbody>
                           


                            <?php
                                $index = 0;
                                $numRegistros = count($dato);
                                
                                while ($index < $numRegistros) {
                                    $registro = $dato[$index];
                                ?>
                                    <tr>
                                        <td> <?php echo $registro->Nombre; ?> </td>
                                        <td> <?php echo $registro->Apellidos; ?> </td>
                                        <td> <?php echo $registro->Numero; ?> </td>
                                        <td> <?php echo $registro->Correo; ?> </td>
                                        <td> <?php echo $registro->Direccion; ?> </td>
                                        <td> <?php echo $registro->Servicio; ?> </td>
                                        <td> <?php echo $registro->Fecha; ?> </td>
                                        <td> <?php echo $registro->Hora; ?> </td>
                                        <td> <?php echo $registro->MensajeAdicional; ?> </td>
                                        <td>
                                            <?php
                                            $estado = $registro->Estado;
                                            $clase_color = '';
                                
                                            switch ($estado) {
                                                case 'Pendiente':
                                                    $clase_color = 'text-warning'; // Amarillo para Pendiente
                                                    break;
                                                case 'Cancelado':
                                                    $clase_color = 'text-danger'; // Rojo para Cancelado
                                                    break;
                                                case 'Confirmado':
                                                    $clase_color = 'text-success'; // Verde para Confirmado
                                                    break;
                                                default:
                                                    $clase_color = ''; // Sin clase de color por defecto
                                                    break;
                                            }
                                            ?>

                        <b class="<?php echo $clase_color; ?>"><?php echo $estado; ?></b>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="btn btn-sm btn-danger mr-1" data-toggle="modal" data-target="#confirmDelete<?php echo $registro->ID; ?>" class="btn btn-sm btn-danger mr-1">ELIMINAR</a>
            
                            <div class="modal fade" id="confirmDelete<?php echo $registro->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmDeleteLabel">Confirmar Eliminación</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Está seguro de que desea eliminar este registro? <?php echo $registro->Nombre . ' ' . $registro->Apellidos ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <a href="delete/delete.php?id=<?php echo $registro->ID; ?>" class="btn btn-danger">Eliminar</a>
                                                    </div>
                                                       </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                <div class="d-flex">
                                            <a href="update/form_update.php?id=<?php echo $registro->ID; ?>" class="btn btn-sm btn-info mr-1">EDITAR</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="update/send_msg.php?id=<?php echo $registro->ID; ?>" class="btn btn-sm btn-success mr-1">NOTIFICAR</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="update/Email_msg.php?id=<?php echo $registro->ID; ?>" class="btn btn-sm btn-success mr-1">ENVIAR</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $index++;
                            }
                            ?>







                        </tbody>
                    </table>
                </div>


        </div><!--Finaliza Row-->

    </div><!--Finaliza Container-->
                     
    <?php 
    include("modal_eliminar.php");
    include("../footer.php");
    ?>

    <script>
    // Tabla de reservas (admin/mod_reservas.php)
    $(document).ready(function() {
        $('#tablaReservas').DataTable({
            "scrollX": true, // Habilita el desplazamiento horizontal
            "scrollCollapse": true, // Hace que el encabezado y el pie de página se ajusten al desplazamiento
        });
    });
    </script> 

    