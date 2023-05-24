<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    define('BD_URL', 'endereco_bd_dev');
    define('BD_USUARIO', 'usuario_dev');
    define('BD_SENHA', 'senha_dev');

    //  BD_URL é uma variavel constante e não pode ser alterada, se for alterada irá dar erro.

    echo BD_URL . '<br>';
    echo BD_USUARIO . '<br>';
    echo BD_SENHA . '<br>';

    ?>

</body>

</html>
