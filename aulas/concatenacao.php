<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $nome = 'Henrique';
    $cor = 'azul';
    $idade = 25;
    $atividadepref = 'andar de bike';
    //operador .
    echo 'Olá <strong>' . $nome . '</strong>, eu vi que a sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e gosta de ' . $atividadepref . '.';
    // aspas duplas

    echo '<br/>';

    echo "Olá, $nome, eu vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividadepref ";
    ?>
</body>

</html>
