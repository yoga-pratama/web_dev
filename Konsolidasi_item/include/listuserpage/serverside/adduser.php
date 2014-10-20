<?php 

include '../../global/config.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email    = $_POST['email'];
	$jabatan  = $_POST['jabatan'];
	$cabang = $_POST['cabang'];

	$query = mysql_query("insert into login VALUES(DEFAULT,'$username','$password','$email','$jabatan','$cabang')");
	
	if($query === false){

		mysql_error($query);
	}else{
		echo 1;
	}
	
}


?>