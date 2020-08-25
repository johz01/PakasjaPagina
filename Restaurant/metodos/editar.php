<?php
require_once 'Conexion.php';
$obj=new conectar();
$conexion=$obj->conexion();
$id=$_GET['id'];
$sql="select * from registroMesa where id='$id'";
$result= mysqli_query($conexion,$sql);
$ver=mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>TABLE RESERVATION</title>
        <link href="../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/CSS/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/CSS/custom-styles.css" rel="stylesheet" type="text/css"/>
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
                            <a  href="mostrar.php"><i class="fa fa-home"></i>Regresa</a>
                            <a  href="../index.php"><i class="fa fa-home"></i>inicio</a>
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
                                       
                                       
                                        <input type="text" hidden="" value="<?php echo $id ?>" name="id">
                                           <div class="form-group">
                                               <label>Reserva</label>
                                            <input  name="Persona" class="form-control"  value="<?php echo $ver[1]?>">
                                               
                                          
                                        </div>
                                        <div class="form-group" >
                                            <label>Nombre</label>
                                            <input type="text" name="Nonname" class="form-control"  value="<?php
                                         echo $ver[2]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido</label>
                                            <input type="text" name="Apename" class="form-control"  value="<?php
                                         echo $ver[3]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control"  value="<?php
                                         echo $ver[4]?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Numero Telefonico</label>
                                            <input name="phone" type ="text" class="form-control"  value="<?php
                                         echo $ver[5]?>">
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
                                            <div>
                                            <input  name="mesas"  class="form-control" required value="<?php echo $ver[6]?>">
                                              
                                        </div>

                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Requiere</label>
                                            <input  name="Requiere" class="form-control"  value="<?php echo $ver[7]?>">
                                              
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Plan</label>
                                            <input  name="Plan" class="form-control" value="<?php echo $ver[8]?>">
                                              
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Hora</label>
                                            <input name="Hora" type ="time" class="form-control" value="<?php echo $ver[9]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Dia</label>
                                            <input name="Dia" type ="date" class="form-control" value="<?php echo $ver[10]?>">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="well">
                                  
                                   
                                    <input type="submit" name="btn1" class="btn btn-primary" value="modificar"  name="btn1">
                                  
                                    </form>
                                    
           <?php  
        if(isset($_POST['btn1'])){
        require_once './Conexion.php';
        require_once './metodos.php';
       
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
    $id=$_POST['id'];
    
   $datos=array(  
      
       $Persona,  
       $Nonname, 
       $Apename,
       $email,
       $phone,
       $mesas,
       $Requiere,
       $Plan,
       $Hora,
       $Dia,
         $id, );
   $obj=new metodos();
        if($obj->ActualizarDatosClientes($datos)==1){
               echo 'editado ';
               
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
  
   <script src="../RESOURCES/js/particles.js"></script>
    
      <script src="../RESOURCES/js/app.js"></script>
      
    </body>
</html>
