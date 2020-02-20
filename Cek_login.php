<?php 
  
error_reporting(0);
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require 'Koneksi.php';

// // menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];



// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from admin where 
username='$username' and password='$password'");
$data = mysqli_fetch_assoc($login);
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
var_dump($cek);
// cek apakah username dan password di temukan pada database
if($cek > 0){
	// isi dari variabel session
	$_SESSION['username'] = $r['username'];
	$_SESSION['password'] = $r['password'];
	$_SESSION['status'] = "login";
    header("location:Admin/Utama.php");
}else {
    print "<script>
				alert(\"Maaf username dan password tidak cocok\");
				location.href = \"Login.php\";
			</script>";	
    }
?>