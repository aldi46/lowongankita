<?php 
include('config.php');

$id = $_GET['id'];

$query = mysql_query("delete from datacalonpekerja where calonpekerja_id='$id'") or die(mysql_error());

if ($query) {
	header('location:index.php?message=delete-datacalonpekerja');
}
?>