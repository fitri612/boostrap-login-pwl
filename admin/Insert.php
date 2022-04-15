<?php
session_start();

include "koneksi.php";
include "uploadFoto.php";
 
$nama=$_POST['tnama'];
$hrg=$_POST['thrg'];
$ket=$_POST['tket'];
$jml=$_POST['tjml'];
$foto=$_FILES["foto"]["name"];
$tmp = $_FILES['foto']['tmp_name'];

// var_dump($_FILES['foto']);
// die;

if ($_FILES["foto"]){

	$path = "img/" . $foto;
    move_uploaded_file($tmp, $path);
	$sql = "INSERT into db_order (nama,hrg,jml,keterangan,foto) values ('$nama',$hrg,$jml,'$ket','$foto')";	  

	if($conn->query($sql) === TRUE){
		$conn->close();
		header("location:manage.php");
	}
	else{
		$conn->close();
		echo "New records failed";
	}
}
else{
	echo "Sorry, there was an error uploading your file."; 
}
?>