<?php 

include '../../global/config.php';

if($_SERVER['REQUEST_METHOD'] == "POST")
{	
	$id_user = $_POST['id_UserEdit'];
	$username = $_POST['usernameEdit'];
	$password = $_POST['passwordEdit'];
	$email    = $_POST['emailEdit'];
	$jabatan  = $_POST['jabatanEdit'];
	$cabang = $_POST['cabangEdit'];

		//echo $id_user ;
	$query = mysql_query("UPDATE login set Username = '$username', Password='$password',Email='$email',jabatan='$jabatan',id_cabang='$cabang' where id_user='$id_user'");

	if($query === false){
		die('eror');
	}else{
		echo 1; ;
	}

}


?>