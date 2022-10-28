<?php encabezado() ?>
<!-- Begin Page Content -->
<div class="page-content bg-light">
    <div class="page-header bg-light">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Nueva Venta</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="form-group ">
                    <strong class="text-primary ">Datos del Cliente</strong>
                    <input type="hidden" id="id_cliente" name="id_cliente">
                    <input type="text" id="ruc_cliente" onkeyup="BuscarCliente(event);" name="ruc_cliente" class="form-control" placeholder="CI del cliente">
                    <strong id="nom_cli" class="form-control border-0 text-success "></strong>
                    <strong id="dir_cli" class="form-control border-0 text-success"></strong>
                    <strong id="tel_cli" class="form-control border-0 text-success"></strong>
                </div>
            </div>
            <div class="col-lg-3 mt-5">
                <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#nuevo_cliente"><i class="fas fa-plus-circle"></i> Nuevo</button>

            </div>
        </div>
    </div>

    <section>
        <div class="container-fluid">
            <form action="" method="post" id="frmCompras" class="row" autocomplete="off">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="buscar_codigo">Código</label>
                        <input type="hidden" id="id" name="id">
                        <input id="buscar_codigo" onkeyup="BuscarCodigo(event);" class="form-control" type="text" name="codigo" placeholder="Código">
                        <span class="text-danger d-none" id="error">No hay producto</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="nombre">Producto</label>
                        <input id="nombre" class="form-control" type="hidden" name="nombre">
                        <br />
                        <strong id="nombreP"></strong>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input id="stockD" type="hidden">
                        <input id="cantidad" class="form-control" type="text" name="cantidad" onkeyup="IngresarCantidad(event);">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input id="precio" class="form-control" type="hidden" name="precio">
                        <br />
                        <strong id="precioP"></strong>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-light mt-4" id="tablaCompras">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody id="ListaCompras">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 mt-1">
                    <div class="form-group">
                        <strong class="text-primary">Total a pagar</strong>
                        <input type="hidden" id="total" name="total" class="form-control  mb-2">
                        <strong id="tVenta" class="form-control border-0 text-success"></strong>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    
                        <button class="btn btn-danger" type="button" id="AnularCompra">Anular Venta</button>
                        <button class="btn btn-success" type="button" id="procesarVenta"><i class="fas fa-money-check-alt"></i> Procesar Venta</button>
                    
                </div>
            </div>
        </div>
    </section>
</div>
<div id="nuevo_cliente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="my-modal-title"><i class="fas fa-user-plus"></i> Nuevo Cliente</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?php echo base_url(); ?>Clientes/insertar" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ruc">Carnet de Indentidad</label>
                        <input id="ruc" class="form-control" type="text" name="ruc" placeholder="CI">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input id="direccion" class="form-control" type="text" name="direccion" placeholder="Dirección">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Teléfono">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php pie() ?>