<?php
$r = 10;
echo "<h4>Menghitung Luas Lingkarana</h4>";
function hitungLuasLingkaran($r)
{
    return 3.14 * $r * $r;
}
echo "Jari-Jari = $r cm.<br>";
echo  "Luas lingkaran=", hitungLuasLingkaran($r), "cm";

echo "<hr>";

echo "<h4>Menghitung Keliling Likngkaran</h4>";
$rkeliling = 20;
function hitungkelilingLingkaran($rkeliling)
{
    return 2 * 3.14 * $rkeliling;
}
echo "Jari-jari $rkeliling cm.<br>";
echo "Keliling lingkaran =", hitungKelilingLingkaran($rkeliling), "cm";
