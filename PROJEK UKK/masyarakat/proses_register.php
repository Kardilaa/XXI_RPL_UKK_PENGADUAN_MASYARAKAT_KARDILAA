<?php

session_start(); 

$name = $_POST['nama'];
$nik = $_POST['nik'];
$usn = $_POST['username'];
$ntlp = $_POST['telp'];
$pass = $_POST['password'];

$k = new PDO('mysql:host=localhost;dbname=ppmukk','root','');
$query = $k->query("INSERT INTO masyarakat VALUES ('$nik','$name', '$usn','$pass','$ntlp');");

if($query){
    header('location:login.php');
}