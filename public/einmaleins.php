<table>
<?php
$zeilen = 10;
$spalten = 10;

for ($zeile = 1; $zeile <= $zeilen; $zeile++) {
 echo "<tr>";
	for ($spalte = 1; $spalte <= $spalten; $spalte++) {
		echo "<td>";
			echo $zeile*$spalte;
		echo "</td>";
	}
 echo "</tr>";
}


?>
</table>