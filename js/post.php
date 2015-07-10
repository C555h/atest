<?php


class Test {
    public $items = [];
    public $nome = "asda";
    
    public function __construct() {
        $i = new stdClass();
        $i->asd = 123;
        $i->desda = 'dasd';
        $this->items[] = $i;
    }

}
$o = new stdClass();
$o->asd = 123;
$o->items = [new Test, new Test];http://localhost/

echo json_encode($o->items);
