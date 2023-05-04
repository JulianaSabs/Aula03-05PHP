<?php

 class Produto{
    var $Codigo;
    var $Descricao;
    var $Quantidade;
    var $Preco;

function ImprimirTiquete(){
    print 'Código'.$this -> Codigo."<br>";
     print 'Descrção'.$this -> Descricao."<br>";
}
 }