<?php
	function connection(){
		$connection = mysqli_connect("localhost",'root','','asuransi');
		return $connection;
	}

	function cekSession()
	{
		if(!isset($_SESSION['id_adm']) && !isset($_SESSION['nama_adm']) && !isset($_SESSION['jabatan_adm'])){
			return 'no';
		}else{
			return 'yes';
		}
	}
?>