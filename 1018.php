<?php

$valor = trim(fgets(STDIN));
$msg = "nota(s) de R$";

printf("$valor\n");

printf("%d $msg 100,00\n", $valor / 100);
printf("%d $msg 50,00\n", $valor % 100 / 50);
printf("%d $msg 20,00\n", $valor % 100 % 50 / 20);
printf("%d $msg 10,00\n", $valor % 100 % 50 % 20 / 10);
printf("%d $msg 5,00\n", $valor % 100 % 50 % 20 % 10 / 5);
printf("%d $msg 2,00\n", $valor % 100 % 50 % 20 % 20 % 10 % 5 / 2);
printf("%d $msg 1,00\n", $valor % 100 % 50 % 20 % 20 % 10 % 5 % 2);
