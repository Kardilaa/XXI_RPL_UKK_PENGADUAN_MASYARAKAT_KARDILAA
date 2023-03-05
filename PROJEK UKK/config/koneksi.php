<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "ppmukk";

$koneksi = mysqli_connect($server, $username, $password, $dbname) or die("Koneksi ke database gagal");