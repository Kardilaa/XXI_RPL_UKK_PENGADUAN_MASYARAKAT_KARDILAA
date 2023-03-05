<?php

$id = $_POST['id_petugas'];
$name = $_POST['nama_petugas'];
$usn = $_POST['username'];
$pass = $_POST['password'];
$ntlp = $_POST['telp'];
$level = $_POST['level'];

$k = new PDO('mysql:host=localhost;dbname=ppmukk','root','');
$query = $k->query("INSERT INTO `petugas` VALUES ('$id','$name','$usn','$pass','$ntlp','$level')");

if($query){
    header('location:home.php');
}
?>