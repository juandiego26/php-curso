<?php

// for ($i = 0; $i <= 10; $i++) {
//   echo $i . '<br>';
// }

/****************Estructura while*****************/

// $i = 1;
//
// while ($i <=10) {
//   echo $i . '<br>';
//   $i++;
// }

/**************Estructura do while******************/

// $i = 11;
//
// do {
//   echo $i . '<br>';
//   $i++;
// } while ($i <= 10);

/**************Estructura for each**************/

$names = ['Alex', 'Elizabeth', 'Mary'];

foreach ($names as $key => $name ) {
  echo $key . ' - ' . $name . '<br>';
}

?>
