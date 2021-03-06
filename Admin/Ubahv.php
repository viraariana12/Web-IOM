<?php
include '../Koneksi.php';
$x = $_GET["id"];
$q="SELECT * FROM validasi WHERE nim='$x'";
$query= mysqli_query($koneksi,$q);
foreach($query as $data) :
  $nim=$data['nim'];
  $nama=$data['nama'];
  $jurusan=$data['jurusan'];
  $kelas=$data['kelas'];
  $bukti_transaksi=$data['bukti_transaksi'];
  $status=$data['status'];
  $aksi=$data['aksi'];
endforeach;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard Admin</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="Utama.php">
                    SELAMAT DATANG ADMIN
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="Utama.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="Admin.php">
                                <i class="far fa-user"></i>Admin</a>
                        </li>
                        <li >
                            <a href="Validasi.php">
                                <i class="fas fa-check-square"></i>Validasi Pembayaran</a>
                        </li>
                        <li>
                            <a href="Rekap.php">
                                <i class="fas fa-th-list"></i>Rekap Pembayaran</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        <div class="account-dropdown__footer">
                            <a href="Logout.php"><i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row-md-3">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                     <form action="validasi" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label for="text-input" class=" form-control-label">NIM</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nim" placeholder="" class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                                <div class="col col-md-6">
                                                    <label for="text-input" class=" form-control-label">NAMA</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama" placeholder="" class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                                <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label for="select" class=" form-control-label">PILIH JURUSAN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="semester" id="select" class="form-control">
                                                        <option value="0">TEKNIK MESIN</option>
                                                        <option value="1">TEKNIK INFORMATIKA</option>
                                                        <option value="1">TEKNIK PENDINGIN DAN TATA UDARA</option>
                                                        <option value="2">KEPERAWATAN</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label for="select" class=" form-control-label">PILIH KELAS</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="semester" id="select" class="form-control">
                                                        <option value="0">D3TM1A</option>
                                                        <option value="1">D4PM1A</option>
                                                        <option value="2">D3T1A</option>
                                                        <option value="3">D4RPL1A</option>
                                                        <option value="4">D3TP1A</option>
                                                    </select>
                                                </div>
                                                </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label for="select" class=" form-control-label">PILIH SEMESTER</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="semester" id="select" class="form-control">
                                                        <option value="0">SEMESTER GANJIL</option>
                                                        <option value="1">SEMESTER GENAP</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label for="file-input" class=" form-control-label">UPLOAD BUKTI TRANSAKSI</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="bukti_transaksi" class="form-control-file">
                                                </div>
                                            </div>
                                             <Button class="btn btn-primary " type="submit" name="submit">
                                                Simpan
                                            </Button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright &copy; 2019 - All Rights Reserved - IOM POLINDRA</p><a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

<?php
if (isset($_POST["submit"])) {
$nm=$_POST["nama"];
$usrn=$_POST["username"];
$pwd=$_POST["password"];
$query2="UPDATE admin SET nama='$nm', username='$usrn', password='$pwd' WHERE id_admin='$x'";
mysqli_query($koneksi,$query2);
echo " 
      <script>
          alert('Data Berhasil Di Ubah')
          document.location.href='Admin.php';
      </script>
      ";
}
?>