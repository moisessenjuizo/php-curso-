<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    // sequenciais (numéricos)
    // $lista_frutas = array('banana', 'Maçã', 'Morango', 'Uva');
    // $lista_frutas = ['banana', 'Maçã', 'Morango', 'Uva'];

    // $lista_frutas[] = 'Abacaxi';

    // echo '<pre>';
    // var_dump($lista_frutas);
    // echo '<hr>';
    // print_r($lista_frutas);
    // echo '</pre>';

    // echo $lista_frutas[2];

    // associativos
    echo '<pre>';



    $lista_frutas = array(
        'a' => 'banana',
        'b' => 'Maçã',
        'c' => 'Morango',
        'd' => 'Uva'
    );
    $lista_frutas['w'] = 'Abacaxi';
    var_dump($lista_frutas);
    echo $lista_frutas['a'];


    ?>




</body>

</html>
