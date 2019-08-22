<?php

/*
 * Complete the strangeGrid function below.
 */
function strangeGrid($r, $c) {
    $suk = 0;
    $ooe = ($r % 2) == 1 ? 1 : 2;
    $csu = ($c * 2) - 1;
    if($ooe == 1){
        $suk = ((($r - 1) / 2) * 10) + ($csu - 1);
    }else{
        $suk = ((($r / 2) - 1) * 10) + $csu;
    }
    return $suk;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $rc_temp);
$rc = explode(' ', $rc_temp);

$r = intval($rc[0]);

$c = intval($rc[1]);

$result = strangeGrid($r, $c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
