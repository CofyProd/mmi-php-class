<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Partie 1</h2>
    <?php
    $numA = 12;
    $numB = 12;
    $result = null;
    if ($numA == $numB) {
        $result = "Equal";
    };
    if ($numA > $numB) {
        $result = "Superieur";
        # code...
    };
    if ($numA < $numB) {
        $result = "Inférieur";
        # code...
    };

    echo $numA . " " . $result . " " . $numB;
    ?>
    <h2>Partie 2</h2>
    <?php

    $day = 3;

    switch ($day) {
        case 1:
            $jour = 'Lunedi';
            break;
        case 2:
            $jour = 'Martedi';
            break;
        case 3:
            $jour = 'Mercoledi';
            break;
        case 4:
            $jour = 'Giovedi';
            break;
        case 5:
            $jour = 'Venerdi';
            break;
        case 6:
            $jour = 'Sabato';
            break;
        case 7:
            $jour = 'Domenica';
            break;

        default:
            $jour = "Ce n'est pas un jour de la semaine";
            break;
    }

    echo $day . " est le jour " . $jour;
    ?>
</body>

</html>