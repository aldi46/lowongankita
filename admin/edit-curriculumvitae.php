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

    <!-- Bootstrap CSS Calender -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap-datetimepicker.min.css">

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
            <!-- /.navbar-top-links -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-edit"></i> Rubah DataCurriCulumVitae</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" class="breadcrumb">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php 
                                $id = $_GET['id'];
                                $query = mysql_query("select * from datacurriculumvitae where curriculum_id='$id'") or die(mysql_error());
                                $data = mysql_fetch_array($query);
                                ?>
                                    <form role="form" name="update_data" action="update-curriculumvitae.php" method="post">
                                        <input type="hidden" name="curriculum_id" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label>nama</label>
                                            <input type="text" name="nama" required="required" value="<?php echo $data['nama']; ?>" class="form-control" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>tempattanggallahir</label>
                                            <input type="text" name="tempattanggallahir" required="required" value="<?php echo $data['tempattanggallahir']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>jeniskelamin</label>
                                            <input type="text" name="jeniskelamin" required="required" value="<?php echo $data['jeniskelamin']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>agama</label>
                                            <input type="text" name="agama" required="required" value="<?php echo $data['agama']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>tinggibadan</label>
                                            <input type="text" name="tinggibadan" required="required" value="<?php echo $data['tinggibadan']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>beratbadan</label>
                                            <input type="date" name="beratbadan" required="required" value="<?php echo $data['beratbadan']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>alamat</label>
                                            <input type="text" name="alamat" required="required" value="<?php echo $data['alamat']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>notelepon</label>
                                            <input type="text" name="notelepon" required="required" value="<?php echo $data['notelepon']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>status</label>
                                            <input type="text" name="status" required="required" value="<?php echo $data['status']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>email</label>
                                            <input type="text" name="email" required="required" value="<?php echo $data['email']; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>sekolahdasar</label>
                                            <input type="text" name="sekolahdasar" required="required" value="<?php echo $data['sekolahdasar']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>smp</label>
                                            <input type="text" name="smp" required="required" value="<?php echo $data['smp']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>sma</label>
                                            <input type="text" name="sma" required="required" value="<?php echo $data['sma']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>perguruantinggi1</label>
                                            <input type="text" name="perguruantinggi1" required="required" value="<?php echo $data['perguruantinggi1']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>perguruantinggi2</label>
                                            <input type="text" name="perguruantinggi2" value="<?php echo $data['perguruantinggi2']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>perguruantinggi13</label>
                                            <input type="text" name="perguruantinggi13" value="<?php echo $data['perguruantinggi13']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>kemampuan1</label>
                                            <input type="text" name="kemampuan1" required="required" value="<?php echo $data['kemampuan1']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>kemampuan2</label>
                                            <input type="text" name="kemampuan2" value="<?php echo $data['kemampuan2']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>kemampuan3</label>
                                            <input type="text" name="kemampuan3" value="<?php echo $data['kemampuan3']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>pengalaman1</label>
                                            <input type="text" name="pengalaman1" required="required" value="<?php echo $data['pengalaman1']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>pengalaman2</label>
                                            <input type="text" name="pengalaman2" value="<?php echo $data['pengalaman2']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>pengalaman3</label>
                                            <input type="text" name="pengalaman3" value="<?php echo $data['pengalaman3']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>lowongan_id</label>
                                            <input type="text" name="lowongan_id" required="required" value="<?php echo $data['lowongan_id']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>calonpekerja_id</label>
                                            <input type="text" name="calonpekerja_id" required="required" value="<?php echo $data['calonpekerja_id']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>statuslamaran</label>
                                            <input type="text" name="statuslamaran" required="required" value="<?php echo $data['statuslamaran']; ?>" class="form-control">
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