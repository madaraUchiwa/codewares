<?php

function alphabet_position(string $s): string {
    // Your code here
    $stringArray = [];
    $newString = strtolower($s);
    $alphabet = range('a', 'z');
    for($i = 0; $i < strlen($newString); $i++) {
        if(array_search($newString[$i], $alphabet) != "") {
         $stringArray[$i] = (array_search($newString[$i], $alphabet)+1);
        }
    }
      return implode(" ", $stringArray);
  }