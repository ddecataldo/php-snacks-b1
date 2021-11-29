<?php

/*
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$randomNumber = [];
$number = rand(1, 100);

for($i=0; $i < 15; $i++){
    
    $numRand = rand(1, 100);

    if(!($number === $numRand)){
        $randomNumber[] = $numRand;
    }
}

echo '<pre>';
var_dump($randomNumber);
echo '</pre>';


?>