<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Komputer</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="dh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <style>
        .action-buttons {
            margin-top: 20px;
            /* Jarak atas untuk tombol aksi */
        }

        .button-edit,
        .button-delete {
            padding: 10px 20px;
            /* Jarak dalam tombol */
            border: none;
            /* Hilangkan border default */
            border-radius: 5px;
            /* Sudut melengkung */
            font-size: 16px;
            /* Ukuran teks */
            font-weight: bold;
            /* Teks tebal */
            cursor: pointer;
            /* Menambahkan pointer pada hover */
            transition: background-color 0.3s ease;
            /* Transisi halus untuk efek hover */
        }

        .button-edit {
            background-color: #4CAF50;
            /* Warna latar belakang hijau untuk Edit */
            color: white;
            /* Warna teks putih */
        }

        .button-edit:hover {
            background-color: #45a049;
            /* Warna gelap saat hover */
        }

        .button-delete {
            background-color: #f44336;
            /* Warna latar belakang merah untuk Hapus */
            color: white;
            /* Warna teks putih */
        }

        .button-delete:hover {
            background-color: #d32f2f;
            /* Warna gelap saat hover */
        }
    </style>
</head>

<body>
    <!-- ===== navigation ===== -->
    <div class="container">
        <div class="navigation">
            <ul>
                <button class="tombol-unggah" onclick="document.getElementById('fileInput').click();">
                    Unggah File Baru
                </button>
                <input type="file" id="fileInput" style="display: none;" onchange="uploadFile()" />
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><i class="fa fa-th-large"></i></span>
                        <span class="title"><b>Dashboard</b></span>
                    </a>
                </li>
                <li>
                    <a href="File_Siswa.php">
                        <span class="icon"><i class="fa fa-users"></i></span>
                        <span class="title"><b>File Siswa</b></span>
                    </a>
                </li>
                <li>
                    <a href="uploadkegiatan.php">
                        <span class="icon"><i class="fa fa-upload"></i></span>
                        <span class="title"><b>Upload Kegiatan</b></span>
                    </a>
                </li>
                <li>
                    <a href="sampah.php">
                        <span class="icon"><i class="fas fa-trash"></i></span>
                        <span class="title"><b>Sampah</b></span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="title"><b>Log Out</b></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ====== navigation close ===== -->

        <!-- ====== main ===== -->
        <div class="main">
            <div class="topbar">
                <div class="logo-wa">
                    <img src="WhatsApp_Image_2024-10-03_at_14.21.41-removebg-preview 2.png" alt="PAUD">
                    <div class="nama-paud">
                        <h1>
                            SKY LEARN
                        </h1>
                    </div>
                </div>
                <div class="PAUD">
                    <h3>Michelle</h3>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Cari Data Saya" /> </b>
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="notifikasi">
                    <a href="#">
                        <span class="icon"><i class="fas fa-bell"></i></span>
                    </a>
                </div>
                <div class="help">
                    <a href="#">
                        <span class="icon"><i class="fas fa-question-circle"></i></span>
                    </a>
                </div>
                <div class="pengaturan">
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                    </a>
                </div>

                <div class="user">
                    <img src="f16cc7ec7235a12a99bf92505040bfdb.jpg" alt="poto" />
                </div>
            </div>
            <!-- ====== main close ===== -->

            <!-- ======= card ===== -->
            <div class="dashboard">
                <div class="dashboard-item">
                    <div class="icon-left">
                        <img src="tiang.png" alt="Icon Kiri">
                    </div>
                    <div class="content">
                        <h2>File Baru</h2>
                        <span class="count">15</span>
                    </div>
                    <div class="icon-right">
                        <ion-icon name="document-outline"></ion-icon>
                    </div>
                </div>


                <div class="dashboard-item">
                    <div class="icon-left">
                        <img src="tiang.png" alt="Icon Kiri">
                    </div>
                    <div class="content">
                        <h2>Konfirmasi</h2>
                        <span class="count">15</span>
                    </div>
                    <div class="icon-right">
                        <ion-icon name="person"></ion-icon>
                    </div>
                </div>

                <div class="dashboard-item">
                    <div class="icon-left">
                        <img src="tiang.png" alt="Icon Kiri">
                    </div>
                    <div class="content">
                        <h2>Total File</h2>
                        <span class="count">30</span>
                    </div>
                    <div class="icon-right">
                        <ion-icon name="folder-open"></ion-icon>
                    </div>
                </div>

            </div>

            <!-- Charts Section -->
            <div class="charts">
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
                <div class="chart-container">
                    <canvas id="pieChart" width="100" height="200"></canvas>
                </div>
            </div>

            <!-- Scripts -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
            <script>
                // Bar Chart Configuration
                const barCtx = document.getElementById('barChart').getContext('2d');
                new Chart(barCtx, {
                    type: 'bar',
                    data: {
                        labels: ['2021', '2022', '2023', '2024', '2025'],
                        datasets: [{
                                label: 'Laki-laki',
                                data: [20, 15, 18, 15, 19],
                                backgroundColor: 'rgba(72, 209, 204, 0.6)',
                                borderColor: 'rgba(72, 209, 204, 1)',
                                borderWidth: 2,
                                barPercentage: 0.6, // Mengatur lebar batang
                                categoryPercentage: 1.0 // Mengatur lebar kategori
                            },
                            {
                                label: 'Perempuan',
                                data: [18, 20, 16, 18, 17],
                                backgroundColor: 'rgba(255, 182, 193, 0.6)',
                                borderColor: 'rgba(255, 182, 193, 1)',
                                borderWidth: 2,
                                barPercentage: 0.6, // Mengatur lebar batang
                                categoryPercentage: 1.0 // Mengatur lebar kategori
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });





                // Pie Chart Configuration
                const pieCtx = document.getElementById('pieChart').getContext('2d');
                new Chart(pieCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Data Baru', 'Sudah di Konfirmasi', 'Belum di Konfirmasi'],
                        datasets: [{
                            data: [33, 28, 39],
                            backgroundColor: [
                                'rgba(255, 182, 193, 0.6)',
                                'rgba(72, 209, 204, 0.6)',
                                'rgba(135, 206, 250, 0.6)'
                            ],
                            borderColor: [
                                'rgba(255, 182, 193, 1)',
                                'rgba(72, 209, 204, 1)',
                                'rgba(135, 206, 250, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false, // Set ke false untuk kontrol penuh terhadap ukuran
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            </script>
            <!-- ====== card close ===== -->
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </div>
    </div>

    <script>
        // Fungsi untuk menangani pencarian
        function searchTable() {
            const searchInput = document.querySelector('.search input').value.toLowerCase();
            const tableRows = document.querySelectorAll('#fileTable tbody tr');

            // Loop melalui semua baris tabel dan periksa apakah nama file sesuai dengan input pencarian
            tableRows.forEach(row => {
                const fileName = row.cells[0].textContent.toLowerCase();
                if (fileName.includes(searchInput)) {
                    row.style.display = ''; // Tampilkan baris jika cocok
                } else {
                    row.style.display = 'none'; // Sembunyikan baris jika tidak cocok
                }
            });
        }

        // Event listener untuk pencarian
        document.querySelector('.search input').addEventListener('input', searchTable);

        // Fungsi upload file
        function uploadFile() {
            const input = document.getElementById('fileInput');
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const fileName = file.name;
                    const fileSize = (file.size / 1024).toFixed(2) + ' KB';
                    const lastModified = new Date(file.lastModified).toLocaleString();

                    // Cek apakah file adalah gambar
                    const isImage = file.type.startsWith('image/');
                    const status = isImage ? 'Gambar tidak dapat diedit' : 'Dapat diedit';

                    const tableRow = `
                    <tr>
                        <td>${fileName}</td>
                        <td>${lastModified}</td>
                        <td>${fileSize}</td>
                        <td>${status}</td>
                        <td>
                            <button class="button-edit" onclick="editFile(this)" ${isImage ? 'disabled' : ''}>Edit</button>
                            <button class="button-delete" onclick="deleteFile(this)">Hapus</button>
                        </td>
                    </tr>
                `;
                    document.querySelector('#fileTable tbody').insertAdjacentHTML('beforeend', tableRow);
                    input.value = ''; // Clear the input
                };
                reader.readAsDataURL(file); // Read the file as data URL
            }
        }

        // Fungsi edit file
        function editFile(button) {
            const row = button.parentElement.parentElement;
            const fileNameCell = row.cells[0];
            const newFileName = prompt("Edit Nama File:", fileNameCell.textContent);
            if (newFileName) {
                fileNameCell.textContent = newFileName;
            }
        }

        // Fungsi hapus file
        function deleteFile(button) {
            const row = button.parentElement.parentElement;
            const confirmation = confirm("Apakah Anda yakin ingin menghapus file ini?");
            if (confirmation) {
                row.remove();
            }
        }
    </script>

</body>

</html>