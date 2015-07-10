<?php
class Test {
    
    public $asd= 2;
    public $qwe = 1;


    public function __call($name, $arguments) {
        echo $name, ' - ', method_exists($this, $name), 'Z <br>';
    }
    
    
    function testa() {
        echo "testa";
    }

}

$array_fill = array_fill(0, 3, new Test);
$array_fill[0]->asd = 9;
var_dump($array_fill);

$test = new Test();
foreach ($test as $k => $value) {
    echo "Z$k => $value <br>";
}












if (0) {
    require './z/anotacao.php';
    require './z/afazer.php';
    require './z/dados.php';
    require './z/exer.php';

    require './js/js.php';
    require './php.php';
    require './all.php';
}

/**
 * $this->pedido->numeroparcelas - parcela
 * 
 * Pedido calculaTotalValorItems - item
 * Item calculaJuro - juro, parcela
 * Parcela reajustaParcela - pedido, calculaTotalST
 *      calculaTotalST - pedido->idprocesso, item->st, endereco->financiarST
 * Item calculaImpostos - juro
 * Parcela calculaJuro - juro
 * Item calculaItemFrete - pedido

 */