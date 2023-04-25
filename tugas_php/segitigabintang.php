<?php
for($i = 10; $i >= 0; $i--){    // Variabel i berisi angka 10, maka perulangan luar akan dijalankan sebanyak 10 kali. 
    for($s = 0; $s < $i; $s++){   // Perulangan dalam dengan variabel $j dipakai untuk membuat karakter bintang. Maka karakter bintang akan dibuat menurun mulai dari 10, 9, 8 dst hingga mencapai 0.
        echo "*";   // Dalam setiap iterasi, jalankan perintah echo "*". Perintah inilah yang akan menampilkan karakter bintang. 
    }
    echo "<br>";    // Dalam setiap iterasi, jalankan perulangan dalam serta sebuah perintah echo "<br>" 
}
?>

