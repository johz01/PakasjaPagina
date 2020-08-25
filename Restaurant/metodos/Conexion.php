  <?php

  class conectar{
      private $servidor="localhost";
      private $usuario="root";
      private $bd="res";
      private $password="";
      
      public function conexion(){
          $conexion= mysqli_connect($this->servidor,
          $this->usuario,
          $this->password,
          $this->bd);
          return $conexion;
      }
  }
  $obj = new conectar();
  if ($obj->conexion()){
  echo '';
  }else{
      echo '';
  }
          
  /* este es lo normal para conectar
   * $conexion = mysqli_connect("localhost","root","","res");
if(!$conexion){
    echo ' ';
    } else {
        echo ' ';        
}*/
?>
