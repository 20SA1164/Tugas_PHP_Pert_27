<?php
echo"Menghitung Nilai BMI"."<br>";
echo "<br>";

$nama = "Siti Nur Fadhilah";
$tinggi = 1.60;
$berat = 50;

$bmi = $berat / ($tinggi * $tinggi);
if ($bmi < 18.5)
{
    $hasil = "Kurus";
} 
if ($bmi >= 18.5 && $bmi <= 24.9)
{
    $hasil = "Sedang";
}
else 
{
    $hasil = "Gemuk";
}
echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $hasil "."<br>";