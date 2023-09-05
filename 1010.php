<?php

$a = explode(" ", trim(fgets(STDIN)));
$b = explode(" ", trim(fgets(STDIN)));
$pagar = sprintf("%.2f", $a[1] * $a[2] + $b[1] * $b[2]);

echo "VALOR A PAGAR: R$ $pagar\n";
