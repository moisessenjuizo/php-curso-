<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>


    <?php

    //! operadores condicionais/comparação
    // == -> igual
    // === -> identico é verifica se ambos são string ou int 2 === '2' -> false
    // != ou <> -> é diferente
    // !== -> é diferente e verifica se ambos são string ou int ex 5 !== '5' -> verdadeiro
    // < -> é menor -> 2 < 18 = true
    // > -> é maior ~~ 5 > 18 = falso
    // <= Menor ou igual
    // >= Maior ou igual
    //! Operadores Lógicos
    // - Operador E (AND ou &&) -> verdadeiro se todas as expresssoes forem verdadeiras
    // - Operador Ou(OR ou ||) - verdadeiro se pelo menos uma das expressões for true
    // - Operador Xor (XOR) - verdadeiro apenas se uma das expressões forem true, mas naõ ambos
    // - Operador Negação (!) - Inverte o resultado da expressão
    // () estabelecer precedência
    // (!(3 > 4)) -> true -> era pra dar false porém como o negação foi usado, virou verdadeiro
    // (F e V)
    if ((3 == 3 &&  2 == 2) || 1 >= 4) {
        echo 'Verdadeiro';
    } else {
        echo 'falso';
    }




    ?>


</body>

</html>
