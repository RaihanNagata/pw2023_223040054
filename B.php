<?php
$npm="54";
$kali="5";
$bagi="2";
$tambah="75";
$kurang="20";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $hasilkali=$npm*$kali;
    $hasilbagi=$hasilkali/$bagi;
    $hasiltambah=$hasilbagi+$tambah;
    $hasilkurang=$hasiltambah-$kurang;
    ?>

   <?php echo "Aku adalah angka <b>$npm</b> </br>"; ?>
   <?php echo "Jika aku di kali $kali, maka aku sekarang menjadi <b>$hasilkali</b> </br>"; ?>
   <?php echo "Jika aku di bagi $bagi, maka sekarang menjadi $hasilbagi </br>"; ?>
   <?php echo "Jika aku di tambah $tambah, maka aku sekarang menjadi <b>$hasiltambah</b></br>"; ?>
   <?php echo "Jika aku di kurang $kurang, maka aku sekarang menjadi <b>$hasilkurang</b></br>"; ?>

    
</body>
</html>