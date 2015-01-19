<?php
if($_POST["tombol"]=="Kirim")
{
$lowongan_id=$_POST["lowongan_id"];
$nama=$_POST["nama"];
$komentar=$_POST["komentar"];
$url=$_POST["url"];
 
if(empty($nama))
$_POST["nama"]='anonymous';
if(empty($komentar)){
echo "<meta http-equiv='refresh' content='2; url=$url'>";
die("komentar harus diisi");}
}
 
//connect database
$con=mysql_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
 
//Menampilkan data
mysql_select_db("lowongankita", $con);
 
$sql="INSERT INTO datakomen (lowongan_id, nama, komentar, url,
date)
VALUES
('$_POST[lowongan_id]', '$_POST[nama]', '$_POST[komentar]',
'$_POST[url]', NOW())";
 
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
echo "<meta http-equiv='refresh' content='0; url=$url'>";
 
//Memutuskan koneksi
mysql_close($con);
?>