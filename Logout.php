<?php 
	error_reporting(0);
	session_start();
	include "../Koneksi.php";
	if (empty($_SESSION[namauser])) 
	{
		exit("<script>window.alert ('Sampai Jumpa');
			window.location='Index.php';</script> ");
	}
	session_destroy();
	exit("<script>window.alert('Sampai Jumpa');
		window.location='Index.php';</script> "); 	

 ?>