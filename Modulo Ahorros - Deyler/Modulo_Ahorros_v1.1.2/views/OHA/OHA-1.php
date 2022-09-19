<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OHA-1</title>
        <link rel="stylesheet" href="../../includes/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../includes/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php require_once '../../includes/incl.php'; ?>
    </head>
    <body class="dark">
        <section class="home">
<!--Aho_1_CambioLibre Cambio de Libreria-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho_1_CambioLibre</div>
                <div class="panel-body"> 
<!--Aho_1_CambioLibre Busqueda Cuenta Ahorro-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Cuenta de Ahorros</span>
                                <input type="number" class="form-control" id="libret" placeholder="001-001-10-000160" min="1000">
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>  
                    </div> 
<!--Aho_1_CambioLibre Busqueda Cliente-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Clientes</span>
                                <input type="text" class="form-control" id="client" placeholder=" --- " >
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>  
                    </div>                    
<!--Aho_1_CambioLibre Nombre-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Nombre</span>
                                <input type="text" class="form-control" id="name" placeholder="JOSE LUIS BA CHOC" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div> 
<!--Aho_1_CambioLibre LibretaActual-Nueva Libreta-->
                    <div class="row">   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Libreta Actual</span>
                                <input type="number" class="form-control" id="libAct" placeholder="000" min="1000" readonly>
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Nueva Libreta</span>
                                <input type="number" class="form-control" id="newLibret" placeholder="0" min="1000">
                            </div>                                                                                
                        </div>                            
                    </div>       
<!--Aho_1_CambioLibre Saldo Disponible - Ultima Linea Impresa-->
                    <div class="row">   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Saldo Disponible</span>
                                <input type="number" class="form-control" id="salDisp" placeholder="000" min="1000" readonly>
                            </div>                                                                                
                        </div>  
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Nueva Libreta</span>
                                <input type="number" class="form-control" id="newLibret" placeholder="0" min="1000">
                            </div>                                                                                
                        </div>                           
                    </div>            
<!--Aho_1_CambioLibre Saldo Compensado-->
                    <div class="row">   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Saldo Compensado</span>
                                <input type="number" class="form-control" id="salComp" placeholder="000" min="1000" readonly>
                            </div>                                                                                
                        </div>          
                        <div class="form-group">                        
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i> Examinar
                            </button>                                                       
                        </div>               
                    </div>                                                                      
<!--Aho_1_CambioLibre Botones, Guardar Cancelar-->
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-floppy-disk"></i> Guardar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i> Cancelar
                            </button>     
                         </div>                          
                    </div>                                                          
                </div>
            </div> </div> </div>  
<!--****************************************************************************************************************************************-->            
<!--Aho_1_DepoAhorr DEPOSITO DE AHORROS-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho_1_DepoAhorr</div>
                <div class="panel-body"> 
<!--Aho_1_DepoAhorr Busqueda Cuenta Ahorro-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Cuenta de Ahorros</span>
                                <input type="number" class="form-control" id="cuentAhorr" placeholder="001-001-10-000160" min="1000">
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>  
                    </div> 
<!--Aho_1_DepoAhorr Busqueda Cliente-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Cliente</span>
                                <input type="text" class="form-control" id="client2" placeholder=" --- " >
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>  
                    </div> 
<!--Aho_1_DepoAhorr Nombre-->                    
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Nombre</span>
                                <input type="text" class="form-control" id="name" placeholder="JOSE LUIS BA CHOC" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>         
<!--Aho_1_DepoAhorr No Doc/Préstamo-->      
                    <div class="row">   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">No.Documento</span>
                                <input type="number" class="form-control" id="dpi" placeholder="00000000000-0000" min="1000" readonly>
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Préstamo</span>
                                <input type="number" class="form-control" id="prest" placeholder="0" min="1000">
                            </div>                                                                                
                        </div>                            
                    </div>     
<!--Aho_1_DepoAhorr Cantidad-Libreta-->                                                
                    <div class="row">   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Cantidad</span>
                                <input type="number" class="form-control" id="cant" placeholder="0.00" min="1000" readonly>
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Libreta</span>
                                <input type="number" class="form-control" id="lib" placeholder="0" min="1000">
                            </div>                                                                                
                        </div>                            
                    </div>   
<!--Aho_1_DepoAhorr Fecha-Compensado-->   
                    <div class="row">   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Fecha</span>
                                <input type="date" class="form-control" id="dat" placeholder="" min="2022-01-01" value ="2022-01-31" readonly>
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Compensado</span>
                                <input type="number" class="form-control" id="compen" placeholder="0.00" min="1000">
                            </div>                                                                                
                        </div>                            
                    </div>    
<!--Aho_1_DepoAhorr Transacción-Salida-No.Linea-Boton-->    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col-8">Transacción</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>Abrir</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col-8">Salida</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>Abrir</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>    
                        <div class="form-group col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon col">No.Linea</span>
                                <input type="number" class="form-control" id="nLine" placeholder="0.00" min="1000">
                            </div>                                                                                
                        </div>    
                        <div class="form-group col-1 offset-md-14">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>                           
                    </div>   
<!--Aho_1_DepoAhorr Tipo de Documento-->    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col-8">Tipo de Doc.</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>Abrir</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>                                               
                    </div>  
<!--Aho_1_DepoAhorr No.Cheque-Tipo de Cheque-->    
                    <div class="row">
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col-8">No.Cheque</span>
                                <input type="number" class="form-control" id="nCheq" placeholder="0.00" min="1000">                                                      
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col-8">Tipo de Cheque</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>Propio</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>                             
                        <div class="form-group col-1 offset-md-14">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>                           
                    </div>   
<!--Aho_1_DepoAhorr No.Cheque-Tipo de Cheque--> 
                    <div class="row">
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col-8">No. Partidas</span>
                                <input type="number" class="form-control" id="fComp">
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col-8">F.Comp</span>
                                <input type="date" class="form-control" min="2022-01-01" value ="2022-01-31" id="fComp">
                            </div>                                                                                
                        </div>                             
                        <div class="form-group col-1 offset-md-14">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>                           
                    </div>   
<!----> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file-export"></i> Obtener Datos
                            </button>
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-floppy-disk"></i> Guardar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i> Cancelar
                            </button>    
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-circle-xmark"></i> Salir
                            </button>   
                        </div>                          
                    </div>                                                          
                </div>
            </div> </div> </div>  
<!--****************************************************************************************************************************************-->            
<!--Aho-1-RtrDaho Retiro de Ahorros-->
<div class="panel panel-success">
                <div class="panel-heading">Aho-1-RtrDaho</div>
                <div class="panel-body"> 
<!--Aho-1-RtrDaho Busqueda Cuenta Ahorro-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Cuenta de Ahorros</span>
                                <input type="number" class="form-control" id="cuentAhorr" placeholder="001-001-10-000160" min="1000">
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>  
                    </div> 
<!--Aho-1-RtrDaho Busqueda Cliente-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Cliente</span>
                                <input type="text" class="form-control" id="client2" placeholder=" --- " >
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>  
                    </div> 
<!--Aho-1-RtrDaho Nombre-->                    
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Nombre</span>
                                <input type="text" class="form-control" id="name" placeholder="JOSE LUIS BA CHOC" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>         
<!--Aho-1-RtrDaho No Doc/Préstamo-->      
                    <div class="row">   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">No.Documento</span>
                                <input type="number" class="form-control" id="dpi" placeholder="00000000000-0000" min="1000" readonly>
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Préstamo</span>
                                <input type="number" class="form-control" id="prest" placeholder="0" min="1000">
                            </div>                                                                                
                        </div>                            
                    </div>     
<!--Aho-1-RtrDaho Cantidad-Libreta-->                                                
                    <div class="row">   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Cantidad</span>
                                <input type="number" class="form-control" id="cant" placeholder="0.00" min="1000" readonly>
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Libreta</span>
                                <input type="number" class="form-control" id="lib" placeholder="0" min="1000">
                            </div>                                                                                
                        </div>                            
                    </div>   
<!--Aho-1-RtrDaho Fecha-Compensado-->   
                    <div class="row">   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Fecha</span>
                                <input type="date" class="form-control" id="dat" min="2022-01-01" value ="2022-01-31" placeholder="" readonly>
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col">Compensado</span>
                                <input type="number" class="form-control" id="compen" placeholder="0.00" min="1000">
                            </div>                                                                                
                        </div>                            
                    </div>    
<!--Aho-1-RtrDaho Transacción-Salida-No.Linea-Boton-->    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col-8">Transacción</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>Abrir</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col-8">Salida</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>Abrir</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>    
                        <div class="form-group col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon col-8">Tipo de Doc.</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>Abrir</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>        
                        <div class="form-group col-1 offset-md-14">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>                           
                    </div>   
<!--Aho-1-RtrDaho No.Cheque-Tipo de Cheque-->    
                    <div class="row">
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col-8">No.Cheque</span>
                                <input type="number" class="form-control" id="nCheq" placeholder="0.00" min="1000">                                                      
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col-8">No.Partida</span>
                                <input type="number" class="form-control" id="nPart" placeholder="0.00" min="1000">                                      
                            </div>                                                                                
                        </div>                             
                        <div class="form-group col-1 offset-md-14">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>                           
                    </div>    
<!--Aho-1-RtrDaho Botones, Obtener datos, Guardar, Cancelar, Salir--> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file-export"></i> Obtener Datos
                            </button>
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-floppy-disk"></i> Guardar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i> Cancelar
                            </button>    
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-circle-xmark"></i> Salir
                            </button>   
                        </div>                          
                    </div>                                                           
                </div>
            </div> </div> </div>  
<!--****************************************************************************************************************************************-->            
<!--Aho-1-listday Lista del Día-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho-1-listday</div>
                <div class="panel-body">    
<!--Aho-1-listday Lista del Día Todo-->
                    <div class="row">
                        <div class="form-group col-md-5">
                            <div class="input-group">
                            <input class="form-check-input" type="radio" name="r1" id="Ting"
                            value="Ingreso">
                            <label class="form-check-label col-md-10">
                            Todo
                            </label>                          
                            </div>                                                                                
                        </div>  
                        <span class="input-group-addon col-6">Movimientos de Ahorro</span>
                    </div>  
<!--Aho-1-listday Lista del Día Por tipo de Cuenta-->
                    <div class="row">
                        <div class="form-group col-md-5">
                            <div class="input-group">
                            <input class="form-check-input" type="radio" name="r1" id="Ting"
                            value="Ingreso">
                            <label class="form-check-label col-md-10">
                            Por Tipo de Cuenta
                            </label>                          
                            </div>                                                                                
                        </div>  
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div class="input-group">                        
                                <select class="form-select-group col-md-11" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>   
                    </div> 
<!--Aho-1-listday Lista del Día - Todo,rango,mes-Inicio,Final-->
                    <div class="row">     
                        <div class="input-group">                         
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                                        
                                            <div>                                            
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    Todo
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    Rango
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    Mes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <span class="input-group-addon col-6">Inicio</span>
                                        <input type="date" class="form-control" id="inic" min="2022-01-01" value ="2022-01-31" readonly>                                                      
                                    </div>                                                                                
                                </div> 
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <span class="input-group-addon col-6">Final</span>
                                        <input type="date" class="form-control" id="fina" min="2022-01-01" value ="2022-01-31" readonly>                                                      
                                    </div>                                                                                
                                </div> 
                            </div>
                        </div>
                    </div>  
<!--Aho-1-listday Lista del Día - Mes a Procesar-->
                    <div class="row">
                        <div class="form-group col-md-11">
                            <div class="input-group">
                                <span class="input-group-addon col-8">Mes a Procesar</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>Enero</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>    
                    </div>
<!--Aho-1-listday Lista del Día - Todo,rango,mes-Inicio,Final-->
                    <div class="row">     
                        <div class="input-group">                         
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                                        
                                            <div>                                            
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    Todo
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    Rango
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    Mes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                            <i class="fa-solid fa-piggy-bank"></i>
                                        </button>                                                                                  
                                    </div>                                                                                
                                </div> 
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                            <i class="fa-solid fa-piggy-bank"></i>
                                        </button>                                                      
                                    </div>                                                                                
                                </div> 
                            </div>
                        </div>
                    </div>                   
                </div>                    
            </div> </div> </div>  
<!--****************************************************************************************************************************************-->            
<!--Aho-1-ImprsnLbrta Impresión Libreta -->
            <div class="panel panel-success">
                <div class="panel-heading">Aho-1-ImprsnLbrta</div>
                <div class="panel-body">
<!--Aho-1-ImprsnLbrta Impresión Libreta - Cuenta de Ahorros-->          
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Cuenta de Ahorros</span>
                                <input type="number" class="form-control" id="cuentAhorr3" placeholder="001-001-10-000160" min="1000">
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>  
                    </div>   
<!--Aho-1-ImprsnLbrta Impresión Libreta - Buscar Cliente-->                    
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Cliente</span>
                                <input type="text" class="form-control" id="client4" placeholder=" --- " >
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>  
                    </div>                     
<!--Aho-1-ImprsnLbrta Impresión Libreta - Nombre-->                                                  
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">NIT</span>
                                <input type="text" class="form-control" id="nit3" placeholder="" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>  
<!--Aho-1-ImprsnLbrta Impresión Libreta - Nombre-->                                                  
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Nombre</span>
                                <input type="text" class="form-control" id="name3" placeholder="" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>   
<!--Aho-1-ImprsnLbrta Impresión Libreta - Numeros-->                                                  
                    <div class="row">   
                        <div class="form-group col-md-3">
                            <div class="input-group">                                
                                <input type="number" class="form-control" id="name4" placeholder="0.00" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                        <div class="form-group col-md-3">
                            <div class="input-group">                                
                                <input type="number" class="form-control" id="name5" placeholder="0.00" min="1000" readonly>
                            </div>                                                                                
                        </div>
                        <div class="form-group col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon col">Ing.LineaImprimir</span>
                                <input type="text" class="form-control" id="name3" placeholder="" min="1000" readonly>
                            </div>                                                                                
                        </div>   
                    </div>   
<!--Aho-1-ImprsnLbrta Impresión Libreta - Botones Imprimir, Cancelar, Salir--> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-print"></i> Imprimir
                            </button>                            
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i> Cancelar
                            </button>    
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-circle-xmark"></i> Salir
                            </button>   
                        </div>                          
                    </div>  
                </div>                                           
            </div> </div> </div>         
        </section>                   
    </body>
</html>