<?php
$sandi = mysqli_connect("localhost","root","","nama_makanan");

if(isset($_POST["submit"]) ){
        //Ambil data dari tiap elemen dalam form

    $Nama = htmlspecialchars( $_POST["Nama"]);
    $Komentar =htmlspecialchars( $_POST["Komentar"]);

//query Insert data
    $query = "INSERT INTO komentar
                VALUES
                ('','$Nama','$Komentar');
                ";
    mysqli_query($sandi,$query);
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Galeri</title>

    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">


    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

    
<body>



    <!-- Preloader -->
   
    <!-- Search Wrapper -->
    <div class="search-wrapper">
        <!-- Close Btn -->
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Type any keywords...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        
                    <!-- Breaking News -->
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news">
                            <div id="breakingNewsTicker" class="ticker">
                                                        </div>
                        </div>
                    </div>

                    <!-- Top Social Info -->
                    
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="#">Menu</a>
                                        <ul class="dropdown">
                                            <li><a href="menu-makanan.php">Menu Makanan</a></li>
                                            <li><a href="menu-minuman.php">Menu Minuman</a></li>
                                           

                                            </li>
                                        </ul>
                                    </li>
                                 
                                      <li><a href="galeri.php">Galeri</a></li>
                                    <li><a href="pemesanan2.php">Pembelian</a></li>
                                    <li><a href="AboutUs.php">About Us</a></li>
                                    <li><a href="logout.php">Logout</a></li>

                                </ul>
                                <!-- Newsletter Form -->
                                <div class="search-btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

`                               </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <center><h1 style="font-family: 'Brush Script MT Italic'">Galeri</h1></center>
    <center><hr color="red"; style="width: 370px;"></center>

<style type="text/css">
    
    .container img{
                       
    box-shadow: 0 3px 6px rgba(0,0,0,.25);
    transform:  rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform:  rotate(0deg);
    -moz-transform: rotate(0deg);
      transition: all 1s;


}
.container img:hover {
    box-shadow:  0px 20px 20px rgba(0,0,0,0.6);
    transform:  rotate(0deg);
    -webkit-transform:  rotate(0deg);
    -o-transform:  rotate(0deg);
    -moz-transform: rotate(0deg);

    -moz-transform:scale(1.2);
    -webkit-transform:scale(1.2);

}
</style>

            <div class="row">

    <div class="container">
            <div class="col-md-3">

            <img src="gambar/pa/back1.jpg" style="height: 165px;">

                        <img src="gambar/pa/back2.jpg " style="margin-top: 20px; height: 165px;">
                        <br>
            <img src="gambar/pa/IMG_20190220_110322.jpg" style="margin-top: 20px; height: 165px;width: 370px;">

</div>
            <div class="col-md-3">
            <img src="gambar/pa/IMG_20190220_101925.jpg" style="height: 165px;">

            <img src="gambar/pa/IMG_20190220_101941.jpg" style="margin-top: 20px; height: 165px;">
            <img src="gambar/pa/1.jpg" style="margin-top: 20px;height: 165px;">
</div>
            <div class="col-md-3">

            <img src="gambar/pa/2.jpg" style="height: 165px;">
            <img src="gambar/pa/3.jpg" style="margin-top: 20px;height: 165px;">
            <img src="gambar/pa/4.jpg" style="margin-top: 20px;height: 165px;">
</div>
            <div class="col-md-3">

            <img src="gambar/pa/66.jpg" style="height: 165px;">
            <img src="img/gt/1.png" style="margin-top: 20px;height: 165px;">
            <img src="img/gt/3.png" style="margin-top: 20px;height: 165px;">
</div>
         </div>
            </div>
          
          </div>

<fieldset style="background-image: url('gambar/putih.png');border-radius: 20px;">

    <div class="container">

        <form action="" method="POST">
    <h1 style="color: black;">Kolom Komentar</h1>
        <ul>
                
                    <input type="text" name="Nama" id="Nama" placeholder="Nama" for="Nama" style="width: 800px; height: 30px; border-radius: 10p"x>
            <br><br>
                <textarea name="Komentar" id="Komentar" for="Komentar" placeholder="Masukkan Komentar" style="width: 800px; height: 200px;border-radius: 10px;"></textarea>

                    <br>
                    <br>


            <button name="submit" onclick="validasi()" class="btn btn-primary">Kirim</button>
                </ul>

        </form>

</div>
</fieldset>


 <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Follow Us Instragram</h5>
                </div>
            </div>
        </div>
        <!-- Instagram Feeds -->
        <div class="insta-feeds d-flex flex-wrap">
            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta1.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta2.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta3.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta4.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta5.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta6.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta7.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Follow Us Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                    </div>
                    <!-- Copywrite -->
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

<script type="text/javascript">
 
    function validasi() {
        var Nama = document.getElementById("Nama").value;
        var Komentar = document.getElementById("Komentar").value;
        if (Nama != "" && Komentar != "") {

swal('Good Job','Komentar Sudah di kirim ke Admin','success');
         
        }else{
           swal('error','silahkan isi Semua','error');
        }

    }

</script>

</html>