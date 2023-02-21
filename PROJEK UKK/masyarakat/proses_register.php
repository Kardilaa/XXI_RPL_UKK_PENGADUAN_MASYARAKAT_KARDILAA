<?php
//include"koneksi.php"
$nik=$_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password =$_POST['password'];
$telp =$_POST['telp'];
//var_dum($_POST);

$db =new PDO("mysql:host=localhost; dbname=pengaduan_masyarakat", "root", "");
$query = $db->query("INSERT INTO masyarakat values('$nik','$nama','$username','$password',$telp')");

if($query){
    header("Location:proses_login.php");
}