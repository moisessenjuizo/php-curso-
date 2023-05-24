<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <h3>Pós-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a após o incremento é ' . $a++ . ' <br>';
    echo "O valor atualizado é $a";
    ?>

    <h3>Pré-incremento</h3>
    <?php
    $a = 5;
    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a após o incremento é ' . ++$a . ' <br>';
    echo "O valor atualizado é $a";
    ?>

    <h3>Pós-Decremento</h3>
    <?php
    $a = 5;
    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a após o incremento é ' . $a-- . ' <br>';
    echo "O valor atualizado é $a";
    ?>
    <h3>Pré-Decremento</h3>
    <?php
    $a = 5;
    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a após o incremento é ' . --$a . ' <br>';
    echo "O valor atualizado é $a";
    ?>





</body>

</html>
