<?php 
include('config.php');

$id = $_GET['id'];

$query = mysql_query("delete from datalowongan where lowongan_id='$id'") or die(mysql_error());

if ($query) {
	header('location:index.php?message=delete-datalowongan');
}
?>