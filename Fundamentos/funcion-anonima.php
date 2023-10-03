<?php

    //Funciones anonimas o closure
    // $numbers = [1, 2, 3, 4];

    // $numbers_by_2 = array_map(function($current) {
    //     return $current * 2;
    // }, $numbers);

    // print_r($numbers_by_2) . "\n";


    //use => Srive para utilizar variables en el ambito global al ambito local de la funcion
    $michi = "Mr.Michi";

    $change_michi_name = function () use ($michi) {
        echo $michi;
    };

    $change_michi_name();