<html>

<?php 
include('config.php');
include('cek-login.php');
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="lowongan, pekerjaan, kerja, pekerja, perusahaan, lowongankita, kita">
    <meta name="description" content="lowongankita merupakan website yang menyediakan lowongan pekerjaan. dilowongan kita anda bisa melamar pekerjaan yang terlah di daftarkan oleh perusahaan - perusahaan yang membutuhkan pekerja">
    <meta name="author" content="lowongankita">

    <title>Lowongan Kita</title>

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
                    <a href="lowongan.php"><i class="fa  fa-file-o  fa-fw"></i> List Lowongan
                    </a>
                </li>
                <li>
                    <a href="inputlowonganpekerjaan.php"><i class="fa  fa-group  fa-fw"></i> Mendaftarkan Lowongan
                    </a>
                </li>
                <li>
                    <a href="view-daftar.php"><i class="fa fa-book fa-fw"></i> Data Lowongan <?php echo $_SESSION['usernameperusahaan']; ?>
                    </a>
                </li>
             
            </ul>
   
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['usernameperusahaan']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="view.php"><i class="fa fa-user fa-fw"></i> Profil <?php echo $_SESSION['usernameperusahaan']; ?></a>
                        </li>
                        <li><a href="editpass.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                  
                </li>
              
            </ul>
            
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                         List Pekerja yang Melamar diLowongan Pekerjaan
                        
                    </h1>
                </div>
              
            </div>
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         
                        </div>
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <label>Pelamar Pekerja Saya :</label>
                                        </tr>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Lengkap</th>
                                            <th>kode Lowongan</th>
                                            <th>Status Lamaran</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $id = $_GET['id'];
                                    $query = mysql_query("select * from datacurriculumvitae where lowongan_id='$id'");
                                    $no = 1;
                                    while ($data = mysql_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['lowongan_id']; ?></td>
                                            <td><?php echo $data['statuslamaran']; ?></td>
                                            <td>
                                                <a href="view-calon-detail.php?id=<?php echo $data['curriculum_id']; ?>">Lihat Detail Lamaran</a>  
                                                
                                            </td>
                                        </tr>
                                    <?php $no++; } ?>
                                    </tbody>
                                



                                <?php 
                                    $id = $_GET['id'];
                                    $query7 = mysql_query("select count(statuslamaran) from datacurriculumvitae where statuslamaran='diterima' and lowongan_id='$id'");
                                    $data7 = mysql_fetch_array($query7)

                                    ?>
                                    <?php 
                                    $id = $_GET['id'];
                                    $query8 = mysql_query("select * from datalowongan where lowongan_id='$id' ");
                                    $data8 = mysql_fetch_array($query8);

                                    if($data8['jumlahorangyangdiperlukan']<=$data7['count(statuslamaran)']){
                                            $id = $_GET['id'];
                                            mysql_query("update datalowongan set statuslowonganpekerjaan='terisi' where lowongan_id='$id'");

                                    } 
                                    else{
                                            $id = $_GET['id'];
                                            mysql_query("update datalowongan set statuslowonganpekerjaan='belum terisi' where lowongan_id='$id'");

                                    } 
                                    
                              


                               ?>
                           </table>
                          </div>
                         
                        </div>
                      
                    </div>
                   
                </div>
                
            </div>
          
        </div>
       
    </div>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <script src="js/sb-admin-2.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>


