<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    // Crie um script capaz de produzir atráves de um laço de repetição, um array com 6 elementos numéricos aleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena. Atente-se ao fato de que os números contidos dentro do array não podem ser repetidos.

    $megaSena = array();
    array_push($megaSena, mt_rand(1, 60));
    //print_r($megaSena);
    //echo '<hr>';
    for ($idx = 0; $idx < 6; $idx++) {
        $numeroR = mt_rand(1, 60);
        $arraypush = array_push($megaSena, $numeroR);
        echo $megaSena[$idx];
        echo '<br>';
    }
    //print_r($megaSena);






    ?>
</body>

</html>
