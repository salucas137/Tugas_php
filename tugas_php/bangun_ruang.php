<?php

// Rumus volume kubus
$panjangRusukKubus = 10;
$volumeKubus = $panjangRusukKubus * $panjangRusukKubus * $panjangRusukKubus;
echo "1.Rumus Volume Kubus adalah : <br> Volume = panjang rusuk kubus x panjang rusuk kubus x panjang rusuk kubus <br>";
echo "$volumeKubus <br><br>";

// Rumus volume balok
$panjangBalok = 13;
$lebarBalok = 15 ; 
$tinggiBalok = 17;
$volumeBalok = $panjangBalok * $lebarBalok * $tinggiBalok;
echo "2.Rumus Volume Balok adalah : <br> Volume = panjang x lebar x tinggi <br>";
echo "$volumeBalok <br><br>";

// Rumus volume tabung
$jari2 = 10;
$tinggiTabung = 30;
$volumeTabung = 3.14 * $jari2 * $jari2 * $tinggiBalok;
echo "3.Rumus Volume Tabung adalah : <br> Volume = pi x jari-jari lingkaran x tinggi <br>";
echo " $volumeTabung <br><br>";
?>