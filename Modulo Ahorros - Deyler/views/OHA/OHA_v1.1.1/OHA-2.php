<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OHA-2</title>
        <link rel="stylesheet" href="../../includes/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../includes/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php require_once '../../includes/incl.php'; ?>
    </head>
    <body class="dark">
        <section class="home">
            <div class="text">Venta de Ahorro</div>
            <div class="panel panel-success">
                <div class="panel-heading">Sección 2</div>
                    <div class="panel-body"> 
                        <p> ----</p>
                    </div> 
            </div> </div> </div>
<!--*****************************************************************************************************************************************************************************************************************-->            
<!--Aho-2-StdCnt Cuenta Ahorros-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho-2-StdCnt</div>
                <div class="panel-body"> 
<!--Aho-2-StdCnt Cuenta Ahorros-->
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
<!--Aho-2-StdCnt Busqueda Cliente-->
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
<!--Aho-2-StdCnt Busqueda Nombre-->
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Nombre</span>
                                <input type="text" class="form-control" id="name3" placeholder="" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div> 
<!--Aho-2-StdCnt Bptpmes-->
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
<!--*****************************************************************************************************************************************************************************************************************-->
<!--Aho-2-StdCntXfch Cuenta Ahorros-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho-2-StdCntXfch</div>
                <div class="panel-body">
<!--Aho-2-StdCntXfch Cuenta de Ahorro--> 
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
<!--Aho-2-StdCntXfch Modal Clientes--> 
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
<!--Aho-2-StdCntXfch Nombre-->   
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Nombre</span>
                                <input type="text" class="form-control" id="name3" placeholder="" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>   
<!--Aho-2-StdCntXfch Fecha Inicial y FInal-->                    
                    <div class="row">
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col-8">F.Inicial</span>
                                <input type="date" class="form-control" min="2022-01-01" value ="2022-01-31" id="fInit">                                                      
                            </div>                                                                                
                        </div>   
                        <div class="form-group col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon col-8">F.Final</span>
                                <input  class="form-control" min="2022-01-01" value ="2022-01-31" id="fFini">                                      
                            </div>                                                                                
                        </div>                             
                        <div class="form-group col-1 offset-md-14">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-check-to-slot"></i>
                            </button>
                        </div>                           
                    </div>    
<!--Aho-2-StdCntXfch Imprimir, Cancelar, Salir-->                
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
<!--*****************************************************************************************************************************************************************************************************************-->
<!--Aho-2-VrifcSlds Cuenta Ahorros-->
            <div class="panel panel-success">
                <div class="panel-heading">Aho-2-VrifcSlds</div>
                <div class="panel-body">   
<!--Aho-2-VrifcSlds Cuenta Ahorros-->
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
<!--Aho-2-VrifcSlds Busqueda de Clientes-->  
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
<!--Aho-2-VrifcSlds Nombre-->  
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Nombre</span>
                                <input type="text" class="form-control" id="name3" placeholder="" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>   
<!--Aho-2-VrifcSlds Disponible-->  
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">Disponible</span>
                                <input type="number" class="form-control" id="name5" placeholder="000.00" min="1000" readonly>
                            </div>                                                                                
                        </div>                             
                    </div>   
<!--Aho-2-VrifcSlds En Compensación--> 
                    <div class="row">   
                        <div class="form-group col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon col">En Compensación</span>
                                <input type="number" class="form-control" id="compens" placeholder="0.00" >
                            </div>                                                                                
                        </div>    
                        <div class="form-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa fa-magnifying-glass"></i>
                            </button>      
                        </div>  
                    </div>   
<!--Aho-2-VrifcSlds Botones, Cancelar y Salir--> 
                    <div class="row justify-items-md-center">                       
                        <div class="col align-items-center" id="modal_footer">                                                  
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