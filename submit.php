<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'an_nuriyadh';

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_siswa = $_POST['nama_siswa'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $agama_siswa = $_POST['agama_siswa'];
    $jumlah_saudara = $_POST['jumlah_saudara'];
    $anak_ke = $_POST['anak_ke'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $nama_ibu = $_POST['nama_ibu'];
    $tempat_lahir_ibu = $_POST['tempat_lahir_ibu'];
    $agama_ibu = $_POST['agama_ibu'];
    $telepon_ibu = $_POST['telepon_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $alamat_ibu = $_POST['alamat_ibu'];

    $nama_ayah = $_POST['nama_ayah'];
    $tempat_lahir_ayah = $_POST['tempat_lahir_ayah'];
    $agama_ayah = $_POST['agama_ayah'];
    $telepon_ayah = $_POST['telepon_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $alamat_ayah = $_POST['alamat_ayah'];

    $sql = "INSERT INTO siswa (nama_siswa, nama_panggilan, tanggal_lahir, tempat_lahir, agama_siswa, jumlah_saudara, anak_ke, jenis_kelamin, nama_ibu, tempat_lahir_ibu, agama_ibu, telepon_ibu, pekerjaan_ibu, pendidikan_ibu, alamat_ibu, nama_ayah, tempat_lahir_ayah, agama_ayah, telepon_ayah, pekerjaan_ayah, pendidikan_ayah, alamat_ayah)
            VALUES ('$nama_siswa', '$nama_panggilan', '$tanggal_lahir', '$tempat_lahir', '$agama_siswa', $jumlah_saudara, $anak_ke, '$jenis_kelamin', '$nama_ibu', '$tempat_lahir_ibu', '$agama_ibu', '$telepon_ibu', '$pekerjaan_ibu', '$pendidikan_ibu', '$alamat_ibu', '$nama_ayah', '$tempat_lahir_ayah', '$agama_ayah', '$telepon_ayah', '$pekerjaan_ayah', '$pendidikan_ayah', '$alamat_ayah')";

    if ($conn->query($sql) === TRUE) {
        header("Location: file_siswa.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
