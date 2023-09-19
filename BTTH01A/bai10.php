<?php

function convert($array)
{
    $res = array();

    foreach ($array as $i) {
        if (is_string($i)) {
            $res[] = strtoupper($i);
        } else {
            $res[] = $i;
        }
    }

    return $res;
}

$arr1 = ['1', 'b', 'c', 'd'];
$arr2 = ['a', 0, null, false];

$arr1_new = convert($arr1);
$arr2_new = convert($arr2);

print_r($arr1_new);
echo '<br />';
print_r($arr2_new);
