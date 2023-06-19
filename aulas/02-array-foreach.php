<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    $musicas = array(
        array('Cantor' => 'Labrinth', 'Musica' => 'Never Felt So Alone'),
        array('Cantor' => 'Labrinth', 'Musica' => 'Mount Everest'),
        array('Cantor' => 'Labrinth', 'Musica' => 'All for Us'),
        array('Cantor' => 'Labrinth', 'Musica' => 'Jealous'),
        array('Cantor' => 'Labrinth', 'Musica' => 'Formula'),
        array('Cantor' => 'Labrinth', 'Musica' => 'Forever'),
        array('Cantor' => 'Labrinth', 'Musica' => "I'm tired")
    );
    // echo '<pre>';
    // print_r($musicas);
    // echo '</pre>';

    foreach ($musicas as $idx => $music) {
        foreach ($music as $idx2 => $valor) {
            echo "$idx2 - $valor <br/>";
        }
    }




    ?>
</body>

</html>
