<?php session_start();
if (empty($_SESSION['id'])) :
    header('Location:login.php');
endif; ?>
<?php
// Create database connection using config file
include_once('databaseconnection.php');

// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM hasil ORDER BY id DESC");
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
    <div class="container">
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
            </div>

        </header>
    </div>


    <div class="top-wrapper">
        <div class="container">
            <div class="lesson-wrapper">
                <div class="container">
                    <div class="heading">
                        <h3 style="margin-top: 40px;  text-decoration: none;">Kandang Ayam</h3>
                        <div class="row" style="margin-top: 110px; ">
                            <div class="col-md-3">
                                <div class="card text-white bg-primary ">
                                    <div class="card-body">
                                        <a href="kandang.php?kdg=KDG01" style="text-decoration: none; color: #000000;">
                                            <h4 class="">Kandang 1</h4>
                                            <p class="card-text">Next</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <a href="kandang.php?kdg=KDG02" style="text-decoration: none;  color: #000000;">
                                            <h4 class="">Kandang 2</h4>
                                            <p class="card-text">Next</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <a href="kandang.php?kdg=KDG03" style="text-decoration: none; color: #000000;">
                                            <h4 class="">Kandang 3</h4>
                                            <p class="card-text">Next</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <a href="kandang.php?kdg=KDG04" style="text-decoration: none;  color: #000000;">
                                            <h4 class="">Kandang 4</h4>
                                            <p class="card-text">Next</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>