<?php

  session_start();

 if (isset($_SESSION['id_pegawai']))
  {
     include 'config/koneksi.php';
  }
  else{
    header('location:index.php');
  }
  
  if (isset($_GET['konten'])) $konten = $_GET['konten'];
  else $konten = "home";

  $id_pegawai= $_SESSION['id_pegawai'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Pembayaran SPP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Riki Bagastoro</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       <li>
          <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="home.php?konten=sepuluh"><i class="fa fa-circle-o"></i> Kelas X</a></li>
            <li><a href="home.php?konten=sebelas"><i class="fa fa-circle-o"></i> Kelas XI</a></li>
            <li><a href="home.php?konten=duabelas"><i class="fa fa-circle-o"></i> Kelas XII</a></li>
            <li><a href="home.php?konten=alumni"><i class="fa fa-circle-o"></i>Alumni</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Rekapitulasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="home.php?konten=bulanan"><i class="fa fa-circle-o"></i> Perbulan</a></li>
            <li><a href="home.php?konten=tahunan"><i class="fa fa-circle-o"></i> Pertahun</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Tambah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="home.php?konten=tambahsiswa"><i class="fa fa-circle-o"></i> Tambah Data Siswa</a></li>
            <li><a href="home.php?konten=tambahtahun"><i class="fa fa-circle-o"></i>Tambah Tahun Ajaran</a></li>
          
          </ul>
        </li>
        <li>
          <a href="home.php?konten=pembayaran">
            <i class="fa fa-fw fa-clipboard"></i> <span>Pembayaran SPP<span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li>
          <a href="config/logout.php" id="logout">
            <i class="fa fa-fw fa-sign-out"></i> <span>Logout</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
         <?php
            // jika id session tidak ditemukan, maka diarahkan ke halaman login admin
            // if (!isset($_SESSION['id_pegawai']))
            // {   
            //         header('location:index.php');
            // }

          if ($konten=='home')
            include 'beranda.php';
          elseif ($konten=='sepuluh')
             include 'sepuluh.php';
           elseif ($konten=='sebelas')
             include 'sebelas.php';
          elseif ($konten=='duabelas')
             include 'duabelas.php';
           elseif ($konten=='tambahsiswa')
             include 'tambahsiswa.php';
            elseif ($konten=='tambahtahun')
             include 'tambahtahun.php';
           elseif ($konten=='bulanan')
             include 'bulanan.php';
           elseif ($konten=='tahunan')
             include 'tahunan.php';
           elseif ($konten=='pembayaran')
             include 'pembayaran.php';
          elseif ($konten=='alumni')
            include 'alumni.php';
          elseif ($konten=='tambahdatasiswa')
            include 'tambahdatasiswa.php';
           elseif ($konten=='editdatasiswa')
            include 'editdatasiswa.php';
           elseif ($konten=='profilsiswa')
            include 'profilsiswa.php';
          elseif ($konten=='jadwalguru')
            include 'jadwalguru.php';
           elseif ($konten=='tambahjadwalguru')
            include 'tambahjadwalguru.php';
          elseif ($konten=='pembayaran')
            include 'pembayaran.php';
          elseif ($konten=='rekapbulanan')
            include 'rekapbulanan.php';
          elseif ($konten=='rekaptahun')
            include 'rekaptahun.php';
          elseif ($konten=='tambahta')
            include 'tambahta.php';
          elseif ($konten=='tambahspp')
            include 'tambahspp.php';
          elseif ($konten=='tambahsiswabaru')
            include 'tambahsiswabaru.php';
          elseif ($konten=='editta')
            include 'editta.php';
          elseif ($konten=='alumni')
            include 'alumni.php';
          elseif ($konten=='rekaptabungan')
            include 'rekaptabungan.php';
          elseif ($konten=='tabungan')
            include 'tabungan.php';
          elseif ($konten=='cetaksepuluh')
            include 'cetaksepuluh.php';
          elseif ($konten=='cetaksebelas')
            include 'cetaksebelas.php';
          elseif ($konten=='cetakduabelas')
            include 'cetakduabelas.php';
           elseif ($konten=='cetakbulanan')
            include 'cetakbulanan.php';
          elseif ($konten=='histori')
            include 'histori.php';
           elseif ($konten=='coba')
            include 'coba.php';
          elseif ($konten=='tambahtanggal')
            include 'tambahtanggal.php';

            ?>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
         
        

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; Riki Bagastoro | Kerja Praktek</a>.</strong> 
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
<script type="text/javascript">
  $(function(){
      $('a#logout').click(function(){
          if(confirm('Are you sure to logout?')) {
              return true;
          }
          return false;
      });
  });  
</script>