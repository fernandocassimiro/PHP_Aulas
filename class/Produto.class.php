<?php
class produto {

    public $id_produto;
    public $tx_produto;
    public $id_tipo;
    public $nf_valor_compra;
    public $nf_valor_venda;


    public function setIdProduto($id_produto) {
        $this->id_produto = $id_produto;
    }

    public function getIdproduto() {
        return $this->id_produto;
    }

    public function setTxProduto($tx_produto){
        $this->tx_produto = $tx_produto;
    }

    public function getTxProduto(){
        return $this->tx_produto;
    }

    public function setIdTipo ($id_tipo){
        $this->id_tipo = $id_tipo;
    }

    public function getIdTipo (){
        return $this->id_tipo;
    }

    public function setValorCompra ($nf_valor_compra){
        $this->bairro = $nf_valor_compra;
    }

    public function getValorCompra (){
        return $this->nf_valor_compra;
    }
    }

    public function setValorVenda ($nf_valor_Venda){
    $this->bairro = $nf_valor_compra;
    }

    public function getValorVenda (){
    return $this->nf_valor_venda;
}


}
?>