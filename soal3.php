<?php
$angka1 = [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55];

foreach ($angka1 as $a1) {
    if ($a1 % 10 == 0) {
        continue;
    }
    echo "5 x " . ($a1 / 5) . " = $a1<br>";
    if ($a1 == 55) {
        break;
    }
}
