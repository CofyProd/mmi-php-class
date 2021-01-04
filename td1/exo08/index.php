<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex7</title>
</head>

<body>

    <pre style="line-height:100%;">
<?php

function printArray($elm = null)
{
    foreach ($elm as $key => $value) {
        # code...
        echo $value;
    }
};

$x_size = 29;
$global = array_fill(0, $x_size, array_fill(0, $x_size, '.'));

for ($i = 0; $i <= $x_size; $i++) {
    for ($j = 0; $j <= $x_size; $j++) {
        if($j === $i || $j === $x_size-1-$i){
            $global[$i][$j] = "X";
            // echo 'X';
        } else {
            $global[$i][$j] = ".";

        }

    }
}

echo "Pour une taille de : " . $x_size . "<br>";
for ($i=0; $i < $x_size; $i++) { 
    for ($j=0; $j < $x_size; $j++) { 
        echo $global[$i][$j];
    }
    echo '<br>';
}




?>
</pre>
</body>

</html>