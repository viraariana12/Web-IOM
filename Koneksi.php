<?php 
	$koneksi = mysqli_connect("localhost","root","","iom");
	 
	// Check connection
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	
	function getKoneksi(){
            return new mysqli($this->server, $this->username, $this->password, $this->db);
         }
?>