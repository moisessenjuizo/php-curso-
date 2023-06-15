<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    // $naruto = array('Naruto', 'Sasuke', 'Tenten', 'Jiraya');

    // $idx = 0;

    // while ($idx < count($naruto)) {
    //     echo $naruto[$idx] . "<hr>";
    //     $idx++;
    // }



    // // Array associativo
    // $registros = array(
    //     array('titulo' => 'Titulo Noticia 1', 'conteudo' => 'Conteudo Noticia 1'),
    //     array('titulo' => 'Titulo Noticia 2', 'conteudo' => 'Conteudo Noticia 2'),
    //     array('titulo' => 'Titulo Noticia 3', 'conteudo' => 'Conteudo Noticia 3'),
    //     array('titulo' => 'Titulo Noticia 4', 'conteudo' => 'Conteudo Noticia 4')
    // );
    // // echo '<pre>';
    // // print_r($registros);
    // // echo '</pre';
    // echo 'O array possui: ' . count($registros) . ' registros';
    // echo '<br>';

    // $idx1 = 0;

    // while ($idx1 < count($registros)) {
    //     //indice associativo
    //     echo '<h3>' . $registros[$idx1]['titulo'] . '</h3>';
    //     echo '<p>' . $registros[$idx1]['conteudo'] . '</p>';
    //     echo '<hr>';
    //     $idx1++;
    // }

    // // A maior diferença entre while e do while é que no dowhile você entra no loop pelo menos uma vez.

    // $a = 11;
    // do {
    //     echo 'Entrou';
    // } while ($a <= 10);


    // $series = array('naruto', 'one piece', 'bleach', 'Demon Slayer');

    // $idx2 = 0;

    // while ($idx2 < count($series)) {
    //     echo $series[$idx2] . '<hr>';

    //     $idx2++;
    // }


    // $onePiece = array(
    //     array('personagem' => 'Luffy', 'Akuma no Mi' => 'Gomu gomu no mi'),
    //     array('personagem' => 'Zoro', 'Akuma no Mi' => 'Nenhuma'),
    //     array('personagem' => 'Nami', 'Akuma no Mi' => 'Nenhuma')
    // );

    // echo '<pre>';
    // print_r($onePiece);
    // echo '</pre>';

    // $idx = 0;
    // while ($idx < count($onePiece)) {
    //     echo $onePiece[$idx]['personagem'] . ' => Akuma no Mi -> ';
    //     echo $onePiece[$idx]['Akuma no Mi'] . '<hr>';
    //     $idx++;
    // }

    // for($idx = 0; $idx < count($onePiece); $idx++){

    // }


    $chapeuDePalha = array(
        array('Tripulantes' => 'Nami'),
        array('Tripulantes' => 'Zoro'),
        array('Tripulantes' => 'Chopper')
    );

    echo '<pre>';
    print_r($chapeuDePalha);
    echo '</pre>';

    for ($idx = 0; $idx < count($chapeuDePalha); $idx++) {
        echo $chapeuDePalha[$idx]['Tripulantes'] . '<br>';
    }











    ?>
</body>

</html>
