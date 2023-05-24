<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $registros = array(
        array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteudo noticia 1'),
        array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo noticia 2'),
        array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteudo noticia 3'),
        array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteudo noticia 4')

    );

    echo '<pre>';
    print_r($registros);
    echo '</pre>';
    $idx = 0;

    // count -> conta a quantidade de elementos de array.
    echo 'O array possui:' . count($registros) . ' registros';
    echo '<br>';
    /*
    while ($idx < count($registros)) {

        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

        echo '<hr>';

        $idx++;
    }
    */
    /*
    do {

        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

        echo '<hr>';

        $idx++;
    } while ($idx < count($registros));
    */
    for ($idx; $idx < count($registros); $idx++) {

        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

        echo '<hr>';
    }


    ?>
</body>

</html>
