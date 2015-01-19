<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id = $_POST['posting_id'];
$Judul = $_POST['Judul'];
$Isi = $_POST['Isi'];

//update data di database sesuai pasien_id
$query = mysql_query("update posting set 
	Judul='$Judul'
	, Isi='$Isi'
	where posting_id='$id'") or die(mysql_error());

if ($query) {
	header('location:index.php?message=update-posting');
}
?>
