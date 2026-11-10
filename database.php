<?php
// config/database.php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'penjualan';

// Inisialisasi koneksi dengan MySQLi secara Object Oriented
$koneksi = new mysqli($host, $user, $pass, $db);

// Menambahkan penanganan error (berdasarkan pengujian Modul 01)
if ($koneksi->connect_error) {
    die("Koneksi Database Gagal: " . $koneksi->connect_error);
}
?>