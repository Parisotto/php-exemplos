<?php

$raio = trim(fgets(STDIN));
echo "VOLUME = " . sprintf("%.3f", 4.0/3 * 3.14159 * pow($raio, 3)) . PHP_EOL;
