<?php

session_start();

if(!isset($_SESSION['username'])){
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>
  
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>masyarakat</title>
</head>
<body style="background:#eeee">
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none text-white d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                    <a href="data_pengaduan.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class=" d-none d-sm-inline text-white">Data Pengaduan</span></a>  
                           
                    </li>
                    <li>
                        <a href="isidata_pengaduan.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class=" d-none d-sm-inline text-white">Laporan Pengaduan</span></a>
                    </li>
                   
                    <li>
                        <a href="../logout.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white">Logout</span> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-3">
            <h1> Selamat Datang Di Website Pengaduan Masyarakat</h1>
            <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/download.jpg" class="d-block w-100" alt=" ">
      <div class="carousel-caption d-none d-md-block">
        <h5>Website pengaduan masyarakat</h5>
        <p>merupakan suatu website yang dirancang khusus untuk memudahkah masyarakat untuk mengadukan keluhan kepada kantor desa wancimekar</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/kuu.jpg" class="d-block w-100" alt="ride">
      <div class="carousel-caption d-none d-md-block">
        <h5>Dari Rakyat, Oleh Rakyat, Dan Untuk Rakyat. </h5>
        <p>kami siap melayani semua keluh kesah rakyat agar rakyat merasa aman dan jangan takut semua data yang anda keluhkan akan kami jaga rahasia yaa</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/kii.jpg" class="d-block w-100" alt="ride">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>