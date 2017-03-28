<?php
/*
hallo
[
"h" => 1,
"a" => 1,
"l" => 1+1,
"o" => 1
]

alloh
[
"h" => 1,
"a" => 1,
"l" => 1+1,
"o" => 1
]
*/

function buchstabenHaufigkeitGeben($satz){
  $array = [];

  for ($i=0;$i < strlen($satz); $i++){
    $aktuellerBuchstabe = $satz[$i];

    if (!isset($array[$aktuellerBuchstabe])){
      $array[$aktuellerBuchstabe] = 0;
    }

    $array[$aktuellerBuchstabe] = $array[$aktuellerBuchstabe] + 1;
  }

  return $array;
}

function areStringsAnagrams($satz1, $satz2)
{

  // Ersetzen von Leerzeichen durch nix
    $ohneLeerzeichenSatz1 = str_replace(" ", "", $satz1);
    $ohneLeerzeichenSatz2 = str_replace(" ", "", $satz2);

  // beide sätze zu kleinschreibung
    $a = strtolower($ohneLeerzeichenSatz1);
    $b = strtolower($ohneLeerzeichenSatz2);

    $tabelle1 = buchstabenHaufigkeitGeben($a);
    $tabelle2 = buchstabenHaufigkeitGeben($b);

    if ($tabelle1 == $tabelle2){
      return true;
    }else{
      return false;
    }
}

$ergebnis = areStringsAnagrams($_GET['satz1'], $_GET['satz2']);
if ($ergebnis){
  echo 'Ist ein Anagramm';
}else{
  echo 'Kein Anagramm';
}
?>
