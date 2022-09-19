<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CONTA-1</title>
        <link rel="stylesheet" href="../../includes/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../includes/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php require_once '../../includes/incl.php'; ?>
    </head>
    <body class="dark">
        <section class="home">
<!--*******************************************************************************************************************************************************************************************************************-->
<!---CTB_gnr_blnc_01--->
            <div class="text">Sección 1</div>
            <div class="panel panel-success">
                <div class="panel-heading">CTB_gnr_blnc_01</div>
                <div class="panel-body"> 
<!---CTB_gnr_blnc_01 Mensaje--->
                    <div class="row">
                        <div class="form-group col-md-8">
                            <div class="input-group">    
                                <span class="input-group-addon">Mensaje</span>
                                <input type="text" class="form-control" id="msj" placeholder=" Este Proceso Genera Datos para Balances. Verifique las Inconsistencias" requiered readonly>
                            </div>
                        </div>  
                    </div> 
<!---CTB_gnr_blnc_01 Mes de Proceso--->
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Mes de Proceso:</span>
                                <input type="text" class="form-control" id="mesProc" placeholder="" requiered readonly>
                            </div>
                        </div>                          
                    </div>      
<!---CTB_gnr_blnc_01 Fecha Inicial, Fecha Final--->
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat2" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                    </div>
<!--CTB_gnr_blnc_01 Oficina--> 
                    <div class="row">
                        <div class="form-group-addon col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Oficina</span>
                                <select class="form-select-group col" id="office3" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                                          
                        </div>
                        <div class="form-group col-md-3">
                            <div class="input-group col-md-3">  
                                <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                                <label class="form-check-label col-3">General</label>
                            </div>  
                        </div>
                    </div>
<!--CTB_gnr_blnc_01 E.Fondos-->                     
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">E.Fondos</span>
                                <select class="form-select-group col" id="eFondos3" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>
                        <div class="form-group col-md-3">
                            <div class="input-group col-md-3">  
                                <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                                <label class="form-check-label col-3">General</label>
                            </div>  
                        </div>
                    </div> 
<!---CTB_gnr_blnc_01 Alerta--->
                    <div class="row">
                        <div class="form-group col-md-8">
                            <div class="input-group">    
                                <span class="input-group-addon">Alerta</span>
                                <input type="text" class="form-control" id="alert" placeholder=" Este Proceso Genera Datos para Balances. Verifique las Inconsistencias" requiered readonly>
                            </div>
                        </div>  
                    </div>     
<!---CTB_gnr_blnc_01 Alerta--->
                    <div class="row">
                        <div class="progress col-md-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>    
<!---CTB_gnr_blnc_01 Aceptar, Salir, Consol--->                    
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-check"></i> Aceptar
                            </button>                            
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Salir
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i></i> Cancelar
                            </button>
                         </div>                          
                    </div>    
                </div>                 
            </div> </div> </div> 
<!--*******************************************************************************************************************************************************************************************************************-->
<!---CTB_actlz_sld_crtr_01--->            
            <div class="panel panel-success">
                <div class="panel-heading">CTB_actlz_sld_crtr_01</div>
                <div class="panel-body">  
<!---CTB_actlz_sld_crtr_01 fECHA--->
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat3" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>                          
                    </div>                                    
<!---CTB_actlz_sld_crtr_01 Fecha de Proceso, Hora--->     
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha de Proceso</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat4" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>                          
                    </div>           
<!---CTB_actlz_sld_crtr_01 Créditos, Tiempo Estimado, Transcurrido--->      
                    <div class="row">   
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Créditos</span>
                                <input type="number" class="form-control" id="credit" placeholder="" min="" readonly>
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Tiempo Estimado</span>
                                <input type="time" class="form-control" id="tEstim" placeholder="00:00:00" min="">
                            </div>                                                                                
                        </div>    
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Transcurrido</span>
                                <input type="time" class="form-control" id="tTranscur" placeholder="00:00:00" min="">
                            </div>                                                                                
                        </div>                            
                    </div>        
<!---CTB_actlz_sld_crtr_01 Barra de Progreso--->      
                    <div class="row">
                        <div class="progress col-md-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>        
<!---CTB_actlz_sld_crtr_01 Botones, procesar, cancelar--->            
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-check"></i> Aceptar
                            </button>                            
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Salir
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i></i> Cancelar
                            </button>
                         </div>                          
                    </div>  
                </div>                 
            </div> </div> </div> 
<!--*******************************************************************************************************************************************************************************************************************-->
<!---CTB_crr_mnsl_01--->
            <div class="panel panel-success">
                <div class="panel-heading">CTB_crr_mnsl_01</div>
                <div class="panel-body"> 
<!---CTB_crr_mnsl_01 Mensaje--->
                    <div class="row">
                        <div class="form-group col-md-8">
                            <div class="input-group">    
                                <span class="input-group-addon">Mensaje</span>
                                <input type="text" class="form-control" id="msj2" placeholder="Este proceso actualiza el Saldo Incial Para Todas las Cuentas, Verifique que los Balances sean Correctos y Haga Copias de Seguridad. Efectúa un traslado de todos los balances por fuente de fondos y oficina" requiered readonly>
                            </div>
                        </div>  
                    </div> 
      
<!--CTB_crr_mnsl_01 Oficina--> 
                    <div class="row">
                        <div class="form-group-addon col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Oficina</span>
                                <select class="form-select-group col" id="office4" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                                          
                        </div>
                        <div class="form-group col-md-3">
                            <div class="input-group col-md-3">  
                                <input class="form-check-input col-md-3" type="radio" name="r1" id="gen3" value="Salida">
                                <label class="form-check-label col-3">General</label>
                            </div>  
                        </div>
                    </div>
<!--CTB_crr_mnsl_01 E.Fondos-->                     
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">E.Fondos</span>
                                <select class="form-select-group col" id="eFondos4" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>
                        <div class="form-group col-md-3">
                            <div class="input-group col-md-3">  
                                <input class="form-check-input col-md-3" type="radio" name="r1" id="gen4" value="Salida">
                                <label class="form-check-label col-3">General</label>
                            </div>  
                        </div>
                    </div>   
<!---CTB_crr_mnsl_01 Mes de Proceso--->
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Mes de Proceso:</span>
                                <input type="text" class="form-control" id="mesProc" placeholder="" requiered readonly>
                            </div>
                        </div>                          
                    </div>                    
<!---CTB_crr_mnsl_01 Alerta--->
                    <div class="row">
                        <div class="progress col-md-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>    
<!---CTB_crr_mnsl_01 Aceptar, Salir, Consol--->                    
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-check"></i> Aceptar
                            </button>                            
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Salir
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i></i> Cancelar
                            </button>
                         </div>                          
                    </div>    
                </div>                 
            </div> </div> </div> 
        </section>                   
    </body>
</html>