<?php 
 include './carrito.php';
 ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Lista del carrito</h3>
        <?php if(!empty($_SESSION['CARRITO'])) {?>
        <table class="table table-light table-bordered">
            <tbody>
                <tr>
                    <th width="40%">Descripcion</th>
                    <th width="15%">Cantidad</th>
                    <th width="20%">Precio</th>
                    <th width="20%">Total</th>
                    <th width="5%"></th>
                       
                </tr>
                <?php foreach ($_SESSION['CARRITO'] as $indice=>$producto){?>
                <tr>
                    <td width="40%"><?php echo $producto['nombre']?></td>
                    <td width="40%"><?php echo $producto['cantidad']?></td>
                    <td width="40%"><?php echo $producto['precio']?></td>
                </tr>
                <?php }?>
            </tbody>
            
        </table>
        <?php }?>
    </body>
</html>
