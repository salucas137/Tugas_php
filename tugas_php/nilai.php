<?php
$nilai = 90;
echo 'Nilai anda ';
switch ($nilai)
{
	case ($nilai >= 90 && $nilai <=100) :
		echo 'A<br/>';
		break;
	case ($nilai >= 80 && $nilai <= 89) :
		echo 'baik<br/>';
		break;
	case ($nilai >= 70 && $nilai <= 79) :
		echo 'cukup baik<br/>';
		break;
	default : 
		echo 'D';
}
?>