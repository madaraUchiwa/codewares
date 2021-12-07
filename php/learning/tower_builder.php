<?php

function tower_builder(int $n): array {
    // Build your tower here
    $tower = [];
    for($i = 0 ; $i < $n; $i++) {
      $stars =  str_repeat('*', ($i * 2 +1));
      $spaces = str_repeat(' ', ($n - $i - 1));
      $tower[$i] = $spaces .''. $stars .''. $spaces;
    }
    
    return $tower;
  }