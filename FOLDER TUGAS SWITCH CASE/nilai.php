<?php
$nilai = 80;
switch ($nilai) {
    case ($nilai >= 90 && $nilai <= 100):
        echo "Nilai anda $nilai, anda mendapatkan grade A";
        break;

    case ($nilai >= 80 && $nilai < 90):
        echo "Nilai anda $nilai, anda mendapatkan grade B";
        break;

    case ($nilai >= 70 && $nilai < 80):
        echo "Nilai anda $nilai, anda mendapatkan grade C";
        break;

    case ($nilai >= 0 && $nilai < 70):
        echo "Nilai anda $nilai, anda mendapatkan grade D";
        break;
}