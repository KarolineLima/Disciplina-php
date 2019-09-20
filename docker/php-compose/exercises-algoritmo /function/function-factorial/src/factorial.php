<?php

function factorial($number)
{
  $factorial = 1;
  for($n=$number; $n>=1; $n--){
    $factorial *= $n;
  }
  return $factorial;
}

