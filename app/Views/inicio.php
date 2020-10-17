  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Productos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Productos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
                    Agregar producto
                </button>
            </div>

            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Codigo</th>
                            <th>Descripcipón</th>
                            <th>Marca</th>
                            <th>Stock</th>
                            <th>M. Entero</th>
                            <th>M. Frac</th>
                            <th>Factor</th> 
                            <th>PVP</th> 
                            <th>%Desc</th>
                            <th>P. Venta</th>
                            <th>Acciones</th> 
                        </tr> 
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12434</td>
                            <td>Pañales</td>
                            <td>Hugies</td>
                            <td>20</td>
                            <td>BOL</td>
                            <td>UND</td>
                            <td>8</td>
                            <td>16.30</td>
                            <td>0</td>
                            <td>16.30</td>
                            <td>
                            <div class="btn-group">
                                <button class="btn btn-warning btn-xs btnEditarProducto" data-toggle="modal" data-target="#modalEditarProducto" idProducto=""><i class="fas fa-pen"></i></button>
        
                                <button class="btn btn-danger btn-xs btnEliminarProducto" idProducto=""><i class="fa fa-times"></i></button>
                            </div>  
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>

        </div>

    </section>
    <!-- /.content -->
  </div>

  <!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar producto</h4>
        </div>
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">

            <!-- ENTRADA PARA EL CÓDIGO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 
                <input type="text" class="form-control input-sm" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" readonly required>
              </div>
            </div>

            <!-- ENTRADA PARA EL CÓDIGO BARRA-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 
                <input type="text" class="form-control input-sm" id="nuevoCodigoBarra" name="nuevoCodigoBarra" placeholder="Ingresar código Barra" required>
              </div>
            </div>

            <!-- ENTRADA PARA EL CÓDIGO Serie-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 
                <input type="text" class="form-control input-sm" id="nuevoCodigoSerie" name="nuevoCodigoSerie" placeholder="Ingresar Número de Serie" required>
              </div>
            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-signature"></i></span> 
                <input type="text" class="form-control input-sm" name="nuevaDescripcion" placeholder="Ingresar descripción" required>
              </div>
            </div>

            <!-- ENTRADA PARA LA PRESENTACION -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-hand-holding"></i></span> 
                <input type="text" class="form-control input-sm" name="nuevaPresentacion" placeholder="Ingresar Presentacion" required>
              </div>
            </div>

            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-tags"></i></span> 
                <select class="form-control input-sm" id="nuevaCategoria" name="nuevaCategoria" required>
                  <option value="">Selecionar categoría</option>
                  
  
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA LA LINEA -->
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-tags"></i></span> 
                    <select class="form-control input-sm" id="nuevaLinea" name="nuevaLinea" required>
                    <option value="">Selecionar Linea</option>
                    
    
                    </select>
                </div>
            </div>

            <!-- ENTRADA PARA LA MARCA -->
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-tags"></i></span> 
                    <select class="form-control input-sm" id="nuevaMarca" name="nuevaMarca" required>
                    <option value="">Selecionar Marca</option>
                    
    
                    </select>
                </div>
            </div>

            <!-- ENTRADA PARA PESO UNITARIO -->
            <div class="form-group row">
                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-arrow-up"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoPrecVentUnd" name="nuevoPrecVentUnd" step="any" min="0" placeholder="Peso Unitario" required>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-sort-amount-down"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoFactor" name="nuevoFactor" step="any" min="0" placeholder="Factor" required>
                    </div>
                </div>
            </div>

            <!-- ENTRADA PARA UNIDAD DE MEDIDA -->
            <div class="form-group row">
                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-ruler"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoUndEntero" name="nuevoUndEntero" step="any" min="0" placeholder="U. Medida Entero" required>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-ruler"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoUndMenudo" name="nuevoUndMenudo" step="any" min="0" placeholder="U. Medida Menudo" required>
                    </div>
                </div>
            </div>

            <!-- ENTRADA PARA STOK MAXIMO MINIMO -->
            <div class="form-group row">
                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-ruler"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoStokMin" name="nuevoStokMin" step="any" min="0" placeholder="Stok minimo" required>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-ruler"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoStokmax" name="nuevoStokmax" step="any" min="0" placeholder="Stok maximo" required>
                    </div>
                </div>
            </div>

            <!-- ENTRADA PARA C Menudeo C MAYORISTA -->
            <div class="form-group row">
                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-box"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoPreMenudo" name="nuevoPreMenudo" step="any" min="0" placeholder="C. Menudeo %" required>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-boxes"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoPreMayorista" name="nuevoPreMayorista" step="any" min="0" placeholder="C. Mayorista %" required>
                    </div>
                </div>
            </div>

            <fieldset>
            <legend>Precios y costos</legend>

            <!-- ENTRADA PARA PRECIO COMPRA -->
            <div class="form-group row">
                <div class="col-xs-5 col-sm-5">
                    <div class="input-group" style="margin-bottom:15px">
                        <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoPrecioCompra" name="nuevoPrecioCompra" step="any" min="0" placeholder="Precio de compra" required>
                    </div>

                    <div class="input-group" style="margin-bottom:15px">
                        <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoPrecioFlete" name="nuevoPrecioFlete" step="any" min="0" placeholder="Flete" required>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span> 
                        <input type="number" class="form-control input-sm" id="nuevoImpuesto" name="nuevoIMpuesto" step="any" min="0" placeholder="Impuesto" value="18.00" required>
                    </div>
                </div>

                <div class="col-xs-7 col-sm-7">
                    <small>Porcentaje por cliente</small>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <small>Bodega(Precio 1)</small>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-percent"></i></span> 
                                <input type="number" class="form-control input-sm" id="nuevoPorcP1" name="nuevoPorcP1" step="any" min="0" value="40" required>
                            </div>
 
                            <small>Distribuidora(Precio 2)</small>                           
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-percent"></i></span> 
                                <input type="number" class="form-control input-sm" id="nuevoPorcP2" name="nuevoPorcP2" step="any" min="0" value="30" required>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <small>Super Mercado(Precio 3)</small>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-percent"></i></span> 
                                <input type="number" class="form-control input-sm" id="nuevoPorcP3" name="nuevoPorcP3" step="any" min="0" value="20" required>
                            </div>
 
                            <small>Mayorista(Precio 4)</small>                           
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-percent"></i></span> 
                                <input type="number" class="form-control input-sm" id="nuevoPorcP4" name="nuevoPorcP4" step="any" min="0" value="10" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ENTRADA PARA PRECIO POR CLIENTE-->
            <div class="form-group row">
                <div class="col-xs-3">
                <small>Precio 1</small>
                    <div class="input-group">
                        <input type="number" class="form-control input-sm" id="nuevoPrecio1" name="nuevoPrecio1" step="any" min="0" required>
                    </div>
                </div>

                <div class="col-xs-3">
                <small>Precio 2</small>
                    <div class="input-group">
                        <input type="number" class="form-control input-sm" id="nuevoPrecio2" name="nuevoPrecio2" step="any" min="0" required>
                    </div>
                </div>

                <div class="col-xs-3">
                <small>Precio 3</small>
                    <div class="input-group">
                        <input type="number" class="form-control input-sm" id="nuevoPrecio3" name="nuevoPrecio3" step="any" min="0" required>
                    </div>
                </div>

                <div class="col-xs-3">
                <small>Precio 4</small>
                    <div class="input-group">
                        <input type="number" class="form-control input-sm" id="nuevoPrecio4" name="nuevoPrecio4" step="any" min="0" required>
                    </div>
                </div>
            </div>
            </fieldset>
          </div>
        </div>
          

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

    </div>

  </div>

</div>
  

  
