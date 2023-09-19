<?php

$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

$first = reset($numbers);
$last = end($numbers);

$min = min($numbers);
$max = max($numbers);
$sum = array_sum($numbers);

echo "Phần tử đầu tiên là: $first <br/>";
echo "Phần tử cuối cùng là: $last <br/>";
echo "Số lớn nhất là: $max <br/>";
echo "Số nhỏ nhất là: $min <br/>";
echo "Tổng của mảng là: $sum <br/>";


$asc1 = $numbers;
asort($asc1);

$desc1 = $numbers;
arsort($desc1);

echo "Mảng sau khi sắp xếp tăng dần theo giá trị:<br>";
print_r($asc1);
echo '<br/>';

echo "Mảng sau khi sắp xếp giảm dần theo giá trị:<br>";
print_r($desc1);
echo '<br/>';

$asc2 = $numbers;
ksort($asc2);


$desc2 = $numbers;
arsort($desc2);


echo "Mảng sau khi sắp xếp tăng dần theo key:<br>";
print_r($asc2);
echo '<br/>';

echo "Mảng sau khi sắp xếp giảm dần theo key:<br>";
print_r($desc2);
echo '<br/>';
