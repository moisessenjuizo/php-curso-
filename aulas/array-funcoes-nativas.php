<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    // is_array() -> verifica se o parâmetro é um array
    // array_keys() -> retorna todas as chaves de um array
    // sort(array) -> Orderna um array e reajusta seus índices
    // asort(array) -> Ordena um array preservando os índices
    // count(array) -> Conta a quantidade de elementos de um array
    // array_merge(array) -> Funde um ou mais arrays
    // explode(array) -> Divide uma string baseada em um delimitador
    // implode(array) -> junta elementos de um array em uma string

    $array = array('notebook', 'teclado', 'fonte atx', 'gabinete', 'mouse');
    // $retorno = is_array($array);

    // if ($retorno) {
    //     echo 'Sim, é um array';
    // } else {
    //     echo 'Não é um array.';
    // }

    // $array = [1 => 'a', 7 => 'b', 18 => 'c'];
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';

    // $chaves_array = array_keys($array);
    // echo '<pre>';
    // print_r($chaves_array);
    // echo '</pre>';
    // -------------------------
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';

    // echo sort($array); // true or false
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';

    // asort($array); // true or false
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';
    // echo '<pre>';
    // print_r($array);
    // echo count($array);
    // echo '</pre>';


    // $array1 = ['osx', 'windows'];
    // $array2 = array('linux');
    // $array3 = ['Lol', 'Lil'];

    // $novo_array = array_merge($array1, $array2, $array3);
    // echo '<pre>';
    // print_r($novo_array);
    // echo '</pre>';


    // $string = '26/04/2018';
    // $array_retorno =  explode('/', $string);
    // echo '<pre>';
    // echo $string;
    // print_r($array_retorno);
    // echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
    // echo '</pre>';

    $array = ['a', 'b', 'x', 'y'];
    $string_retorno = implode(',', $array);
    echo $string_retorno;


    ?>
</body>

</html>
