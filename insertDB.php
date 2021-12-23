<?php
 
    //Variabel database
    /**
     * using mysqli_connect for database connection
     */
     
require 'databaseconnection.php';

    $con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
     
    if ($con!=false){
        echo "berhasil";
       } else {
       echo "gagal";}
      
      
    date_default_timezone_set('Asia/Jakarta');
    $d = date("Y-m-d H:i:s");
	
   

        $suhu2 = $_POST['suhu2'];
        $lembap2 = $_POST['lembap2'];
        $gas = $_POST['gas'];
        $kd_kdg = $_POST['kd_kdg'];
        $status = $_POST['status'];
        $status2 = $_POST['status2'];

        $sql = "INSERT INTO tbl_data (kd_kandang, suhu2, lembap2,gas,status,status2, Date) VALUES ('" . $kd_kdg . "', '" . $suhu2 . "', '" . $lembap2 . "', '" . $gas . "', '" . $status . "', '" . $status2 . "', '" . $d . "')";

        if ($con->query($sql) === TRUE) {
            echo "OK";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    
    $conn->close();

?>
