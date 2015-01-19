<html>
<?php 
include('config.php');
include('cek-login.php');
?>

<head>
    <title>Lowongan Kita</title>
        
        <link rel="stylesheet" media="screen" href="css/style.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="lowongan, pekerjaan, kerja, pekerja, perusahaan, lowongankita, kita">
    <meta name="description" content="lowongankita merupakan website yang menyediakan lowongan pekerjaan. dilowongan kita anda bisa melamar pekerjaan yang terlah di daftarkan oleh perusahaan - perusahaan yang membutuhkan pekerja">
    <meta name="author" content="lowongankita">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
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
                    <a href="lowongan.php"><i class="fa  fa-file-o  fa-fw"></i> List Lowongan
                    </a>
                </li>
                <li>
                    <a href="view-daftar.php"><i class="fa fa-book fa-fw"></i> Data Lamaran Pekerjaan <?php echo $_SESSION['usernamecalonpekerja']; ?>
                    </a>
                </li>
               
            </ul>
           

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['usernamecalonpekerja']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="view.php"><i class="fa fa-user fa-fw"></i> Profil <?php echo $_SESSION['usernamecalonpekerja']; ?></a>
                        </li>
                        <li><a href="editpass.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    
                </li>
                
            </ul>

             <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Pemberitahuan <i class="fa fa-caret-down"></i>
                    </a>
                     
                    <ul class="dropdown-menu dropdown-user">
                                <?php 
                                $usernamecalonpekerja = $_SESSION['usernamecalonpekerja'];
                                    $query = mysql_query("select * from datacalonpekerja,datacurriculumvitae,datalowongan,dataperusahaan where datacalonpekerja.calonpekerja_id=datacurriculumvitae.calonpekerja_id and datacurriculumvitae.lowongan_id=datalowongan.lowongan_id and datalowongan.perusahaan_id=dataperusahaan.perusahaan_id and usernamecalonpekerja='$usernamecalonpekerja'");
                                    $no = 1;

                                while ($data = mysql_fetch_array($query)){
                               
                               if(!empty($data['statuslamaran'])){
                                ?>
                                
                                <li><a href="view-lamaran-detail.php?id=<?php echo $data['curriculum_id']; ?>"><i class="fa fa-user fa-fw"></i> Lowongan anda pada perusahaan <?php echo $data['namaperusahaan'];?> dengan nama pekerjaan <?php echo $data['namapekerjaan'];?> telah <b><?php echo $data['statuslamaran'];?></b></a></li>
                                <?php }?>
                                <?php $no++; }?>
                         </ul>
                   
                </li>
               
            </ul>
            
           
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Pengisian Curriculum Vitae
                        
                    </h1>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <div id="deskripsi">
                <?php 
$usernamecalonpekerja = $_SESSION['usernamecalonpekerja'];

$query = mysql_query("select * from datacalonpekerja where usernamecalonpekerja='$usernamecalonpekerja'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<?php 
$id = $_GET['id'];

$query1 = mysql_query("select * from datalowongan where lowongan_id='$id'") or die(mysql_error());

$data1 = mysql_fetch_array($query1);
?>      
        
        <div id="deskripsi">
            <form name="input_data" action="insertcurriculumvitae.php" method="post">
                <table border="0" cellpadding="5" cellspacing="0">
    <tbody>
       
        <td><b><h4>Data Pribadi</h4></b><td>
        <tr>
            <p><td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="20" required="required" value="<?php echo $data['namacalonpekerja']; ?>"></td>
        </p></tr>
        <tr>
            <p><td>tempat, tanggal lahir</td>
            <td>:</td>
            <td><input type="text" name="tempattanggallahir" maxlength="100" required="required" /></td>
        </p></tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jeniskelamin" required="required" /></td>
        </tr>
        <tr><p>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama" maxlength="100" required="required" /></td>
        </p></tr>
        <tr>
            <td>Tinggi Badan</td>
            <td>:</td>
            <td><input type="text" name="tinggibadan" maxlength="14" required="required" /></td>
        </tr>
        <tr>
            <td>Berat Badan</td>
            <td>:</td>
            <td><input type="text" name="beratbadan" maxlength="14" required="required" /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea row="5" cold="40" name="alamat" required="required"><?php echo $data['alamatcalonpekerja']; ?></textarea></td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td>:</td>
            <td><input type="text" name="notelepon" maxlength="14" required="required" value="<?php echo $data['noteleponcalonpekerja']; ?>"></td>
        </tr>
        <tr><p>
            <td>Status</td>
            <td>:</td>
            <td><input type="text" name="status" maxlength="100" required="required" /></td>
        </p></tr>
        <tr><p>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" maxlength="100" required="required" value="<?php echo $data['emailcalonpekerja']; ?>"/></td>
        </p></tr>
        <td><b><h4>Data Pendidikan</h4></b></td>
        <tr><p>
            <td>Sekolah Dasar</td>
            <td>:</td>
            <td><input type="text" name="sekolahdasar" maxlength="200" /></td>
        </p></tr>
        <tr><p>
            <td>SMP</td>
            <td>:</td>
            <td><input type="text" name="smp" maxlength="200" /></td>
        </p></tr>
        <tr><p>
            <td>SMA</td>
            <td>:</td>
            <td><input type="text" name="sma" maxlength="200" /></td>
        </p></tr>
        <tr><p>
            <td>Perguruan Tinggi</td>
            <td>:</td>
            <td><input type="text" name="perguruantinggi1" maxlength="200" /></td>
        </p></tr>
        <tr><p>
            <td>Perguruan Tinggi</td>
            <td>:</td>
            <td><input type="text" name="perguruantinggi2" maxlength="200" /></td>
        </p></tr>
        <tr><p>
            <td>Perguruan Tinggi</td>
            <td>:</td>
            <td><input type="text" name="perguruantinggi3" maxlength="200" /></td>
        </p></tr>
        <td><b><h4>Data Kemampuan</h4></b></td>
        <tr><p>
            <td>Kemampuan</td>
            <td>:</td>
            <td><input type="text" name="kemampuan1" maxlength="200" /></td>
        </p></tr>
        <tr><p>
            <td>Kemampuan</td>
            <td>:</td>
            <td><input type="text" name="kemampuan2" maxlength="200" /></td>
        </p></tr>
        <tr><p>
            <td>Kemampuan</td>
            <td>:</td>
            <td><input type="text" name="kemampuan3" maxlength="200" /></td>
        </p></tr>
        <td><b><h4>Data Pengalaman</h4></b></td>
        <tr><p>
            <td>Pengalaman</td>
            <td>:</td>
            <td><input type="text" name="pengalaman1" maxlength="200" /></td>
        </p></tr>
        <tr><p>
            <td>Pengalaman</td>
            <td>:</td>
            <td><input type="text" name="pengalaman2" maxlength="200" /></td>
        </p></tr>
        <tr><p>
            <td>Pengalaman</td>
            <td>:</td>
            <td><input type="text" name="pengalaman3" maxlength="200" /></td>
        </p></tr>

        <input type="hidden" name="lowongan_id" value="<?php echo $data1['lowongan_id']; ?>" />
        <input type="hidden" name="calonpekerja_id" value="<?php echo $data['calonpekerja_id']; ?>" />
        </p><tr>
            <p><td align="left" colspan="3"><input type="submit" name="submit" value="Daftar" /></td></p>
        </tr>
    </tbody>
</table>
</form> 
                               
            </div>

    </div>
    <script src="js/jquery.js"></script>

   
    <script src="js/bootstrap.min.js"></script>
                </div>
                
            </div>
            
        </div>
        
        <div id="footer">Copyright &copy:2014 Kelompok aldi, aprian, ihda</div></div>
</body>
</html>

