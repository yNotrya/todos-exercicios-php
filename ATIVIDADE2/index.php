<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        // Verifica se o número é divisível por 2
        if ($numero % 2 == 0) {
            echo "Valor divisível por 2";
        } else {
            echo "O valor não é divisível por 2";
        }
    }
    ?>