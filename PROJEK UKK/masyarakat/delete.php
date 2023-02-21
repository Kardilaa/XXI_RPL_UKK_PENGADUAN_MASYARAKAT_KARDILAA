<?php
session_start();

$ID = $_GET['id_pengaduan'];

$db =new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root","");
$query =$db->query("DELETE FROM `pengaduan` WHERE `id_pengaduan`= '$ID'");

if($query)
{
    header("Location:datapengaduan.php");
}