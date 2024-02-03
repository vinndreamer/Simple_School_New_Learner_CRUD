<?php
$server = 'localhost';
$userdb = 'root';
$passdb = '';
$namadb = 'ppdb_pesat10';
$db = mysqli_connect($server,$userdb,$passdb,$namadb);

if(!$db)
    die("Gagal terhubung ke database" . mysqli_connect_error());