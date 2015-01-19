<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id = $_POST['perusahaan_id'];
$password = $_POST['password'];
$namaperusahaan = $_POST['namaperusahaan'];
$emailperusahaan = $_POST['emailperusahaan'];
$noteleponperusahaan = $_POST['noteleponperusahaan'];
$alamatperusahaan = $_POST['alamatperusahaan'];
$deskripsiperusahaan = $_POST['deskripsiperusahaan'];
$jenispekerjaanyangadadiperusahaan = $_POST['jenispekerjaanyangadadiperusahaan'];

//update data di database sesuai pasien_id
$query = mysql_query("update dataperusahaan set 
	password='$password'
	, namaperusahaan='$namaperusahaan'
	, emailperusahaan='$emailperusahaan'
	, noteleponperusahaan='$noteleponperusahaan'
	, alamatperusahaan='$alamatperusahaan'
	, deskripsiperusahaan='$deskripsiperusahaan'
	, jenispekerjaanyangadadiperusahaan='$jenispekerjaanyangadadiperusahaan'
	where perusahaan_id='$id'") or die(mysql_error());

if ($query) {
	header('location:index.php?message=update-dataperusahaan');
}
?>
