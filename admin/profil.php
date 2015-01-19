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

</head>

<body>

    <div id="wrapper">

        <!-- Header -->
        <Header class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="nav navbar-top-links" align="center">
                <h1 class="#">-=Admin - LowonganKita=-</h1>
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
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-user"></i>
                        <?php 
                        $username = $_SESSION['username'];
                        $query = mysql_query("select * from dataadmin where username='$username' ") or die(mysql_error());
                        $data = mysql_fetch_array($query);
                        ?>
                        <?php echo $data['NmLengkap']; ?>
                        <small>
                            <?php 
                            if (!empty($_GET['message']) && $_GET['message'] == 'update-dataadmin') {
                                echo "*Berhasil diperbarui! dataadmin";
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
                        <div class="panel-heading">
                            <i class="fa fa-user"></i>
                            <!-- DataTables Advanced Tables -->Diperbarui pada <?php echo $data['TglUbah']; ?>
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="dataTables-example">
                                    <tbody>
                                    <?php 
                                    $username = $_SESSION['username'];
                                    $query = mysql_query("select * from dataadmin where username='$username' ") or die(mysql_error());
                                    $data = mysql_fetch_array($query);
                                    ?>
                                        <tr>
                                            <td>Username</td>
                                            <td>:</td>
                                            <td><?php echo $data['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>:</td>
                                            <td>Password disembunyikan</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?php echo $data['NmLengkap']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>:</td>
                                            <td><?php echo $data['JnKelamin']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>:</td>
                                            <td><?php echo $data['TglLahir']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td><?php echo $data['Almt']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>E-Mail</td>
                                            <td>:</td>
                                            <td><?php echo $data['Email']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phonesel</td>
                                            <td>:</td>
                                            <td><?php echo $data['NoHP']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Browser Yang Digunakan</td>
                                            <td>:</td>
                                            <td><?php print $_SERVER['HTTP_USER_AGENT']; ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="edit-user.php?id=<?php echo $data['user_id']; ?>">
                                                    <button type="submit" name="submit" class="btn btn-default">Perbarui</button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                          </div>
                            <!-- /.table-responsive -->
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

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
