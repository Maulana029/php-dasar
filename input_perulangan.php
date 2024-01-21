<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Perulangan</title>
</head>
<body>
    <form action="../php-dasar/perulangan.php" method="post">
        <label for="data">Input Data</label>
        <input type="number" name="data" id="data" required>
        <button type="submit">Kirim</button>
    </form>
    <br>
    <form action="../php-dasar/input_soal.php" method="post">
        <input type="text" name="soal_ujian" id="soal_ujian" placeholder="Mata pelajaran" required><br>
        <select name="kelas" id="kelas">
            <option value="">-- Kelas --</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select><br>
        <input type="number" placeholder="Jumlah soal" name="soal" id="soal" required>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <!-- masih revisi -->
    <h6>Nilai 75</h6>
    <?php 
        $nilai = 76;
        if($nilai > 75){
            echo "Nilai Bagus";
        }else{
            echo "Nilai dibawah KKM";
        }
    ?>
</body>
</html>