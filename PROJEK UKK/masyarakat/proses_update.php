<?php

$id=$_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$username = $_POST['username'];
$password =$_POST['password'];
$telp =$_POST['telp'];
$level =$_POST['level'];

$db =new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");
$query = $db->query("UPDATE petugas SET `nama`='$nama_petugas',`username`='$username',
`password`='$password',`telp`='$telp' WHERE `id`='$id_petugas'");

if ($query){
   header("location:catatan.php");
}