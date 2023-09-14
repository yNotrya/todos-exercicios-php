<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $valor3 = $_POST["valor3"];

        // Calcula a soma
        $resultado = $valor1 + $valor2 + $valor3;

        // Condição 1: Se a primeira variável for maior que 10, escrever em azul
        if ($valor1 > 10) {
            echo '<p style="color: blue;">Resultado da soma: ' . $resultado . '</p>';
        }
        // Condição 2: Se a segunda variável for menor que a terceira, escrever em verde
        elseif ($valor2 < $valor3) {
            echo '<p style="color: green;">Resultado da soma: ' . $resultado . '</p>';
        }
        // Condição 3: Se a terceira variável for menor que a primeira e a segunda variável, escrever em vermelho
        elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            echo '<p style="color: red;">Resultado da soma: ' . $resultado . '</p>';
        }
        // Se nenhuma das condições acima for atendida, escrever em preto
        else {
            echo '<p>Resultado da soma: ' . $resultado . '</p>';
        }
    }
    ?>