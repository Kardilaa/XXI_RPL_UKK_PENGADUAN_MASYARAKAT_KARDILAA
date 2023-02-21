<?php

$id_pengaduan=$_POST['id_pengaduan'];
$tanggal_pengaduan=$_POST['tgl_pengaduan'];
$nik=$_POST['nik'];
$isi_laporan = $_POST['nama_petugas'];
$foto = $_POST['foto'];
$status =$_POST['status'];


$db =new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");
$query = $db->query("UPDATE pengaduan SET `tgl_pengaduan`='$tanggal_pengaduan',`nik`='$nik',
`isi_laporan`='$isi_laporan',`foto`='$foto',`status`='$status' WHERE `id_pengaduan`='$id_pengaduan'");

if ($query){
   header("location:datapengaduan.php");
}