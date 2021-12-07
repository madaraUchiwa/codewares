<?php

function getCount($str) {
    $vowelsCount = 0;
    $voyelles = ['a','e','i','o','u'];
    
    for($i = 0; $i < strlen($str); $i++) {
      if(in_array($str[$i], $voyelles)) {
        $vowelsCount++;
      }
    }
    return $vowelsCount;
  }