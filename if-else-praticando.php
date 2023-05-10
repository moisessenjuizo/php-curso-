<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $usuario_cartao = true;
    $valor_compra = 50;
    $valor_frete = 50;

    $desconto_frete = true;

    if ($usuario_cartao && $valor_compra >= 400) {
        $valor_frete = 0;
    } else if ($usuario_cartao && $valor_compra >= 300) {
        $valor_frete = 10;
    } else if ($usuario_cartao && $valor_compra >= 100) {
        $valor_frete = 25;
    } else {
        $valor_frete = 'Você não recebeu desconto no frete.';
        $desconto_frete = false;
    }

    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?
        <?php
        if ($usuario_cartao) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
        ?>
    </p>
    <p>Valor da compra: <?= $valor_compra ?> </p>
    <p>Recebeu desconto no frete?
        <?php
        if ($desconto_frete) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
        ?>
    </p>
    <p>Valor do frete: <?= $valor_frete ?> </p>






</body>

</html>
