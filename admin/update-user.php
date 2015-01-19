<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id = $_POST['user_id'];
$password = $_POST['password'];
$NmLengkap = $_POST['NmLengkap'];
$JnKelamin = $_POST['JnKelamin'];
$TglLahir = $_POST['TglLahir'];
$Almt = $_POST['Almt'];
$Email = $_POST['Email'];
$NoHP = $_POST['NoHP'];
$TglUbah = $_POST['TglUbah'];

//update data di database sesuai user_id
$query = mysql_query("update dataadmin set 
	password='$password'
	, NmLengkap='$NmLengkap'
	, JnKelamin='$JnKelamin'
	, TglLahir='$TglLahir'
	, Almt='$Almt'
	, Email='$Email'
	, NoHP='$NoHP'
	, TglUbah='$TglUbah'
	where user_id='$id'") or die(mysql_error());

if ($query) {
	header('location:profil.php?message=update-datakomen');
}
?>
