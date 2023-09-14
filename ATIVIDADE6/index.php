<!DOCTYPE html>
<html>
<head>
    <title>Compra na Feira</title>
</head>
<body>
    <?php
    // Valores dos produtos por Kg
    $preco_macas = 4.5;
    $preco_melancia = 2.0;
    $preco_laranja = 3.0;
    $preco_repolho = 2.5;
    $preco_cenoura = 1.0;
    $preco_batatinha = 2.0;

    // Quantidade de cada produto em Kg comprada por Joãozinho
    $quantidade_macas = 2.5;
    $quantidade_melancia = 3.0;
    $quantidade_laranja = 1.5;
    $quantidade_repolho = 2.0;
    $quantidade_cenoura = 2.5;
    $quantidade_batatinha = 2.0;

    // Cálculo do valor gasto em cada produto
    $gasto_macas = $preco_macas * $quantidade_macas;
    $gasto_melancia = $preco_melancia * $quantidade_melancia;
    $gasto_laranja = $preco_laranja * $quantidade_laranja;
    $gasto_repolho = $preco_repolho * $quantidade_repolho;
    $gasto_cenoura = $preco_cenoura * $quantidade_cenoura;
    $gasto_batatinha = $preco_batatinha * $quantidade_batatinha;

    // Cálculo do valor total da compra
    $total_compra = $gasto_macas + $gasto_melancia + $gasto_laranja + $gasto_repolho + $gasto_cenoura + $gasto_batatinha;

    // Dinheiro disponível para Joãozinho
    $dinheiro_disponivel = 50.0;

    // Verifica se o dinheiro é suficiente
    if ($total_compra == $dinheiro_disponivel) {
        echo '<p style="color: green;">Saldo para compras esgotado.</p>';
    } elseif ($total_compra < $dinheiro_disponivel) {
        $saldo = $dinheiro_disponivel - $total_compra;
        echo '<p style="color: blue;">Joãozinho ainda pode gastar R$ ' . $saldo . '.</p>';
    } else {
        $falta_dinheiro = $total_compra - $dinheiro_disponivel;
        echo '<p style="color: red;">Faltam R$ ' . $falta_dinheiro . ' para pagar a conta.</p>';
    }

    echo '<p>Valor da compra: R$ ' . $total_compra . '</p>';
    ?>

</body>
</html>
