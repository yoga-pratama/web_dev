<?php 
include '../../global/config.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
$id_user = $_POST['id_userdelete'];

$query = mysql_query("DELETE FROM login where id_user = '$id_user'");

if($query === false){
		echo 'error';

}else{

}
}

?>