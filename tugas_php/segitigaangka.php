<?php
for ($i = 0; $i < 9; $i++) {    // Variabel i berisi angka 0,jika variabel i kurang dari 9 maka perulangan luar akan dijalankan sebanyak 9 kali. 
  for ($j = 0; $j <= $i; $j++) {    // Perulangan dalam dengan variabel $j dipakai untuk membuat angka. Maka angka akan dibuat menaik mulai dari 1, 2, 3 dst hingga mencapai 8.
    echo "$j";  // Dalam setiap iterasi, jalankan perintah echo "$j". Perintah inilah yang akan menampilkan variabel $j yaitu angka. 
  }
  echo "<br>";  // Dalam setiap iterasi, jalankan perulangan dalam serta sebuah perintah echo "<br>" 
}
?>
