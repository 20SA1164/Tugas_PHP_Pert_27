<?php

echo "Menghitung 5 macam volume bangun ruang"."<br>";
echo "<br>";

//menguhitung volume kubus
$rusuk = 5;
$kubus = $rusuk * $rusuk * $rusuk;
echo "Volume Kubus = $kubus"."<br>";

//menghitung volume balok
$panjang = 10;
$lebar = 5;
$tinggi = 7;
$balok = $panjang * $lebar * $tinggi;
echo "Volume Balok = $balok"."<br>";

//menghitung volume tabung
$jari = 2;
$tinggi = 5;
$tabung = 3.14 * $jari * $jari * $tinggi;
echo "Volume Tabung = $tabung"."<br>";

//menghitung volume kerucut
$jari = 3;
$tinggi = 7;
$kerucut = 0.3 * $jari * $jari * $tinggi;
echo "Volume Kerucut = $kerucut"."<br>";

// menghitung volume prisma segitiga sama kaki
$luas_alas = 10;
$tinggi = 5;
$prisma = $luas_alas * $tinggi;
echo "Volume Prisma Segitiga Sama Kaki = $prisma"."<br>";