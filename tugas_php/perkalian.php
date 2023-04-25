<?php

for ($i = 0 ; $i <= 10; $i++){
        echo "1 x $i = $i";
        echo "<br>";
    } 
?>
<?php
for ($i = 0; $i < 10; $i++) {
  for ($j = 0; $j <= $i; $j++) {
    echo "$j";
  }
  echo "<br>";
}
?>

<?php
for($i = 10; $i >= 0; $i--){
    for($s = 0; $s<$i; $s++){
        echo "*";
    }
    echo "<br>";
}
?>
