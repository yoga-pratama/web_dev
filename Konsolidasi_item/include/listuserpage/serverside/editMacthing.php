<?php 
include '../../global/config.php';


$no = $_GET['No'];

$query = mysql_query("SELECT * FROM login where id_user='$no'");

$arr = array();

while($obj = mysql_fetch_array($query)){
	$arr[] = $obj;
}

echo json_encode($arr);

?>