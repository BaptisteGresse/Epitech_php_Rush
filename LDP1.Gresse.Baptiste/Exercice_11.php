<?php

$n1 = 4;
$n2 = 2;
$n3 = 9;

function isSmaller($number1, $number2, $number3) {
  return $number1 < $number2 && $number1 < $number3 ? $number1 :
        ($number2 < $number1 && $number2 < $number3 ? $number2 : 
        ($number3));
}

echo(isSmaller($n1, $n2, $n3));