 <?php
 require 'databaseconnection.php';
    $jam = "";
    $jumlahSuhu1 = null;

    $result1 = mysqli_query($con, "SELECT hour(Date) as date from tbl_data where day(Date) = day(now()) GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result1)) {
        $jams = $row['date'];
        $jam .= "'$jams'" . ",";
    }
    $result1 = mysqli_query($con, "SELECT suhu2 from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG01' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result1)) {
        $suhukdg1 = $row['suhu2'];
        $jumlahSuhu1 .= "'$suhukdg1'" . ",";
    }

    $jumlahSuhu2 = null;
    $result2 = mysqli_query($con, "SELECT suhu2 from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG02' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result2)) {
        $suhukdg2 = $row['suhu2'];
        $jumlahSuhu2 .= "'$suhukdg2'" . ",";
    }

    $jumlahSuhu3 = null;
    $result3 = mysqli_query($con, "SELECT suhu2, hour(Date) as date from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG03' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result3)) {
        $suhukdg3 = $row['suhu2'];
        $jumlahSuhu3 .= "'$suhukdg3'" . ",";
    }

    $jumlahSuhu4 = null;
    $result4 = mysqli_query($con, "SELECT suhu2 from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG01' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result4)) {
        $suhukdg4 = $row['suhu2'];
        $jumlahSuhu4 .= "'$suhukdg4'" . ",";
    }


    ?>