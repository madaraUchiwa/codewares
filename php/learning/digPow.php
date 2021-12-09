<?php

function digPow($n, $p) {
    // your code
    $array = array_map('intval', str_split($n));
    $sum = 0;
    foreach($array as $key => $item) {
        $sum += pow($item, $p);
        $p++;
    }
    $sum /= $n;
    if($sum < 1) {
    	return -1;
    }
    return $sum;
}