<?php
	function connection(){
		$connection = mysqli_connect("localhost",'root','','asuransi');
		return $connection;
	}
?>