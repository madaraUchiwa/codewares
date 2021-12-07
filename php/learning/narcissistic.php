<?php

function narcissistic(int $value): bool {
    // Your code here
     $sum = 0;
    $temp = $value; /*Store the original number in $temp*/
    $totalDigits = strlen($value); /*Total number of digits comprising $value*/
    
    while($value != 0) {
      $r = $value % 10; /*Extract the last digit*/
      $sum = $sum + pow($r, $totalDigits);
      $value = floor($value/10); /*Reduce number by one digit*/
    }
    
    if($sum == $temp) {
     return true;
    } else {
      return false;
    }
  }