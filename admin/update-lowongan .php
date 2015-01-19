<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id = $_POST['lowongan_id'];
$namapekerjaan = $_POST['namapekerjaan'];
$deskripsipekerjaan = $_POST['deskripsipekerjaan'];
$syaratpekerjaan = $_POST['syaratpekerjaan'];
$jenispekerjaan = $_POST['jenispekerjaan'];
$jumlahorangyangdiperlukan = $_POST['jumlahorangyangdiperlukan'];
$statuslowonganpekerjaan = $_POST['statuslowonganpekerjaan'];

//update data di database sesuai pasien_id
$query = mysql_query("update datalowongan set 
	namapekerjaan='$namapekerjaan'
	, deskripsipekerjaan='$deskripsipekerjaan'
	, syaratpekerjaan='$syaratpekerjaan'
	, jenispekerjaan='$jenispekerjaan'
	, jumlahorangyangdiperlukan='$jumlahorangyangdiperlukan'
	, statuslowonganpekerjaan='$statuslowonganpekerjaan'
	where lowongan_id='$id'") or die(mysql_error());

if ($query) {
	header('location:index.php?message=update-datalowongan');
}
?>
