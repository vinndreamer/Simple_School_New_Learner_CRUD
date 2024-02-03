<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>PPDB by WebPro</title>
    <link rel = "stylesheet" href    = "css/menu.css">
    <link rel = "shortcut icon" href = "webpro.jpg" type = "image/x-icon">
</head>
<body>
    <header>
        <h1>Webpro X</h1>
        <h3>Penerimaan Peserta Didik Baru</h3>
    </header>
    <nav>
        <ul>
            <li><a href = "form-daftar.php">Daftar Baru</a></li>
            <li><a href = "list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <h3>Formulir PPDB</h3>
    <div>
        <form action = "proses-pendaftaran.php" method = "post">
            <div>
                <label for  = "">Nama Lengkap</label>
                <input type = "text" name = "nama" placeholder = "masukan nama">
            </div>
            <div>
                <label    for  = "">Alamat</label>
                <textarea name = "alamat" placeholder = "masukan alamat"></textarea>
            </div>
            <div>
                <label for  = "">Jenis Kelamin</label>
                <input type = "radio" name = "jenis_kelamin" value = "laki-laki">laki-laki
                <input type = "radio" name = "jenis_kelamin" value = "Perempuan">perempuan
            </div>
            <div>
                <label  for   = "">Agama</label>
                <select name  = "agama">
                <option value = "Islam">Islam</option>
                <option value = "Kristen">Kristen</option>
                <option value = "Hindu">Hindu</option>
                <option value = "Buddha">Buddha</option>
                <option value = "Konghucu">Konghucu</option>
                </select>
            </div>
            <div>
                <label for  = "">Asal Sekolah</label>
                <input type = "text" name = "sekolah_asal" placeholder = "masukan nama sekolah">
            </div>
            <div>
                <input type = "reset">
                <input type = "submit" value = "Simpan" name = "simpan">
            </div>

        </form>
    </div>
    <footer>
        <hr>
        <i>Dibuat dengan &copy: by <b>Student Day Webprogramming</b></i>
    </footer>
</body>
</html>