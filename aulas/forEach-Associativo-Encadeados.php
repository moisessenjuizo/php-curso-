<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    // $funcionarios = array(
    //     array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => '14/04/1997'),
    //     array('nome' => 'Maria', 'salario' => 3000),
    //     array('nome' => 'Julia', 'salario' => 5000)
    // );

    // echo '<pre>';
    // print_r($funcionarios);
    // echo '</pre>';

    // foreach ($funcionarios as $idx =>  $funcionario) {
    //     foreach ($funcionario as $idx2 => $valor) {
    //         echo "$idx2 - $valor <br>";
    //     }
    //     echo '<hr>';
    // }


    // $musicas = array(
    //     array('Musica' => 'Tell Em', 'Qualidade' => 'Muito boa', 'Vou ouvir' => 'Não'),
    //     array('Musica' => 'Hitchback', 'Qualidade' => 'mais ou menos'),
    //     array('Musica' => 'Miss the Rage', 'Qualidade' => 'Muito ruim'),
    //     array('Musica' => 'Collard Greens', 'Qualidade' => 'Muito very')
    // );

    // foreach ($musicas as $dix => $music) {
    //     print_r($music); // musicas e music são arrays

    //     foreach ($music as $dix2 => $valor) { // aqui eu transformo o array
    //         echo " (dix) $dix - (dix2) $dix2 - (valor) $valor <hr>";
    //     }
    // }







    $charts = array(
        array('Cantor' => 'Doja Cat', 'Musica' => 'Attention'),
        array('Cantor' => 'Gunna', 'Musica' => 'Back to the moon'),
        array('Cantor' => 'Gunna', 'Musica' => 'back at it'),
        array('Cantor' => 'Gracie Abrams', 'Musica' => 'Unsteady'),
        array('Cantor' => 'Gracie Abrams', 'Musica' => '405'),
        array('Cantor' => 'ATTEZ', 'Musica' => 'BOUNCY (K-HOT CHILLI PEPPERS)'),
        array('Cantor' => 'Gunna', 'Musica' => 'ca$h $hit'),
    );

    foreach ($charts as $idx => $cantores) {
        // print_r($cantores);
        // echo '<br>';

        foreach ($cantores as $idx2 => $musicas) {
            // echo "ID: $idx - (associativo) $idx2 - (conteudo) $musicas<br>";
            echo "$idx2 - $musicas<br/>";
        }
        echo '<hr>';
    }










    ?>
</body>

</html>
