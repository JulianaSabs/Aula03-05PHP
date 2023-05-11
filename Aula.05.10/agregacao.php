<?php
include_once "Pedido.php";
include_once "ItensPedidos.php";
include_once "Produto.php";


$produto1 = new Produto;
$produto2 = new Produto;
$produto3 = new Produto;
$produto4 = new Produto;

$produto1->Descricao = 'Fruta';
$produto1->Nome = 'Ameixa';
$produto1->NroPedido = 1;
$produto1->DataPedido = '2023-08-09';
$produto1->QtdItem = 2;
$produto1->ValorUnidade = 1.40;
$produto1->Preco = 2.80;



$produto2->Descricao = 'Fruta';
$produto2->Nome = 'Laranja';
$produto2->NroPedido = 2;
$produto2->DataPedido = '2023-08-09';
$produto2->QtdItem = 2;
$produto2->ValorUnidade = 1.40;
$produto2->Preco = 2.80;


$produto3->Descricao = 'Fruta';
$produto3->Nome = 'Abacaxi';
$produto3->NroPedido = 3;
$produto3->DataPedido = '2023-08-09';
$produto3->QtdItem = 2;
$produto3->ValorUnidade = 1.40;
$produto3->Preco = 2.80;


$produto4->Descricao = 'Fruta';
$produto4->Nome = 'Uva';
$produto4->NroPedido = 4;
$produto4->DataPedido = '2023-08-09';
$produto4->QtdItem = 2;
$produto4->ValorUnidade = 1.40;
$produto4->Preco = 2.80;




?>