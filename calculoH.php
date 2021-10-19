<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de la hipotesuna de un triangulo</title>
</head>
<body>
    <h1>Calclulo de la Hipotenusa de un Triangulo Rectangulo</h1>
     <br>
    <form action="calculoH.php" method="GET">
        <table align="center" border=1>
            <tr>
                <td>Base:</td>
                <td>3</td>
            </tr>

            <tr>
                <td>Altura:</td>
                <td>4</td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    $base = 3;
    $altura = 4;
    $Hipo = sqrt(pow($base,2) + pow($altura,2));
    echo "Valor de la Hipotenusa es: " . $Hipo;
?>