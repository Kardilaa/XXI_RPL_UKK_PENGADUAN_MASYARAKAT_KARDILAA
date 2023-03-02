<?php

$id_pengaduan = $_GET['id_pengaduan'];

$db =new PDO("mysql:host=localhost;dbname=ppmukk", "root", "");
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
        <form action="proses_update.php?id_pengaduan=<?=$_GET['id_pengaduan']?>"  method="POST">
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
          <input type="hidden" name="id_pengaduan" value="<?= $id_pengaduan?>">
              <div class="mb-3 mt-3 text-center">
                tanggal_pengaduan : <br>
                <input class="rounded-3 border-light" type="date" name="tgl_pengaduan" style="width: 300px;" >
                <center> 
                <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
               <textarea class="form-control" name="isi_laporan" id="exampleFormControlTextarea1" rows="3" style="width: 300px;"></textarea></center>
                </div>
                <tr><center>
                        <td>foto</td>
                        <td><div class="mb-3">
                        <label for="formFileSm" class="form-label"></label>
                        <input class="form-control form-control-sm" name="foto"type="file"  id="formFileSm" style="width: 300px;">
                        </div></td>
                    </tr></center>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">UPDATE</button> <br>
                </div>
              </div>
              
            </form>
        </div>
</body>
</html>