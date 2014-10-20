<?php
 include '../../global/config.php';

 $arr = array();


 $query = mysql_query("SELECT * FROM pembelian");

 if($query === false){
     die(mysql_error());
 }else{

 }

while ($obj = mysql_fetch_array($query)) {
     $arr[] = $obj;
}


echo json_encode($arr);

?>