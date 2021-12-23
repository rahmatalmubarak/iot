 <?php
 require 'databaseconnection.php';
    // $jam = "";
    $jumlahgas1 = null;
    $result1 = mysqli_query($con, "SELECT gas from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG01' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result1)) {
        $gaskdg1 = $row['gas'];
        $jumlahgas1 .= "'$gaskdg1'" . ",";
        
    }

    $jumlahgas2 = null;
    $result2 = mysqli_query($con, "SELECT gas from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG02' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result2)) {
        $gaskdg2 = $row['gas'];
        $jumlahgas2 .= "'$gaskdg2'" . ",";
    }

    $jumlahgas3 = null;
    $result3 = mysqli_query($con, "SELECT gas from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG03' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result3)) {
        $gaskdg3 = $row['gas'];
        $jumlahgas3 .= "'$gaskdg3'" . ",";
    }

    $jumlahgas4 = null;
    $result4 = mysqli_query($con, "SELECT gas from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG01' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result4)) {
        $gaskdg4 = $row['gas'];
        $jumlahgas4 .= "'$gaskdg4'" . ",";
    }


    ?>