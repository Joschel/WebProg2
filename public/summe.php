<?php


if (isset($_GET['limit'])) {

	$limit = $_GET['limit'];

	// Ziel 1+2+3+4+5

	$summe = 0;

	for ($i = 1; $i<= $limit; $i++) {
		//echo "<tr><td>$i</td><td>$summe</td></tr>";
		$summe = $summe + $i;
	}
	echo $summe;
} // bis hierher wird ausgeführt, wenn Bedingung wahr ist
else { // ab hier wird ausgeführt, wenn Bedingung falsch ist (Kein Parameter limit gesetzt)
	?>
		<form action="summe.php" METHOD="GET">
		<input type="text" name="limit" placeholder="Limit">
		<input type="submit">
		</form>

	<?php
}
?>
