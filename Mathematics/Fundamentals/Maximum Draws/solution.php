<?php

/*
 * Complete the maximumDraws function below.
 */
function maximumDraws($n) {
    /* Extremely Easy Solution */
    return $n + 1;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = maximumDraws($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
