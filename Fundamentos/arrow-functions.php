<?php

    $cajero = 0;

    $add_cajero = fn($add) => $cajero + $add;

    $add_cajero(5);


    echo "\n";

    $edades = [5,21,50,9,18];

    $mares_de_edad = array_filter($edades, function($item) { 
        return $item >= 18;
    });
    
    $mares_de_edad = array_filter($edades, fn($item) => $item >= 18);


    print_r($mares_de_edad);