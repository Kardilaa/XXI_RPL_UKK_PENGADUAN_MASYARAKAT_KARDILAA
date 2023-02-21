<?php

$id_pengaduan = $_GET['id_pengaduan'];

$db =new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");
$query = $db->query("SELECT * FROM `pengaduan` WHERE `id_pengaduan`='$id_pengaduan'");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 
</head>
<body>
<div style="padding: 50px;">
        <form action="proses_update.php"  method="POST">
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
          <input type="hidden" name="id" value="<?= $id_pengaduan?>">
              <div class="mb-3 mt-3 text-center">
                tanggal_pengaduan : <br>
                <input class="rounded-3 border-light" type="date" name="tanggal_pengaduan" style="width: 300px;" >
              <div class="mb-3 mt-3 text-center">
                isi_laporan : <br>
                <input class="rounded-3 border-light" type="text" name="isi_laporan" style="width: 300px;" >
              </div>
              <div class="mb-3 mt-3 text-center">
                foto : <br>
                <input class="rounded-3 border-light" type="file" name="foto" style="width: 300px;" >
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">UPDATE</button> <br>
                </div>
              </div>
              
            </form>
        </div>
</body>
</html>