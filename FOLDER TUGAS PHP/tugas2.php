<?php

echo "Membuat piramida segitiga siku - siku terbalik" . "<br/>";
echo "<br/>";

$baris = 8; // mendefinisi jumlah baris dalam segitiga

// Melakukan looping pada setiap baris
for ($i = 1; $i <= $baris; $i++) {
    // Mengulang setiap kolom dalam baris
    for ($j = 1; $j <= $baris; $j++) {
        if ($j <= $i - 1) {
            echo " ";
        } else {
            echo "* ";
        }
    }
    // Berpindah ke baris berikutnya
    echo "<br>";
}

?>