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
                    <a href="index.php" class=>Home</a>
                </div>
            </div>

        </header>
    </div>


    <div class="top-wrapper">
        <div class="container">
            <div class="lesson-wrapper">
                <div class="container">
                    <div class="heading">
                        <h3 style="margin-top: 40px;  text-decoration: none;">Input Data Kandang</h3>
                        <div class="col-md-9" style="text-align: left; ">
                            <form action="" method="get" style="margin-left: 40%;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Kandang</label>
                                    <input type="text" class="form-control" name="kdg" value="<?php echo $_GET['kdg']; ?>" readonly>
                                 </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah Ayam</label>
                                    <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="Jumlah Ayam" name="jml" value="<?php echo $_GET['jml']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ukuran Kandang</label>
                                    <input type="text" class="form-control" name="ukuran" value="<?php echo $_GET['ukuran']; ?>" placeholder="Ukuran Kandang">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" hidden>
                                    <label class="form-check-label" for="exampleCheck1" hidden>Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 40%;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

<?php
$kdg = $_GET['kdg'];
$jml = $_GET['jml'];
$ukuran = $_GET['ukuran'];
echo $kdg;
if (isset($_GET['submit'])) {
    $sql = mysqli_query($con, "SELECT * FROM kdg where no_kdg = '$kdg'");
    $data = mysqli_fetch_assoc($sql);
    if ($_GET['kdg'] == $data['no_kdg']) {
        $update = mysqli_query($con, "UPDATE `kdg` SET `no_kdg`='$kdg',`jml_ayam`='$jml',`ukuran`='$ukuran' WHERE no_kdg = '$kdg'");
        header("Location:kandang.php?kdg=$kdg");
    } else {
        $insert = mysqli_query($con, "insert into kdg (no_kdg, jml_ayam, ukuran) VALUES ('$kdg', '$jml','$ukuran'))");
        header("Location:kandang.php?kdg=$kdg");
    }
}

?>