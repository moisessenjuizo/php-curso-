<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $itens = array('Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira', 'Lulu');
    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    foreach ($itens as $item) {
        echo "$item";

        if ($item == "Mesa") {
            echo '(*Compre uma mesa e ganhe 25% de desconto na próxima.)';
        }
        echo '<br>';
    }








    ?>
</body>

</html>
