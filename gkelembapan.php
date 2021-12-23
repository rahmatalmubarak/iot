 <?php
 require 'databaseconnection.php';
    // $jam = "";
    $jumlahlembap1 = null;
    $result1 = mysqli_query($con, "SELECT lembap2 from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG01' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result1)) {
        $lembapkdg1 = $row['lembap2'];
        $jumlahlembap1 .= "'$lembapkdg1'" . ",";
        
    }

    $jumlahlembap2 = null;
    $result2 = mysqli_query($con, "SELECT lembap2 from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG02' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result2)) {
        $lembapkdg2 = $row['lembap2'];
        $jumlahlembap2 .= "'$lembapkdg2'" . ",";
    }

    $jumlahlembap3 = null;
    $result3 = mysqli_query($con, "SELECT lembap2 from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG03' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result3)) {
        $lembapkdg3 = $row['lembap2'];
        $jumlahlembap3 .= "'$lembapkdg3'" . ",";
    }

    $jumlahlembap4 = null;
    $result4 = mysqli_query($con, "SELECT lembap2 from tbl_data where day(Date) = day(now()) AND kd_kandang = 'KDG01' GROUP BY hour(Date) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result4)) {
        $lembapkdg4 = $row['lembap2'];
        $jumlahlembap4 .= "'$lembapkdg4'" . ",";
    }


    ?>