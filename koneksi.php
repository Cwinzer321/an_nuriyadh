<?php
// Detail koneksi ke database
$servername = "localhost";  // Nama server database Anda
$username = "root";         // Username database Anda
$password = "";             // Password database Anda
$dbname = "an_nuriyadh";    // Nama database Anda

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
echo "Koneksi ke database berhasil!"; // Jika koneksi sukses
