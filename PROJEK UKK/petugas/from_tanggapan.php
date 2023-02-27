<?php

session_start();

$id_pengaduan = $_SESSION['id_pengaduan'];
$db = new PDO("mysql:host=localhost;dbname=ppmukk","root","");
$query = $db->query("SELECT * FROM `pengaduan` WHERE id_pengaduan='$id_pengaduan'");
$data = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>
    <title>masyrakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey;">
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
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="data_pengaduan.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Pengaduan</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                           
                    </li>
                    <li>
                        <a href="isidata_pengaduan.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Laporan Pengaduan</span></a>
                    </li>
                    
                    <li>
                        <a href="logout.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="kaa.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Member</span>
                    </a>
                    
                </div>
            </div>
        </div>
<div class="card mt-5" style="width:80%;margin-left:30px">
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">id_pengaduan</th>
      <th scope="col">tgl_pengaduan</th>
      <th scope="col">nik</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php foreach ($query as $query) :?>
  <tbody>
    <tr class="text-center">
      <th scope="query"><?= $i ?></th>
      <td><?=$query['id_pengaduan'];?></td>
      <td><?=$query['tgl_pengaduan'];?></td>
      <td><?=$query['nik'];?></td>
      <td><?=$query['isi_laporan'];?></td>
      <td><img src="img/<?=$query['foto']; ?>" width="100" height="100" style="border-radius: 10px;" /></td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endforeach ?>
    </table>
    <h1>Tanggapan</h1>
    <div class ="">
    <div class="col">
    <form action="yp" method="POST">
            <hr class="divider">
            <div class="container">
                
            <div class="row">
                <div class="col mt-3">
                <?php
                    echo $_SESSION ["id_pengaduan"];
                    ?>
                    <div class="mb-3">
                        Tanggal : <input type="date" name="tgl_pengaduan" class="form-control" >
                    </div>
                </div>
                
                <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
               <textarea class="form-control" name="isi_laporan" id="exampleFormControlTextarea1" rows="3" ></textarea>
                </div>
                <div class="col">
                    <div class="mb-3 mt-3">
                        Status : 
                        <select name="status">
                            <option class="selected" value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 mt-3 text-end" >
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="home.php" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            <div>
            </div>
            </div>
        </div>
        </div>
    </form>
</div>
</div>
</body>
</html>