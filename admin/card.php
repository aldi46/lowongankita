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

    <title>SB Admin - Puskesmas</title>

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

    <!-- Format Style PDF Print Style -->
    <link rel="stylesheet" type="text/css" href="css/print.css">

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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil <?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </nav>

        <div id="page-wrapper">
            <div class="navbar">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-credit-card"></i> Cetak Kartu Identitas Berobat
                        <small>
                            <?php 
                            if (!empty($_GET['message']) && $_GET['message'] == 'update_pasien') {
                                echo "*Data Pasien berhasil diperbarui";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'delete_pasien') {
                                echo "*Data Pasien berhasil dihapus";
                            } else if (!empty($_GET['message']) && $_GET['message'] == 'insert_pasien') {
                                echo "*Data Pasien berhasil ditambah";
                            }
                            ?>
                        </small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="navbar">
                <div class="coll-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" class="breadcrumb">
                            <a href="tables.php"><i class="fa fa-file-text"></i> Cek Pasien!</a> / <i class="fa fa-credit-card"></i> Kartu Identitas Berobat!</li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" class="breadcrumb">
                            <table>
                                <tr>
                                    <td><img class="brand" src="img/00.png"></td>
                                    <td>
                                        <?php
                                        print "<h3><strong>Puskesmas</strong></h3>";
                                        print "<p>Jl. Diponegoro II, Purwodadi";
                                        print " - <strong>Indonesia</strong></p>";
                                        print "<p>Kode Pos : 58183</p>"
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php 
                                $id = $_GET['id'];
                                $query = mysql_query("select * from data_pasien where id_pasien='$id'") or die(mysql_error());
                                $data = mysql_fetch_array($query);
                                ?>
                                    <form role="form" name="update_data" action="update.php" method="post">
                                        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <h3><strong><?php echo $data['id_pasien']; ?></h3></strong>
                                            <h4><?php echo $data['NmLengkap']; ?> ( <?php echo $data['JnKelamin']; ?> )</h4>
                                            <h5>Alamat : <?php echo $data['Almt']; ?></h5>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div><div class="navbar"><a href="javascript:window.print();" class="btn"><i class="fa fa-print"></i></a></div>
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
</body>
</html>