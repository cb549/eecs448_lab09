<?php
$item1 = $_POST["qt1"];
$item2 = $_POST["qt2"];
$item3 = $_POST["qt3"];
$item4 = $_POST["qt4"];
$ship = $_POST["shipping"];
$uname = $_POST["username"];
$pass = $_POST["password"];

function process() {
	global $item1, $item2, $item3, $item4, $ship;
	$total = ($item1*179.99) + ($item2*149.99) + ($item3*419.99) + ($item4*309.99) + $ship;
	$method = '';
	if ($ship == '50.00') {
		$method = 'Overnight';
	}
	else if ($ship == '5.00') {
		$method = '3-day';
	}
	else {
		$method = '7-day';
	}
	echo "<table width='50%'><tr class='head'><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
	if ($item1 > 0) {
		echo "<tr><th class='header'>Ryzen 5 3600 CPU</th><td>" . $item1 . "</td><td>$179.99</td><td>$" . $item1*179.99 . "</td></tr>";
	}
	if ($item2 > 0) {
		echo "<tr><th class='header'>Intel i5-10400 CPU</th><td>" . $item2 . "</td><td>$149.99</td><td>$" . $item2*149.99 . "</td></tr>";
	}
	if ($item3 > 0) {
		echo "<tr><th class='header'>EVGA KO Gaming GeForce RTX 2060 Super GPU</th><td>" . $item3 . "</td><td>$419.99</td><td>$" . $item3*419.99 . "</td></tr>";
	}
	if ($item4 > 0) {
		echo "<tr><th class='header'>Sapphire PULSE Radeon RX 5600 XT GPU</th><td>" . $item4 . "</td><td>$309.99</td><td>$" . $item4*309.99 . "</td></tr>";
	}
	echo "<tr><th class='header'>Shipping</th><td>" . $method . "</td><td></td><td>$" . $ship . "</td></tr>";
	echo "<tr><th class='header'>Total Cost<td></td><td>" . $total . "</td><td></td>";
}

function hello() {
	global $uname, $pass;
	echo "<p>Welcome " . $uname . "!</p>";
	echo "<p>Your password is " . $pass . "</p>";
}

echo "<link href='style.css' rel='stylesheet' type='text/css'/>";
process();
hello();
?>