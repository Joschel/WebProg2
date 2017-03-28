Gleiche Länge!!

<?php
$satz1 = "abcdefg";
$satz2 = "hijklmn";

$ergebnis = "";

for ($i=0; $i < strlen($satz1); $i++){
  $ergebnis = $ergebnis . $satz1[$i] . $satz2[$i];
}

echo $ergebnis;
