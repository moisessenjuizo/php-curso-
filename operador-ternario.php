<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $usuario_cartao = true;
    $valor_compra = 500;
    $valor_frete = 50;

    $desconto_frete = true;

    $valor_frete_aux = $usuario_cartao && $valor_compra >=  400 ? 0 : ($usuario_cartao && $valor_compra >= 300 ? 10 : ($usuario_cartao && $valor_compra >= 100 ? 25 : $valor_frete));

    $desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

    $valor_frete = $valor_frete_aux;

    // if ($usuario_cartao && $valor_compra >= 400) {
    //     $valor_frete = 0;
    // } else if ($usuario_cartao && $valor_compra >= 300) {
    //     $valor_frete = 10;
    // } else if ($usuario_cartao && $valor_compra >= 100) {
    //     $valor_frete = 25;
    // } else {
    //     $valor_frete = 'Você não recebeu desconto no frete.';
    //     $desconto_frete = false;
    // }

    ?>

    <h1>Detalhes do pedido </h1>
    <p>Possui cartão da loja? <?= $usuario_cartao ? 'SIM' : 'NÃO'; ?></p>
    <p>Valor da compra: <?= $valor_compra ?> </p>
    <p>Recebeu desconto no frete?
        <?php // colocando os dados em uma variavel $teste
        $teste =  $desconto_frete ? 'SIM' : 'NÂO';
        echo $teste;
        ?>
    </p>
    <p>Valor do frete: <?= $valor_frete ?> </p>

    <!-- <?php
            // <condição> ? true : false
            // if ($usuario_cartao) {
            //     echo 'Sim';
            // } else {
            //     echo 'Não';
            // }
            ?> -->
    <!-- <?php
            //   if ($desconto_frete) {
            //       echo 'Sim';
            //  } else {
            //     echo 'Não';
            // }
            ?>  -->




</body>

</html>
