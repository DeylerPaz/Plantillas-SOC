<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OHA-0</title>
        <link rel="stylesheet" href="../../includes/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../includes/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php require_once '../../includes/incl.php'; ?>
    </head>
    <body class="dark">
        <section class="home">
<!--Aho_0_ApertCuenAhor Crédito Individual-->
            <div class="text">Venta de Ahorro</div>
                    <div class="panel panel-success">
                        <div class="panel-heading">Sección 0</div>
                        <div class="panel-body"> 
                            <p> ----</p>
                        </div> 
                    </div> </div> </div>
<!--Aho_0_ApertCuenAhor Inicio de Ahorro Sección 0 Apertura de Cuenta-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho_0_AperCuenAhor</div>
                <div class="panel-body">
<!--Aho_0_ApertCuenAhor Bancho y Agencia-->
                    <div class="row">
                        <div class="form-group col-2">
                            <div class="input-group">    
                                <span class="input-group-addon">Banco</span>
                                <input type="number" class="form-control" id="banc" placeholder="0" readonly>                                
                            </div>
                        </div>   
                        <div class="form-group col-2 offset-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">Agencia</span>
                                <input type="number" class="form-control" id="agenc" placeholder="0.00" min="1000" readonly>                                
                            </div>                                                                                
                        </div>    
                        <div class="form-group col">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>                       
                    <div>
<!--Aho_0_ApertCuenAhor Tipo de Cuenta-->
                    <div class="row">
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col-2">Tipo de Cuenta</span>
                                <select class="form-select-group col-md-12" id="tipCuent" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
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
<!--Aho_0_ApertCuenAhor Búsqueda NIT-->
                    <div class="row">
                         <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon">NIT</span>
                                <input type="number" class="form-control" id="nit" placeholder="   -   -  -  ">                                
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
<!--Aho_0_ApertCuenAhor Búsqueda CLIENTE-->
                    <div class="row">
                         <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon">Cliente</span> 
                                <input type="text" aria-label="Cliente" id="client" class="form-control col">
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
<!--Aho_0_ApertCuenAhor Nombre-->                    
                    <div class="row">
                        <div class="form-group col-md-10">
                            <div class="input-group">    
                                <span class="input-group-addon">Nombre</span>
                                <input type="text" class="form-control" id="names" readonly>                                
                            </div>
                        </div> 
                    </div>
<!--Aho_0_ApertCuenAhor Préstamo-->
                    <div class="row">                                   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon">Prestamo</span>
                                <select class="form-select-group-addon col-12" aria-label="Default select example" readonly>
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>                            
                    </div>
<!--Aho_0_ApertCuenAhor Fecha, Tasa, Libreta-->
                    <div class="row">   
                        <div class="form-group col-md-4">
                            <div class="input-group">    
                                <span class="input-group-addon">Fecha</span>
                                <input type="date" class="form-control col-10" id="dat" min="2022-01-01" value ="2022-01-31" readonly>                                
                            </div>
                        </div>   
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">Tasa %</span>
                                <input type="number" class="form-control col-5" id="tas" placeholder="0.00" readonly>
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">Libreta</span>
                                <input type="number" class="form-control col-12" id="libr" placeholder="0.00" readonly>
                            </div>                                                                                
                        </div>  
                    </div>
<!--Aho_0_ApertCuenAhor BOTONES: Print, Save, Discard, Export-->                        
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa fa-print"></i> Imprimir Libreta
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa fa-floppy-disk"></i> Guardar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa fa-square-xmark"></i> Cancelar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa fa-file-export"></i> Exportar
                            </button>
                         </div>                          
                    </div> 
                </div>                 
            </div> </div> </div>           
<!--***************************************************************************************************************-->
<!--Aho_0_BeneAho Inicio de Ahorro Sección 0 Beneficiario de Ahorro-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho_0_BeneAho</div>
                <div class="panel-body">
<!--Aho_0_BeneAho Cta.Ahorros-->
                    <div class="row">
                         <div class="form-group col-md-8">
                            <div class="input-group">
                            <span class="input-group-addon">Cta. Ahorros</span>
                                <input type="number" class="form-control" id="ctaAhorro" placeholder="   -   -  -  ">                                
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-binoculars"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"> Buscar</i>
                            </button>
                        </div>  
                    </div>
<!--Aho_0_BeneAho Búsqueda Cliente-->       
                    <div class="row">
                         <div class="form-group col-md-8">
                            <div class="input-group">
                            <span class="input-group-addon">Cliente</span> 
                            <input type="text" aria-label="Cliente" id="client2" class="form-control col">
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
<!--Aho_0_BeneAho Tabla de Datos-->
                    <div class="row">
                        <div class="modal-body">
                            <table id="table_id2" class="table">
                                <thead>
                                    <tr>
                                    <th>Codigo</th>
                                    <th>Nombre Completo</th>
                                    <th>No. Identificación</th>
                                    <th>Nacimiento</th>
                                    <th>Porcentaje</th>
                                    <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="categoria_tb">
                                    <td> aaaaa </td>
                                    <td> aaaaa </td>
                                </tbody>
                            </table>
                        </div>
                        <!--TOTAL-->
                       <div class="form-group col-2 offset-md-10">
                            <div class="input-group">
                                <span class="input-group-addon">Total</span>
                                <input type="number" class="form-control" id="agenc" placeholder="0.00" min="1000" readonly>                                
                            </div>                                                                                
                        </div>             
                    </div>
<!--Aho_0_BeneAho Nombre-->       
                    <div class="row">
                         <div class="form-group col-md-8">
                            <div class="input-group">
                            <span class="input-group-addon">Nombre</span> 
                            <input type="text" aria-label="Cliente" id="client3" class="form-control col">
                            </div>                                                                                
                        </div>    
                        <div class="form-group">                            
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>                           
                        </div>  
                    </div>
<!--Aho_0_BeneAho Nacimiento, parentesco, porcentaje-->
                    <div class="row">   
                        <div class="form-group col-md-9 ms-auto">
                            <div class="form-group col-md-4">
                                <div class="input-group">    
                                    <span class="input-group-addon">Nacimiento</span>
                                    <input type="date" class="form-control col-10" min="2022-01-01" value ="2022-01-31" id="dat2">                                
                                </div>
                            </div>   
                            <div class="form-group col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Parentesco</span>
                                    <input type="number" class="form-control col-8" id="parent" placeholder="0">
                                </div>                                                                                
                            </div>   
                            <div class="form-group col-md-3">   
                                <div class="input-group">
                                    <span class="input-group-addon">Porcentaje</span>
                                    <input type="number" class="form-control col-10" id="porcentr" placeholder="0.00">
                                </div>                                                                                
                            </div>  
                            <div class="form-group">                            
                            <button class="btn btn-outline-secondary " type="button" id="button-addon1">
                                <i class="fa fa-rotate-left"></i>
                            </button>                           
                        </div>  
                        </div>  
                    </div>              
<!--Aho_0_BeneAho Botones Guardar, Editar, Eliminar, Guardar-->                     
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa fa-file"></i> Nuevo
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-file-pen"></i> Editar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-sharp fa-solid fa-folder-xmark"></i> Eliminar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa fa-floppy-disk"></i> Guardar
                            </button>
                         </div>                          
                    </div> 
                </div> 
            </div> </div> </div>
<!--***************************************************************************************************************-->
<!--Aho_0_PrmtrzcAhrrs Inicio de Ahorro Sección 0 Parametros cuentas ahorro-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho_0_PrmtrzcAhrrs</div>
                <div class="panel-body">
<!--Aho_0_PrmtrzcAhrrs Tabla no.1-->
                    <div class="row">
                        <div class="modal-body">
                            <table id="table_id3" class="table">
                                <thead>
                                    <tr>
                                    <th>Interés Ahorro Restringido(%)</th>
                                    <th>Interés Ahorro a Plazo(%)</th>
                                    <th>Interés Ahorro Programado(%)</th>
                                    <th>Interés Ahorro Corriente(%)</th>
                                    <th>Interés Ahorro Seguro(%)</th>
                                    <th>Factor Pago de Prima(millar)</th>
                                    </tr>
                                </thead>
                                <tbody id="categoria_tb">
                                    <td> aaaaa </td>
                                    <td> aaaaa </td>
                                </tbody>
                            </table>
                        </div>                           
                    </div>
<!--Aho_0_PrmtrzcAhrrs Tabla no.2-->
                    <div class="row">
                        <div class="modal-body">
                            <table id="table_id4" class="table">
                                <thead>
                                    <tr>
                                    <th>Días de Compensación</th>
                                    <th>Días de Cálculo Anualizado</th>
                                    <th>Cobro Administración</th>
                                    <th>Días Cobro Administración</th>
                                    <th>Encaje Legal(%)</th>
                                    <th>Mínimo de deósito a plazo</th>
                                    </tr>
                                </thead>
                                <tbody id="categoria_tb">
                                    <td> aaaaa </td>
                                    <td> aaaaa </td>
                                </tbody>
                            </table>
                        </div>                           
                    </div> 
<!--Aho_0_PrmtrzcAhrrs Botones Editar, Eliminar--> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-file-pen"></i> Editar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-sharp fa-solid fa-folder-xmark"></i> Eliminar
                         </div>                          
                    </div>                                        
                </div>
            </div> </div> </div> 
<!--***************************************************************************************************************-->
<!--Aho_0_MdfcnBncs Inicio de Ahorro Sección 0 Modificar Bancos-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho_0_MdfcnBncs</div>
                <div class="panel-body">      
<!--Aho_0_MdfcnBncs Código-->
                    <div class="row">
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Código</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>00</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>    
                        <div class="form-group col">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div> 
                    </div>    
<!--Aho_0_MdfcnBncs Name Banco-->       
                    <div class="row">
                         <div class="form-group col-md-10">
                            <div class="input-group">
                            <span class="input-group-addon">Nombre</span> 
                            <input type="text" aria-label="Cliente" id="banc1" class="form-control col">
                            </div>                                                                                
                        </div>                           
                    </div>   
<!--Aho_0_MdfcnBncs Botones Nuevo, Editar, Guardar, Descartar, Eliminar, Salir--> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa fa-file"></i> Nuevo
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-file-pen"></i> Editar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-sharp fa-solid fa-folder-xmark"></i> Eliminar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa fa-floppy-disk"></i> Guardar
                            </button>
                         </div>                          
                    </div>                                                                  
                </div>
            </div> </div> </div>   
<!--***************************************************************************************************************-->
<!-- Inicio de Ahorro Sección 0 Transacciones-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho_0_Trnscns</div>
                <div class="panel-body">                            
<!--Aho_0_Trnscns Código-->
                    <div class="row">
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Código</span>
                                <select class="form-select-group col-md-12" aria-label="Default select example">
                                    <option selected>00</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>    
                        <div class="form-group col">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div> 
                    </div> 
<!--Aho_0_Trnscns Name Banco-->       
                    <div class="row">
                         <div class="form-group col-md-10">
                            <div class="input-group">
                            <span class="input-group-addon">Nombre</span> 
                            <input type="text" aria-label="Cuenta" id="cuent2" class="form-control col">
                            </div>                                                                                
                        </div>                           
                    </div>     
<!--Aho_0_Trnscns Cta (Cargada, abonada)-->       
                    <div class="row">
                        <div class="form-group col-md-5">
                            <div class="input-group">
                            <span class="input-group-addon">Cta Carga</span> 
                            <input type="number" aria-label="carga" id="carg" placeholder="00000" class="form-control col">
                            </div>                                                                                
                        </div>  
                        <div class="form-group col-md-5">
                            <div class="input-group">
                            <span class="input-group-addon">Cta Abona</span> 
                            <input type="number" aria-label="Abona" id="Abon" placeholder="00000" class="form-control col">
                            </div>                                                                                
                        </div>                         
                    </div>      
<!--Aho_0_Trnscns Tipos [(Ingreso, Salida)(Diaria,Mensual)(Ahorro,Depópsito)]-->       
                    <div class="row">
                        <div class="form-group col-md-1">
                            <div class="input-group">
                            <span class="input-group">Tipo: </span> 
                            </div>                                                                                
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <div class="caption">                                    
                                    <div class="input-group">                                        
                                        <div>
                                            <input class="form-check-input" type="radio" name="r1" id="Ting"
                                                value="Ingreso">
                                            <label class="form-check-label col">
                                                Ingreso
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="radio" name="r1" id="Tsal" value="Salida">
                                            <label class="form-check-label col">
                                                Salida
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>

                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <div class="caption">
                                    <div class="input-group">
                                        <div>
                                            <input class="form-check-input" type="radio" name="r2" id="Tdia" value="Diaria">
                                            <label class="form-check-label col">
                                                Diaria
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="radio" name="r2" id="Tmens"
                                                value="Mensual">
                                            <label class="form-check-label col">
                                                Mensual
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <div class="caption">
                                    <div class="input-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="r3" id="Tahorro"
                                                value="Ahorro">
                                            <label class="form-check-label col">
                                                Ahorro
                                            </label>
                                        </div>                                    
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="r3" id="Tdepo"
                                                value="Deposito">
                                            <label class="form-check-label col">
                                                Depósito
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="form-group col-md-2">
                            <div class="input-group">
                                <select type="number" class="form-select-group col-md-4" aria-label="Default select example">
                                    <option selected>00</option>
                                    <option value="1">12</option>
                                    <option value="2">13</option>
                                    <option value="3">14</option>
                                </select>                                                       
                            </div>                                                                                
                        </div>                                                            
                    </div>      
<!--Aho_0_MdfcnBncs Botones Nuevo, Editar, Guardar, Descartar, Eliminar, Salir--> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa fa-file"></i> Nuevo
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-file-pen"></i> Editar
                            </button>                            
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa fa-floppy-disk"></i> Guardar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-sharp fa-solid fa-folder-xmark"></i> Eliminar
                            </button>
                         </div>                          
                    </div>                     
                </div>
            </div> </div> </div>     
<!--***************************************************************************************************************-->
<!--Aho_0_TpsAhrrs Inicio de Ahorro Sección 0 Tipos de Ahorros-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho_0_TpsAhrrs</div>
                <div class="panel-body">   
<!--Aho_0_TpsAhrrs Tablas Tipos de Ahorros-->
                    <div class="row">
                        <div class="modal-body">
                            <span class="input-group-addon col-7">Tipos de Ahorros</span> 
                            <table id="table_id3" class="table">
                                <thead>
                                    <tr>
                                    <th>Banco</th>
                                    <th>Agencia</th>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Tasa</th>                                    
                                    </tr>
                                </thead>
                                <tbody id="categoria_tb">
                                    <td> aaaaa </td>
                                    <td> aaaaa </td>
                                </tbody>
                            </table>
                        </div>                           
                    </div>     
<!--Aho_0_TpsAhrrs Tipos de Ahorros Botones--> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa fa-file"></i> Nuevo
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-file-pen"></i> Editar
                            </button>                            
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa fa-floppy-disk"></i> Guardar
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-sharp fa-solid fa-folder-xmark"></i> Eliminar
                            </button>
                         </div>                          
                    </div>                                 
                </div>
            </div> </div> </div>     
<!--***************************************************************************************************************-->
<!--Aho_0_iMprsnLbrt Impresión de Libretas-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho_0_iMprsnLbrt </div>
                <div class="panel-body"> 
<!--Aho_0_iMprsnLbrt Libreta-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Código</span>
                                <input type="number" class="form-control" id="libret" placeholder="000" min="1000" readonly>
                            </div>                                                                                
                        </div>    
                        <div class="form-group col">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div> 
                    </div> 
<!--Aho_0_iMprsnLbrt Libreta-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">NIT</span>
                                <input type="number" class="form-control" id="nit4" placeholder="000" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div> 
<!--Aho_0_iMprsnLbrt Libreta-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Nombre</span>
                                <input type="text" class="form-control" id="name4" placeholder="JOSE SUN CAC" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>       
<!--Aho_0_iMprsnLbrt Libreta-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Cuenta de Ahorros</span>
                                <input type="number" class="form-control" id="name4" placeholder="000-000-00-000000" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>   
<!--Aho_0_iMprsnLbrt Borones, Imprimir, Cancelar, Salir--> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">
                            <button type="button" id="btnSave" class="btn btn-success btn-lg">
                                <i class="fa-solid fa-print"></i> Imprimir
                            </button>
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-ban"></i> Cancelar
                            </button>                            
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"> 
                                <i class="fa-solid fa-right-from-bracket"></i> Salir
                            </button>
                         </div>                          
                    </div>                                                          
                </div>
            </div> </div> </div>  
        </section>                   
    </body>
</html>