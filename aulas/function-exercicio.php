<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    // //return -> função com retorno
    // function calcularAreaTerreno($largura, $comprimento)
    // {
    //     $area = $largura * $comprimento;
    //     return "O tamanho do terreno é: $area";
    // }
    // echo calcularAreaTerreno(5, 25);
    // $resultado = calcularAreaTerreno(10, 25);
    // echo '<br>';
    // echo $resultado;


    function imposto($salario)
    {
        $imposto = 0;

        if ($salario <= 1903.98) {
            $imposto = 0;
        } elseif ($salario >= 1903.98 && $salario <= 2826.65) {
            $imposto = $salario * 7.5 / 100;
        } elseif ($salario >= 2826.65 && $salario <= 3751.05) {
            $imposto = $salario * 15 / 100;
        } elseif ($salario >= 3751.05 && $salario <= 4664.68) {
            $imposto = $salario * 22.5 / 100;
        } elseif ($salario >= 4664.68) {
            $imposto = $salario * 27.5 / 100;
        }

        return "Você irá pagar esse valor de imposto: $imposto reais.";
    }

    echo imposto(5000);





    ?>



</body>

</html>
