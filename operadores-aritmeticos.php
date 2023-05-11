<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    $num1 = 5;
    $num2 = 4;
    echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
    echo "<br>O tipo do: $num2 é  " . (gettype($num2));
    echo "<br>A multiplicação entre $num1 e $num2 é " . ($num1 * $num2);
    echo "<br>O divisão entre $num1 e $num2 é " . ($num1 / $num2);
    echo "<br>O modulo entre $num1 e $num2 é " . ($num1 % $num2);
    ?>

</body>

</html>
