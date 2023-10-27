<?php 

echo "Menghitung 5 macam luas bangun datar"."<br>";
echo "<br>";
//menghitung luas persegi 
$sisi = 5;
$persegi = $sisi * $sisi;
echo "Luas Persegi = $persegi"."<br>";

//menghitung luas lingkaran
$jari = 7;
$lingkaran = 3.14 * $jari * $jari;
echo "Luas Lingkaran = $lingkaran"."<br>";

//menghitung luas segitiga
$alas = 10;
$tinggi = 5;
$segitiga = 0.5 * $alas * $tinggi;
echo "Luas Segitiga = $segitiga"."<br>";

//menghitung luas jajar genjang
$alas = 10;
$tinggi = 5;
$jajargenjang = $alas * $tinggi;
echo "Luas Jajar Genjang = $jajargenjang"."<br>";

//menghitung luas belah ketupat
$diagonal1 = 10;
$diagonal2 = 10;
$belahketupat = 0.5 * $diagonal1 * $diagonal2;
echo "Luas Belah Ketupat = $belahketupat"."<br>";

?>
