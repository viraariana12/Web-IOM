<?php
require '../Koneksi.php';
$tampil=mysqli_query($koneksi,"SELECT validasi.nim, validasi.nama, validasi.jurusan, validasi.kelas, validasi.semester, validasi.bukti_transaksi
 FROM validasi INNER JOIN jurusan ON validasi.nim=semester.id_semester");

if (isset($_POST["submit"])) {  
  $nim=$_POST['nim'];
  $nama=$_POST['nama'];
  $id_jurusan=$_POST['id_jurusan'];
  $kelas=$_POST['kelas'];
  $semester=$_POST['semester'];
  $bukti_transaksi= $_FILES['validasi']['name']; 
  $file  = $_FILES['validasi']['tmp_name']; 
  move_uploaded_file($file,"file/validasi/$validasi");
  $input="INSERT INTO validasi values('','$nim','$nama','$id_jurusan','$kelas','$semester',$bukti_transaksi')";
  mysqli_query($koneksi,$input);
  $tambah = mysqli_affected_rows($koneksi);
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
    <title>FORMULIR PEMBAYARAN IOM</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
        

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                  <div class="card-header">
                                        <strong>FORMULIR PEMBAYARAN IOM</strong>
                                  </div>
                                  <div class="modal" tabindex="-1" role="dialog" id="tambah">
                                  <h5 class="modal-title">Tambah Materi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form class="" action="" method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="nim" placeholder="Masukan NIM">
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap">
                                  </div>
                                  <div class="form-group">
                                    <select class="form-control" name="id_jurusan">
                                      <option value="id_kategori">Pilih Jurusan</option>
                                      <?php 
                                      $jurusan=mysqli_query($koneksi,"SELECT * FROM jurusan");
                                        while ($data= mysqli_fetch_array($jurusan)) {
                                        echo" <option value='$data[id_jurusan]'>$data[jurusan]</option>";
                                        }
                                      ?>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="kelas" placeholder="Masukan Kelas">
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="semester" placeholder="Masukan Semester">
                                  </div>
                                  <div class="form-group">
                                      <input type="file" class="form-control-file" name="validasi">
                                  </div>
                                  <div class="modal-footer"> 
                                    <Button class="btn btn-primary btn-user" type="submit" name="submit">Tambah</Button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                                  <!-- akhir modal tambah -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

