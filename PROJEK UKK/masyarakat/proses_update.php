<?php
session_start();
$id=$_GET['id_pengaduan'];
$tanggal=$_POST['tgl_pengaduan'];
$nik=$_SESSION['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto =$_FILES['foto']['name'];



$db =new PDO("mysql:host=localhost;dbname=ppmukk", "root", "");
$query = $db->query("UPDATE `pengaduan`SET `tgl_pengaduan`='$tanggal',`nik`='$nik',
`isi_laporan`='$isi_laporan' WHERE `id_pengaduan`='$id'");

if ($query){
   header("location:datapengaduan.php");
}