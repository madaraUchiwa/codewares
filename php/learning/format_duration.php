<?php

function format_duration($seconds) {
    // your code here
    $out=[];
  $sort="";
  // duration in seconds
  $m=60;
  $h=60*$m;
  $d=24*$h;
  $y=365*$d;
  // year
  if($seconds>=$y){
    $nb_y = floor($seconds/$y);
    $seconds -= $nb_y*$y;
    $a = ($nb_y>1)?"s":"";
    $out[]="$nb_y year$a";
  }
  // day
  if($seconds>=$d){
    $nb_d = floor($seconds/$d);
    $seconds -= $nb_d*$d;
    $a = ($nb_d>1)?"s":"";
    $out[]="$nb_d day$a";
  }
  // hour
  if($seconds>=$h){
    $nb_h = floor($seconds/$h);
    $seconds -= $nb_h*$h;
    $a = ($nb_h>1)?"s":"";
    $out[]="$nb_h hour$a";
  }
  // minute
  if($seconds>=$m){
    $nb_m = floor($seconds/$m);
    $seconds -= $nb_m*$m;
    $a = ($nb_m>1)?"s":"";
    $out[]="$nb_m minute$a";
  }
  // second
  if($seconds>=1){
    $a = ($seconds>1)?"s":"";
    $out[]="$seconds second$a";
  }
  $nb_out = count($out);
  if($nb_out==0){
    $sort ="now";
  }else{
    // array to string conversion
    for($i=0;$i<$nb_out;$i++){
      $sort .= $out[$i];
      if($i==$nb_out-2){
        $sort.=" and ";
      }else{
        $sort.=", ";
      }
    }
  }
  // for the end
  if(substr($sort,-4)=="and "){
    $sort = substr($sort,0,-5);
  }elseif(substr($sort,-2)==", "){
    $sort = substr($sort,0,-2);
  }
  return $sort;
  }