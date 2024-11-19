<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="form-container">
        <h1>FORM PENDAFTARAN</h1>
        <div class="form-grid">
            <!-- Input Data Diri Siswa -->
            <div class="form-section">
                <h2>Data Diri Siswa</h2>
                <form>
                    <label for="nama-siswa">Nama Lengkap</label>
                    <input type="text" id="nama-siswa" placeholder="Masukkan nama lengkap">

                    <label for="nama-panggilan">Nama Panggilan</label>
                    <input type="text" id="nama-panggilan" placeholder="Masukkan nama panggilan">

                    <label for="tanggal-lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal-lahir">

                    <label for="tempat-lahir">Tempat Lahir</label>
                    <input type="text" id="tempat-lahir" placeholder="Masukkan tempat lahir">

                    <label for="agama-siswa">Agama</label>
                    <input type="text" id="agama-siswa" placeholder="Masukkan agama">

                    <label for="jumlah-saudara">Jumlah Saudara</label>
                    <input type="number" id="jumlah-saudara" placeholder="Masukkan jumlah saudara">

                    <label for="anak-ke">Anak ke-</label>
                    <input type="number" id="anak-ke" placeholder="Anak ke-berapa">

                    <p>Jenis Kelamin</p>
                    <div class="gender-options">
                        <label><input type="radio" name="jenis-kelamin" value="Laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis-kelamin" value="Perempuan"> Perempuan</label>
                    </div>
                </form>
            </div>

            <!-- Data Diri Lengkap Ibu -->
            <div class="form-section">
                <h2>Data Ibu</h2>
                <form>
                    <label for="nama-ibu">Nama Lengkap</label>
                    <input type="text" id="nama-ibu" placeholder="Masukkan nama lengkap ibu">

                    <label for="tempat-lahir-ibu">Tempat/Tgl Lahir</label>
                    <input type="text" id="tempat-lahir-ibu" placeholder="Masukkan tempat/tgl lahir">

                    <label for="agama-ibu">Agama</label>
                    <input type="text" id="agama-ibu" placeholder="Masukkan agama ibu">

                    <label for="telepon-ibu">No Telp</label>
                    <input type="text" id="telepon-ibu" placeholder="Masukkan no telp ibu">

                    <label for="pekerjaan-ibu">Pekerjaan</label>
                    <input type="text" id="pekerjaan-ibu" placeholder="Masukkan pekerjaan ibu">

                    <label for="pendidikan-ibu">Pendidikan</label>
                    <input type="text" id="pendidikan-ibu" placeholder="Masukkan pendidikan ibu">

                    <label for="alamat-ibu">Alamat</label>
                    <textarea id="alamat-ibu" placeholder="Masukkan alamat ibu"></textarea>
                </form>
            </div>

            <!-- Data Diri Lengkap Ayah -->
            <div class="form-section">
                <h2>Data Ayah</h2>
                <form>
                    <label for="nama-ayah">Nama Lengkap</label>
                    <input type="text" id="nama-ayah" placeholder="Masukkan nama lengkap ayah">

                    <label for="tempat-lahir-ayah">Tempat/Tgl Lahir</label>
                    <input type="text" id="tempat-lahir-ayah" placeholder="Masukkan tempat/tgl lahir">

                    <label for="agama-ayah">Agama</label>
                    <input type="text" id="agama-ayah" placeholder="Masukkan agama ayah">

                    <label for="telepon-ayah">No Telp</label>
                    <input type="text" id="telepon-ayah" placeholder="Masukkan no telp ayah">

                    <label for="pekerjaan-ayah">Pekerjaan</label>
                    <input type="text" id="pekerjaan-ayah" placeholder="Masukkan pekerjaan ayah">

                    <label for="pendidikan-ayah">Pendidikan</label>
                    <input type="text" id="pendidikan-ayah" placeholder="Masukkan pendidikan ayah">

                    <label for="alamat-ayah">Alamat</label>
                    <textarea id="alamat-ayah" placeholder="Masukkan alamat ayah"></textarea>
                </form>
            </div>
        </div>
        <button type="submit" class="submit-button">Kirim</button>
    </div>
</body>
</html>
