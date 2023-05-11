<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    //gettype() -> retorna o valor da variavel
    $valor = true;
    // $valor2 = (int) $valor;
    // $valor3 = 'Jose';

    $valor2 = (string) $valor;



    echo $valor . ' ' .  gettype($valor);
    echo '<br>';
    echo $valor2 . ' ' . gettype($valor2);

    ?>


</body>

</html>
