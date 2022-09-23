<?php

echo "<h1>TABUADA</h1>";

echo "<hr>";
echo "<h2>FOR</h2>";
// TABUADA DO 1 AO 10 COM FOR
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <=10; $j++) {
        echo "$i x $j = ".($i*$j)."<br>";
        if ($i && $j == 10) {
            echo "<br>";
        }
    }
}

//TABUADA DO 1 AO 10 COM WHILE
echo "<hr>";
echo "<h2>WHILE</h2>";

$i = 1;
$j = 1;
$c = 1;

while ($i <= 10) {
    while ($j <= 10) {
        echo "$i x $j = ".($i*$j)."<br>";
        if ($i && $j == 10) {
            echo "<br>";
        }
        $j++;
    }
    $j = 1;
    $i++;
}

//TABUADA DO 1 AO 10 COM DO WHILE
echo "<hr>";
echo "<h2>DO WHILE</h2>";

$i = 1;

do {
    $j = 1;
    do {
        echo "$i x $j = ".($i*$j)."<br>";
        if ($i && $j == 10) {
            echo "<br>";
        }
        $j++;
    } while ($j <= 10);
    $i++;
} while ($i <= 10);