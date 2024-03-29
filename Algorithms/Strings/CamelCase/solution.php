<?php

function camelcase($s) {
    $wordsCount = 0;
    $splitWord = str_split($s);
    foreach($splitWord as $k => $letter) {
        if ($k === 0 || ctype_upper($letter)) {
            $wordsCount++;
        }
    }
    return $wordsCount;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$stdin = fopen("php://stdin", "r");
$s = '';
fscanf($stdin, "%[^\n]", $s);
$result = camelcase($s);
fwrite($fptr, $result . "\n");
fclose($stdin);
fclose($fptr);
