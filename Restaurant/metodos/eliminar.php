<?php
$id=$_GET['id'];
require_once 'Conexion.php';
require_once 'metodos.php';
  $obj=new metodos();
           if($obj->EliminarDatosClientes($id)==1){
               echo '';
           }else{
               echo '';
           }
           header('Location: mostrar.php');
           
?>

