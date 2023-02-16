<?php
session_start();
$Id=$_POST['id_petugas'];
$Name = $_POST['Nama_petugas'];
$Username = $_POST['username'];
$Password =$_POST['password'];
$No_Handphone =$_POST['tlp'];
$db =new PDO("mysql:host=localhost; dbname=pengaduan_masyarakat", "root", "");
$query = $db->query("INSERT INTO petugas values('$Id','$Name','$Username','$Password',$No_Handphone')");

if($query){
    header("Location:login.php");
}