<?php

$dados = explode(" ", trim(fgets(STDIN)));

printf("TRIANGULO: %.3f\n", $dados[0] * $dados[2] / 2);
printf("CIRCULO: %.3f\n", 3.14159 * pow($dados[2], 2));
printf("TRAPEZIO: %.3f\n", ($dados[0] + $dados[1]) * $dados[2] / 2);
printf("QUADRADO: %.3f\n", pow($dados[1], 2));
printf("RETANGULO: %.3f\n", $dados[0] * $dados[1]);
