<?php

$numbers = [
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
];

$avg = array_sum($numbers) / count($numbers);

echo "Giá trị trung bình: $avg <br>";

echo "Các số lớn hơn giá trị trung bình:<br>";
foreach ($numbers as $i) {
    if ($i > $avg) {
        echo "$i ";
    }
}
echo "<br>";


echo "Các số nhỏ hơn hoặc bằng giá trị trung bình:<br>";
foreach ($numbers as $i) {
    if ($i <= $avg) {
        echo "$i ";
    }
}
