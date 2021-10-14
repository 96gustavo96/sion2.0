<?php require_once "vistas/parte_superior.php" ?>
<!--llamado a la parte superior-->

<div class="container">
        <div class="row">
            <div class="col-lg-6">            
            <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons fas fa-plus-square"></i></button>    
            </div>    
        </div>    
    </div>    
    <br>  

    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaClientes" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>                            
                            <th >id</th> 
                            <th >Nombre y Apellido</th>                           
                            <th >DNI</th>                           
                            <th >Monto Fijo</th>                           
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    </div>   

<!--Modal para CRUD-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formvendedor">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="" class="col-form-label">NOMBRE Y APELLIDO</label>
                            <input type="text" class="form-control" id="N_y_A">
                        </div>
                    </div>   
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label for="" class="col-form-label">DNI</label>
                            <input type="text" class="form-control" id="DNI">
                        </div>
                    </div>   
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="" class="col-form-label">Monto</label>
                            <input type="text" class="form-control" id="monto">
                        </div>
                    </div>   
                </div>               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light " data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar1" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>
<!--Modal para CRUD-->
<div class="modal fade bd-example-modal-lg" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl" role="document">
        <div class="modal-content">
            
        <form id="formCuentas">    
            <div id="resultado"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light " data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>



<script type="text/javascript" src="vendedores.js"></script>
<!--fin de cuerpo-->
<!--llamado parte inferioir-->
<?php require_once "vistas/parte_inferior.php" ?>