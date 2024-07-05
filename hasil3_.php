<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $name = ($_GET["name"]);
            $nim = ($_GET["nim"]);
            $ttl = ($_GET["ttl"]);

            $errors = [];

            if (empty($name)) {
                $errors[] = "Nama is required.";
            }

            if (empty($nim)) {
                $errors[] = "NIM is required.";
            }

            if (empty($ttl)) {
                $errors[] = "Tempat Tanggal Lahir is required.";
            }

            if (empty($errors)) {
                echo "<h2>Form submitted successfully!</h2>";
                echo "<p><strong>Nama:</strong> $name</p>";
                echo "<p><strong>NIM:</strong> $nim</p>";
                echo "<p><strong>Tempat Tanggal Lahir:</strong> $ttl</p>";
            } else {
                echo "<h2>Errors:</h2>";
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
