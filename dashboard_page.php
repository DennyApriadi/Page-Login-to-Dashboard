<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Tugas Pemrograman Web</title>
</head>
<body style="background-color: #5d9859;">
    <!-- header -->
     <div style="background-color: #5d9859; padding: 50px;">
        <div class="jumbotron text-left " style="margin-bottom: -15px;">
            <div class="row">
                <img class="col-md-4" src="img/cuy_shop.png" alt="logo cuy shop" style="width: 150px;">
                    <div  class="col-md-8 text-light" style="margin-top: 20px;">
                        <h1>SELAMAT DATANG DI WEB CuY</h1>
                        <h5>Pilihan Tepat Mencari Akun Game Online</h5>
                    </div>
            </div>
        </div>
    </div>

    <!-- navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a clas="navbar-brand" href="#" style="margin: 10px; text-decoration: none; color: #e8ef2d; font-size: 30px;">CuY Shop</a>
                    <ul class="navbar-nav" style="margin-left: 30px;">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Contact</a>
                        </li>
                    </ul>
        </nav>
<center>
    <div>
        <div style="color: white; margin-top: 25vh">
            <h2>Selamat Datang  <?php echo $_GET['userName']; ?></h2> 
        </div>
    </div>
    
        <!-- footer -->
        <div class="footer">
            <div class="footer bg-dark" style="padding: 10px; position: fixed; bottom: 0; width: 100%;">
                <footer class="text-light">Tugas Pemrograman Web | By : Deni Apriadi</footer>
            </div>
         </div>
</center>
</body>
</html>