<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    $texto = 'curso completo de PHP';

    //string to lower
    echo $texto . '<br>';
    echo strtolower($texto);
    echo '<hr>';

    //string to upper
    echo $texto . '<br>';
    echo strtoupper($texto);
    echo '<hr>';

    //upper case first
    echo $texto . '<br>';
    echo ucfirst($texto);
    echo '<hr>';

    //string length -> quantidade de caracteres
    echo $texto . '<br>';
    echo strlen($texto);
    echo '<hr>';

    //string replace
    $texto_replace = 'O valor total foi de 22.5 reais.';
    echo $texto . '<br>';
    echo str_replace('.', ',', $texto_replace);
    echo '<hr>';

    //string length -> quantidade de caracteres
    echo $texto . '<br>';
    // curso completo de PHP
    echo substr($texto, 0, 14) . ' ...';



    ?>

</body>

</html>
