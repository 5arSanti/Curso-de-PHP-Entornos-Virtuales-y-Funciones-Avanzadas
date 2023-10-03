<?php

    // $michi = "que bonito michi";

    // echo "<pre>";
    // var_dump($_GET);
    // echo "</pre>";

    $michi = "Que bonito micho";

    function local_scope() {
        echo $_GET["michi"];
    }

    local_scope();