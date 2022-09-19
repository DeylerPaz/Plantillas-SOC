<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OHA-4</title>
        <link rel="stylesheet" href="../../includes/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../includes/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php require_once '../../includes/incl.php'; ?>
    </head>
    <body class="dark">
        <section class="home">
            <div class="text">Venta de Ahorro</div>
            <div class="panel panel-success">
                <div class="panel-heading">Sección 4</div>
                    <div class="panel-body"> 
                        <p> ----</p>
                    </div> 
            </div> </div> </div>
<!--*****************************************************************************************************************************************************************************************************************-->            
<!--AHO-4-Clclintrs Cuenta Ahorros-->   
            <div class="panel panel-success">
                <div class="panel-heading">Aho-1-RtrDaho</div>
                <div class="panel-body">    
<!--AHO-4-Clclintrs Todo-->
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
                        <span class="input-group-addon col-6">PREPARACIÓN DE CALCULOS</span>
                    </div>  
<!--AHO-4-Clclintrs Por tipo de Cuenta-->
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
<!--AHO-4-Clclintrs - Todo,rango,mes-Inicio,Final-->
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
                                        <input  class="form-control" id="inic" readonly>                                                      
                                    </div>                                                                                
                                </div> 
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <span class="input-group-addon col-6">Final</span>
                                        <input type="date" class="form-control" min="2022-01-01" value ="2022-01-31" id="fina" readonly>                                                      
                                    </div>                                                                                
                                </div> 
                            </div>
                        </div>
                    </div>  
<!--AHO-4-Clclintrs - Mes a Procesar-->
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
<!--AHO-4-Clclintrs - Ordenando Por-->
                    <div class="row">     
                        <div class="input-group">                         
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                                        
                                            <div>                                            
                                                <label class="form-check-label">
                                                    Ordenando por:
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    Cuenta de Ahorro
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    No. Documento
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success btn-lg btn btn-primary btn-sm" data-dismiss="modal"> 
                                            <i class="fa-sharp fa-solid fa-circle-check"></i> Procesar
                                        </button>                                                        
                                    </div>                                                                                
                                </div> 
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success btn-lg btn btn-primary btn-sm" data-dismiss="modal"> 
                                            <i class="fa-solid fa-ban"></i> Cancelar
                                        </button>                                                    
                                    </div>                                                                                
                                </div> 
                            </div>
                        </div>
                    </div> 
<!--AHO-4-Clclintrs - Revisión Previa a Traslado-->                     
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <h4 class="text-center">Revisión Previa a Traslado</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container-fluid h-100">
                            <div class="row w-100">
                                <div class="col">
                                    <button class="btn btn-success center-block">
                                        <i class="fa-sharp fa-solid fa-file-invoice"></i> Modificar
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-success center-block">
                                        <i class="fa-sharp fa-solid fa-table"></i> Generar XLS
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
<!--AHO-4-Clclintrs - Tralada a Base Definitiva--> 
                <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <h4 class="text-center">Traslada a Base Definitiva</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container-fluid h-100">
                            <div class="row w-100">
                                <div class="col">
                                    <button class="btn btn-success center-block">
                                        <i class="fa-solid fa-database"></i> Actualiza
                                    </button>
                                </div>    
                                <div class="col">
                                    <button class="btn btn-success center-block">
                                        <i class="fa-solid fa-book"></i>  Generar Reporte
                                    </button>
                                </div>                            
                            </div>
                        </div>
                    </div>                    
                </div>                    
            </div> </div> </div>  
<!--*****************************************************************************************************************************************************************************************************************-->            
<!--AHO-4-Clclintrs Cuenta Ahorros-->   
            <div class="panel panel-success">
                <div class="panel-heading">AHO-4-IntrsManal</div>
                <div class="panel-body">           
<!--AHO-4-IntrsManal Busqueda Cuenta-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Cuenta</span>
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
<!--AHO-4-IntrsManal Busqueda Cliente-->
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
<!--AHO-4-IntrsManal Nombre-->                    
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Nombre</span>
                                <input type="text" class="form-control" id="name" placeholder="JOSE LUIS BA CHOC" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>         
<!--AHO-4-IntrsManal No Doc/Préstamo-->      
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
<!--AHO-4-IntrsManal Cantidad-Libreta-->                                                
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
<!--AHO-4-IntrsManal Fecha-Compensado-->   
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
<!--AHO-4-IntrsManal Transacción-Salida-No.Linea-Boton-->    
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
                                <span class="input-group-addon col-8">Tipo de Doc</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>Efectivo</option>
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
<!--AHO-4-IntrsManal No.Cheque-Tipo de Cheque-->    
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
<!--AHO-4-IntrsManal No.Cheque-Tipo de Cheque--> 
                    <div class="row">
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col-8">No. Partida</span>
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
<!--*****************************************************************************************************************************************************************************************************************-->            
<!--AHO-4-Slds Cuenta Ahorros-->   
<div class="panel panel-success">
                <div class="panel-heading">AHO-4-Slds</div>
                <div class="panel-body">    
<!--AHO-4-Slds Todo-->
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
                        <span class="input-group-addon col-6">PREPARACIÓN DE CALCULOS</span>
                    </div>  
<!--AHO-4-Slds Por tipo de Cuenta-->
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
<!--AHO-4-Slds - Todo,rango,mes-Inicio,Final-->
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
                                        <input type="date" class="form-control" id="inic" readonly>                                                      
                                    </div>                                                                                
                                </div> 
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <span class="input-group-addon col-6">Final</span>
                                        <input type="date" class="form-control" min="2022-01-01" value ="2022-01-31" id="fina" readonly>                                                      
                                    </div>                                                                                
                                </div> 
                            </div>
                        </div>
                    </div>  
<!--AHO-4-Slds - Mes a Procesar-->
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
<!--AHO-4-Slds - Ordenando Por-->
                    <div class="row">     
                        <div class="input-group">                         
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                                        
                                            <div>                                            
                                                <label class="form-check-label">
                                                    Ordenando por:
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    Cuenta de Ahorro
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    No. Documento
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success btn-lg btn btn-primary btn-sm" data-dismiss="modal"> 
                                            <i class="fa-sharp fa-solid fa-circle-check"></i> Procesar
                                        </button>                                                        
                                    </div>                                                                                
                                </div> 
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success btn-lg btn btn-primary btn-sm" data-dismiss="modal"> 
                                            <i class="fa-solid fa-ban"></i> Cancelar
                                        </button>                                                    
                                    </div>                                                                                
                                </div> 
                            </div>
                        </div>
                    </div>               
            </div> </div> </div>       
<!--*****************************************************************************************************************************************************************************************************************-->            
<!--AHO-4-LstdCntsActi/Disp Cuenta Ahorros-->   
<div class="panel panel-success">
                <div class="panel-heading">AHO-4-LstdCntsActi/Disp</div>
                <div class="panel-body">    
<!--AHO-4-LstdCntsActi/Disp Todo-->
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
                        <span class="input-group-addon col-6">PREPARACIÓN DE CALCULOS</span>
                    </div>  
<!--AHO-4-LstdCntsActi/Disp Por tipo de Cuenta-->
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
<!--AHO-4-LstdCntsActi/Disp - Ordenando Por-->
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
                                                    Activas
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">
                                                    Disponibles
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success btn-lg btn btn-primary btn-sm" data-dismiss="modal"> 
                                            <i class="fa-sharp fa-solid fa-circle-check"></i> Procesar
                                        </button>                                                        
                                    </div>                                                                                
                                </div> 
                                <div class="form-group col-md-10">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success btn-lg btn btn-primary btn-sm" data-dismiss="modal"> 
                                            <i class="fa-solid fa-ban"></i> Cancelar
                                        </button>                                                    
                                    </div>                                                                                
                                </div> 
                            </div>
                        </div>
                    </div>               
            </div> </div> </div>                     
        </section>                   
    </body>
</html>            