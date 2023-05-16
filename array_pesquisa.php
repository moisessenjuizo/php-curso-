<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    //in_array() -> true ou false para a existencia da pesquisa
    //array_search() -> retorna o indice do valor pesquisado, caso ele exista
    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];


    // echo '<pre>';
    // print_r($lista_frutas);
    // echo '</pre>';

    // $existe =  in_array('Uva', $lista_frutas); // true = 1 , false = vazio 0
    // if ($existe) {
    //     echo 'Sim, o valor pesquisado existe no array';
    // } else {
    //     echo 'Não, o valor pesquisado não existe no array';
    // }
    // $existe1 = array_search('Maçã', $lista_frutas);
    // // null ≠ vazio
    // if ($existe1) {
    //     echo 'Sim, o valor pesquisado existe no array';
    // } else {
    //     echo 'Não, o valor pesquisado não existe no array';
    // }

    $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['João', 'Maria']
    ];
    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo in_array('Uva', $lista_coisas['frutas']);




    ?>




</body>

</html>
