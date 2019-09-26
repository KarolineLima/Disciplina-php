<?php

/**
 * $operator: '+', '-', '*', '/'
 */
function calc($operand1, $operand2, $operator)
{
   $result=0;
 if($operator == '+'){
    $result = $operand1 + $operand2;
 }
 elseif($operator == '-'){
  $result = $operand1 - $operand2;
 }
 elseif($operator == '*'){
  $result = $operand1 * $operand2;
 }
 elseif($operator == '/'){
  $result = $operand1 / $operand2;
 }

 return $result;
 
}

function calcWithEval($operand1, $operand2, $operator)
{
  // TODO 
  // Tips echo eval('return 1+1;');
}