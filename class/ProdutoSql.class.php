<?php
class produtoSql extends Conexao {

    public $con;

    public function __construct() {
        $this->con = Conexao::getConnection();
    }

    //funcao para fazer select na tabela
    public function Insert($tb_produto) {
        $query = "INSERT INTO tb_produto (id_produto, tx_produto, id_tipo, nf_valor_compra, nf_valor_venda  )
	                        VALUES (:id_produto, :tx_produto, :id_tipo, :nf_valor_compra, :nf_valor_venda )";
        try {
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':id_produto', $produto->getIdproduto());
            $stmt->bindValue(':tx_produto', $produto-> getTxProdut());
            $stmt->bindValue(':id_tipo', $produto->getIdTipo());
            $stmt->bindValue(':nf_valor_compra', $produto->getValorCompra());
            $stmt->bindValue(':nf_valor_venda', $produto->getValorVenda());
            return $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}