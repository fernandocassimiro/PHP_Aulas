<?php

class Conexao {

    public $con = NULL;
    public $dbType = "mysql";
    public $host   = "localhost";
    public $user   = "root";
    public $pass   = "";
    public $db     = "db_empresa";

    public $persistencia = false;

    public $x;

   
    public function __construct($persistencia = false){
        if($persistencia != false) { $this->persistencia = true; }

        $this->x="asfd";

    }

    public function getConnection(){
        try{

            $this->con = new PDO($this->dbType.":host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);

            
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $this->con;

        }catch(PDOException $ex){
            echo "ERRO:".$ex->getMessage();
        }
    }

    public function Close(){
        if($this->con != NULL){
            $this->con = NULL;
        }
    }
}

?>
