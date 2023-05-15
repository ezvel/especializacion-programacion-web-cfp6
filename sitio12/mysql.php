<?php class MySQL{

  private $conexion;
  private $total_consultas;

  
    public function __construct(){
      
      if(!isset($this->conexion)){
        $this->conexion = mysqli_connect('localhost','root','', 'prueba');
        //mysql_select_db("x",$this->conexion) or die(mysql_error());
      }
      
    }


  public function consulta($consulta){ 
    //$this->total_consultas++; 
    $resultado = mysqli_query($this->conexion,$consulta);
    if(!$resultado){ 
      echo 'ERROR';
      exit;
    }
    return $resultado;
  }

  
  public function consulta($consulta){ 
    //$this->total_consultas++; 
    $resultado = mysqli_query(mysqli_connect("localhost","root","", "prueba"),$consulta);
    if(!$resultado){ 
      echo 'ERROR';
      exit;
    }
    return $resultado;
  }



  public function fetch_array($consulta){
   return mysqli_fetch_array($consulta);
  }

  public function fetch_row($consulta){
   return mysqli_fetch_row($consulta);
  }

  public function num_rows($consulta){
   return mysqli_num_rows($consulta);
  }

  public function getTotalConsultas(){
   return $this->total_consultas; 
  }

}

?>