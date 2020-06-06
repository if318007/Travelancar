<?php

$link = mysqli_connect("localhost", "root", "", "travelancar");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
		$id_pembayaran = mysqli_real_escape_string($link, $_REQUEST['id_pembayaran']);
		$id_bank_pbyr =  mysqli_real_escape_string($link, $_REQUEST['id_bank_pbyr']);
		$id_order_tiket =  mysqli_real_escape_string($link, $_REQUEST['id_order_tiket']);
		$tgl_pembayaran =  mysqli_real_escape_string($link, $_REQUEST['tgl_pembayaran']);
  
	$sql = "INSERT INTO bukti_pembayaran (id_pembayaran, id_bank_pbyr, id_order_tiket, tgl_pembayaran) VALUES ('$id_pembayaran', '$id_bank_pbyr', '$id_order_tiket', '$tgl_pembayaran')";


if(mysqli_query($link, $sql)){
    echo "Pembayaran berhasil.";
    header("location: berhasil.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

 
