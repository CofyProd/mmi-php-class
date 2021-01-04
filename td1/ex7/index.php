<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex7</title>
</head>

<body>
    <h2>Partie 1</h2>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo "Numéro " . $i;
        echo "<br/>";
    };


    ?>
    <h2>Partie 2</h2>
    <?php

    $semaine = array("Lundi", "Mardi", "Mercredi");
    // echo array_values($semaine);
    $taille_semaine = count($semaine);

    for ($i = 0; $i < $taille_semaine; $i++) {
        echo $i . " : " . $semaine[$i];
        echo "<br/>";
    };

    ?>
    <h2>Partie 3</h2>
    <?php

    foreach ($semaine as $index => $value) {
        echo $index . " : " . $value;
        echo "<br/>";
    };
    ?>
    <h2>Partie 4</h2>
    <?php
    $colors = array(
        "red" => "Rouge", "green" => "Vert", "blue" => "Bleu", "yellow" => "Jaune",
        "white" => "Blanc", "grey" => "Gris", "purple" => "Violet", "pink" => "Rose"
    );

    foreach ($colors as $key => $value) {
        echo $key . " : " . $value;
        echo "<br/>";
    };

    ?>
    <h2>Partie 5</h2>
    <?php
    $a = 1;

    while ($a <= 10) {
        echo $a;
        $a++;
    };

    ?>
    <h2>Partie 6</h2>
    <?php

    $z = 1;
    do {
        echo $z;
        $z++;
    } while ($z <= 10);
    ?>
    <h2>Partie 7</h2>
    <?php
    // Code
    ?>
    <h2>Partie 8</h2>
    <?php
    // Code
    ?>
</body>

</html>