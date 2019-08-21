<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $p = 0;
    $n = 0;
    $z = 0;
    $count = count($arr);
    foreach ($arr as $num) {
        if ($num === 0) {
            $z++;
        } elseif ($num > 0) {
            $p++;
        } else {
            $n++;
        }
    }
    $r = array();
    $r[] = round($p / $count, 6);
    $r[] = round($n / $count, 6);
    $r[] = round($z / $count, 6);
    echo implode(PHP_EOL, $r);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
