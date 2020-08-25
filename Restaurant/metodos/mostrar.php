<?php
require_once 'Conexion.php';
require_once 'metodos.php';
?>
<html>
    <head>
       <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
        <link href="../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/CSS/custom-styles.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/CSS/font-awesome.css" rel="stylesheet" type="text/css"/>
         <link href="../RESOURCES/css/tablaestilos.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        
        <title>mostrar</title>
        
    </head>
    
    <body>
        
        <div id="wrapper">
            
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    
                    <ul class="nav" id="main-menu">
                        <li>
                            <div id="particles-js"></div>
                            <a  href="../reserva.php"><i class="fa fa-home"></i>registrar</a>
                            <a  href="mostrar.php"><i class="fa fa-home"></i>mostrar</a>
                            <a  href="../reserva.php"><i class="fa fa-home"></i>Regresar</a>

                        </li>
                    </ul>
                                           

                </div>
                                        

            </nav>
                                 

            <div class="imag"id="page-wrapper" >
                
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header"> Registro de Mesa</h1>
                            <table class="tabla">
                           
                                         
                                                <tr class="form-group">  
                                               <td >Codigo    </td>
                                               <td>Persona  </td>
                                               <td>Nombre  </td>
                                               <td>Apellido   </td>
                                               <td>Email   </td>
                                               <td>Telefono  </td>
                                               <td>Mesa para   </td>
                                               <td>Requiere   </td>
                                               <td>Plan   </td>
                                               <td>Hora   </td>
                                               <td>Dia / Fecha    </td>
                                                </tr>
                             
                                
                         <?php                   
        $obj =new metodos();
        $sql="select * from registroMesa";
        $datos=$obj->mostrarDatos($sql);
        foreach ($datos as $key){
     
           ?> 
                            <tr>
                                <td><?php echo $key['id'];?></td>
                                <td><?php echo $key['Persona'];?></td>
                                <td><?php echo $key['Nonname'];?></td>
                                <td><?php echo $key['Apename'];?></td>
                                <td><?php echo $key['email'];?></td>
                                <td><?php echo $key['phone'];?></td>
                                <td><?php echo $key['mesas'];?></td>
                                <td><?php echo $key['Requiere'];?></td>
                                <td><?php echo $key['Plan'];?></td>
                                <td><?php echo $key['Hora'];?></td>
                                <td><?php echo $key['Dia'];?></td>
                           
                                <td>
                                    <a href="editar.php?id=<?php  echo $key['id']?>">
                                    Editar
                                    </a>
                                </td>
                                <td>
                                    <a href="eliminar.php?id=<?php  echo $key['id']?>">
                                    Eliminar
                                    </a>
                                </td>
                     </tr>
        <?php        }
        ?>
                             </table>   
                              </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../RESOURCES/js/particles.js"></script>
    
      <script src="../RESOURCES/js/app.js"></script>
    </body>
</html>