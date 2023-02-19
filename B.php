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

   <?php echo "Aku adalah angka $npm </br>"; ?>
   <?php echo "Jika Aku di kali 5, maka aku sekarang menjadi $hasilkali </br>"; ?>
   <?php echo "Jika aku di bagi 2, maka sekarang menjadi $hasilbagi </br>"; ?>
   <?php echo "Jika aku di tambah 75, maka aku sekarang menjadi $hasiltambah</br>"; ?>
   <?php echo "Jika aku di kurang 20, maka aku sekarang menjadi $hasilkurang</br>"; ?>

    
</body>
</html>