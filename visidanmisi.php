<?php 
include('config.php');
include('cek-login.php');
?>


<html>
<head>
	<title>Lowongan Kita</title>
		
		<link rel="stylesheet" media="screen" href="css/style.css">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="lowongan, pekerjaan, kerja, pekerja, perusahaan, lowongankita, kita">
    <meta name="description" content="lowongankita merupakan website yang menyediakan lowongan pekerjaan. dilowongan kita anda bisa melamar pekerjaan yang terlah di daftarkan oleh perusahaan - perusahaan yang membutuhkan pekerja">
    <meta name="author" content="lowongankita">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <link href="css/sb-admin-2.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

	<div id="wrapper">

        <Header class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="nav navbar-top-links" align="center">
                <img class="brand" src="images/header2.jpg">
            </div>
        </header>

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <ul class="nav navbar-top-links navbar-left">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home fa-fw"></i> Home
                    </a>
                </li>
                <li>
                    <a href="lowongan.php"><i class="fa  fa-file-o  fa-fw"></i> Lowongan
                    </a>
                </li>
                <li>
                    <a href="tentangkami.php"><i class="fa  fa-group  fa-fw"></i> Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="kontak.php"><i class="fa fa-book fa-fw"></i> kontak
                    </a>
                </li>
              
            </ul>
      
            <ul class="nav navbar-top-links navbar-right">
                <?php 
                            if (!empty($_SESSION['usernamecalonpekerja'])) {
                            ?>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="calonpekerja/index.php">
                                <i class="fa fa-user fa-fw"></i> Masuk Halaman Calonpekerja</a></li>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="logout.php">
                                <i class="fa fa-user fa-fw"></i> Logout</a></li>
                            <?php
                            } else if (!empty($_SESSION['usernameperusahaan']) ) {
                            ?>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="perusahaan/index.php">
                                <i class="fa fa-user fa-fw"></i> Masuk Halaman Perusahaan</a></li>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="logout.php">
                                <i class="fa fa-user fa-fw"></i> Logout</a></li>
                            <?php    
                            } else  {
                                ?>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="daftar.php">
                                <i class="fa fa-user fa-fw"></i> Daftar</a></li>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="pilihlogin.php">
                                <i class="fa fa-user fa-fw"></i> Login</a></li>
                           <?php
                            }
                            ?>
             
            </ul>
     
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                         Visi Misi : solusi praktis pemburu kerja
                        
                    </h1>
                </div>
            
            </div>
      
            <div class="row">
                <div class="col-lg-12">
                	<div id="register">
                		<h4><img src="images/nav_judul.png">Post Terkait</h4>
                		<h5><p><a href="panduan.php">Panduan Melamar Pekerjaan</a></p>
                			<p><a href="VisidanMisi.php">Visi dan Misi Website Kami</a></p>
                			<p><a href="manfaatlamaran.php">Kenapa Harus Melamar Pekerjaan di sini?</a></p>	
                		</h5>
                	</div>

                	<div id="deskripsi">
				<strong>

					<p>Dimasa sekarang ini mencari pekerjaan tidak semudah beberapa tahun yang lalu, dikarenakan jumlah pelamar yang semakin meningkat disetiap tahunnya, yang pasti untuk mencari sebuah pekerjaan membutuhkan biaya dan waktu yang tidak sedikit, oleh karena itu diciptakan website job vacancy lowongankitameximascom untuk memudahkan anda dalam mencari pekerjaan, karena dengan menggunakan lowongankitameximascom anda tidak perlu repot menyusuri perkantoran hanya untuk melamar pekerjaan, anda perlu online dan mengakses website kami yang sudah ada daftar perusahaan yang sedang mencari karyawan, sehingga anda bisa memilih pekerjaan apa sesuai basic yang anda miliki, semoga sukses</p> 
				</strong>
				
			</div>

	</div>
                </div>
              
            </div>
          
        </div>
    
        <div id="footer">Copyright &copy:2014 Kelompok aldi, aprian, ihda</div></div>
</body>
</html>
