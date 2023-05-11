<?php

class Produto {
    var $Descricao;
    var $Preco;
    var $Quantidade;
    var $Nome;

    function ImprimeEtiqueta(){
        print 'Preço: ' . $this-> Preco. "<br>";
        print 'Quantidade: ' . $this-> Quantidade. "<br>";
        print 'Descrição: ' . $this-> Descricao. "<br><br>";
        print 'Nome: ' . $this-> Nome. "<br><br>";
    
    }
}

?>