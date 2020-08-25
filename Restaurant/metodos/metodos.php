<?php
class metodos{
    public function mostrarDatos($sql){
        $c=new conectar();
        $conexion=$c->conexion();
    $result= mysqli_query($conexion,$sql);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    
    public function insertarDatosClientes($datos){
        $c=new conectar();
        $conexion=$c->conexion();
        
        $sql="insert into registroMesa(id,Persona,Nonname,Apename,email,phone,mesas,Requiere,Plan,Hora,Dia)
            values('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]',
                '$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]')";
        return $result= mysqli_query($conexion,$sql);
                
}

public function ActualizarDatosClientes($datos){
        $c=new conectar();
        $conexion=$c->conexion();
        
        $sql="update  registroMesa set Persona='$datos[0]',
                        Nonname='$datos[1]',
                        Apename='$datos[2]',
                        email='$datos[3]',
                        phone='$datos[4]',
                        mesas='$datos[5]',
                        Requiere='$datos[6]',
                        Plan='$datos[7]',
                        Hora='$datos[8]',
                        Dia='$datos[9]'
                       where id='$datos[10]'";
              
        return $result= mysqli_query($conexion,$sql);
}
public function EliminarDatosClientes($id){
        $c=new conectar();
        $conexion=$c->conexion();
$sql="delete from registroMesa where id='$id'";
return $result= mysqli_query($conexion,$sql);
}
}
?>