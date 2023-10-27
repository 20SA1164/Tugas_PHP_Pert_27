<?php

echo "Membuat piramida segitiga siku - siku angka" . "<br/>";
echo "<br/>";

$baris = 9;// mendefinisi jumlah baris dalam segitiga

// melakukan looping untuk mengatur jumlah baris yang akan ditampilkan
for ($i = 0; $i < $baris; $i++) {
    //  melakukan looping untuk menampilkan angka pada setiap baris
    for ($j = 0; $j <= $i; $j++) {
        echo $j;
    }
    // Berpindah ke baris berikutnya
    echo "<br>";
}

?>