<?php
session_start();
$mensaje="";
if(!isset($_SESSION['CARRITO'])){
    $producto=array(
        'id'=>$id,
        'nombre'=>$nombre,
        'precio'=>$precio,
        'cantidad'=>$cantidad
    );
    $_SESSION['CARRITO'][0]=$producto;    
}
else{
    $numeroProductos= count($_SESSION['CARRITO']);
    $producto=array(
        'id'=>$id,
        'nombre'=>$nombre,
        'precio'=>$precio,
        'cantidad'=>$cantidad
    );
    $_SESSION['CARRITO'][$numeroProductos]=$producto;
}
$mensaje= print_r($_SESSION,true);


