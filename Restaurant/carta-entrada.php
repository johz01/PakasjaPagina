<?php
session_start();
require_once 'conexion.php';
if (isset($_POST['agregar'])) {
    if (isset($_SESSION['add_carro'])) {
        $item_array_id_cart = array_column($_SESSION['add_carro'], 'item_id');
        if (!in_array($_GET['id'], $item_array_id_cart)) {

            $count = count($_SESSION['add_carro']);
            $item_array = array(
                'item_id' => $_GET['id'],
                'item_nombre' => $_POST['hidden_nombre'],
                'item_precio' => $_POST['hidden_precio'],
                'item_cantidad' => $_POST['cantidad'],
            );

            $_SESSION['add_carro'][$count] = $item_array;
        } else {
            echo '<script>alert("El Producto ya existe!");</script>';
        }
    } else {
        $item_array = array(
            'item_id' => $_GET['id'],
            'item_nombre' => $_POST['hidden_nombre'],
            'item_precio' => $_POST['hidden_precio'],
            'item_cantidad' => $_POST['cantidad'],
        );

        $_SESSION['add_carro'][0] = $item_array;
    }
}
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        foreach ($_SESSION['add_carro'] AS $key => $value) {
            if ($value['item_id'] == $_GET['id']) {
                unset($_SESSION['add_carro'][$key]);
                echo '<script>alert("El Producto Fue Eliminado!");</script>';
                echo '<script>window.location="index.php";</script>';
            }
        }
    }
}
?>

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
        <div class="container-fluid " >
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
            
            <h3 class="titulos_carta" style="text-align: center;background-color: #ecf0f1" >Menú</h3>
           
            <!--Navegation-Carta-->
            <br>
            <div class="row">
                <?php
                $sql = "SELECT * FROM tbproduct";
                $resul = mysqli_query($conexion, $sql);
                if (mysqli_num_rows($resul) > 0) {
                    while ($row = mysqli_fetch_array($resul)) {
                        ?>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <form method="post" action="carta-entrada.php?action=add&id=<?php echo $row['id']; ?>">
                                    <?php ?>
                                    <div class="card-body" align="center">
                                        <img src="<?php echo $row['img']; ?>" class="img-responsive" height="160" width="246"/><br />
                                        <h4 class="text-info"><?php echo $row['name']; ?></h4>
                                        <h4 class="text-danger">$<?php echo $row['precio']; ?></h4>
                                        <input type="text" name="cantidad" class="form-control" value="1" />
                                        <input type="hidden" name="hidden_nombre" value="<?php echo $row['name']; ?>" />
                                        <input type="hidden" name="hidden_precio" value="<?php echo $row['precio']; ?>" />
                                        <input type="submit" name="agregar" style="margin-top:5px;" class="btn btn-success" value="Agregar al carrito" />
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php
                    }
                }
                ?>
                <br>
            </div>
            <div style="clear:both"></div>
            <br />
            <h3>Detalle de la Orden</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Nombre</th>
                        <th width="10%">Precio</th>
                        <th width="20%">Cantidad</th>
                        <th width="15%">Total</th>
                        <th width="5%">Action</th>
                    </tr>
                    <?php
                    if (!empty($_SESSION["add_carro"])) {
                        $total = 0;
                        foreach ($_SESSION["add_carro"] as $keys => $values) {
                            ?>
                            <tr>
                                <td><?php echo $values["item_nombre"]; ?></td>
                                <td>S/.<?php echo $values["item_precio"]; ?></td>
                                <td><?php echo $values["item_cantidad"]; ?></td>
                                <td>S/.<?php echo number_format($values["item_cantidad"] * $values["item_precio"], 2); ?></td>
                                <td><a href="carta-entrada.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                            </tr>
                            <?php
                            $total = $total + ($values["item_cantidad"] * $values["item_precio"]);
                        }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <td align="right">$ <?php echo number_format($total, 2); ?></td>
                            <td></td>
                        </tr>
                        <?php
                    } else {
                        ?>
                        <tr>
                            <td colspan="4" style="color: red" align="center"><strong>No hay Producto Agregado!</strong></td>
                        </tr>
                        <?php
                    }
                    
                    ?>
                </table>
            </div>




            <div class="copy">
                <p>© 2020 La cocina. Todos los derechos reservados | Diseñado por <a href="index.php">Grupo UTP</a> </p>
            </div>
        </div> 

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
</body>
</html>