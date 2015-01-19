<?php include('config.php');
include('cek-login.php');
?>

<html>
<head>
    <title>Lowongan Kita</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="lowongan, pekerjaan, kerja, pekerja, perusahaan, lowongankita, kita">
    <meta name="description" content="lowongankita merupakan website yang menyediakan lowongan pekerjaan. dilowongan kita anda bisa melamar pekerjaan yang terlah di daftarkan oleh perusahaan - perusahaan yang membutuhkan pekerja">
    <meta name="author" content="lowongankita">
    
     <link rel="stylesheet" media="screen" href="css/style.css">

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
                         Pendaftaran
                        
                    </h1>
                </div>
               
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    

                    <script src="js/js/jquery.min.js"></script>
                    <script src="js/js/bootstrap.min.js"></script>

                    <div id="deskripsi">
                        <strong>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#perusahaan" data-toggle="tab">Perusahaan</a></li>
                                <li><a href="#calonpekerja" data-toggle="tab">Calon Pekerja</a></li>
                            </ul>
                            <div class="tab-content">
                                <ul class="tab-pane active" id="perusahaan">
                                    <h2>Silahkan Daftar Sebagai Perusahaan</h2>
                                    <form name="input_data" action="perusahaan/insert.php" method="post">
                                        <table border="0" cellpadding="5" cellspacing="0">
                                            <tbody>
                                                <tr><td>Username</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="usernameperusahaan" maxlength="50" required="required" /></td>
                                                </tr>
                                                <tr><td>Password</td>
                                                    <td>:</td>
                                                    <td><input type="password" name="password" maxlength="50" required="required" /></td>
                                                </tr>
                                                <tr><td>Nama Perusahaan</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="namaperusahaan" required="required" /></td>
                                                </tr>
                                                <tr><td>Email Perusahaan</td>
                                                    <td>:</td>
                                                    <td><input type="email" name="emailperusahaan" maxlength="100" required="required" /></td>
                                                </tr>
                                                <tr><td>Nomor Telepon Perusahaan</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="noteleponperusahaan" maxlength="14" required="required" /></td>
                                                </tr>
                                                <tr><td>Alamat Perusahaan</td>
                                                    <td>:</td>
                                                    <td><textarea row="5" cold="40" type="textarea" name="alamatperusahaan" required="required" ></textarea></td>
                                                </tr>
                                                <tr><td>Deskripsi Perusahaan</td>
                                                    <td>:</td>
                                                    <td><textarea row="5" cold="40" type="textarea" name="deskripsiperusahaan" required="required" ></textarea></td>
                                                </tr>
                                                <tr><td>Jenis Pekerjaan yang ada diPerusahaan</td>
                                                    <td>:</td>
                                                    <td><textarea row="5" cold="40" type="textarea" name="jenispekerjaanyangadadiperusahaan" required="required" ></textarea></td>
                                                </tr>
                                                <tr><td align="left" colspan="3"><input type="submit" name="submit" value="Daftar" /></td></tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </ul>
                                <ul class="tab-pane" id="calonpekerja">
                                    <h2>Silahkan Daftar Sebagai Calon Pekerja</h2>
                                    <form enctype="multipart/form-data" name="input_data" action="calonpekerja/insert.php" method="post">
                                        <table border="0" cellpadding="5" cellspacing="0">
                                            <tbody>
                                                <tr><td>Username</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="usernamecalonpekerja" maxlength="50" required="required" /></td>
                                                </tr>
                                                <tr><td>Password</td>
                                                    <td>:</td>
                                                    <td><input type="password" name="password" maxlength="50" required="required" /></td>
                                                </tr>
                                                <tr><td>Nama Lengkap</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="namacalonpekerja" maxlength="100" required="required" /></td>
                                                </tr>
                                                <tr><td>Kota</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="kotacalonpekerja" required="required" /></td>
                                                </tr>
                                                <tr><td>Provinsi</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="provinsicalonpekerja" maxlength="50" required="required" /></td>
                                                </tr>
                                                <tr><td>Alamat</td>
                                                    <td>:</td>
                                                    <td><textarea row="5" cold="40" type="textarea" name="alamatcalonpekerja" required="required" ></textarea></td>
                                                </tr>
                                                <tr><td>Email</td>
                                                    <td>:</td>
                                                    <td><input type="email" name="emailcalonpekerja" maxlength="100" required="required" /></td>
                                                </tr>
                                                <tr><td>No Telepon</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="noteleponcalonpekerja" maxlength="14" required="required" /></td>
                                                </tr>
                                                <tr><td>Pendidikan Terakhir</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="pendidikanterakhir" /></td>
                                                </tr>
                                                <tr><td>Skill dan Keahlian</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="skilldankeahlian" /></td>
                                                </tr>
                                                
                                                    <p><td align="left" colspan="3"><input type="submit" name="submit" value="Daftar" /></td></p>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </ul>
                            </div>
                        </strong>
                    </div>
                </div>
            </div>
           
        </div>
       
    </div>
    
    <div id="footer">Copyright &copy:2014 Kelompok aldi, aprian, ihda</div>
</div>
</body>
</html>




