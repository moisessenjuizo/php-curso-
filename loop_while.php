<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $num = 1;
    // operadores comparação / lógicos
    echo '-- Início do loop --<br>';
    // while ($num <= 20) {
    //     echo "$num <br>";
    //     //$num++; 1 em 1
    //     $num += 2; // 2 em 2
    // }
    // while (true) {
    //     echo "$num <br>";
    //     $num += 5; // 2 em 2

    //     if ($num > 100) {
    //         break;
    //     }
    // }
    while ($num < 10) {
        echo "$num <br>";
        $num++;

        if ($num == 2 || $num == 6) {
            echo 'Xupa';
            continue;
        }
    }

    echo '-- Fim do loop --';


    ?>










</body>

</html>
