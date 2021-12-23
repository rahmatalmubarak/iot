<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'db_iot';
$databaseUsername = 'root';
$databasePassword = '';
 
$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
  
