<?php

$id = $_POST['id_petugas'];
$name = $_POST['nama_petugas'];
$usn = $_POST['username'];
$pass = $_POST['password'];
$tlp = $_POST['telp'];
$lvl = $_POST['level'];

$k = new PDO('mysql:host=localhost;dbname=ppmukk','root','');
$query = $k->query("INSERT INTO `petugas`(`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES ('$id','$name','$usn','$pass','$tlp','$lvl')");

if($query){
    header('location:home.php');
}
?>