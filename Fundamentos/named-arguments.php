<?php
    /**
     * Saluda dependiendo de los argumentos
     *
     * @param string $name
     * @param int $age
     * @param string $country
     * @return string
     */
    function get_person_info($name, $age, $country) {
        echo "Tengo la informacion $name, tiene $age años y vive en $country";
    }

    get_person_info("Santi", 18, "Colombia");

    echo "\n";

    get_person_info(
        age: 18,
        country: "Colombia",
        name: "Santi",
    );
