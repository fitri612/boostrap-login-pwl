<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {	
	
	$brg=$_GET['brg']; // nama Barang
	$hrg=$_GET['hrg'];
	$jml=$_GET['jml'];

	print("<br>brg: $brg<br>hrg: $hrg<br>jml: $jml"); // ini ketampil
	$total = 0;

	if (!empty($_SESSION['cart']['arrCart']['total'])) {

		$total = $_SESSION['cart']['arrCart']['total']['hrg'];
	}
	
	if (!empty($_SESSION['cart']['arrCart']['items'])) {

		$find = false;
		$max = sizeof($_SESSION['cart']['arrCart']['items']);
		for ($i = 0; $i < $max; $i++) {

			$cart = $_SESSION['cart']['arrCart']['items'][$i];

			// If Duplicate
			if ($cart["brg"] == $brg) {

				// Increment
				$_SESSION['cart']['arrCart']['items'][$i]['jml'] += intval($jml);
				$find = true;
			}

			$total += ($cart['hrg'] * $cart['jml']);

		}
		

		if (!$find) {

			$newBrg = array(

				"brg" => $brg,
				"hrg" => intval($hrg),
				"jml" => intval($jml)
			);
	
			$_SESSION['cart']['arrCart']['items'] []= $newBrg;
		}

	} else {


		$newBrg = array(

			"brg" => $brg,
			"hrg" => intval($hrg),
			"jml" => intval($jml)
		);

		$total += ($hrg * $jml);

		$_SESSION['cart']['arrCart']['items'] []= $newBrg;
	}

	// Totaling

	$_SESSION['cart']['arrCart']['total'] = array(

		"brg" => "Total",
		"hrg" => intval($total),
		"jml" => 0
	);
}

header("location:CartDisplay.php");
// include "cart-disp.php";
?>