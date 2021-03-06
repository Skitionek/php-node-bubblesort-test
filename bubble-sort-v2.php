<?php
function bubbleSort(array &$a)
{
  $len = count($a) - 1;
  $sorted = false;
  while (!$sorted) {
    $sorted = true;
    for ($i = 0; $i < $len; $i++) {
      $current = $a[$i];
      $next = $a[$i + 1];
      if ( $next < $current ) {
        $a[$i] = $next;
        $a[$i + 1] = $current;
        $sorted = false;
      }
    }
  }
}

$myArray = [];
$numberPool = 4096;

// add numbers divisible by 2
for ($x = $numberPool; $x >= 0; $x--) {
  if ($x % 2 === 0) {
    $myArray[] = $x;
  }
}

// add numbers divisible by 3
for ($x = $numberPool; $x >= 0; $x--) {
  if ($x % 3 === 0) {
    $myArray[] = $x;
  }
}

// add numbers divisible by 7
for ($x = $numberPool; $x >= 0; $x--) {
  if ($x % 7 === 0) {
    $myArray[] = $x;
  }
}

$startTime = hrtime(true);
bubbleSort($myArray);
$endTime   = hrtime(true);

echo '[PHP] array contains ', count($myArray), ' elements, execution time: ',
  ($endTime - $startTime) / 1000000, ' ms', PHP_EOL;

// echo print_r($myArray, true), PHP_EOL;
