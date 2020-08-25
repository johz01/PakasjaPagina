<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="RESOURCES/css/style.css" rel="stylesheet" type="text/css"/>
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
            <!--Carousel-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">

                        <img src="RESOURCES/imgs/i1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="RESOURCES/imgs/i2.jpg" class="d-block w-100" alt="...">
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--Navegation-Carta-->
            <div class="barra-carta" >
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link " href="carta-entrada.php" target="carta-entrada.php">Entradas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="carta-fondos.php">Fondos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="carta-postre.php" tabindex="-1" aria-disabled="true">Postres</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h3 class="titulos_carta">Postres</h3>
                        <!--Listta de postes-->
                        <div class="lista-postres" >
                            <div class="row" >
                                <div class="col-4 offset-lg-2 ">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Torta de chocolate</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Flan</a>
                                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Gelatina</a>
                                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Keke</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><img src="RESOURCES/imgs/p1.jpg" alt=""/></div>

                                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><img src="RESOURCES/imgs/p2.jpg" alt=""/></div>
                                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><img src="RESOURCES/imgs/p3.jpg" alt=""/></div>
                                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><img src="RESOURCES/imgs/p4.jpg" alt=""/></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

             <div class="copy">
            <p>© 2020 La cocina. Todos los derechos reservados | Diseñado por <a href="index.php">Grupo UTP</a> </p>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
    </body>
</html>


