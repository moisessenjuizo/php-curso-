<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    // void -> função que não recebe nada
    function exibirBoasVindas()
    {
        echo "Bem vindo ao curso do PHP!<br>";
    }
    exibirBoasVindas();

    //return -> função com retorno
    function calcularAreaTerreno($largura, $comprimento)
    {
        $area = $largura * $comprimento;
        return "O tamanho do terreno é: $area";
    }
    echo calcularAreaTerreno(5, 25);
    $resultado = calcularAreaTerreno(10, 25);
    echo '<br>';
    echo $resultado;






    ?>



</body>

</html>
