<?php

$handle = fopen ("php://stdin", "r");
function lowestTriangle($base, $area){
    if((2 * $area) % $base == 0){
        $op = (2 * $area) / $base;
    }else{
        $op = ((2 * $area) / $base) + 1;
    }
    return floor($op);
}

fscanf($handle, "%d %d", $base, $area);
$height = lowestTriangle($base, $area);
echo $height . "\n";

?>
