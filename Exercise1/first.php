<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Inside myfirstprogram.php

function multTable() {
	echo "<table>";
	foreach (range(0,100) as $r) {
		echo "<tr>";
		foreach (range(0,100) as $c) {
			if ($r == 0 && $c == 0) {
				echo "<th></th>";
			}
			else if ($r == 0 && $c != 0) {
				echo "<th>" . $c . "</th>";
			}
			else if ($r != 0 && $c == 0) {
				echo "<th>" . $r . "</th>";
			}
			else {
				echo "<td>" . $r * $c . "</td>";
			}
		}
		echo "</tr>";
	}
}
multTable();
?>
