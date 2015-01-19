<?php
include('config.php');

//tangkap data dari form
$calonpekerja_id = $_POST['calonpekerja_id'];
$password = $_POST['password'];


//update data di database sesuai perusahaan_id
$query = mysql_query("update datacalonpekerja set password='$password' where calonpekerja_id='$calonpekerja_id'") or die(mysql_error());

if ($query) {
	header('location:index.php');
}
?>