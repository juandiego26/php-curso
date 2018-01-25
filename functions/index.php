<?php

// function hello($name) {
//   echo 'Hello ' . $name;
//   echo '<br>';
// }
//
// hello('Mary');
// hello('Juan');

//**************************************//
// function sum($a, $b) {
//   return $a + $b;
// }
//
// $c = sum(1, 2);
// var_dump($c);
//
// $c = sum(11, 22);
// var_dump($c);

//******************************************//

$x = 100;

function sum($a, $b) {
  $x = $a + $b;
  return $x;
}

$c = sum(5, 6);
var_dump($c);
var_dump($x);

?>
