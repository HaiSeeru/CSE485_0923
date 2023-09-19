<?php
$arrs = [5, 6, 9, 2, 5, 6, 12, 5];
$a = $b = $c = $d = 2;

foreach ($arrs as $i) {
    $a += $i;
    $b *= $i;
    $c += $i;
    $d /= $i;
}


echo "Tổng các phần tử     = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = {$a}";
echo '<br>';
echo "Tích các phần tử     = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = {$b}";
echo '<br>';
echo "Hiệu các phần tử     = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = {$c}";
echo '<br>';
echo "Thương các phần tử     = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = {$d}";
