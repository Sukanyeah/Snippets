<?php

function gameWithCells($n, $m) {
    $op = '';
    $x = $n % 2;
    $y =$m % 2;
    if($x == 0 && $y == 0){
        $op = ($n / 2) * ($m / 2);
    }else if($x == 0 && $y == 1){
        $op = (($n/2) * (($m-1)/2)) + ($n/2);
    }else if($x == 1 && $y == 0){
        $op = (($m/2) * (($n-1)/2)) + ($m/2);
    }else if($x == 1 && $y == 1){
        $op = (($n+1)/2) * (($m+1)/2);
    }
    return $op;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

$result = gameWithCells($n, $m);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
