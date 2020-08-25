<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="RESOURCES/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="http://code.jquery.com/jquery-latest.js"></script> 
        <script src="https://use.fontawesome.com/bc365d37bc.js"></script>
    </head>
    <body>
<div class="container-fluid "></div> 
   
           <header class="header_contacto">
                <h1>Restaurante Antojitos</h1>  
            </header>
            <div class="clearfix"></div>
     
                <nav class="navbar navbar-default">         
            <!--NavBar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                 <nav class="menu menu--iris">
                      <ul class="nav navbar-nav menu__list">
                <li class="menu__item menu__item--current">
                <a class="menu__link" href="index.php">Inicio</a>
                 </li>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="menu__item">
                            <a class="menu__link" href="carta-entrada.php" >Carta <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="contacto.php">Contacto</a>
                        </li
                         </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            </nav>
                </nav>
          <!--Parallax-->
                      
          <div class="banner__contacto">
              <div class="banner__descrition">
                  <h1 class="cd">Comida deliciosas</h1>
                  <p class="letras"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                           </p>
                         <a class="botonre" href="reserva.php">Reserva Tu Mesa</a>
                            
                                                  
              </div> 
                   </div>
            <!--Formulario-->
            
             <section class="contact-w3ls" id="contact">
            <div class="container">
                <div id="div1" class="col-lg-6 col-md-6 col-sm- contact-w3-agile2">
                    <div class="contact-agileits">
                        <h4>Contacta con nosotros</h4>
                        <p class="contact-agile2">Inscribíte a nuestros boletines</p>
                        <form  method="post" name="sentMessage" id="contactForm" >
                           
                        <div class="control-group form-group">
                                <label class="contact-p1">Nombres</label>
                                <input type="text" class="form-control" name="Nombres" id="txtNombres" required >
                                <p class="help-block"></p>

                            </div>	
                            <div class="control-group form-group">

                                <label class="contact-p1">Telefono:</label>
                                <input type="text" class="form-control" name="Telefono" id="txtTelefono" required >
                                <p class="help-block"></p>

                            </div>
                            <div class="control-group form-group">

                                <label class="contact-p1">Email</label>
                                <input type="mail" class="form-control" name="Email" id="txtEmail"required  >
                                <p class="help-block"></p>

                            </div>


                            <input type="submit" name="btn2" value="Send Now" class="btn btn-primary" >	
                
                        </form>


                    </div>
                </div>
                <div id="div2"class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1">
                    <h4>visitanos</h4>
                    <p class="contact-agile1"><strong>telf :</strong># 354625</p>
                    <p class="contact-agile1"><strong>mail :</strong> <a href="Restaurante_Antojitos@gmail.com">Restaurante_Antojitos@gmail.com</a></p>
                    <p class="contact-agile1"><strong>Direccion :</strong>Espigón Miraflores, Lima 18, Circuito de Playas, Miraflores</p>

                    <iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.7210458504623!2d-77.03837878518664!3d-12.13122899141107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b7df787897b7%3A0xe289e2475eaa605d!2sLa%20Rosa%20N%C3%A1utica!5e0!3m2!1ses-419!2spe!4v1590118414808!5m2!1ses-419!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="clearfix"></div>
            </div>
      

                                           <?php
    if(isset($_POST['btn2'])){
   include "conectar.php";
   $Nombres= $_POST['Nombres'];
   $Telefono= $_POST['Telefono'];
   $Email= $_POST['Email'];
          mysqli_query($conexion,("INSERT INTO clientes(CodClien,Nombres,Telefono,Email)
             VALUES (default,'$Nombres','$Telefono','$Email')"));
                    
             } else {
              echo 'Error insertar';   
}
             ?>
                 
  </section>
            
            <!--
 <footer class="pie">
           <div class="social-btns social">
            <a class="btn facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="btn twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="btn instagram" href="#"><i class="fa fa-instagram"></i></a>
            <a class="btn youtube" href="#"><i class="fa fa-youtube"></i></a>
        </div>
        </footer>
                    --> 
     <div class="copy">
            <p>© 2020 La cocina. Todos los derechos reservados | Diseñado por <a href="index.php">Grupo UTP</a> </p>
        </div>
            
        <script src="main.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   

    </body>
    
</html>