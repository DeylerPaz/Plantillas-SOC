<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CONTA-0</title>
        <link rel="stylesheet" href="../../includes/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../includes/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php require_once '../../includes/incl.php'; ?>
    </head>
    <body class="dark">
        <section class="home">
<!--*******************************************************************************************************************************************************************************************************************-->
            <div class="text">Sección 0</div>
            <div class="panel panel-success">
                <div class="panel-heading">CTB_captura_prt_dr</div>
                <div class="panel-body"> 
                    <div class="row">
<!--CTB_captura_prt_dr No.Partida, fecha contable, fecha documento-->                        
                        <div class="form-group col-3">
                            <div class="input-group">    
                                <span class="input-group-addon">No.Partida</span>
                                <input type="number" class="form-control" id="nPartida" placeholder="0" requiered readonly>                                
                            </div>
                        </div>   
                        <div class="form-group col-3">
                            <div class="input-group">
                                <span class="input-group-addon">Fecha Contable</span>
                                <input type="date" class="form-control" id="fContable" placeholder="" min="2013-08-29" requiered readonly>                                
                            </div>                                                                                
                        </div>  
                        <div class="form-group col-3 offset-md-1">
                            <div class="input-group">
                                <span class="input-group-addon">Fecha Documento</span>
                                <input type="date" class="form-control" id="fDoc" placeholder="" min="2013-08-29" requiered readonly>                                
                            </div>                                                                                
                        </div>                                             
                    <div>
<!--CTB_captura_prt_dr Oficina, E.Fondos-->                                            
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Oficina</span>
                                <select class="form-select-group col" id="office" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">E.Fondos</span>
                                <select class="form-select-group col" id="eFondos" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>
                    </div>
<!--CTB_captura_prt_dr Descripción-->
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Descripción</span>
                                <input type="text" class="form-control" id="descript" placeholder="" requiered readonly>                                
                            </div>
                        </div>  
                    </div> 
<!--CTB_captura_prt_dr Tabla 1-->                    
                    <div class="row">
                        <div class="modal-body">
                            <table id="table_id" class="table">
                                <thead>
                                    <tr>
                                    <th class="col-2">No.</th>
                                    <th class="col-4">Cuenta</th>
                                    <th class="col-3">Debe Q.</th>
                                    <th class="col-3">Haber Q.</th>                                    
                                    </tr>
                                </thead>
                                <tbody id="categoria_tb">
                                    <td> aaaaa </td>
                                    <td> aaaaa </td>
                                </tbody>
                            </table>
                        </div>                           
                    </div>
<!--CTB_captura_prt_dr Botones-->   
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa fa-binoculars"></i> Visualizar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-print"></i></i> Imprimir
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-file"></i></i> Nuevo
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i></i> Cancelar
                            </button>
                        </div>                          
                    </div>
                </div>
            </div> </div> </div>
<!--*******************************************************************************************************************************************************************************************************************-->            
<!---MODAL: bsc_bchr--->
            <div class="panel panel-success">
                <div class="panel-heading">MODAL: bsc_bchr</div>
                <div class="panel-body"> 
<!--MODAL: bsc_bchr Campos, Operador, Valor-->  
                    <div class="row">
                        <div class="form-group col-md-3 ">
                            <div class="input-group">
                                <span class="input-group-addon">Campos</span>
                                <select class="form-select-group col" id="camp" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">Operador</span>
                                <select class="form-select-group col" id="operated" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">    
                                <span class="input-group-addon col">Valor</span>
                                <input type="number" class="form-control" id="valr" placeholder="" requiered readonly> 
                            </div>
                        </div>  
                    </div> 
<!--MODAL: bsc_bchr Botones, Buscar, Cancelar-->  
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-magnifying-glass"></i></i> Buscar
                            </button>                            
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i></i> Cancelar
                            </button>
                         </div>                          
                    </div>
                </div>
            </div> </div> </div>
<!--*******************************************************************************************************************************************************************************************************************-->            
<!---MODAL: impr_bchr--->
            <div class="panel panel-success">
                <div class="panel-heading">MODAL: bsc_bchr</div>
                <div class="panel-body">             
<!---MODAL: impr_bchr Partida--->                
                    <div class="row">
                        <div class="form-group col-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Partida</span>
                                <input type="text" class="form-control" id="partid" placeholder="" requiered readonly>                                
                            </div>
                        </div>  
                    </div> 
<!---MODAL: impr_bchr Botones: Imprimir, Salir--->
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                            <i class="fa-solid fa-print"></i> Imprimir
                            </button>                            
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i></i> Cancelar
                            </button>
                         </div>                          
                    </div>
                </div>
            </div> </div> </div>  
<!--*******************************************************************************************************************************************************************************************************************-->            
<!---captura_prt_dr --->
            <div class="panel panel-success">
                <div class="panel-heading">captura_prt_dr </div>
                <div class="panel-body">                                            
<!--captura_prt_dr No.Partida, fecha contable, fecha documento-->  
                    <div class="row">
                        <div class="form-group col-md-3">
                                <div class="input-group">    
                                    <span class="input-group-addon">No.Partida</span>
                                    <input type="number" class="form-control" id="nPartida2" placeholder="0" requiered readonly>                                
                                </div>
                            </div>   
                            <div class="form-group col-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Fecha Contable</span>
                                    <input type="date" class="form-control" id="fContable2" placeholder="" min="2013-08-29" requiered readonly>                                
                                </div>                                                                                
                            </div>  
                            <div class="form-group col-3 offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon">Fecha Documento</span>
                                    <input type="date" class="form-control" id="fDoc2" placeholder="" min="2013-08-29" requiered readonly>                                
                                </div>                                                                                
                            </div>                                             
                        <div>
                    </div> 
<!--captura_prt_dr Oficina, E.Fondos-->                                            
                    <div class="row">
                        <div class="form-group col-md-6 ">
                            <div class="input-group">
                                <span class="input-group-addon col-3">Oficina</span>
                                <select class="form-select-group col-md-5" id="office2" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon col-3">E.Fondos</span>
                                <select class="form-select-group col-md-5" id="eFondos2" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>
                    </div>
<!--captura_prt_dr Descripción-->
                    <div class="row">
                        <div class="form-group col-8">
                            <div class="input-group">    
                                <span class="input-group-addon">Descripción</span>
                                <input type="text" class="form-control" id="descript2" placeholder="" requiered readonly>                                
                            </div>
                        </div>  
                    </div> 
                </div>
            </div> </div> </div>
        </section>                   
    </body>
</html>