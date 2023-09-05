<?php

$nome = trim(fgets(STDIN));
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$sal = sprintf("%.2f", $a + $b * 0.15);

echo "TOTAL = R$ " . $sal . PHP_EOL;
