<?php

function arrayDiff($a, $b) {
    // your code here
    $newArray = [];
    $diffArray = array_diff($a, $b);
    $cpt = 0;
    foreach($diffArray as $item) {
        $newArray[$cpt] = $item;
        $cpt++;
    }
    return $newArray;
  }