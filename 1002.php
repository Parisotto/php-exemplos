<?php
$raio = trim(fgets(STDIN));
$area = number_format(3.14159 * $raio ** 2, 4, ".", "");
echo "A=" . $area . PHP_EOL;
