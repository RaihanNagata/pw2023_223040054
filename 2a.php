<?php
$depan = "Raihan";
$belakang = "Nagata";

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka  % 3 != 0 && $angka % 5 != 0) {
        echo "$angka <br>";
        continue;
    }
    if ($angka % 3 == 0)
        echo "$depan";
    if ($angka % 5 == 0)
        echo "$belakang";
    echo '<br>';
}
