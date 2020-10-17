  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Cliente
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Cliente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
                    Agregar Cliente
                </button>
            </div>

            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Codigo</th>
                            <th>DNI</th>
                            <th>RUC</th>
                            <th>Nombre</th>
                            <th>Celular</th>
                            <th>Categoria</th> 
                            <th>Direccion</th>
                            <th>Departamento</th> 
                            <th>Provincia</th>
                            <th>Distrito</th>
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

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" >
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close"  data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Cliente</h4>
        </div>
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">
            
            <!-- ENTRADA PARA EL DNI -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-user"></i></span> 
                <input type="text" class="form-control input-sm" name="nuevoDNI" placeholder="Ingresar DNI" required>
              </div>
            </div>
            
            <!-- ENTRADA PARA EL RUC -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-user"></i></span> 
                <input type="text" class="form-control input-sm" name="nuevoRUC" placeholder="Ingresar RUC" required>
              </div>
            </div>
            
             <!-- ENTRADA PARA LA SEXO -->
             <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-tags"></i></span> 
                    <select class="form-control input-sm" id="nuevaSexo" name="nuevaSexo" required>
                    <option value="">Femenino</option>
                    <option value="">Masculino</option>
    
                    </select>
                </div>
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-user"></i></span> 
                <input type="text" class="form-control input-sm" name="nuevoNombre" placeholder="Ingresar Nombre" required>
              </div>
            </div>

            <!-- ENTRADA PARA APELLIDO PATERNO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-hand-holding"></i></span> 
                <input type="text" class="form-control input-sm" name="nuevoApellidoP" placeholder="Ingresar Apellido Paterno" required>
              </div>
            </div>

            <!-- ENTRADA PARA APELLIDO MATERNO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-hand-holding"></i></span> 
                <input type="text" class="form-control input-sm" name="nuevoApellidoM" placeholder="Ingresar Apellido Materno" required>
              </div>
            </div>
            
            <!-- ENTRADA PARA EL NUMERO DE CELULAR -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-hand-holding"></i></span> 
                <input type="number" class="form-control input-sm" name="nuevoCelular" placeholder="Ingresar N° celular" required>
              </div>
            </div>

            <!-- ENTRADA PARA TIPO DE USUARIO O CATEGORIA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-tags"></i></span> 
                <select class="form-control input-sm" id="nuevaCategoria" name="nuevaCategoria" required>
                  <option value="">Selecionar categoría</option>
                  <option value="">MAZORCA</option>
                  <option value="">MAYORISTA</option>
                  <option value="">NO SE</option>
  
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA LA DIRECCION -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-hand-holding"></i></span> 
                <input type="number" class="form-control input-sm" name="nuevaDireccion" placeholder="Ingresar Direccion" required>
              </div>
            </div>

            <!-- ENTRADA PARA EL DEPARTAMENTO -->
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-tags"></i></span> 
                    <select class="form-control input-sm" id="nuevoDepartamento" name="nuevoDepartamento" required>
                    <option value="">Selecionar DEPARTAMENTO</option>
                
                    </select>
                </div>
            </div>

            <!-- ENTRADA PARA LA PROVINCIA -->
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-tags"></i></span> 
                    <select class="form-control input-sm" id="nuevoProvincia" name="nuevoProvincia" required>
                    <option value="">Selecionar PROVINCIA</option>
                
                    </select>
                </div>
            </div>

            <!-- ENTRADA PARA EL DISTRITO -->
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-tags"></i></span> 
                    <select class="form-control input-sm" id="nuevoDistrito" name="nuevoDistrito" required>
                    <option value="">Selecionar DISTRITO</option>
                
                    </select>
                </div>
            </div>

           <!-- ENTRADA PARA LA UBICACION GEOGRAFICA -->
           <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-hand-holding"></i></span> 
                <input type="number" class="form-control input-sm" name="nuevaUbicacionG" placeholder="gps" required readonly>
              </div>
            </div>
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
  

  
