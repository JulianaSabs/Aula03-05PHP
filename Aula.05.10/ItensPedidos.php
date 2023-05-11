<?php

 class ItensPedidos {

    var $QtdItem;
    var $ValorUnidade;

    function ImprimeItens(){
        print 'Quantidade de itens: ' . $this->QtdItem. "<br>";
        print 'Valor Unidade: ' . $this-> ValorUnidade. "<br>";
    }

 }




 ?>