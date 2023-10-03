<?php 

    function get_country_name_switch($country) {
        $name = "";

        switch ($country) {
            case "MX": $name = "Mexico"; break;
            case "COL": $name = "Colombia"; break;
            case "EUA": $name = "Estado Unidos de America"; break;
            default: $name = "No hay pais"; break;
        }
        return $name;
    }

    echo get_country_name_switch("SA") . "\n";

    function get_country_name_match($country) {
        return match($country) {
            "MX" => "Mexico",
            "COL" => "Colombia",
            "EUA" => "Estado Unidos",
            default => "No hay pais"
        };
    }

    echo get_country_name_match("COL") . "\n";