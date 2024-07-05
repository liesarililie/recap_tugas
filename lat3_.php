<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body>
    <form action="hasil3_.php" method="get">
    <table border="1">
        <tr>
            <td> <input type="text" class="form-control" required name="name" placeholder="Nama Anda"> </td>
        </tr>
        <tr>
            <td> <input type="number" class="form-control" required name="nim" placeholder="Masukkan Nim Anda ="> </td>
        </tr>
        <tr>
            <td> <input type="date" class="form-control" required name="ttl" placeholder="Masukkan Tempat Tanggal Lahir ="> </td>
        </tr>
        <tr>
            <td> <button type="submit" name="kirim" class="btn btn-primary">Process</button></td>
        </tr>
    </table>
    </form>
</body>
</html>