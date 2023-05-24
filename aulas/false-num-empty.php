<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    // false (true/false) - tipo variavel boolean
    // null e empty - valores especiais

    $funcionaro1 = null;
    $funcionaro2 = '';
    $funcionaro3 = false;

    echo '<h3>Valores null</h3>';
    echo '<hr>';
    // valores null
    if (is_null($funcionaro1)) {
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }
    echo '<hr>';

    if (is_null($funcionaro2)) {
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }
    echo '<hr>';

    echo '<h3>Valores empty</h3>';
    echo '<hr>';
    // valores empty
    if (empty($funcionaro1)) {
        echo 'Sim, a variável está vazia';
    } else {
        echo 'Não, a variável não é vazia';
    }
    echo '<hr>';

    if (empty($funcionaro2)) {
        echo 'Sim, a variável é vazia';
    } else {
        echo 'Não, a variável não é vazia';
    }
    echo '<hr>';
    echo '<h3>Valores false</h3>';
    echo '<hr>';
    // valores false
    if (empty($funcionaro3)) {
        echo 'Sim, a variável está vazia';
    } else {
        echo 'Não, a variável não é vazia';
    }
    echo '<hr>';

    echo '<hr>';
    ?>
</body>

</html>
