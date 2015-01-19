<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if ((!isset($_SESSION['usernamecalonpekerja']) || empty($_SESSION['usernamecalonpekerja'])) or (!isset($_SESSION['usernameperusahaan']) || empty($_SESSION['usernameperusahaan'])) ) {
	//redirect ke halaman login
	
}
?>