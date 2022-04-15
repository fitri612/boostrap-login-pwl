<?php
session_start();

include "koneksi.php";
$id=$_GET['id']; 

$sql = "select foto from db_order where id='$id'";
$hasil=$conn->query($sql);  

while ($row=$hasil->fetch_assoc()){
 $foto=$row['foto'];   
}

if ($foto!=""){
	unlink("img/".$foto);	  
}	 

$sql = "delete from db_order where id='$id'";

if ($conn->query($sql) === TRUE) {
  $conn->close(); 
  header("location:manage.php");  
}else{
  $conn->close();  
  echo "New records failed";
} 
?>