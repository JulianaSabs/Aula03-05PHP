<?php
include_once "produto.php";
include_once "fornecedor.php";

$fornecedor = new Fornecedor();

$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Bom Gosto Alimentos S.A';
$fornecedor->Endereco = 'Rua Ipi ranga';
$fornecedor->Cidade = 'Poço de Caldas';

$produto = new Produto();

$produto->Codigo = 462;
$fornecedor->Descricao = 'Doce de Pêssego';
$fornecedor->Preco = 1.24;
$fornecedor->Fornecedor = $fornecedor;

echo 'Código'.$produto->Codigo. "<br>";
echo 'Descrição'.$produto->Descricao. "<br>";
echo 'Código'.$produto->Fornecedor->Codigo. "<br>";
echo 'Razão Social'.$produto->Fornecedor->RazaoSocial. "<br>";


$produto->Descricao. "<br>";
$produto->Fornecedor->Codigo. "<br>";
$produto->Fornecedor->RazaoSocial. "<br>";

?>