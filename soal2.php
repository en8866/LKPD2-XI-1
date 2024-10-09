<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompe Jam Kerja</title>
</head>
<body>
    <form method="post">
        <label for="jamKerja">Masukkan Jam Kerja:</label>
        <input type="number" id="jamKerja" name="jamKerja">
        <button type="submit">Submit</button>
    </form>
<?php

function kompe($jamKerja){
    $jam = 8;
    $kompePertama = 50000;
    $kompeSelanjutnya = 25000;

    if($jamKerja > $jam){
        echo "Lama jam kerja: " . $jamKerja . "<br>";
        echo "Jam lebih: " . ($jamKerja - $jam) . "<br>";
        if($jamKerja - $jam <= 8){
            echo "Jumlah kompe: " . $kompePertama . "<br>";
        }else{
            $kompe = $kompePertama + ($jamKerja - $jam - 1) * $kompeSelanjutnya;
            echo "Jumlah kompe adalah: " . $kompe . "<br>";
        }
    } else if ($jamKerja == $jam) {
        echo "Lama jam kerja: " . $jamKerja . "<br>";
        echo "Jumlah kompe: 0<br>";
    } else {
        echo "Jam kerja kurang dari 8 jam.<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jamKerja = $_POST["jamKerja"];
    kompe($jamKerja);
}
?>
</body>
</html>