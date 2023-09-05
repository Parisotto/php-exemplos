<?php

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

echo "NUMBER = $a" . PHP_EOL;
echo "SALARY = U$ " . number_format($b * $c, 2, ".", "") . PHP_EOL;
