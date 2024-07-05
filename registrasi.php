<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM REGISTRASI</title>
</head>
<body>
    <h1>FORM REGISTRASI</h1>
    <form action="hasilregisnya.php" method="post">
        <p>Isi data dibawah ini :</p>
        <p>
            Nama: <input type="text" name="name" size="25" maxlength="50"><br>
            Alamat: <input type="text" name="address" size="25" maxlength="50"><br>
            Tempat Lahir: <input type="text" name="birthday" size="25" maxlength="50"><br>
            Tanggal Lahir: <input type="text" name="date" size="25" maxlength="50"><br>
        </p>
        <p>
            Jenis Kelamin:<br>
            <input type="radio" name="gender" value="Laki-laki"> Laki-laki<br>
            <input type="radio" name="gender" value="Perempuan"> Perempuan<br>
        </p>
        <p>
            Pendidikan:<br>
            <select name="Pendidikan">
                <option value="-Pilih-">-Pilih-</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Kirim"> 
            <input type="reset" value="Batal">
        </p>
    </form>
</body>
</html>
