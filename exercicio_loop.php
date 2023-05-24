<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    /*CRIE UM SCRIPT CAPAZ DE PRODUZIR, ATRÁVES DE UM LAÇO DE REPETIÇÃO, UM ARRAY COM 6 ELEMENTOS NÚMERICOS ALEATÓRIOS ENTRE 1 E 60. OS NÚMEROS NÃO PODEM SER REPETIDOS.
     */
    //in_array() -> true ou false para a existencia da pesquisa


    // CRIAR UM ARRAY
    // CRIAR UM LOOP COM COUNT
    // CRIAR UMA VARIAVEL COM RAND
    // CRIAR UM IF COM !IN_ARRAY
    // DENTRO DO IF RECEBER A VARIAVEL RAND NO ARRAY
    // E FORA DO LOOP CRIAR UM print_r()

    $numeros = array();

    while (count($numeros) <= 6) {
        $num = rand(1, 60);

        if (!in_array($num, $numeros)) {
            $numeros[] = $num;
        }
    }
    echo '<pre>';
    print_r($numeros);
    echo '</pre>';


























    $numeros = [];

    while (count($numeros) <= 6) {

        $num = rand(1, 60);

        if (!in_array($num, $numeros)) {
            $numeros[] = $num;
        }
    }
    echo '<pre>';
    print_r($numeros);
    echo '</pre>';












    ?>
</body>

</html>
