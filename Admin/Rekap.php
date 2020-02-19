<?php
require '../Koneksi.php';
$validasi =mysqli_query($koneksi,"SELECT * FROM validasi");
function tambah($data){
  global $koneksi;
  // ambil data dari form
  $nim=$data['nim'];
  $nama=$data['nama'];
  $jurusan=$data['jurusan'];
  $kelas=$data['kelas'];
  $bukti_transaksi=$data['bukti_transaksi'];
  $status=$data['status'];
  $aksi=$data['aksi'];
  // query insert data ke database
  $input = "INSERT INTO validasi VALUES ('','$nim','$nama','$jurusan','$kelas','$bukti_transaksi','$status','$aksi')";
  mysqli_query($koneksi,$input);
  return mysqli_affected_rows($koneksi);
  
}
if (isset($_POST["submit"])) {  
  // cek data berhasil atau tidak menggunakan effected rows
  if ( tambah($_POST) > 0) {
      echo " 
      <script>
          alert('Data Berhasil Di Tambahkan')
          document.location.href='Validasi.php';
      </script>
      ";
  }
  else {
      echo " 
      <script>
          alert('Data Gagal Di Tambahkan')
        
      </script>
      ";
  }
}

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
                        <li>
                            <a href="Validasi.php">
                                <i class="fas fa-check-square"></i>Validasi Pembayaran</a>
                        </li>
                        <li class="active">
                            <a href="Rekap.php">
                                <i class="fas fa-list-alt"></i>Rekap Pembayaran</a>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                     <!-- Button trigger modal -->
                                      <div class="card-body">
                                      <div class="table-responsive">
                                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                  <thead>
                                                    <tr>
                                                      <th>No</th>
                                                      <th>NIM</th>
                                                      <th>Nama</th>
                                                      <th>Jurusan</th>
                                                      <th>Kelas</th>
                                                      <th>Semester</th>
                                                      <th>Bukti Transaksi</th>
                                                      <th>Status</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php $i= 1;?>
                                     <?php foreach($validasi as $row) : ?>
                                    <tr>
                                      <th scope="row"><?= $i?></th>
                                      <td><?= $row["nim"]?></td>
                                      <td><?= $row["nama"]?></td>
                                      <td><?= $row["jurusan"]?></td>
                                      <td><?= $row["kelas"]?></td>
                                      <td><?= $row["semester"]?></td>
                                      <td><?= $row["bukti_transaksi"]?></td>
                                      <td>
                                        <button type="button" class="btn btn-success btn-sm">Success</button>
                                    </td>
                                    </tr>
                                    <?php $i++; ?> 
                                <?php endforeach;?>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
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
