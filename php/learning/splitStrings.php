<?php

function solution($str) {
    $cpt = 0;
    $array = [];
    $l = strlen($str);
    for($i = 0; $i < $l -1; $i+=2) {
        $array[$cpt] = $str[$i].''.$str[$i+1];
        $cpt++;
    }

    if($l%2 != 0){
        $array[$cpt] = $str[$l -1].'_';
    }

    return $array;
}