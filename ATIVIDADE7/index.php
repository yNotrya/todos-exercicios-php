<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Juros</title>
</head>
<body>
    <?php
    // Valor à vista do carro
    $valorCarroAVista = 22500.00;

    // Valor de cada parcela
    $valorParcela = 489.65;

    // Número de parcelas
    $numeroParcelas = 60;

    // Cálculo dos juros
    $juros = ($valorParcela * $numeroParcelas) - $valorCarroAVista;

    echo 'Mariazinha pagará R$ ' . number_format($juros, 2, ',', '.') . ' de juros em comparação ao valor à vista do carro.';
    ?>
</body>
</html>
