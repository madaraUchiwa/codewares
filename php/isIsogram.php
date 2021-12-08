<?php

function isIsogram($string) {
    $lowString = strtolower($string);
    for($i = 0; $i < strlen($lowString); $i++) {
        $cpt = 0;
        for($y = 0; $y < strlen($lowString); $y++) {
            if($lowString[$i] == $lowString[$y]) {
                $cpt++;
            }
        }

        if($cpt > 1) return false;
     }

   return true;
 }