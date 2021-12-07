<?php

function createPhoneNumber($numbersArray) {
    // your code here
    $number = '(';
    for($i = 0; $i < count($numbersArray); $i++) {
      $number .= $numbersArray[$i];
      if($i == 2) {
        $number .= ') ';
      }
      if($i == 5){
        $number .='-';
      }
    }
    return $number;
  }