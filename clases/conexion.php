<?php 
//  class Conexion extends PDO { 
//    private $tipo_de_base = 'mysql';
//    private $host = 'localhost';
//    private $nombre_de_base = 'parking';
//    private $usuario = 'root';
//    private $contrasena = ''; 
//    public function __construct() {
//       //Sobreescribo el método constructor de la clase PDO.
//       try{
//          parent::__construct("{$this->tipo_de_base}:dbname={$this->nombre_de_base};host={$this->host};charset=utf8", $this->usuario, $this->contrasena);
//       }catch(PDOException $e){
//          echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
//          exit;
//       }
//    } 
//  } 

// $pps = $con->getConexion()->prepare("SELECT *  FROM Persona");

//       $pps->execute();

//       echo json_encode(['Persona'=>$pps->fetchAll(PDO::FETCH_ASSOC)]);

require_once 'setting.php';

class Conexion{
   private $conector = null;

   public function __construct()
   {

         try{
            $this->conector = new PDO("sqlsrv:server=".SERVIDOR.";database=".DATABASE, USUARIO, PASSWORD);

            return $this->conector;
         }
         catch(PDOException $e){
               echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
         }

         
   }
}

?>