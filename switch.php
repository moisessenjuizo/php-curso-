<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    $parametro = false;

    switch ($parametro) {
        case 1:
            echo 'Entrou no case 1';
            break;

        case 'abc':
            echo 'Entrou no case 2';
            break;

        case false:
            echo 'Entrou no case 3';
            break;

        default:
            echo 'NaN';
            break;
    }

    ?>



</body>

</html>
