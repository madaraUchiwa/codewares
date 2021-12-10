<?php

function countBits($n) 
{
  $binaryValue = decbin($n);
  $bits = 0;
  for($i = 0; $i < strlen($binaryValue); $i++) {
      if($binaryValue[$i] == '1') {
          $bits++;
      }
  }
  return $bits;
}