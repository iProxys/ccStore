<div class="row mt-3">
    <div class="col-12">
        <form action="assets/components/php/salidaProductos/eliminarDatosReporte.php" method="POST" target="_blank">
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <div class="input-group pull-left">
                            <span class="input-group-addon mt-2 mr-2" id="basic-addon1">Desde:</span>
                            <input type="date" name="desde" class="form-control" id="desde" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group pull-left">
                            <span class="input-group-addon mt-2 mr-2" id="basic-addon1">Hasta:</span>
                            <input type="date" name="hasta" class="form-control" id="hasta" required>
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" id="btnEli" class="btn btn-dark text-white">Eliminar Datos <i class="fas fa-trash"></i></button>
                    </div>

                    <!-- MODAL CANTIDAD DE PRODUCTOS 
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alerta">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    -->
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnEli').click(function(){
            $('#alerta').show('fade');
        })
    });
</script>