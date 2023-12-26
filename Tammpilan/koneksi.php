<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "madu";

$koneksi = new mysqli($host, $user, $pass, $db);
if ($koneksi->connect_errno) {
    die("Koneksi bermasalah");
} else {
    $madu = $koneksi->query("SELECT * FROM tabelmadu");
    $tblMadu = $madu->fetch_all();
    $tesmon = $koneksi->query("SELECT * FROM tabeltesmon");
    $tblTesmon = $tesmon->fetch_all();
}
