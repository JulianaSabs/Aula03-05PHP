<?php 

class Pedido{
    var $NroPedido;
    var $DataPedido;

    function ImprimeNumeroeData(){
        print 'Numero Pedido: ' . $this->NroPedido. "<br>";
        print 'DataPedido: ' . $this-> DataPedido. "<br>";
    }

  
}

?>