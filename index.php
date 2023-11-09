
<?php 
session_start();
if(!isset($_SESSION['session_username'])){
    header("location:login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman3.com</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #939090;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .container {
            padding: 30px;
        }

        .contain {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        a {
            text-decoration: none;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            transition: background-color 0.3s, transform 0.2s;
            width: 200px;
        }

        .card:hover {
            background-color: #ADD8E6;
            color: #ADFF2F;
            transform: scale(1.05);
        }

        h2 {
            margin: 0;
            color: #939090;
            font-size: 24px;
        }

        footer {
            background-color: #f9f9f9;
            color: black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>MENU PEMOGRAMAN 3</h1>
    </header>
    <div class="container">
        <div class="contain">
            <a href="tampil_barang.php">
                <div class="card">
                    <h2>BARANG</h2>
                </div>
            </a>
            <a href="tampil_kategori.php">
                <div class="card">
                    <h2>KATEGORI</h2>
                </div>
            </a>
            <a href="tampil_member.php">
                <div class="card">
                    <h2>MEMBER</h2>
                </div>
            </a>
            <a href="tampil_penjualan.php">
                <div class="card">
                    <h2>PENJUALAN</h2>
                </div>
            </a>
            <a href="tampil_transaksi.php">
                <div class="card">
                    <h2>TRANSAKSI</h2>
                </div>
            </a>
            <a href="tampil_user.php">
                <div class="card">
                    <h2>USER</h2>
                </div>
            </a>
            <a href="view_report.php">
                <div class="card">
                    <h2>VIEW REPORT</h2>
                </div>
            </a>
            <a href="logout.php">
                <div class="card">
                    <h2>LOGOUT</h2>
                </div>
            </a>
        </div>
    </div>
    <footer>
        di buat sama orang cikande
    </footer>

    <!-- Add Bootstrap JS and Popper.js for Bootstrap components that require it -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
</body>
</html>
