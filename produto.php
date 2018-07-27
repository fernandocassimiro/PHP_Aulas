<?php
include_once("class/produtoSql.class.php");

//Criando e Instanciando o objeto
$oProduto               = new Produto;
//Atribuindo valores ao objeto
$oProduto->id_produto = $_POST["id_produto"];
$oProduto->tx_produto      = $_POST["tx_produto"];
$oProduto->id_tipo      = $_POST["id_tipo"];
$oProduto->nf_valor_compra      = $_POST["nf_valor_compra"];
$oProduto->nf_valor_venda     = $_POST["nf_valor_venda"];
//chamando a funcao que faz o insert
$oProduto->setProduto();
echo "Produto ". $_POST["tx_produto"] . " cadastrado com sucesso!";
?>