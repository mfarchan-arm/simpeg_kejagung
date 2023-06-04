<?php
    // CEK SESSION -- ADMIN
    if(isset($_SESSION['nama_simpeg'],$_SESSION['username_simpeg'],$_SESSION['bagian_simpeg']) AND ($_SESSION['level_simpeg']=="admin"))
    {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Google Font -->
   <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="shortcut icon" href="logo/bm.png">


  <!-- Date Picker -->
  <link rel="stylesheet" href="bootstrap/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.css">



  <!-- Argon -->
  <link rel="stylesheet" href="bootstrap/assets/argon/css/argon-dashboard.css">
  <link rel="stylesheet" href="bootstrap/assets/argon/css/nucleo-icons.css">
  <link rel="stylesheet" href="bootstrap/assets/argon/css/nucleo-svg.css">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<?php 
$row_data= mysqli_fetch_array($data);
    if ($row_data['logo']==""){
  ?><link rel="shortcut icon" href="logo/bm.png">
  <?php
  }
  else
  {
  ?>
  <link rel="shortcut icon" href="logo/<?php echo $row_data['logo'];?>">
  <?php
  }
  ?>
</head>
      <!-- warna sidebar-->
      <body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="logo/bm.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Simpeg</span>
      </a>
    </div>
    
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php?controller=sistem&method=home">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Data Master</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=kategori&method=pangkat">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Pangkat / Golongan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=kategori&method=jabatan">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Jabatan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=kategori&method=jenis">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Jenis Kepegawaian</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=golongan&method=golongan">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Golongan Ijazah</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=sk&method=sk">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data SK</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manajemen Kepegawaian</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=pegawai&method=select">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Kepegawaian</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=gaji&method=select">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Penggajian</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=mutasi&method=select">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Mutasi</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manajemen Akun</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=user&method=select">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Akun</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=user&method=pengguna">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Penggunan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?controller=sistem&method=pengaturan">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pengaturan</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
    <?php
                  include ("config/koneksi.php");
                  include ("tanggal_indo.php");

                  $data_th = mysqli_query($koneksi,"SELECT * FROM user WHERE username ='$_SESSION[username_simpeg]'");

                    $row_data2= mysqli_fetch_array($data_th);
      ?>
      <div class="card card-plain shadow-none" id="sidenavCard">
      <?php
        if($row_data2['foto']=="")
          {
            if($row_data2['gender']=="l")
          {
        ?>
          <img class="w-50 mx-auto" src="logo/pria.png" alt="User Image" style="height: 50px;width: 50px;">
        <?php
        }
          else
          {
        ?>
            <img class="w-50 mx-auto" src="logo/wanita.png" alt="sidebar_illustration" style="height: 50px;width: 50px;">
        <?php
        }
        }
        else
        {
        ?>
        <img class="w-40 mx-auto" src="logo/<?php echo $row_data2['foto'];?>" alt="User Image" class="img-fluid rounded-circle shadow">
        <?php
        }
        ?>
          <div class="docs-info">
            <h6 class="mb-0"><?php echo $row_data2['nama'];?></h6>
            <a href="#"><i class="fa fa-circle text-success"></i> Admin </a>
            <p class="text-xs font-weight-bold mb-0">( NIP. <?php echo $row_data2['nip'];?> )</p>
          </div>
        </div>
      </div>
    </div>
  </aside>
          <!-- Content Wrapper. Contains page content -->
  <main class="main-content position-relative border-radius-lg ">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $row_data2['nama'];?></span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="index.php?controller=sistem&method=pengaturan" class="nav-link text-white p-0"></a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="index.php?controller=sistem&method=pengaturan" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <div id="page-wrapper" class="container-fluid py-4">
          <!-- INI BAGIAN PENGATUR KOMUNIKASI USER DENGAN CONTROLLER -->
          <?php
            // MENGARAHKAN KE FILE VIEW SESUAI NILAI CONTROLLER DAN METHOD DARI LINK
            include ("$_GET[controller]/$_GET[method].php");
          ?>
        </div>
        <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b class="ms-5">Version</b> 1.0
    </div>
    <center><strong>Copyright &copy; <?php 
                            $a=2020;
                            $b=date('Y');

                            $tgl = $b-$a;

                            if($tgl=="0")
                            {
                              echo "2020";
                            }else{
                              echo "2020 - "; echo $b;
                            }
                        ?> <a><?php echo $row_data['nama'];?> - <?php echo $row_data['instansi'];?> </a>.</strong>
  </footer>
  </main>

  <!-- /.content-wrapper -->
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<script src="bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="bootstrap/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="bootstrap/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="bootstrap/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- daterangepicker -->
<script src="bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- DataTables -->
<script src="bootstrap/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bootstrap/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- datepicker -->
<script src="bootstrap/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- Select2 -->
<script src="bootstrap/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
$(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>
<script>
  $(function () {
    $('#tabel').DataTable()
    $('#tabel2').DataTable()
    $('#tabel3').DataTable()
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
<script type="text/javascript">
     
     function printDiv(elementId) {
    var a = document.getElementById('print-area-2').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
    }
    </script>
</body>
</html>
<?php
}elseif(isset($_SESSION['nama_simpeg'],$_SESSION['username_simpeg'],$_SESSION['bagian_simpeg']) AND ($_SESSION['level_simpeg']=="user"))
    {
      include ("config/koneksi.php");
                  include ("tanggal_indo.php");

                  $data_th = mysqli_query($koneksi,"SELECT * FROM user WHERE username ='$_SESSION[username_simpeg]'");

                    $row_data2= mysqli_fetch_array($data_th);
                    $row_cek= mysqli_num_rows($data_th);

      $data_cek=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE nip='$row_data2[nip]' ");
      $cek  = mysqli_num_rows($data_cek);

      if($cek>0)
      {
        if($row_cek>0)
        {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bootstrap/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="bootstrap/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="bootstrap/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bootstrap/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bootstrap/bower_components/jvectormap/jquery-jvectormap.css">
   <link rel="stylesheet" href="bootstrap/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="bootstrap/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bootstrap/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<?php 
$row_data= mysqli_fetch_array($data);
    if ($row_data['logo']==""){
  ?><link rel="shortcut icon" href="logo/bm.png">
  <?php
  }
  else
  {
  ?>
  <link rel="shortcut icon" href="logo/<?php echo $row_data['logo'];?>">
  <?php
  }
  ?>
</head>
      <!-- warna sidebar-->
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php?controller=sistem&method=home" class="logo">
      
      <b>
      <?php
          echo $row_data['nama'];
      ?>
      </b>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
      <?php

                    $sql = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE nip='$row_data2[nip]'");
                    $row_pegawai = mysqli_fetch_array($sql);
        ?>

        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php

                if($row_data2['foto']=="")
                  {
                    if($row_data2['gender']=="l")
                  {
              ?>
                  <img style="height: 20px;" src="logo/pria.png" class="img-circle" alt="User Image">
              <?php
                }
                  else
                  {
                ?>
                    <img style="height: 20px;" src="logo/wanita.png" class="img-circle" alt="User Image">
              <?php
                }
              }
                else
                {
              ?>
                <img src="logo/<?php echo $row_data2['foto'];?>" class="img-circle" style="height: 20px;width: 20px" alt="User Image">
              <?php
                }
              ?>
              <span class="hidden-xs"><?php echo $row_pegawai['nama'];?> <i class=" fa fa-chevron-down"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
            <?php

                if($row_data2['foto']=="")
                  {
                    if($row_data2['gender']=="l")
                  {
              ?>
                  <img style="height: 100px;width: 100px;" class="img-circle" src="logo/pria.png" alt="User Image">
              <?php
                }
                  else
                  {
                ?>
                    <img style="height: 100px;width: 100px" class="img-circle" src="logo/wanita.png" alt="User Image">
              <?php
                }
              }
                else
                {
              ?>
                <img src="logo/<?php echo $row_data2['foto'];?>" class="img-circle" style="height: 100px;width: 100" alt="User Image">
              <?php
                }
              ?>

                <p>
                  <?php echo $row_pegawai['nama'];?>
                  <small>NIP. <?php echo $row_pegawai['nip'];?> </small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="index.php?controller=user&method=select" class="btn btn-default btn-flat">Akun</a>
                </div>
                <div class="pull-right">
                  <a href="index.php?controller=sistem&method=logout"onClick="return confirm('Yakin Mau Keluar??')" class="btn btn-default btn-flat">
                 Keluar  <i class="glyphicon glyphicon-sign-out"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li>
           <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php

                if($row_data2['foto']=="")
                  {
                    if($row_data2['gender']=="l")
                  {
              ?>
                  <img style="height: 50px;width: 50px;" class="img-circle" src="logo/pria.png" alt="User Image">
              <?php
                }
                  else
                  {
                ?>
                    <img style="height: 50px;width: 50px;" class="img-circle" src="logo/wanita.png" alt="User Image">
              <?php
                }
              }
                else
                {
              ?>
                <img src="logo/<?php echo $row_data2['foto'];?>" style="height: 50px;width: 50px;" class="img-circle" alt="User Image">
              <?php
                }
              ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $row_pegawai['nama'];?></p>
          <a href="#">NIP. <?php echo $row_pegawai['nip'];?> </a>
        </div>
      </div>
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.php?controller=sistem&method=home">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php?controller=pegawai&method=select">
            <i class="fa fa-users"></i> <span>Data Pegawai</span>
          </a>
        </li>
        <li>
          <a href="index.php?controller=pegawai&method=info">
            <i class="fa fa-street-view"></i> <span>Data Diri</span>
          </a>
        </li>
        <li>
          <a href="index.php?controller=pegawai&method=info_gaji">
            <i class="fa fa-money"></i> <span>Data Gaji</span>
          </a>
        </li>
        <li>
          <a href="index.php?controller=berkas&method=select">
            <i class="fa fa-file-archive-o"></i> <span>Data Lampiran</span>
          </a>
        </li>
        <li>
          <a href="index.php?controller=user&method=select">
            <i class="fa fa-user"></i> <span>Akun</span>
          </a>
        </li>
        <li class="header"></li>
      </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>
          <!-- Content Wrapper. Contains page content -->
  <main class="content-wrapper">
      <!-- BAGIAN INDEX.PHP UNTUK MENANGANI KONTEN -->
        <div id="page-wrapper">
          <!-- INI BAGIAN PENGATUR KOMUNIKASI USER DENGAN CONTROLLER -->
          <?php
            // MENGARAHKAN KE FILE VIEW SESUAI NILAI CONTROLLER DAN METHOD DARI LINK
            include ("$_GET[controller]/$_GET[method].php");
          ?>
        </div>
  </main>

</div>
<script src="bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="bootstrap/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="bootstrap/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="bootstrap/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- daterangepicker -->
<script src="bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- DataTables -->
<script src="bootstrap/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bootstrap/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- datepicker -->
<script src="bootstrap/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- Select2 -->
<script src="bootstrap/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
$(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>
<script>
  $(function () {
    $('#tabel').DataTable()
    $('#tabel2').DataTable()
    $('#tabel3').DataTable()
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
  <!--   Core JS Files   -->
  <script src="bootstrap/assets/argon/js/js/core/popper.min.js"></script>
      <script src="bootstrap/assets/argon/js/core/bootstrap.min.js"></script>
      <script src="bootstrap/assets/argon/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="bootstrap/assets/argon/js/js/plugins/smooth-scrollbar.min.js"></script>
      
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
        </script>
      <!-- jQuery 3 -->
      <script src="bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="bootstrap/assets/argon/js/argon-dashboard.js"></script>
</body>
</html>
<?php
    }
          else {
              echo "<script> 
                     alert('Maaf Anda Harus Login'); 
                     window.location = 'http://localhost/simpeg_kejagung/';
                    </script>";
          }
  }
    else {
        echo "<script> 
               alert('Maaf Data Nip Tidak Ada'); 
               window.location = 'http://localhost/simpeg_kejagung/';
              </script>";
    }
}    
    else {
        echo "<script> 
               alert('Maaf! Anda Harus Login!'); 
               window.location = 'http://localhost/simpeg_kejagung/';
              </script>";
    }
?>