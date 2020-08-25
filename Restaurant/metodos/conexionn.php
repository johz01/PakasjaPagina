<?php
$servidor="mysql:dbname=bdrestaurante;host=localhost";
try{
    $pdo=new PDO($servidor,"root","",array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    echo"<script>alert('Conectado...')</script>";
}
catch(PDOException $e){
    echo"<script>alert('error...')</script>";
}
?>

