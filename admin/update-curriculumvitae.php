<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id = $_POST['curriculum_id'];
/*$nama = $_POST['nama'];*/
$tempattanggallahir = $_POST['tempattanggallahir'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$tinggibadan = $_POST['tinggibadan'];
$beratbadan = $_POST['beratbadan'];
$alamat = $_POST['alamat'];
$notelepon = $_POST['notelepon'];
$status = $_POST['status'];
$email = $_POST['email'];
$sekolahdasar = $_POST['sekolahdasar'];
$smp = $_POST['smp'];
$sma = $_POST['sma'];
$perguruantinggi1 = $_POST['perguruantinggi1'];
$perguruantinggi2 = $_POST['perguruantinggi2'];
$perguruantinggi3 = $_POST['perguruantinggi3'];
$kemampuan1 = $_POST['kemampuan1'];
$kemampuan2 = $_POST['kemampuan2'];
$kemampuan3 = $_POST['kemampuan3'];
$pengalaman1 = $_POST['pengalaman1'];
$pengalaman2 = $_POST['pengalaman2'];
$pengalaman3 = $_POST['pengalaman3'];
$lowongan_id = $_POST['lowongan_id'];
$calonpekerja_id = $_POST['calonpekerja_id'];
$statuslamaran = $_POST['statuslamaran'];

//update data di database sesuai pasien_id
$query = mysql_query("update datacurriculumvitae set 
	
	tempattanggallahir='$tempattanggallahir'
	, jeniskelamin='$jeniskelamin'
	, agama='$agama'
	, tinggibadan='$tinggibadan'
	, beratbadan='$beratbadan'
	, alamat='$alamat'
	, notelepon='$notelepon'
	, status='$status'
	, email='$email'
	, sekolahdasar='$sekolahdasar'
	, smp='$smp'
	, sma='$sma'
	, perguruantinggi1='$perguruantinggi1'
	, perguruantinggi2='$perguruantinggi2'
	, perguruantinggi3='$perguruantinggi3'
	, kemampuan1='$kemampuan1'
	, kemampuan2='$kemampuan2'
	, kemampuan3='$kemampuan3'
	, pengalaman1='$pengalaman1'
	, pengalaman2='$pengalaman2'
	, pengalaman3='$pengalaman3'
	, lowongan_id='$lowongan_id'
	, calonpekerja_id='$calonpekerja_id'
	, statuslamaran='$statuslamaran'
	where curriculum_id='$id'") or die(mysql_error());

if ($query) {
	header('location:index.php?message=update-datacurriculumvitae');
}
?>
