<?php
$array1 = [[77, 87], [23, 45]];
$array2 = ['giá trị 1', 'giá trị 2'];

$res = array();

for ($i = 0; $i < count($array1) && $i < count($array2); $i++) {
    $res[] = array_merge([$array2[$i]], $array1[$i]);
}

print_r($res);
