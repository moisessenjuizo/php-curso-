<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    // ceil($numero) -> arredonda o valor para cima
    // floor($numero) -> arredonda para baixo
    // round($numero) -> arredonda o valor com base nas casas decimais
    // rand() -> gera um inteiro aleatorio
    // sqrt($numero) -> retorna a raiz quadrada
    $numero = 7.5;
    $numero2 = 20;
    function nCeil($numero)
    {
        echo "<h3> ceil => arredonda o valor para cima. $numero</h3>";
        $numero = ceil($numero);
        echo "O valor é igual a: ($numero)";
        echo '<hr>';
        return $numero;
    }
    nCeil($numero);

    function nFloor($numero)
    {
        echo "<h3> floor($numero) -> arredonda para baixo $numero</h3>";
        $numero = floor($numero);
        echo "O valor é igual a: ($numero)";
        echo '<hr>';
    }
    nFloor($numero);

    function nRound($numero)
    {
        echo "<h3> round($numero) -> arredonda o valor com base nas casas decimais</h3>";
        $numero = round($numero);
        echo "O valor é igual a: ($numero)";
        echo '<hr>';
    }
    nRound($numero);

    function nRand($numero, $numero2)
    {
        echo "<h3> rand($numero) -> gera um inteiro aleatorio</h3>";
        $numero = rand($numero, $numero2);
        echo "O valor é igual a: ($numero)";
        echo '<hr>';
    }
    nRand($numero, $numero2);

    function nSqrt($numero)
    {
        echo "<h3> sqrt($numero) -> retorna a raiz quadrada</h3>";
        $numero = sqrt($numero);
        echo "O valor é igual a: ($numero)";
        echo '<hr>';
        return $numero;
    }
    nSqrt($numero);



    ?>


</body>

</html>
