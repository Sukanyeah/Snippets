<?php

function handshake($n) {
    $op = $n == 1 ? 0 : $n * ($n - 1)/2;
    return $op;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = handshake($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
