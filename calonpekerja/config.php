<?php
//host yang digunakan
//99,9% tidak perlu dirubah
$host = 'mysql.idhostinger.com'; 
 
//username untuk login ke host
//biasanya didapatkan pada email konfirmasi order hosting
$user = 'u236706172_tugas'; 
 
//jika menggunakan PC sendiri sebagai host,
//secara default password dikosongkan
$pass = 'lowongankita';
 
//isikan nama database sesuai database
//yang dibuat pada langkah-1
$dbname = 'u236706172_tugas';
 
//mengubung ke host
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
 
//memilih database yang akan digunakan
$dbselect = mysql_select_db($dbname);
?>