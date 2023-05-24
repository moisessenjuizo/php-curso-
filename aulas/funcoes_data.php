<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    //recuperação da data atual / data corrente
    // echo date_default_timezone_get();
    // echo '<br>';
    // date_default_timezone_set('America/Sao_Paulo');
    // echo date('d/m/y H:i:s / l');
    // echo '<br>';

    $data_inicial = '2023-05-15';
    $data_final = '2023-06-15';

    // timestamp
    // 01/01/1970 -- 2023-05-15

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br>';
    echo $data_final . ' - ' . $time_final;

    $diferenca_times = $time_final - $time_inicial;
    echo '<br> A diferença de segundos entre a data inicial e a final é: ' . $diferenca_times;
    $segundos_existem_dia = 24 * 60 * 60;
    echo '<br>um dia possui ' . $segundos_existem_dia . ' segundos';
    $diferenca_data = $diferenca_times / $segundos_existem_dia;
    echo '<br> A diferença em dias é: ' . $diferenca_data . ' dias.';
    ?>


</body>

</html>
