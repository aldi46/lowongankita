<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id = $_POST['calonpekerja_id'];
$password = $_POST['password'];
$namacalonpekerja = $_POST['namacalonpekerja'];
$kotacalonpekerja = $_POST['kotacalonpekerja'];
$provinsicalonpekerja = $_POST['provinsicalonpekerja'];
$alamatcalonpekerja = $_POST['alamatcalonpekerja'];
$emailcalonpekerja = $_POST['emailcalonpekerja'];
$noteleponcalonpekerja = $_POST['noteleponcalonpekerja'];
$pendidikanterakhir = $_POST['pendidikanterakhir'];
$skilldankeahlian = $_POST['skilldankeahlian'];

//update data di database sesuai pasien_id
$query = mysql_query("update datacalonpekerja set password='$password', namacalonpekerja='$namacalonpekerja', kotacalonpekerja='$kotacalonpekerja', provinsicalonpekerja='$provinsicalonpekerja', alamatcalonpekerja='$alamatcalonpekerja', emailcalonpekerja='$emailcalonpekerja', noteleponcalonpekerja='$noteleponcalonpekerja', pendidikanterakhir='$pendidikanterakhir', skilldankeahlian='$skilldankeahlian' where calonpekerja_id='$id'") or die(mysql_error());

if ($query) {
	header('location:index.php?message=update-datacalonpekerja');
}
?>
