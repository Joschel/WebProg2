<?php
function areStringsAnagrams($satz1, $satz2)
{

  // Ersetzen von Leerzeichen durch nix
    $ohneLeerzeichenSatz1 = str_replace(" ", "", $satz1);
    $ohneLeerzeichenSatz2 = str_replace(" ", "", $satz2);

  // beide sätze zu kleinschreibung
    $a = strtolower($ohneLeerzeichenSatz1);
    $b = strtolower($ohneLeerzeichenSatz2);

   $a = str_split($a);

   $test = array();
   $compare = array();

   foreach ($a as $key) {
       if (!in_array($key, $test)) {
           array_push($test, $key);
           $compare[$key] = 1;
       } else {
           $compare[$key] += 1;
       }
   }

   foreach ($compare as $key => $value) {
       if ($value !== substr_count($b, $key)) {
           return false;
       }

   }
   return true;
}

$ergebnis = areStringsAnagrams($_GET['satz1'], $_GET['satz2']);
if ($ergebnis){
  echo 'Ist ein Anagramm';
}else{
  echo 'Kein Anagramm';
}
?>
