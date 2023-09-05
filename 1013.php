<?php

$dados = explode(" ", trim(fgets(STDIN)));
$maior = ($dados[0] + $dados[1] + abs($dados[0] - $dados[1])) / 2;
$maior = ($maior + $dados[2] + abs($maior - $dados[2])) / 2;

echo "$maior eh o maior" . PHP_EOL;
