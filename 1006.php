<?php

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

echo "MEDIA = " . number_format(($a * 2 + $b * 3 + $c * 5) / 10, 1, ".", "") . PHP_EOL;
