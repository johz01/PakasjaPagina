<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>TABLE RESERVATION</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        
        <title>TABLE RESERVATION</title>
        
    </head>
    
    <body>
        
        <div id="wrapper">
            
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li>
                            <div id="particles-js"></div>
                            <a  href="contacto.php"><i class="fa fa-home"></i>Regresa</a>
                            <a  href="metodos/mostrar.php"><i class="fa fa-home"></i>mostrar</a>

                        </li>
                    </ul>
                </div>
            </nav>
            
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">TABLE RESERVATION</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="panel panel-primary">
                                <div class="panel-heading">PERSONAL INFORMATION</div>
                                <div class="panel-body">
                                    <form action="" name="form" method="post">
                                        <div class="form-group">
                                            <label>Reserva</label>
                                           <!-- la reservas
                                           de la tablaF GGGGGGGGGGGSDFDSF
                                           
                                           
                                           -->
                                            <select name="Persona" class="form-control" required >
                                                <option value selected ></option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" name="Nonname" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido</label>
                                            <input type="text" name="Apename" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Numero Telefonico</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Informacion de reserva</div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Tipos de mesa</label>
                                            <select name="mesas"  class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Mesa para 2">mesa para  2</option>
                                                <option value="Mesa Para 3">Mesa para  3</option>
                                                <option value="Mesa Para 4">Mesa para 4</option>
                                                <option value="Mesa Para 5">Mesa para 5</option>
                                                <option value="Mesa Para 6">Mesa para 6</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Requiere</label>
                                            <select name="Requiere" class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Almuerzo">Reunion</option>
                                                <option value="Casual">Casual</option>
                                                <option value="Celebraciones">Celebracion</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Plan</label>
                                            <select name="Plan" class="form-control"required>
                                                <option value selected ></option>
                                                <option value="Desayuno">Desayuno</option>
                                                <option value="Almuerzo">Almuerzo</option>
                                                <option value="Cena">Cena</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Hora</label>
                                            <input name="Hora" type ="time" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Dia</label>
                                            <input name="Dia" type ="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="well">
                                    <h4><b>Verifica que no eres un bot</b></h4>
                                    <p>Ingrese el siguiente código 
                                        <?php
                                        $Random_code = rand();
                                        echo $Random_code;
                                        ?> </p><br />
                                    <p>Ingrese el código aleatorio<br /></p>
                                    <input  type="text" name="cde"/>
                                    <input type="hidden" name="cd" value="<?php echo $Random_code; ?>" />
                                    <input type="submit" name="btn1" class="btn btn-primary" value="Reserva" name="btn1">
                                  
                                    </form>
                                    
                         <?php                   
             
    if(isset($_POST['btn1'])){
        require_once './metodos/Conexion.php';
        require_once './metodos//metodos.php';
   $Persona= $_POST['Persona'];
   $Nonname= $_POST['Nonname'];
   $Apename= $_POST['Apename'];
   $email= $_POST['email'];
   $phone= $_POST['phone'];
   $mesas= $_POST['mesas'];
   $Requiere= $_POST['Requiere'];
   $Plan= $_POST['Plan'];
   $Hora= $_POST['Hora'];
   $Dia= $_POST['Dia'];
   
   $datos=array('',$Persona,$Nonname,$Apename,$email,$phone,$mesas,$Requiere,$Plan,$Hora,$Dia);
           $obj=new metodos();
           if($obj->insertarDatosClientes($datos)==1){
               echo 'agregado ';
           }else{
               echo 'error';
           }
}          

             ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jv particles.js-->
   <script src="RESOURCES/js/particles.js"></script>
      <script src="RESOURCES/js/app.js"></script>
      
    </body>
</html>

              