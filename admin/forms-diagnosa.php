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

    <title>Puskesmas - Admin Pendaftaran</title>

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
                <img class="brand" src="img/00.png">
                <h1 class="#"> Puskesmas</h1>
                <span class="#">Jl. Diponegoro 2, Purwodadi</span> <span class="#">Indonesia</span>
            </div>
        </header>
        <!-- /Header -->

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <ul class="nav navbar-top-links navbar-left">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home fa-fw"></i> Home
                    </a>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-static-side -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['username']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profil.php"><i class="fa fa-user fa-fw"></i> Profil <?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
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
                    <h1 class="page-header"><i class="fa fa-stethoscope"></i> Diagnosa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" class="breadcrumb">
                            <i class="fa fa-file-text"></i><a href="tables.php"> Cek Pasien!</a> / <i class="fa fa-edit"></i> Form Diagnosa!</li>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php 
                                $id = $_GET['id'];
                                $query = mysql_query("select * from data_pasien where id_pasien='$id'") or die(mysql_error());
                                $data = mysql_fetch_array($query);
                                ?>
                                    <form role="form" name="input_data" action="insert-diagnosa.php" method="post">
                                        <input type="hidden" name="id_rekamedis_pasien" value="<?php echo $id; ?>">
                                        <input type="hidden" name="id_pasien" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label>No. Rekamedis</label>
                                            <input type="text" name="NoRM" required="required" value="<?php echo $data['NoRM']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="NmLengkap" required="required" value="<?php echo $data['NmLengkap']; ?>" class="form-control">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Tangal Periksa</label>
                                            <input type="text" name="TglPeriksa" required="required" class="form-control" value="<?php $tgl=getdate(); print $tgl['mday']."-".$tgl['mon']."-".$tgl['year']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Penyakit</label>
                                            <textarea type="text" name="JnPenyakit" maxlength="100" required="required" class="form-control" placeholder="Isi Sesuai Data Diagnosa Dokter"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Obat</label>
                                            <textarea type="text" name="Obat" maxlength="100" required="required" class="form-control" placeholder="Isi Sesuai Data Resep Apoteker"></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-default">Save</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Custom Theme JavaScript Calender -->
    <script type="text/javascript" src="./js/jquery.min.js">
    </script> 
    <script type="text/javascript" src="./js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="./js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript" src="./js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
    $(function() {
      $('#datetimepicker4').datetimepicker({
        pickTime: false
      });
    });
    </script>
</body>
</html>