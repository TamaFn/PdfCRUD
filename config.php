<?php

$server = "localhost";
$username = "root";
$password = "";
$nama_database = "PdfCRUD";

$db = mysqli_connect($server, $username, $password, $nama_database);

$pdo = new PDO('mysql:host=' . $server . ';dbname=' . $nama_database, $username, $password);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
