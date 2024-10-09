<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>identifikasi angka</title>
</head>
<body>
    <form method="post">
        <label for="text">Masukkan Teks:</label>
        <input type="text" id="text" name="text">
        <button type="submit">Submit</button>
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["text"];

    if (preg_match_all('/[0-9]/', $string, $matches)) {
        echo "teks mengandung angka: " . implode(", ", $matches[0]);
    } else {
        echo "teks tidak mengandung angka.";
    }
}
?>
</html>
