<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CONTA-2</title>
        <link rel="stylesheet" href="../../includes/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../includes/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php require_once '../../includes/incl.php'; ?>
    </head>
    <body class="dark">
        <section class="home">
<!---CTB_axl_cj_chc_02--->
            <div class="text">Sección 2</div>
            <div class="panel panel-success">
                <div class="panel-heading">CTB_axl_cj_chc_02</div>
                <div class="panel-body"> 
<!---CTB_axl_cj_chc_02 Efectúa Partida Contable--->                    
                    <div class="row">
                        <div class="form-group-addon col-md-3">
                            <span class="input-group">Efectúa Partida Contable</span>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa-solid fa-money-bill-transfer"> Traslado</i>
                            </button>
                        </div>    
                    </div>
<!---CTB_axl_cj_chc_02 Oficina Traslado--->
                    <div class="row">
                        <div class="form-group-addon col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Oficina</span>
                                <select class="form-select-group col" id="office5" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                                                                                   
                            </div>                                                                                                                                     
                        </div>                        
                    </div> 
                    
<!---CTB_axl_cj_chc_02 Caja Chica--->
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Caja Chica</span>
                                <select class="form-select-group col" id="eFondos3" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>                                         
                    </div>                    
<!---CTB_axl_cj_chc_02 Saldos--->
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon col">Saldo Inicial</span>
                                <input type="number" class="form-control" id="newLibret" placeholder="0" min="1000">
                            </div>  
                            <div class="input-group">
                                <span class="input-group-addon col">Monto para Reintegrar caja Chica</span>
                                <input type="number" class="form-control" id="newLibret" placeholder="0" min="1000">
                            </div>                     
                            <hr align="left" noshade="noshade" size="4" width="80%" />    
                            <div class="input-group">
                                <span class="input-group-addon col">Total Disponible para el Mes</span>
                                <input type="number" class="form-control" id="newLibret" placeholder="0" min="1000">
                            </div>  
                            <div class="input-group">
                                <span class="input-group-addon col">Total de Gastos</span>
                                <input type="number" class="form-control" id="newLibret" placeholder="0" min="1000">
                            </div>                     
                            <hr align="left" noshade="noshade" size="4" width="80%" />                                                          
                            <div class="input-group">
                                <span class="input-group-addon col">Saldo Final</span>
                                <input type="number" class="form-control" id="newLibret" placeholder="0" min="1000">
                            </div>                               
                            <hr align="left" noshade="noshade" size="4" width="80%" />                                                          
                            <div class="input-group col-md-2 offset-11">  
                                <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                                <label class="form-check-label col-3">Todos</label>
                                <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                    <i class="fa-solid fa-check"></i> Proceso</i>
                             </button>
                            </div>                              
                        </div>                     
                        </div>                                                                            
                    </div>
<!---CTB_axl_cj_chc_02 Tabla--->
                    <div class="row">
                        <div class="modal-body">
                            <table id="table_id" class="table">
                                <thead>
                                    <tr>
                                    <th>NIT</th>
                                    <th>Proveedor</th>
                                    <th>Concepto</th>
                                    <th>Fecha</th>             
                                    <th>Tipo</th>
                                    <th>Factura</th>
                                    <th>Cantidad</th>
                                    <th>Saldo</th>
                                    </tr>
                                </thead>
                                <tbody id="categoria_tb">
                                    <td> aaaaa </td>
                                    <td> aaaaa </td>
                                </tbody>
                            </table>
                        </div>                           
                    </div>
<!---CTB_axl_cj_chc_02 BOTON Eliminar, Cancelar, Imprimir, Salir--->
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-delete-right"></i> Eliminar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i></i> Cancelar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-print"></i></i> Imprimir
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Salir
                            </button>                            
                        </div>                          
                    </div>
                </div>                 
            </div> </div> </div>
        </section>                   
    </body>
</html>