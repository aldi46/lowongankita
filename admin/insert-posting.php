<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$posting_id = $_POST['posting_id'];
$TglPost = $_POST['TglPost'];
$Judul = $_POST['Judul'];
$Isi = $_POST['Isi'];
$Nav = $_POST['Nav'];

//simpan data ke database
$query = mysql_query("INSERT into posting values('', '$TglPost', '$Judul', '$Isi', '$Nav')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=insert-posting');
}
?>