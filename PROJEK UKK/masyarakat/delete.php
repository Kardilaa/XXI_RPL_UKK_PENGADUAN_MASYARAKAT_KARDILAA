<?php
session_start();

$id = $_GET['id_pengaduan'];

$db =new PDO("mysql:host=localhost;dbname=ppmukk",'root','');
$query =$db->query("DELETE FROM `pengaduan` WHERE `id_pengaduan`= '$id'");

if($query)
{
    header("Location:data_pengaduan.php");
}