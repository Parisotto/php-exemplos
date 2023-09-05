<?php

$n = fgets(STDIN);

$dentro = 0;
$fora = 0;

for($i = $n; $i > 0; $i--){
    $valor = fgets(STDIN);
    if($valor >= 10  && $valor <= 20){
        $dentro++;
    } else {
        $fora++;
    }
}

printf("$dentro in\n");
printf("$fora out\n");
