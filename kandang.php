<?php session_start();
if (empty($_SESSION['id'])) :
  header('Location:login.php');
endif; ?>
<?php
// Create database connection using config file
include_once('databaseconnection.php');
$kandang =  $_GET['kdg'];
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM kdg  where no_kdg = '$kandang'");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>home</title>
  <link rel="stylesheet" href="css1.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script type="text/javascript" src="jquery/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  <header>
    <div class="container">
      <div class="header-left">
        <h1>Tugas akhir</h1>
      </div>
      <div class="header-right">
        <a href="logout process.php">Log Out</a>
      </div>
      <div class="header-right">
        <a href="cari.php?kandang=" class=>Data</a>
      </div>
      <div class="header-right">
        <a href="index.php" class=>Home</a>
      </div>
    </div>

  </header>
  <div class="top-wrapper" style="padding: 70px 0 80px 0;">
    <div class="container">
      <div class="lesson-wrapper" style=" height: 700px;     background-color: #dce2e4;">
        <div class="container">
          <div class="heading">
            <a href="tambah.php?kdg=<?php echo $kandang ?>&jml=<?php echo $data['jml_ayam'] ?>&ukuran=<?php echo $data['ukuran'] ?>" style=" text-decoration : none; text-align: right;">
              <h3 style="font-size: 20px; text-decoration : none;">Ubah</h3>
            </a>
            <h3 style="text-decoration: none; margin-top: 20px;">
              <?php $kdg = $_GET['kdg'];
              switch ($kdg) {
                case 'KDG01':
                  echo "Kandang 1";
                  break;
                case 'KDG02':
                  echo "Kandang 2";
                  break;
                case 'KDG03':
                  echo "Kandang 3";
                  break;
                case 'KDG04':
                  echo "Kandang 4";
                  break;
                default:
                  # code...
                  break;
              }

              ?> </h3>
            </h2>

            <h2 style="margin-top: 20px;">Hasil Monitoring</h2>
          </div>
          <ul class="ul1">
            <li class="li1">
              <H2>SUHU</H2>
              <span class="span1" id="suhu"></span>
              <span class="span2" id="ketsuhu"></span>
            </li>
            <li class="li1">
              <h2>KELEMBABAN</h2>
              <span class="span1" id="lembap"></span>
            </li>
            <li class="li1">
              <h2>GAS</h2>
              <span class="span1" id="gas"></span>
              <span class="span2" id="ketgas"></span>
            </li>


          </ul>
          <!-- <ul class="ul2">
                <li class="li2">
                <a href="grafik.php" class="message">Tampilkan Data Grafik</a> 
                </li>

                <li class="li">
                    <a href="data.php" class="message">Tampilkan Seluruh Data</a> 
                </li>
              
            </ul> -->

          <div>
          </div>
        </div>
        <?php
        $kdgdata = mysqli_query($con, "Select * from kdg where no_kdg = '$kdg'");
        $data = mysqli_fetch_assoc($kdgdata);
        ?>
        <h2>Data Kandang</h2>
        <div class="row" style="padding: 0px 60px 0px 60px;">
          <div class="col-md-6">
            <div class="card text-white bg-primary">
              <div class="card-body">
                <a href="" style="text-decoration: none; color: #000000;">
                  <h4 class="">Jumlah Ayam</h4>
                  <p class="card-text" style="font-size: 20px;"><?php echo $data['jml_ayam']; ?> Ekor</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card text-white bg-primary">
              <div class="card-body">
                <a href="" style="text-decoration: none; color: #000000;">
                  <h4 class="">Ukuran Kandang</h4>
                  <p class="card-text" style="font-size: 20px;"><?php echo $data['ukuran']; ?></p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>
<script>
  function getUrlVars(param = null) {
    if (param !== null) {
      var vars = [],
        hash;
      var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
      for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
      }
      return vars[param];
    } else {
      return null;
    }
  }


  function show() {
    var kandang = getUrlVars("kdg");
    $.ajax({
      url: 'show.php',
      data: "kdg=" + kandang,
      success: function(data) {
        var json = data,
          obj = JSON.parse(json);
        document.getElementById("suhu").innerHTML = obj.result.suhu2 + " ℃";
        document.getElementById("lembap").innerHTML = obj.result.lembap2 + " %";
        document.getElementById("ketsuhu").innerHTML = obj.result.status;
        document.getElementById("gas").innerHTML = obj.result.gas + " Ppm";
        document.getElementById("ketgas").innerHTML = obj.result.status2;
      }

    });
  }
  setInterval(
    function() {
      show();
    }, 1000
  );
</script>