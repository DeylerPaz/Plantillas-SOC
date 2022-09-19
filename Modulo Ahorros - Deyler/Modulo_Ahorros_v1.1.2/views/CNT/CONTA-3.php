<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CONTA-3</title>
        <link rel="stylesheet" href="../../includes/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../includes/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php require_once '../../includes/incl.php'; ?>
    </head>
    <body class="dark">
        <section class="home">
<!---CTB_imp_pln_cnt_03 Catalogos y Clases--->
            <div class="text">Sección 3</div>
            <div class="panel panel-success">
                <div class="panel-heading">CTB_imp_pln_cnt_03</div>
                <div class="panel-body"> 
                    <div class="row">
                        <div class="input-group-addon col-md-3">  
                            <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                            <label class="form-check-label col">Todo el Catalogo de Cuentas</label>                       
                        </div> 
                        <div class="input-group-addon col">  
                            <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                            <label class="form-check-label col">Catalogo por Niveles</label>                       
                        </div> 
                        <div class="input-group-addon col">  
                            <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                            <label class="form-check-label col">Escoger Clase</label>                       
                        </div> 
                    </div> 
                </div>           

<!---CTB_imp_pln_cnt_03 Niveles Clase--->
                    <div class="row">
                        <div class="form-group-addon col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Niveles</span>
                                <select class="form-select-group col" id="office5" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                                                                                   
                            </div>                                                                                                                                     
                        </div>                        
                    </div> 
<!---CTB_imp_pln_cnt_03 Clase--->
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Clase</span>
                                <select class="form-select-group col" id="eFondos3" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Pasivo</option>
                                    <option value="2">Patrimonio</option>
                                    <option value="3">LIBRE</option>
                                    <option value="4">Ingresos</option>
                                    <option value="5">Costos</option>
                                    <option value="6">Gastos</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>                                         
                    </div>
<!---CTB_imp_pln_cnt_03 Botones--->
                    <div class="row justify-items-md-center col">     
                        <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-print"></i></i> Imprimir
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Salir
                            </button>                            
                        </div> 
                    </div>                 
            </div> </div> </div>
<!---*************************************************************************************************************************************--->        
<!---MODAL: sscn_imprsn Catalogos y Clases--->        
            <div class="panel panel-success">
                <div class="panel-heading">MODAL: sscn_imprsn</div>
                <div class="panel-body"> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-sharp fa-solid fa-print-magnifying-glass"></i> Tipo de Impresora y Papel
                            </button> 
                        </div>
                    </div>
                    
<!--MODAL: sscn_imprsn Tipo de Impresión-->
                    <div class="row">     
                        <div class="input-group">                         
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                             
                                            <div class="form-group-addon col">
                                                <span class="input-group">Tipo de Impresión</span>
                                            </div>              
                                            <div>                   
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col-3">No Condensado</label>
                                            </div>
                                            <div>                                            
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col-1">Condensado</label>
                                            </div>                                                                                         
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div> 
<!--MODAL: sscn_imprsn Tipo de Impresión-->
                    <div class="row">     
                        <div class="input-group">                         
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                             
                                            <div class="form-group-addon col">
                                                <span class="input-group">Intervalo de Impresión de Páginas</span>
                                            </div>              
                                            <div>                   
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col-3">Total</label>
                                            </div>
                                            <div col="form-group col-md-6">                                            
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col-md-6">Páginas</label>                                                
                                            </div>                                              
                                            <div class="input-group col-md-6">
                                                <span class="input-group-addon">de la</span>
                                                <input type="number" class="form-control" id="newLibret" placeholder="0" min="1">
                                                <span class="input-group-addon col">a la</span>
                                                <input type="number" class="form-control" id="newLibret" placeholder="0" min="1">
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>                     
<!--MODAL: sscn_imprsn Configuración-->                    
                    <div class="row">
                        <div class="input-group col-md-3">
                            <span class="input-group-addon col">No. Copias</span>
                            <input type="number" class="form-control" id="newLibret" placeholder="0" min="1000">
                        </div>                         
                    </div> 
<!--MODAL: sscn_imprsn Botones--> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
                            </button>                           
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-print"></i></i> Imprimir
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-file-lines"></i> TXT
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-file-excel"></i> XLS
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Salir
                            </button>                            
                        </div>                          
                    </div> 
                </div>                 
            </div> </div> </div>
<!---*************************************************************************************************************************************--->        
<!---CTB_acm2_mnsls_bnc_03--->            
            <div class="panel panel-success">
                <div class="panel-heading">MODAL: sscn_imprsn</div>
                <div class="panel-body"> 
<!---CTB_acm2_mnsls_bnc_03 Oficina--->
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
<!---CTB_acm2_mnsls_bnc_03 Fondos--->                  
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
<!---CTB_acm2_mnsls_bnc_03 Fecha Inicial, Final--->                    
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Incial</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Final</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat2" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                    </div>
<!---CTB_acm2_mnsls_bnc_03 Barra de estado del sistema---> 
                    <div class="row">
                        <div class="form-group col-md-8">
                            <div class="input-group">    
                                <span class="input-group-addon">Barra de estado del sistema</span>                                
                            </div>
                        </div>  
                    </div>     
                    <div class="row">
                        <div class="progress col-md-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>    
<!---CTB_acm2_mnsls_bnc_03 Botones--->
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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
<!---*************************************************************************************************************************************--->        
<!---CTB_plz_cntbl_03--->            
            <div class="panel panel-success">
                <div class="panel-heading">CTB_plz_cntbl_03</div>
                <div class="panel-body"> 
<!--CTB_plz_cntbl_03 Oficina-->
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
                    </div>
<!--CTB_plz_cntbl_03 Póliza Contable-->
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Póliza Contable</span>
                                <select class="form-select-group col" id="eFondos3" placeholder="" requiered aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Recuperaciones</option>
                                    <option value="2">Desembolsos</option>
                                    <option value="3">Libre</option>
                                    <option value="1">Caja Chica</option>
                                    <option value="2">Activo Fijo</option>
                                    <option value="3">Vales</option>
                                    <option value="3">Depósitos</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>                        
                    </div>    
<!--CTB_plz_cntbl_03 Póliza Contable Text-->
                    <div call="row">
                        <h3 style="text-align:center">Póliza Contable</h3>
                        <p style="text-align:center">Entrada de Datos</p>
                    </div>
<!--CTB_plz_cntbl_03 Fecha Inicial, Final-->
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Incial</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Final</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat2" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                    </div>
<!--CTB_plz_cntbl_03 Botones-->
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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
<!---*************************************************************************************************************************************--->        
<!---CTB_plz_cntbl*fnd_03--->            
            <div class="panel panel-success">
                <div class="panel-heading">CTB_plz_cntbl*fnd_03</div>
                <div class="panel-body"> 
<!---CTB_plz_cntbl*fnd_03 Oficina--->
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
                    </div>
<!---CTB_plz_cntbl*fnd_03 Consoidado y Póiza--->   
                    <div call="row">
                        <h3 style="text-align:center">Consolidado de Caja</h3>
                        <p style="text-align:left">Póliza Contable</p>
                    </div>         
<!---CTB_plz_cntbl*fnd_03 Ingrese Saldo Inicia--->     
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Inrese Saldo Inicial</span>
                                <input type="number" placeholder="" requiered class="form-control col-10" id="dat1" min="" value =""> 
                            </div>
                        </div>         
                    </div>  
<!---CTB_plz_cntbl*fnd_03 Estrada de Datos--->     
                    <div call="row">
                        <h3 style="text-align:center">Entrada de Datos</h3>       
                    </div>             
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Incial</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Final</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat2" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                    </div>
<!---CTB_plz_cntbl*fnd_03 Botones---> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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
<!---*************************************************************************************************************************************--->        
<!---CTB_lbr_myr_03--->            
            <div class="panel panel-success">
                <div class="panel-heading">CTB_lbr_myr_03</div>
                <div class="panel-body">             
<!---CTB_lbr_myr_03 Botones Informe Entre Fecha, por código--->    
                    <div class="row">
                        <div class="btn-group col" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success">Informe Entre Fechas</button>
                            <button type="button" class="btn btn-success">Por Código de Cuenta</button>                            
                        </div>
                    </div>
<!---CTB_lbr_myr_03 Oficina--->     
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
<!---CTB_lbr_myr_03 Fondos--->
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Fondos</span>
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
<!---CTB_lbr_myr_03Entrada de Datos--->   
                    <div call="row">
                        <h3 style="text-align:center">Entrada de Datos</h3>       
                    </div>             
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Incial</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Final</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat2" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                    </div>         
<!---CTB_lbr_myr_03 Barra de Progreso--->   
                    <div class="row">
                        <div class="progress col-md-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>          
<!---CTB_lbr_myr_03 Botones--->    
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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
<!---*************************************************************************************************************************************--->        
<!---CTB_cnctrcn_dr_mvmnts_03--->            
            <div class="panel panel-success">
                <div class="panel-heading">CTB_cnctrcn_dr_mvmnts_03</div>
                <div class="panel-body">              
<!---CTB_cnctrcn_dr_mvmnts_03 Oficina--->   
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
<!---CTB_cnctrcn_dr_mvmnts_03 Fondos--->    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">Fondos</span>
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
<!---CTB_cnctrcn_dr_mvmnts_03 Enntrada de Datos--->    
                    <div call="row">
                        <h3 style="text-align:center">Entrada de Datos</h3>       
                    </div>             
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Incial</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Final</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat2" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                    </div>         
<!---CTB_cnctrcn_dr_mvmnts_03 Radio Button--->      
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">  
                                <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                                <label class="form-check-label col-sm-8">Imprimir Reporte Consolidado por Cuentas</label>
                            </div>  
                        </div>      
                    </div>      
<!---CTB_cnctrcn_dr_mvmnts_03 Barra de progreso--->   
                    <div class="row">
                        <div class="progress col-md-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>          
<!---CTB_cnctrcn_dr_mvmnts_03 Botones--->            
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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


<!---*************************************************************************************************************************************--->        
<!---CTB_lbr_dr_03--->            
            <div class="panel panel-success">
                <div class="panel-heading">CTB_lbr_dr_03</div>
                <div class="panel-body">              
<!---CTB_lbr_dr_03 Oficina--->   
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
<!---CTB_lbr_dr_03 Fondos--->    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">F.Fondos</span>
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
<!---CTB_lbr_dr_03 Enntrada de Datos--->    
                    <div call="row">
                        <h3 style="text-align:center">Entrada de Datos</h3>       
                    </div>             
                    <div class="row">                                  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Incial</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha Final</span>
                                <input type="date" placeholder="" requiered class="form-control col-10" id="dat2" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>  
                        <div class="form-group col-md-3">
                            <div class="input-group">    
                                <span class="input-group-addon">Folio</span>
                                <input type="number" placeholder="" requiered class="form-control col-10" id="dat2" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div> 
                    </div>         
<!---CTB_lbr_dr_03 Radio Button--->      
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">  
                                <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                                <label class="form-check-label col-sm-8">Imprimir Libro Diario Concentrado</label>
                            </div>  
                        </div>      
                    </div>      
<!---CTB_lbr_dr_03 Barra de progreso--->   
                    <div class="row">
                        <div class="progress col-md-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>          
<!---CTB_lbr_dr_03 Botones--->            
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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

<!---*************************************************************************************************************************************--->        
<!---CTB_lbr_cj_03--->            
<div class="panel panel-success">
                <div class="panel-heading">CTB_lbr_cj_03</div>
                <div class="panel-body">              
<!---CTB_lbr_cj_03 Oficina--->   
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
<!---CTB_lbr_cj_03 Fondos--->    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">F.Fondos</span>
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
<!---CTB_lbr_cj_03 Periodo--->    
                    <div class="row">  
                        <div class="input-group col-md-6">    
                            <span class="input-group-addon col">Número de Dígitos por Omisión</span>
                            <input type="number" placeholder="" requiered class="form-control col-3" id="dat1" min="" value =""> 
                        </div>   
                        <div class="input-group">                         
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                             
                                            <div class="form-group-addon col">
                                            <h4 style="text-align:center">Periodo</h4>
                                            </div>              
                                            <div>                   
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col-3">Actual</label>
                                            </div>
                                            <div>                                            
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col-1">Otro</label>
                                            </div>                                                                                         
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>                                     
                    <div call="row">        
                        <div class="input-group col-md-3">    
                            <span class="input-group-addon col">Mes de Trabajo</span>
                            <input type="month" placeholder="" requiered class="form-control col-10" id="dat1" min="" value =""> 
                        </div>            
                        <h4 style="text-align:left">Rango de Balance</h4>
                        <div class="input-group col-sm-3">                           
                            <div class="input-group col">                                    
                                <input type="month" placeholder="" requiered class="form-control col" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                            <div class="input-group col">                                    
                                <input type="month" placeholder="" requiered class="form-control col" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>                        
                    </div>       
<!---CTB_lbr_cj_03 Radio Button--->      
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">  
                                <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                                <label class="form-check-label col-sm-8">Emitir Reporte sin Saldos a Cero</label>
                            </div>  
                        </div>      
                    </div>      
<!---CTB_lbr_cj_03 Barra de progreso--->   
                    <div class="row">
                        <div class="progress col-md-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>          
<!---CTB_lbr_cj_03 Botones--->            
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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
<!---*************************************************************************************************************************************--->        
<!---CTB_blnc_cmprbn_03--->            
<div class="panel panel-success">
                <div class="panel-heading">CTB_blnc_cmprbn_03</div>
                <div class="panel-body">              
<!---CTB_blnc_cmprbn_03 Oficina--->   
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
<!---CTB_blnc_cmprbn_03 Fondos--->    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">F.Fondos</span>
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
<!---CTB_blnc_cmprbn_03 Periodo--->    
                    <div class="row">  
                        <div class="input-group col-md-6">    
                            <span class="input-group-addon col">Número de Dígitos por Omisión</span>
                            <input type="number" placeholder="" requiered class="form-control col-3" id="dat1" min="" value =""> 
                        </div>   
                        <div class="input-group">                         
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                             
                                            <div class="form-group-addon col">
                                            <h4 style="text-align:center">Periodo</h4>
                                            </div>              
                                            <div>                   
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col-3">Actual</label>
                                            </div>
                                            <div>                                            
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col-1">Otro</label>
                                            </div>                                                                                         
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>                                     
                    <div call="row">        
                        <div class="input-group col-md-3">    
                            <span class="input-group-addon col">Mes de Trabajo</span>
                            <input type="month" placeholder="" requiered class="form-control col-10" id="dat1" min="" value =""> 
                        </div>            
                        <h4 style="text-align:left">Rango de Balance</h4>
                        <div class="input-group col-sm-3">                           
                            <div class="input-group col">                                    
                                <input type="month" placeholder="" requiered class="form-control col" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                            <div class="input-group col">                                    
                                <input type="month" placeholder="" requiered class="form-control col" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>                        
                    </div>       
<!---CTB_blnc_cmprbn_03 Radio Button--->      
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">  
                                <input class="form-check-input col-md-3" type="radio" name="r1" id="gen1" value="Salida">
                                <label class="form-check-label col-sm-8">Emitir Reporte sin Saldos a Cero</label>
                            </div>  
                        </div>      
                    </div>      
<!---CTB_blnc_cmprbn_03 Barra de progreso--->   
                    <div class="row">
                        <div class="progress col-md-3">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>          
<!---CTB_blnc_cmprbn_03 Botones--->            
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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
            
            
<!---*************************************************************************************************************************************--->        
<!---CTB_std_rslt2_03--->            
<div class="panel panel-success">
                <div class="panel-heading">CTB_std_rslt2_03</div>
                <div class="panel-body">              
<!---CTB_std_rslt2_03 Oficina--->   
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
<!---CTB_std_rslt2_03 Fondos--->    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">F.Fondos</span>
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
<!---CTB_std_rslt2_03 Periodo--->    
                    <div class="row">                           
                        <div class="input-group">                         
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                                                                                      
                                            <div>                   
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">Estado de Resultados Condensado</label>
                                            </div>
                                            <div>                                            
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">Estado de Resultados Analítico</label>
                                            </div>                                                                                         
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>                                     
                    <div call="row">                                            
                        <h3 style="text-align:left">Periodo</h3>
                        <h4 style="text-align:left">Rango de Balance</h4>
                        <div class="input-group col-sm-3">                           
                            <div class="input-group col">                                    
                                <input type="month" placeholder="" requiered class="form-control col" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                            <div class="input-group col">                                    
                                <input type="month" placeholder="" requiered class="form-control col" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>                        
                    </div>               
<!---CTB_std_rslt2_03 Botones--->            
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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
            
<!---*************************************************************************************************************************************--->        
<!---CTB_std_rslt2_cmrcl_03--->            
<div class="panel panel-success">
                <div class="panel-heading">CTB_std_rslt2_cmrcl_03</div>
                <div class="panel-body">              
<!---CTB_std_rslt2_cmrcl_03 Oficina--->   
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
<!---CTB_std_rslt2_cmrcl_03 Fondos--->    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon col">F.Fondos</span>
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
<!---CTB_std_rslt2_cmrcl_03 Periodo--->    
                    <div class="row">                           
                        <div class="input-group">                         
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <div class="caption">                                    
                                        <div class="input-group">                                                                                      
                                            <div>                   
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">Estado de Resultados Condensado</label>
                                            </div>
                                            <div>                                            
                                                <input class="form-check-input col-md-1" type="radio" name="r1" id="Tsal" value="Salida">
                                                <label class="form-check-label col">Estado de Resultados Analítico</label>
                                            </div>                                                                                         
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>                                     
                    <div call="row">                                            
                        <h3 style="text-align:left">Periodo</h3>
                        <h4 style="text-align:left">Rango de Balance</h4>
                        <div class="input-group col-sm-3">                           
                            <div class="input-group col">                                    
                                <input type="month" placeholder="" requiered class="form-control col" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                            <div class="input-group col">                                    
                                <input type="month" placeholder="" requiered class="form-control col" id="dat1" min="2022-01-01" value ="2022-01-31"> 
                            </div>
                        </div>                        
                    </div>               
<!---CTB_std_rslt2_cmrcl_03 Botones--->            
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-file"></i> Nuevo
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

