<?php
/*
 * Complete the 'kangaroo' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER x1
 *  2. INTEGER v1
 *  3. INTEGER x2
 *  4. INTEGER v2
 */ 

function kangaroo($x1, $v1, $x2, $v2) {
  $n = 0;
  while ($n < 10000) {
    if ($x1 + $n * $v1 == $x2 + $n * $v2) {
      return "YES";
    }
    $n++;
  }
  return "NO";
    
}


$first_multiple_input = explode(' ', "0 3 4 2");

$x1 = intval($first_multiple_input[0]);

$v1 = intval($first_multiple_input[1]);

$x2 = intval($first_multiple_input[2]);

$v2 = intval($first_multiple_input[3]);

$result = kangaroo1($x1, $v1, $x2, $v2);

echo $result;
