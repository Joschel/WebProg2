
<?php

if (isset($_GET['Limit'])) {
$summe = 0;

for ($i = 1; $i < $_GET['Limit']; $i++)

{

$summe = $summe + $i;

}

echo $summe;
} else {
  ?>

<form action="">
<input type="text" name="Limit" placeholder="Limit">
</form>
 <?php }

?>
