<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id = $_POST['dokumen_id'];
$juduldokumenlamaran = $_POST['juduldokumenlamaran'];
$link_dokumenlamaran = $_POST['link_dokumenlamaran'];
$juduldokumenijazah = $_POST['juduldokumenijazah'];
$link_dokumenijazah = $_POST['link_dokumenijazah'];
$juduldokumenskillpendukung = $_POST['juduldokumenskillpendukung'];
$link_dokumenskillpendukung = $_POST['link_dokumenskillpendukung'];
$juduldokumenfoto = $_POST['juduldokumenfoto'];
$link_dokumenfoto = $_POST['link_dokumenfoto'];

//update data di database sesuai pasien_id
$query = mysql_query("update datadokumen set 
	juduldokumenlamaran='$juduldokumenlamaran'
	, link_dokumenlamaran='$link_dokumenlamaran'
	, juduldokumenijazah='$juduldokumenijazah'
	, link_dokumenijazah='$link_dokumenijazah'
	, juduldokumenskillpendukung='$juduldokumenskillpendukung'
	, link_dokumenskillpendukung='$link_dokumenskillpendukung'
	, juduldokumenfoto='$juduldokumenfoto'
	, link_dokumenfoto='$link_dokumenfoto'
	where dokumen_id='$id'") or die(mysql_error());

if ($query) {
	header('location:index.php?message=update-datadokumen');
}
?>