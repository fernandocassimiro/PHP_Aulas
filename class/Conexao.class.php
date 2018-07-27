<?php

class Conexao {

    public $con = NULL;
    /*SE QUISERMOS UTILIZAR OUTRO BANCO DE DADOS DEVEMOS APENAS MUDAR ESTE ATRIBUTO*/
    public $dbType = "mysql";
    public $host   = "localhost";
    public $user   = "root";
    public $pass   = "";
    public $db     = "db_empresa";

    public $persistencia = false;

    public $x;

    /*PODE SER TROCADO POR __construct do PHP5 sem problemas*/
    public function __construct($persistencia = false){
        if($persistencia != false) { $this->persistencia = true; }

        $this->x="asfd";

    }

    public function getConnection(){
        try{

            $this->con = new PDO($this->dbType.":host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);

            /*
                ESTA PROPRIEDADE INDICA COMO O PDO VAI RETORNAR OS
                ERROS SQL NO MODO PDO::ERRMODE_WARNING O RETORNO DO
                ERRO É IGUAL AO QUE VEMOS SEM A UTILIZAÇÃO DO PDO
            */
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