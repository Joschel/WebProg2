<?php
$_GET['palindrom'];
$a = $_GET['palindrom'];
$b = '';
for ($i = 0, $laenge = mb_strlen($a); $i < $laenge; $i++) {
    $b .= $a{$laenge - $i - 1};
}
echo $b;
echo "<br>";
if ($a == $b) {
echo "Palindrom ist vorhanden";
}
else {
echo "Kein Palindrom";
}
?>
