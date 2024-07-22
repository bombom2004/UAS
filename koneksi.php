<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'perpustakaan_kampus';

$koneksi = new mysqli($host, $user, $password, $dbname);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>