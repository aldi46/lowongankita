<html>
<?php 

include('cek-login.php');
include('config.php');
?>

<?php 
$id = $_GET['id'];
$query = mysql_query("select * from datalowongan,dataperusahaan where datalowongan.perusahaan_id=dataperusahaan.perusahaan_id and lowongan_id='$id'") or die(mysql_error());
$data = mysql_fetch_array($query);
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
                                    $query2 = mysql_query("select * from datacalonpekerja,datacurriculumvitae,datalowongan,dataperusahaan where datacalonpekerja.calonpekerja_id=datacurriculumvitae.calonpekerja_id and datacurriculumvitae.lowongan_id=datalowongan.lowongan_id and datalowongan.perusahaan_id=dataperusahaan.perusahaan_id and usernamecalonpekerja='$usernamecalonpekerja'");
                                    $no = 1;

                                while ($data2 = mysql_fetch_array($query2)){
                               
                               if(!empty($data2['statuslamaran'])){
                                ?>
                                
                                <li><a href="view-lamaran-detail.php?id=<?php echo $data2['curriculum_id']; ?>"><i class="fa fa-user fa-fw"></i> Lowongan anda pada perusahaan <?php echo $data2['namaperusahaan'];?> dengan nama pekerjaan <?php echo $data2['namapekerjaan'];?> telah <b><?php echo $data2['statuslamaran'];?></b></a></li>
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
                        <?php echo "Lowongan Pekerjaan ", $data['namapekerjaan']," ", $data['namaperusahaan'];?>
                        
                    </h1>
                </div>
               
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <div id="deskripsi">
					
					<p><?php echo  $data['deskripsipekerjaan'];?>
	   				<?php echo ". Lowongan ini membutuhkan beberapa pekerja dengan jumlah ", $data['jumlahorangyangdiperlukan'];?>
	   				<?php echo "Dengan Persyaratan : ", "<p>- ", $data['syaratpekerjaan'];?></p></p>							
					<p><?php echo  "Pekerjaan ini merupakan pekerjaan yang bersifat ", $data['jenispekerjaan'];?></p>
					<p><a href="inputcurriculumvitae.php?id=<?php echo $data['lowongan_id']; ?>">Daftar Lowongan Pekerjaan</a></p>					
	                 

                     <div id="comment">
                <form name="submitcomment" method="post" action="submitcomment.php">
                <input type="hidden" name="lowongan_id" value="<?php echo $id; ?>" />
                <?php
                $usernamecalonpekerja = $_SESSION['usernamecalonpekerja'];
                $query1 = mysql_query("select * from datacalonpekerja where usernamecalonpekerja='$usernamecalonpekerja'") or die(mysql_error());
                $data1 = mysql_fetch_array($query1);
                ?>
                
                <input type="hidden" name="nama" value="<?php echo $data1['namacalonpekerja']; ?>" ><br>
                Komentar:<br><textarea name="komentar" rows="6" cols="50"></textarea><br>
                <input name="url" value="detaillowongan.php?id=<?php echo $data['lowongan_id']; ?>" type="hidden"><br>
                <input name="tombol" value="Kirim" type="submit"></form></div>
                <div id="publishcomment">
                


                <?php
                $id = $_GET['id'];                
                $commentquery = mysql_query("SELECT * FROM datakomen WHERE lowongan_id='$id' ORDER BY komen_id DESC") or die(mysql_error());
                $commentNum = mysql_num_rows($commentquery);
                echo "<h4>" . "Current comment(s)..." . "</h4>";
                echo "<b>" . $commentNum . " comment(s) so far. Leave a comment..." .
                "</b>" . "<br />" . "<br />";
                echo "<hr>";
 
                while($row = mysql_fetch_array($commentquery))
                {
                echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
                $row['date'] . "</i>" . "<br />" . "<br />" . $row['komentar'] . "<br />";
                echo "<hr>";
                }                   
                ?>
                
            </div>             
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





