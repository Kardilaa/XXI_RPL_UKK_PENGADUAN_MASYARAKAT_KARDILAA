<?php

$nik = $_POST['nik'];
$name = $_POST['nama'];
$usn = $_POST['username'];
$pass = $_POST['password'];
$ntlp = $_POST['telp'];

$k = new PDO('mysql:host=localhost;dbname=ppmukk','root','');
$query = $k->query("INSERT INTO `masyarakat` VALUES ('$nik','$name','$usn','$pass','$ntlp')");

if($query){
    header('location:proses_login.php');
}
?>