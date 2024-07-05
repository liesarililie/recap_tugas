<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form HTML</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil Form HTML</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $location = htmlspecialchars($_POST["location"]);
            $gender = htmlspecialchars($_POST["gender"]);
            $skills = isset($_POST["skill"]) ? $_POST["skill"] : [];

            echo "<p><strong>Nama:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Lokasi:</strong> $location</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $gender</p>";

            if (!empty($skills)) {
                echo "<p><strong>Skill:</strong></p><ul>";
                foreach ($skills as $skill) {
                    echo "<li>" . htmlspecialchars($skill) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p><strong>Skill:</strong> None</p>";
            }
        } else {
            echo "<p>Form not submitted correctly.</p>";
        }
        ?>
    </div>
</body>
</html>
