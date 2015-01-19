<?php
include('config.php');

//tangkap data dari form
$perusahaan_id = $_POST['perusahaan_id'];
$password = $_POST['password'];


//update data di database sesuai perusahaan_id
$query = mysql_query("update dataperusahaan set password='$password' where perusahaan_id='$perusahaan_id'") or die(mysql_error());

if ($query) {
	header('location:index.php');
}
?>