<?php
session_start();
$id=$_GET['id_pengaduan'];
$tanggal=$_POST['tgl_pengaduan'];
$nik=$_POST['111'];
$isi_laporan = $_POST['isi_laporan'];
$foto =$_FILES['foto']['name'];
$status =$_POST['proses'];


$db =new PDO("mysql:host=localhost;dbname=ppmukk", "root", "");
$query = $db->query("UPDATE `pengaduan`SET `tgl_pengaduan`='$tanggal',`nik`='$nik',
`isi_laporan`='$isi_laporan',`foto`='$foto',`status`='$status' WHERE `id_pengaduan`='$id'");

if ($query){
   header("location:datapengaduan.php");
}