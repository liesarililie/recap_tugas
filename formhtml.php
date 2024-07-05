<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML Pada PHP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <form action="htmlhasil.php" method="post">
        <h2>Form HTML Pada PHP</h2>
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="location">Lokasi:</label>
                <select class="form-control" id="location" name="location">
                    <option value="Surakarta">Surakarta</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label><br>
                <input type="radio" id="male" name="gender" value="Laki-Laki" required>
                <label for="male">Laki-Laki</label><br>
                <input type="radio" id="female" name="gender" value="Perempuan" required>
                <label for="female">Perempuan</label>
            </div>
            <div class="form-group">
                <label>Skill:</label><br>
                <input type="checkbox" id="php" name="skill[]" value="PHP">
                <label for="php">PHP</label><br>
                <input type="checkbox" id="mysql" name="skill[]" value="MySQL">
                <label for="mysql">MySQL</label><br>
                <input type="checkbox" id="javascript" name="skill[]" value="JavaScript">
                <label for="javascript">JavaScript</label><br>
                <input type="checkbox" id="html" name="skill[]" value="HTML">
                <label for="html">HTML</label><br>
                <input type="checkbox" id="css" name="skill[]" value="CSS">
                <label for="css">CSS</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
