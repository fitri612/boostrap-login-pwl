<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {	
	$brg=$_GET['brg'];
	$hrg=$_GET['hrg'];
	$jml=$_GET['jml'];
	$total = 0;
	// $total_bayar = 0;

	
	//update jika barang yang baru dibeli sudah ada dalam keranjang
	if (!empty($_SESSION['cart']['arrCart'])){
		$max=sizeof($_SESSION['cart']['arrCart']);
		$find=false;
		for ($i=0;$i<$max;$i++){
			$cari=array_search($brg, $_SESSION['cart']['arrCart'][$i]);
			if ($cari) {
				$_SESSION['cart']['arrCart'][$i]['jml']+=1;
				$_SESSION['cart']['arrCart'][$i]['sub']+=$hrg;

				$find=true;
				break;
			}
			// total
						
		}			
	}
	
	//insert jika barang yang baru dibeli belum ada dalam keranjang
	if (!$find){
		$item = array('Nama Barang'=>$brg, 'jml'=>$jml, 'sub'=>$hrg,'hrg'=>$hrg);
		array_push($_SESSION["cart"]["arrCart"],$item);										
	}
}

header("location:CartDisplay.php");	
?>