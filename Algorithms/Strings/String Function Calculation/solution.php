<?php
// Complete the maxValue function below.
function maxValue($t) {
    $t = trim($t);
    $length = strlen($t);
    $suk = $length;
    $collection = [];
    for ($i=1; $i < $length + 1; $i++) {
        for ($j=0; $j < $length + 1 - $i ; $j++) {
            $current = substr($t, $j, $i);
            if (! in_array($current, $collection)) {
                $collection[] = $current;
                $count = 0;
                $start = $j;
                if (strlen($current) > 1 && $current[0] == $current[1]) {
                    while (($pos = strpos($t, $current, $start)) !== false) {
                        $count ++;
                        $start = $pos + 1;
                    }
                } else {
                    $count = substr_count($t, $current);
                }
                if (($count * $i) > $suk) {
                    $suk = $count * $i;
                }
            }
        }
    }
    return $suk.PHP_EOL;
}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$stdin = fopen("php://stdin", "r");
$t = '';
fscanf($stdin, "%[^\n]", $t);
$result = maxValue($t);
fwrite($fptr, $result . "\n");
fclose($stdin);
fclose($fptr);
