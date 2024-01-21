<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Ujian</title>
    <style>
        body{
            background-color: #000;
        }
        .button {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            background-color: greenyellow;
            margin: 6px;
            color: #000;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            padding: 10px;
        }
        p {
            color: greenyellow;
            font-size: 20px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        button:hover{
            background-color: green;
            cursor: pointer;
        }
        a {
            text-decoration: none;
            color: #000;
        }
    </style>
</head>
<body>
    <?php
        $soal_ujian = $_POST['soal_ujian'];
        $kelas = $_POST['kelas'];
        $jumlah_soal = $_POST['soal'];

        echo "<p>Mata Pelajaran: $soal_ujian</p>";
        echo "<p>Kelas: $kelas</p>";
        for($j = 1; $j <= $jumlah_soal; $j++){
            echo "<button class='button'>$j</button>";
        }
    ?>
    <br>
    <button class="button" onclick=""><a href="../php-dasar/input_perulangan.php">Input Data</a></button>
</body>
</html>