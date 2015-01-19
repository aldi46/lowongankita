<!DOCTYPE html>
<html lang="en">

<?php 
include('config.php');
include('cek-login.php');
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - LowonganKita</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap CSS Calender -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap-datetimepicker.min.css">

</head>

<body>

    <div id="wrapper">

        <!-- Header -->
        <Header class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="nav navbar-top-links" align="center">
                <h1 class="#">-= Admin - LowonganKita =-</h1>
            </div>
        </header>
        <!-- /Header -->

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <ul class="nav navbar-top-links navbar-left">
                <!-- /.dropdown -->
                <li>
                    <a href="index.php">
                        <i class="fa fa-home fa-fw"></i> Home
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['username']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profil.php"><i class="fa fa-user fa-fw"></i> Profil <?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-table"></i> Tabs
                        <small>
                            <?php 
                            if (!empty($_GET['message']) && $_GET['message'] == 'update-datacalonpekerja') {
                                echo "*Berhasil diperbarui! datacalonpekerja";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'update-datacurriculumvitae') {
                                echo "*Berhasil diperbarui! datacurriculumvitae";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'update-datadokumen') {
                                echo "*Berhasil diperbarui! datadokumen";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'update-datakomen') {
                                echo "*Berhasil diperbarui! datakomen";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'update-datalowongan') {
                                echo "*Berhasil diperbarui! datalowongan";
                            } 

                            else if (!empty($_GET['message']) && $_GET['message'] == 'delete-datacalonpekerja') {
                                echo "*Berhasil dihapus! datacalonpekerja";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'delete-datacurriculumvitae') {
                                echo "*Berhasil dihapus! datacurriculumvitae";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'delete-datakomen') {
                                echo "*Berhasil dihapus! datakomen";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'delete-datadokumen') {
                                echo "*Berhasil dihapus! datadokumen";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'delete-datalowongan') {
                                echo "*Berhasil dihapus! datalowongan";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'delete-dataperusahaan') {
                                echo "*Berhasil dihapus! dataperusahaan";
                            }

                            else if (!empty($_GET['message']) && $_GET['message'] == 'insert-posting') {
                                echo "*Berhasil ditambah! posting";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'update-posting') {
                                echo "*Berhasil diperbarui! posting";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'delete-posting') {
                                echo "*Berhasil dihapus! posting";
                            }
                            ?>
                        </small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">DataBase Tabs
                            <!-- DataTables Advanced Tables -->
                        </div>
                        
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#DataCalonPekerja" data-toggle="tab">DataCalonPekerja</a></li>
                                <li><a href="#DataPerusahaan" data-toggle="tab">DataPerusahaan</a></li>
                                <li><a href="#DataCurriCulumvitae" data-toggle="tab">DataCurriCulumvitae</a></li>
                                <li><a href="#DataDokumen" data-toggle="tab">DataDokumen</a></li>
                                <li><a href="#DataLowongan" data-toggle="tab">DataLowongan</a></li>
                                <li><a href="#DataKomen" data-toggle="tab">DataKomen</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="DataCalonPekerja">
                                    <h4>DataCalonPekerja Tab</h4>
                                    <p></p>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-DataCalonPekerja">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>calonpekerja_id</th>
                                                        <th>usernamecalonpekerja</th>
                                                        <th>password</th>
                                                        <th>namacalonpekerja</th>
                                                        <th>kotacalonpekerja</th>
                                                        <th>provinsicalonpekerja</th>
                                                        <th>alamatcalonpekerja</th>
                                                        <th>emailcalonpekerja</th>
                                                        <th>noteleponcalonpekerja</th>
                                                        <th>pendidikanterakhir</th>
                                                        <th>skilldankeahlian</th>
                                                        <th>Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $query = mysql_query("select * from datacalonpekerja");
                                                    $no = 1;
                                                    while ($data = mysql_fetch_array($query)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $data['calonpekerja_id']; ?></td>
                                                            <td><?php echo $data['usernamecalonpekerja']; ?></td>
                                                            <td><?php echo $data['password']; ?></td>
                                                            <td><?php echo $data['namacalonpekerja']; ?></td>
                                                            <td><?php echo $data['kotacalonpekerja']; ?></td>
                                                            <td><?php echo $data['provinsicalonpekerja']; ?></td>
                                                            <td><?php echo $data['alamatcalonpekerja']; ?></td>
                                                            <td><?php echo $data['emailcalonpekerja']; ?></td>
                                                            <td><?php echo $data['noteleponcalonpekerja']; ?></td>
                                                            <td><?php echo $data['pendidikanterakhir']; ?></td>
                                                            <td><?php echo $data['skilldankeahlian']; ?></td>
                                                            <td>
                                                                <a href="edit-calonpekerja.php?id=<?php echo $data['calonpekerja_id']; ?>"><i class="fa fa-edit"></i></a> |
                                                                <a href="delete-calonpekerja.php?id=<?php echo $data['calonpekerja_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php $no++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.panel-body -->
                                </div>

                                <div class="tab-pane fade" id="DataPerusahaan">
                                    <h4>DataPerusahaan Tab</h4>
                                    <p></p>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-DataPerusahaan">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>perusahaan_id</th>
                                                        <th>usernameperusahaan</th>
                                                        <th>password</th>
                                                        <th>namaperusahaan</th>
                                                        <th>emailperusahaan</th>
                                                        <th>noteleponperusahaan</th>
                                                        <th>alamatperusahaan</th>
                                                        <th>deskripsiperusahaan</th>
                                                        <th>jenispekerjaanyangadadiperusahaan</th>
                                                        <th>Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $query = mysql_query("select * from dataperusahaan");
                                                    $no = 1;
                                                    while ($data = mysql_fetch_array($query)) {
                                                        ?>
                                                        <tr class="gradeA">
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $data['perusahaan_id']; ?></td>
                                                            <td><?php echo $data['usernameperusahaan']; ?></td>
                                                            <td><?php echo $data['password']; ?></td>
                                                            <td><?php echo $data['namaperusahaan']; ?></td>
                                                            <td><?php echo $data['emailperusahaan']; ?></td>
                                                            <td><?php echo $data['noteleponperusahaan']; ?></td>
                                                            <td><?php echo $data['alamatperusahaan']; ?></td>
                                                            <td><?php echo $data['deskripsiperusahaan']; ?></td>
                                                            <td><?php echo $data['jenispekerjaanyangadadiperusahaan']; ?></td>
                                                            <td>
                                                                <a href="edit-perusahaan.php?id=<?php echo $data['perusahaan_id']; ?>"><i class="fa fa-edit"></i></a> |
                                                                <a href="delete-perusahaan.php?id=<?php echo $data['perusahaan_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php $no++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.panel-body -->
                                </div><!--  /TAB -->

                                <div class="tab-pane fade" id="DataCurriCulumvitae">
                                    <h4>DataCurriCulumvitae Tab</h4>
                                    <p></p>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-DataCurriCulumvitae">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>curriculum_id</th>
                                                        <th>nama</th>
                                                        <th>tempattanggallahir</th>
                                                        <th>jeniskelamin</th>
                                                        <th>agama</th>
                                                        <th>tinggibadan</th>
                                                        <th>beratbadan</th>
                                                        <th>alamat</th>
                                                        <th>notelepon</th>
                                                        <th>status</th>
                                                        <th>email</th>
                                                        <th>sekolahdasar</th>
                                                        <th>smp</th>
                                                        <th>sma</th>
                                                        <th>perguruantinggi1</th>
                                                        <th>perguruantinggi2</th>
                                                        <th>perguruantinggi3</th>
                                                        <th>kemampuan1</th>
                                                        <th>kemampuan2</th>
                                                        <th>kemampuan3</th>
                                                        <th>pengalaman1</th>
                                                        <th>pengalaman2</th>
                                                        <th>pengalaman3</th>
                                                        <th>lowongan_id</th>
                                                        <th>calonpekerja_id</th>
                                                        <th>statuslamaran</th>
                                                        <th>Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $query = mysql_query("select * from datacurriculumvitae");
                                                    $no = 1;
                                                    while ($data = mysql_fetch_array($query)) {
                                                        ?>
                                                        <tr class="gradeA">
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $data['curriculum_id']; ?></td>
                                                            <td><?php echo $data['nama']; ?></td>
                                                            <td><?php echo $data['tempattanggallahir']; ?></td>
                                                            <td><?php echo $data['jeniskelamin']; ?></td>
                                                            <td><?php echo $data['agama']; ?></td>
                                                            <td><?php echo $data['tinggibadan']; ?></td>
                                                            <td><?php echo $data['beratbadan']; ?></td>
                                                            <td><?php echo $data['alamat']; ?></td>
                                                            <td><?php echo $data['notelepon']; ?></td>
                                                            <td><?php echo $data['status']; ?></td>
                                                            <td><?php echo $data['email']; ?></td>
                                                            <td><?php echo $data['sekolahdasar']; ?></td>
                                                            <td><?php echo $data['smp']; ?></td>
                                                            <td><?php echo $data['sma']; ?></td>
                                                            <td><?php echo $data['perguruantinggi1']; ?></td>
                                                            <td><?php echo $data['perguruantinggi2']; ?></td>
                                                            <td><?php echo $data['perguruantinggi3']; ?></td>
                                                            <td><?php echo $data['kemampuan1']; ?></td>
                                                            <td><?php echo $data['kemampuan2']; ?></td>
                                                            <td><?php echo $data['kemampuan3']; ?></td>
                                                            <td><?php echo $data['pengalaman1']; ?></td>
                                                            <td><?php echo $data['pengalaman2']; ?></td>
                                                            <td><?php echo $data['pengalaman3']; ?></td>
                                                            <td><?php echo $data['lowongan_id']; ?></td>
                                                            <td><?php echo $data['calonpekerja_id']; ?></td>
                                                            <td><?php echo $data['statuslamaran']; ?></td>
                                                            <td>
                                                                <a href="edit-curriculumvitae.php?id=<?php echo $data['curriculum_id']; ?>"><i class="fa fa-edit"></i></a> |
                                                                <a href="delete-curriculumvitae.php?id=<?php echo $data['curriculum_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php $no++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.panel-body -->
                                </div><!-- /TAB -->

                                <div class="tab-pane fade" id="DataDokumen">
                                    <h4>DataDokumen Tab</h4>
                                    <p></p>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-DataDokumen">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>dokumen_id</th>
                                                        <th>juduldokumenlamaran</th>
                                                        <th>link_dokumenlamaran</th>
                                                        <th>juduldokumenijazah</th>
                                                        <th>link_dokumenijazah</th>
                                                        <th>juduldokumenskillpendukung</th>
                                                        <th>link_dokumenskillpendukung</th>
                                                        <th>juduldokumenfoto</th>
                                                        <th>link_dokumenfoto</th>
                                                        <th>curriculum_id</th>
                                                        <th>Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $query = mysql_query("select * from datadokumen");
                                                    $no = 1;
                                                    while ($data = mysql_fetch_array($query)) {
                                                        ?>
                                                        <tr class="gradeA">
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $data['dokumen_id']; ?></td>
                                                            <td><?php echo $data['juduldokumenlamaran']; ?></td>
                                                            <td><?php echo $data['link_dokumenlamaran']; ?></td>
                                                            <td><?php echo $data['juduldokumenijazah']; ?></td>
                                                            <td><?php echo $data['link_dokumenijazah']; ?></td>
                                                            <td><?php echo $data['juduldokumenskillpendukung']; ?></td>
                                                            <td><?php echo $data['link_dokumenskillpendukung']; ?></td>
                                                            <td><?php echo $data['juduldokumenfoto']; ?></td>
                                                            <td><?php echo $data['link_dokumenfoto']; ?></td>
                                                            <td><?php echo $data['curriculum_id']; ?></td>
                                                            <td>
                                                                <a href="edit-dokumen.php?id=<?php echo $data['dokumen_id']; ?>"><i class="fa fa-edit"></i></a> |
                                                                <a href="delete-dokumen.php?id=<?php echo $data['dokumen_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php $no++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.panel-body -->
                                </div>

                                <div class="tab-pane fade" id="DataLowongan">
                                    <h4>DataLowongan Tab</h4>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-DataLowongan">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>lowongan_id</th>
                                                        <th>namapekerjaan</th>
                                                        <th>deskripsipekerjaan</th>
                                                        <th>syaratpekerjaan</th>
                                                        <th>jenispekerjaan</th>
                                                        <th>jumlahorangyangdiperlukan</th>
                                                        <th>statuslowonganpekerjaan</th>
                                                        <th>perusahaan_id</th>
                                                        <th>Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $query = mysql_query("select * from datalowongan");
                                                    $no = 1;
                                                    while ($data = mysql_fetch_array($query)) {
                                                        ?>
                                                        <tr class="gradeA">
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $data['lowongan_id']; ?></td>
                                                            <td><?php echo $data['namapekerjaan']; ?></td>
                                                            <td><?php echo $data['deskripsipekerjaan']; ?></td>
                                                            <td><?php echo $data['syaratpekerjaan']; ?></td>
                                                            <td><?php echo $data['jenispekerjaan']; ?></td>
                                                            <td><?php echo $data['jumlahorangyangdiperlukan']; ?></td>
                                                            <td><?php echo $data['statuslowonganpekerjaan']; ?></td>
                                                            <td><?php echo $data['perusahaan_id']; ?></td>
                                                            <td>
                                                                <a href="edit-lowongan.php?id=<?php echo $data['lowongan_id']; ?>"><i class="fa fa-edit"></i></a> |
                                                                <a href="delete-lowongan.php?id=<?php echo $data['lowongan_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php $no++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.panel-body -->
                                </div>

                                <div class="tab-pane fade" id="DataKomen">
                                    <h4>DataKomen Tab</h4>
                                    <p></p>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-DataKomen">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>komen_id</th>
                                                        <th>lowongan_id</th>
                                                        <th>nama</th>
                                                        <th>komentar</th>
                                                        <th>date</th>
                                                        <th>url</th>
                                                        <th>Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $query = mysql_query("select * from datakomen");
                                                    $no = 1;
                                                    while ($data = mysql_fetch_array($query)) {
                                                        ?>
                                                        <tr class="gradeA">
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $data['komen_id']; ?></td>
                                                            <td><?php echo $data['lowongan_id']; ?></td>
                                                            <td><?php echo $data['nama']; ?></td>
                                                            <td><?php echo $data['komentar']; ?></td>
                                                            <td><?php echo $data['date']; ?></td>
                                                            <td><?php echo $data['url']; ?></td>
                                                            <td>
                                                                <a href="edit-komen.php?id=<?php echo $data['komen_id']; ?>"><i class="fa fa-edit"></i></a> |
                                                                <a href="delete-komen.php?id=<?php echo $data['komen_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php $no++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.panel-body -->
                                </div>

                            </div>
                        </div>
                        <!-- /.panel-body -->

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" class="breadcrumb">Posting Tabs</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#" data-toggle="tab">TentangKami Tab</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active">
                                    <h4>Form Post</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" name="input_data" action="insert-posting.php" method="post">
                                                <div class="form-group">
                                                    <label>Tgl. Posting</label>
                                                    <input name="TglPost" required="required" type="text" class="form-control" value="<?php $tgl=getdate(); print $tgl['mday']." ".$tgl['month']." ".$tgl['year']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input name="Judul" required="required" type="text" class="form-control"><?php echo $data['Judul'] ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Isi</label>
                                                    <textarea name="Isi" required="required" type="text" class="form-control"><?php echo $data['Isi'] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Navigasi</label>
                                                    <select name="Nav" class="form-control">
                                                        <option>-Pilih-</option>
                                                        <option value="Home">Home</option>
                                                        <option value="TentangKami">TentangKami</option>
                                                        <option value="Kontak">Kontak</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-default">Simpan</button>
                                                <button type="reset" class="btn btn-default">Ulang</button>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Navigasi Tabs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Home</a>
                                </li>
                                <li><a href="#Lowongan-pills" data-toggle="tab">Lowongan</a>
                                </li>
                                <li><a href="#TentangKami-pills" data-toggle="tab">Tentang Kami</a>
                                </li>
                                <li><a href="#Kontak-pills" data-toggle="tab">Kontak</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home-pills">
                                    <?php 
                                    $query = mysql_query("select * from posting where Nav='Home' "); 
                                    $no = 1;
                                    while ($data = mysql_fetch_array($query)) {
                                    ?>
                                    <h4><?php echo $data['Judul']; ?> Tab</h4>
                                    <p><?php echo $data['TglPost']; ?></p>
                                    <p><?php echo $data['Isi']; ?></p>
                                    <br>
                                    <br>Opsi : 
                                    <td>
                                        <a href="edit-posting.php?id=<?php echo $data['posting_id']; ?>"><i class="fa fa-edit"></i></a> |
                                        <a href="delete-posting.php?id=<?php echo $data['posting_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                    <?php $no++; } ?>
                                </div>
                                <div class="tab-pane fade" id="Lowongan-pills">
                                    <h4>Lowongan Tab</h4>
                                    <p></p>
                                </div>
                                <div class="tab-pane fade" id="TentangKami-pills">
                                    <?php 
                                    $query = mysql_query("select * from posting where Nav='TentangKami' "); 
                                    $no = 1;
                                    while ($data = mysql_fetch_array($query)) {
                                    ?>
                                    <h4><?php echo $data['Judul']; ?> Tab</h4>
                                    <p><?php echo $data['TglPost']; ?></p>
                                    <p><?php echo $data['Isi']; ?></p>
                                    <br>
                                    <br>Opsi : 
                                    <td>
                                        <a href="edit-posting.php?id=<?php echo $data['posting_id']; ?>"><i class="fa fa-edit"></i></a> |
                                        <a href="delete-posting.php?id=<?php echo $data['posting_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                    <?php $no++; } ?>
                                </div>
                                <div class="tab-pane fade" id="Kontak-pills">
                                    <?php 
                                    $query = mysql_query("select * from posting where Nav='Kontak' "); 
                                    $no = 1;
                                    while ($data = mysql_fetch_array($query)) {
                                    ?>
                                    <h4><?php echo $data['Judul']; ?> Tab</h4>
                                    <p><?php echo $data['TglPost']; ?></p>
                                    <p><?php echo $data['Isi']; ?></p>
                                    <br>
                                    <br>Opsi : 
                                    <td>
                                        <a href="edit-posting.php?id=<?php echo $data['posting_id']; ?>"><i class="fa fa-edit"></i></a> |
                                        <a href="delete-posting.php?id=<?php echo $data['posting_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                    <?php $no++; } ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    /*DataCalonPekerja*/
    $(document).ready(function() {
        $('#dataTables-DataCalonPekerja').dataTable();
    });
    /*DataPerusahaan*/
    $(document).ready(function() {
        $('#dataTables-DataPerusahaan').dataTable();
    });
    /*DataCurriCulumvitae*/
    $(document).ready(function() {
        $('#dataTables-DataCurriCulumvitae').dataTable();
    });
    /*DataLowongan*/
    $(document).ready(function() {
        $('#dataTables-DataLowongan').dataTable();
    });
    /*DataKomen*/
    $(document).ready(function() {
        $('#dataTables-DataKomen').dataTable();
    });
    /*DataDokumen*/
    $(document).ready(function() {
        $('#dataTables-DataDokumen').dataTable();
    });
    </script>


</body>

</html>
