<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Komputer</title>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="sampah.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

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

      <section class="table-section">
        <table>
          <thead>
            <tr>
              <th>profil</th>
              <th>Name</th>
              <th>Email</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="profile-icon">R</div>
              </td>
              <td>raihan yaskur</td>
              <td>raihanyaskur@gmail.com</td>
              <td>April 19, 2020</td>
              <td>
                <div class="action-menu">
                  <button class="action-btn">⋮</button>
                  <div class="action-dropdown">
                    <button class="edit-option" onclick="editFile(this)">Edit</button>
                    <button class="delete-option" onclick="deleteFile(this)">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <td>
              <div class="profile-icon">F</div>
            </td>
            <td>filia debora sharon</td>
            <td>filiadeborasharon@gmail.com</td>
            <td>April 25, 2020</td>
            <td>
              <button class="restore-btn">&#8634;</button>
              <button class="delete-btn">&#128465;</button>
            </td>
            <tr>
              <td>
                <div class="profile-icon">F</div>
              </td>
              <td>fuja gelistiana</td>
              <td>fujagelistiana@gmail.com</td>
              <td>April 19, 2020</td>
              <td>
                <button class="restore-btn">&#8634;</button>
                <button class="delete-btn">&#128465;</button>
              </td>
            </tr>
            <td>
              <div class="profile-icon">A</div>
            </td>
            <td>anika nur kholisah</td>
            <td>anikanurkholisah@gmail.com</td>
            <td>April 19, 2020</td>
            <td>
              <button class="restore-btn">&#8634;</button>
              <button class="delete-btn">&#128465;</button>
            </td>
            <tr>
              <td>
                <div class="profile-icon">M</div>
              </td>
              <td>muhammad jihar fawaiq</td>
              <td>jiharganteng780@gmail.com</td>
              <td>April 19, 2020</td>
              <td>
                <button class="restore-btn">&#8634;</button>
                <button class="delete-btn">&#128465;</button>
              </td>
            </tr>
            <td>
              <div class="profile-icon">U</div>
            </td>
            <td>ujang bustomi</td>
            <td>ujangbustomi@gmail.com</td>
            <td>April 25, 2020</td>
            <td>
              <button class="restore-btn">&#8634;</button>
              <button class="delete-btn">&#128465;</button>
            </td>
            <tr>
              <td>
                <div class="profile-icon">J</div>
              </td>
              <td>jajang sukmana</td>
              <td>jajangsukmana@gmail.com</td>
              <td>April 19, 2020</td>
              <td>  
                <button class="restore-btn">&#8634;</button>
                <button class="delete-btn">&#128465;</button>
              </td>
            </tr>
            <td>
              <div class="profile-icon">D</div>
            </td>
            <td>didi supratman</td>
            <td>didisupratman@gmail.com</td>
            <td>April 19, 2020</td>
            <td>
              <button class="restore-btn">&#8634;</button>
              <button class="delete-btn">&#128465;</button>
            </td>
            <tr>
              <td>
                <div class="profile-icon">D</div>
              </td>
              <td>dadang humaeroh</td>
              <td>dadanghumaeroh@gmail.com</td>
              <td>April 19, 2020</td>
              <td>
                <button class="restore-btn">&#8634;</button>
                <button class="delete-btn">&#128465;</button>
              </td>
            </tr>
            <!-- Repeat similar rows for other entries -->
          </tbody>
        </table>
      </section>
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