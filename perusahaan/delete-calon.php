<?php 
include('config.php');

$id = $_GET['id'];

$query = mysql_query("delete from datacurriculumvitae where curriculum_id='$id'") or die(mysql_error());

if ($query) {
	header('location:view-calon.php?message=delete-calon');
}
?>