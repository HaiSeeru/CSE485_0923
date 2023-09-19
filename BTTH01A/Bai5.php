<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => ['b' => 3]
    ]
];

$value1 = $a['b']['o']['b'];
echo "Giá trị = {$value1} từ key b";
echo '<br />';

$value2 = $a['a']['c'];
echo "Giá trị = {$value2} từ key c";
echo '<br />';


$value3 = $a['a'];
echo "Thông tin của key a là: ";
print_r($value3);
