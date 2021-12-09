<?php

function findNb($m) {
    // your code
    $total = 0;
    $n = 0;
  while($total < $m) {
    $n += 1;
    $total += $n**3;
  }
  return $total === $m ? $n : -1;
}