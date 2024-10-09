<?php

$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];

$inter = array_intersect($bil1,$bil2);
echo"bilangan yang ada du kedua variable :";
foreach($inter as $i){
    echo $i . " ";
}

$diff = array_diff($bil1,$bil2);
echo"bilangan yang tidak ada du kedua variable :";
foreach($diff as $o){
    echo $o . " ";
}