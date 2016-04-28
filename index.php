<?php
$a = array(10, 20, 30, 40, 50,);
$b = array(1, 2, 3, 4, 5);

for($i = 0; $i < count($a); $i++) {

  $c[$i] = $a[$i]  + $b[$i];

}

print_r($c);
