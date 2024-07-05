<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi</title>
</head>
<body>
    <h1>Hasil Registrasi</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = ($_POST['name']);
        $address = ($_POST['adress']);
        $birthday = ($_POST['birthday']);
        $date = ($_POST['date']);
        $gender = ($_POST['gender']);
        $pendidikan = ($_POST['Pendidikan']);
    ?>
    <table border="1">
        <tr>
            <th>Data Mahasiswa</th>
            <th></th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?php echo $birthday; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $date; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td><?php echo $pendidikan; ?></td>
        </tr>
    </table>
    <br>
    <a href="registrasi.php">Back to Home</a>
    <?php
    } else {
        echo "<p>Data tidak diterima.</p>";
    }
    ?>
</body>
</html>
