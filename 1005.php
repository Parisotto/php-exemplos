<?php

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));

echo "MEDIA = " . number_format(($a * 3.5 + $b * 7.5) / 11, 5, ".", "") . PHP_EOL;
