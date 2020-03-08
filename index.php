<?php

include_once "Matrix.php";

$arr = array(
    array(
        1, 2, 3,
    ),
    array(
        4, 5, 6
    ));


$m = new Matrix($arr);
$n = new Matrix($arr);

$m->add($n);
print_r($m->toArray());

echo "\n\n";

$m->diff($n);
print_r($m->toArray());

echo "\n\n";

$m->diff($n);
print_r($m->toArray());
