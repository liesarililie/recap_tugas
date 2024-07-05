<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hasiltes.php" method="post">
        <h2> Form Input Data Mahasiswa </h2>
        <div>
            <label for="nim">NIM: </label>
            <input type="text" id="nim" name="nim" required>
        </div>
        <div>
            <label for="name">Nama: </label>
            <input type="text" id="name" name="nama" required>
        </div>
        <div>
            <label for="gender">Jenis Kelamin: </label>
            <input type="radio" id="pria" name="jeniskel" value="Laki-laki" required> <label for="pria">Laki-laki</label>
            <input type="radio" id="wanita" name="jeniskel" value="Perempuan" required> <label for="wanita">Perempuan</label>
        </div>
        <div>
            <label for="dateyear">Tanggal Lahir: </label>
            <input type="text" id="dateyear" name="tgl_lahir" required>
        </div>
        <div>
            <label for="place">Tempat Lahir: </label>
            <input type="text" id="place" name="tempat_lahir" required>
        </div>
        <div>
        <label for="major">Jurusan:</label>
        <select id="major" name="jurusan" required>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
            <option value="Ilmu Komputer">Ilmu Komputer</option>
            <option value="Sastra Inggris">Sastra Inggris</option>
        </select>
        </div>
        <label for="entry">Tahun Masuk: </label>
        <select id="entry" name="thn_masuk" required>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
        </select>
        </div>
        <br>
        <div>
        <button type="submit" value="Kirim">Kirim</button>
        </div>

    </form>
    </div>
</body>
</html>