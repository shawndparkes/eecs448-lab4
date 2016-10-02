<?php
	$name = $_POST["name"];
	$pass = $_POST["pass"];
	$monitor = $_POST["monitor"];
	$keyboard = $_POST["keyboard"];
	$mouse = $_POST["mouse"];
	$shipping = $_POST["shipping"];
	$shippingCost;
	if($shipping == "Free")
	{
		$shippingCost = 0;
	}
	elseif($shipping == "Over Night")
	{
		$shippingCost = 50;
	}
	else
	{
		$shippingCost = 5;
	}
	
	echo "Welome " . $name . "<br>";
	echo "Password: " . $pass . "<br><br>";
	
	echo "<table border = '1'> <tr> <td></td>";
	echo "<td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>";
	echo "<tr><td>Monitor</td><td>" . $monitor . "</td><td>$100</td><td>$" . $monitor * 100 . "</td></tr>";
	echo "<tr><td>Keyboard</td><td>" . $keyboard . "</td><td>$20</td><td>$" . $keyboard * 20 . "</td></tr>";
	echo "<tr><td>Mouse</td><td>" . $mouse . "</td><td>$15</td><td>$" . $mouse * 15 . "</td></tr>";
	echo "<tr><td colspan='2'>Shipping</td><td>" . $shipping . "</td><td>$" . $shippingCost . "</td></tr>";
	echo "<tr><td colspan='3'><center>Total Cost</td><td>$" . (($monitor * 100) + ($keyboard * 20) + ($mouse * 15) + $shippingCost) . "</td></tr>";
	
	echo "</table>";
?>