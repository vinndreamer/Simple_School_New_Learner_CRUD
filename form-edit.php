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

    <h3>Formulir Edit</h3>
    <?php
        include_once("config.php");
        $id = $_GET['id'];
        $sql = "SELECT * FROM calon_siswa WHERE id = $id";
        $query = mysqli_query($db, $sql);
        $r = mysqli_fetch_assoc($query);
    ?>
    <div>
        <form action = "proses-edit.php" method = "post">
            <div>
                <label for  = "">Nama Lengkap</label>
                <input type = "text" name = "nama" value="<?= $r['nama']; ?>" placeholder = "masukan nama">
            </div>
            <div>
                <label    for  = "">Alamat</label>
                <textarea name = "alamat" placeholder = "masukan alamat"><?= $r['alamat']?> </textarea>
            </div>
            <div>
            <label for="">Jenis Kelamin</label>
                <input type="radio" name ="jenis_kelamin" <?= $r['jenis_kelamin'] == 'laki-laki' ? 'checked' : ''?> value="laki-laki">laki-laki
                <input type="radio" name ="jenis_kelamin" <?= $r['jenis_kelamin'] == 'Perempuan' ? 'checked' : ''?> value="Perempuan">Perempuan
            </div>
            <div>
                <label  for   = "">Agama</label>
                <select name  = "agama">
                <option value = "Islam" <?= $r['agama'] == 'Islam' ? 'selected' : ''?> >Islam</option>
                <option value = "Kristen"<?= $r['agama'] == 'Kristen' ? 'selected' : ''?> >Kristen</option>
                <option value = "Hindu"<?= $r['agama'] == 'Hindu' ? 'selected' : ''?> >Hindu</option>
                <option value = "Buddha"<?= $r['agama'] == 'Buddha' ? 'selected' : ''?> >Buddha</option>
                <option value = "Konghucu"<?= $r['agama'] == 'Konghucu' ? 'selected' : ''?> >Konghucu</option>
                </select>
            </div>
            <div>
                <label for  = "">Asal Sekolah</label>
                <input type = "text" name = "sekolah_asal" placeholder = "masukan nama sekolah">
            </div>
            <div>
                <input type= "hidden" name="id" value="<?= $r['id']; ?>">
                <input type = "reset">
                <input type = "submit" value = "Update" name = "update">
            </div>
        
        </form>
    </div>
    <footer>
        <hr>
        <i>Dibuat dengan &copy: by <b>Student Day Webprogramming</b></i>
    </footer>
</body>
</html>