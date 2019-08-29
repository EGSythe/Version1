<?php

$f = fopen("Nombor.txt")
while (!feof($f)

{

$arrNombor = explode (',',fget($f));

}

$bilangan = count ($arrNombor);
$jumlah = 0;
for ($x = 0; $x < $bilangan; $x+)

{

print  $arrNombor [$x] "<br>";
$jumlah = $jumlah + $arrNombor[$x];

}

$purata = $jumlah/$bilangan;
print "jumlah = " .$jumlah "<br>";

fclose ($f);

?>