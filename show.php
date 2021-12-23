<?php
include "databaseconnection.php";
 

$kandang = $_GET['kdg'];
$sql = mysqli_query($con, "SELECT * FROM tbl_data Where kd_kandang = '$kandang' order by id DESC");
$result=mysqli_fetch_array($sql);
$data = array('result' => $result);
echo json_encode($data);


?>