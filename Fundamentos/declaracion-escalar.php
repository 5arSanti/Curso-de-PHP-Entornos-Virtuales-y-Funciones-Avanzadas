<?php

    function calcular_area_triangulo(int $base, int $altura, string $nombre) {
        return "Hola $nombre, el area de tu nombre es: " . ($base * $altura)/2;
    }

    echo calcular_area_triangulo(12, 10, "Santiago");