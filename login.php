    <?php
    session_start();

    // Koneksi ke database
    $servername = "localhost";
    $username = "root";       // ganti dengan username MySQL Anda
    $password = "";           // ganti dengan password MySQL Anda
    $dbname = "an_nuriyadh";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css" rel="stylesheet">

    </head>

    <body>
        <div class="container">
            <div class="left">
                <img src="logopaud.png" alt="Logo" class="logo">
                <h1>Selamat Datang Di<br>Skylearn</h1>
                <div class="illustration">
                    <img src="ilustrasi.png" alt="Illustration">
                </div>
            </div>
            <div class="right">
                <h2>Login</h2>
                <?php
                if (!empty($loginError)) {
                    echo "<p style='color: red;'>$loginError</p>";
                }
                ?>
                <form action="" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <label class="checkbox">
                        <input type="checkbox" required>
                        <span>Saya setuju dengan ketentuan layanan dan kebijakan privasi</span>
                    </label>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>

    </html>
    <?php

    $loginError = "";  // Variabel untuk pesan error
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data username dan password dari form
        $username = $_POST['username'];
        $password = md5($_POST['password']); // Hash password input untuk mencocokkan dengan database

        // Gunakan Prepared Statement untuk menghindari SQL Injection
        $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Login berhasil
            $_SESSION['username'] = $username;
            echo "<script>
                Swal.fire({
                title: 'Login Sukses',
                text: 'Selamat datang !!',
                icon: 'success'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'dashboard.php';
                }
                });
            </script>";
        } else {
            // Login gagal
            echo "<script>
                Swal.fire({
                title: 'Login Gagal',
                text: 'Username atau password salah!',
                icon: 'error',
                confirmButtonText: 'Coba Lagi'
                });
            </script>";
        }
        $stmt->close();
    }
    $conn->close();
    ?>