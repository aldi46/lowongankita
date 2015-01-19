<?php
include('config.php');


//tangkap data dari form
$id = $_POST['curriculum_id'];
$statuslamaran = $_POST['statuslamaran'];

//update data di database sesuai perusahaan_id
$query = mysql_query("update datacurriculumvitae set statuslamaran='$statuslamaran' where curriculum_id='$id'") or die(mysql_error());

if ($query) {
	
	$query2 = mysql_query("select * from datacurriculumvitae,datalowongan where datacurriculumvitae.lowongan_id=datalowongan.lowongan_id and curriculum_id='$id'");
	$data2 = mysql_fetch_array($query2);
	$a = $data2['lowongan_id'];
	header("location:view-calon.php?id=$a");
}
?>