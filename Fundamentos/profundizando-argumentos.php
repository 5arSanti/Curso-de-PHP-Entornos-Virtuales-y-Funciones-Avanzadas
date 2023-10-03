<?php

    // function sumar_edades($edades = [13, 17, 35]) {
    //     return array_sum($edades);
    // }

    // echo sumar_edades();

    // echo "\n";


    //Trailing coma
    // function multiplicar(
    //     $n1 = 1,
    //     $n2 = 2,
    //     $n3 = 3,
    // ) {
    //     return $n1 * $n2 * $n3;
    // }

    // echo multiplicar();

    

    // class UnaClaseRandom {

    // }
    // class OtraClaseRandom {

    // }

    // function receive_a_class($class = new UnaClaseRandom) {
    //     echo $class::class; //devuelve el nombre de la clase
    // }

    // receive_a_class(new OtraClaseRandom);


    //Primero deben ir los parametros obligatorios y luego los opcionales
    function suma($n1, $n2 = 8) {
        return $n1 + $n2;
    }

    echo suma(1);

    echo "\n";

