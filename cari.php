
<?php session_start();
if(empty($_SESSION['id'])):
header('Location:login.php');
endif;?>
<?php
// Create database connection using config file
include_once('databaseconnection.php');
 
// Fetch all users data from database
?>
 
<html>
<head>    
<link rel="stylesheet" href="data.css">
    <title>data sensor</title>
</head>
 
<body>
<header>
      <div class="container">
        <div class="header-left">
        <h1 >Tugas akhir</h1> 
        </div>
        <div class="header-right">   
          <a href="logout process.php" >Log Out</a>
        </div>
        <div class="header-right">
        <a href="index.php"class= >Home</a>
        </div>
      </div>
</header>

    <h2 align="center"> Data Sensor </h2>
    <div class="cari">
        <form action="cari.php" method="get" >
        <label>Cari :</label>
        <select name="kandang" id="">
            <option value="KDG01">Kandang 1</option>
            <option value="KDG02">Kandang 2</option>
            <option value="KDG03">Kandang 3</option>
            <option value="KDG04">Kandang 4</option>
        </select>
        <input type="submit" value="cari" name="cari">
        </form>
    </div>
    
        <table class="table1" style="margin-left:auto;margin-right:auto">
    
        <tr>
            <th>No</th> 
            <th>Kode Kandang</th> 
            <th>Suhu</th> 
            <th>Kelembapan</th>
<th>Gas</th>
            <th>Tanggal</th>
        </tr>
        
        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['kandang'];
            $result= mysqli_query($con,"SELECT kd_kandang, suhu2, lembap2, gas, Date from tbl_data where kd_kandang = '$cari' GROUP BY hour(Date) ORDER BY Date DESC Limit 25");				
            // $result= mysqli_query($con, "SELECT , suhu2, lembap2, gas, Date from tbl_data GROUP BY hour(Date) ORDER BY Date DESC Limit 25");				
        }else{
            $result = mysqli_query($con, "SELECT kd_kandang, suhu2, lembap2, gas, Date from tbl_data GROUP BY hour(Date) ORDER BY  Date DESC Limit 25");
        }
        $no = 1;
        while($d = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kd_kandang']; ?></td>
            <td><?php echo $d['suhu2']; ?></td>
            <td><?php echo $d['lembap2']; ?></td>
<td><?php echo $d['gas']; ?></td>            
<td><?php echo $d['Date']; ?></td>
        </tr>
        <?php } ?>
        </table>
      
      
</body>

</html>
