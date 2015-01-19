<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id = $_POST['komen_id'];
$nama = $_POST['nama'];
$komentar = $_POST['komentar'];
$date = $_POST['date'];
$url = $_POST['url'];

//update data di database sesuai pasien_id
$query = mysql_query("update datakomen set 
	nama='$nama'
	, komentar='$komentar'
	, date='$date'
	, url='$url'
	where komen_id='$id'") or die(mysql_error());

if ($query) {
	header('location:index.php?message=update-datakomen');
}
?>
