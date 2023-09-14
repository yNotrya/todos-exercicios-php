<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Parcelas</title>
</head>
<body>
    <?php
    // Valor à vista da moto
    $valorMotoAVista = 8654.00;

    // Taxa de juros inicial (1.5%)
    $taxaJuros = 0.015;

    // Opções de número de parcelas
    $parcelas = [24, 36, 48, 60];

    // Calcula e exibe o valor das parcelas para cada opção
    foreach ($parcelas as $numParcelas) {
        // Calcula o valor da parcela
        $valorParcela = ($valorMotoAVista / $numParcelas) * (1 + $taxaJuros);

        echo "Para $numParcelas vezes, o valor da parcela é R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";

        // Aumenta a taxa de juros em 0.5%
        $taxaJuros += 0.005;
    }
    ?>
</body>
</html>
