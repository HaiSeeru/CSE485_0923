<?php

$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$min = PHP_INT_MAX;
$max = 0;

$max_string = '';
$min_string = '';

foreach ($array as $string) {
    $length = strlen($string);

    if ($length < $min) {
        $min = $length;
        $min_string = $string;
    }

    if ($length > $max) {
        $max = $length;
        $max_string = $string;
    }
}

echo "Chuỗi lớn nhất là: $max_string, độ dài $max.<br>";
echo "Chuỗi nhỏ nhất là; $min_string, độ dài $min.";
