<?php

    class Dummy {
        public $un_valor = "Cualquier cosa";
    }

    function suma(Dummy $n1, int $n2) : string {
        return $n1->un_valor;
    }

    echo suma(new Dummy, 2);

    echo "\n";