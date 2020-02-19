<?php
	require 'Koneksi.php';
	function validasi($data){
	  global $koneksi;
	  // ambil data dari form
	  $nim=$data['nim'];
	  $nama=$data['nama'];
	  $jurusan=$data['jurusan'];
	  $kelas=$data['kelas'];
	  $semester=$data['semester'];
	  $bukti_transaki=$data['bukti_transaksi'];


	  // query insert data ke database
	  $input = "INSERT INTO validasi VALUES ('$nim','$nama','$jurusan','$kelas','$semester','$bukti_transaksi')";
	  mysqli_query($koneksi,$input);
	  return mysqli_affected_rows($koneksi);
	  }
		if (isset($_POST["Submit"])) {  
		  // cek data berhasil atau tidak menggunakan effected rows
		  if ( isset($_POST)["Submit"] > 0) {
		      echo " 
		      <script>
		          alert('Berhasil')
		          document.location.href='Valid.php';
		      </script>
		      ";
		  }
		  else {
		      echo " 
		      <script>
		          alert('Gagal')
				  document.location.href='Form_validasi.php';
		      </script>
		      ";
		  }
		}
		?>
