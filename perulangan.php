<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulanga PHP</title>
</head>
<body>
    <?php
        $data = $_POST['data'];
        for($i = 1; $i <= $data; $i++){
            echo "<p>ini perulangan ke - $i</p> <input type='datetime-local' name='sesi_' id='sesi_'>";
        }
    ?>
    <br>
    <button><a href="../php-dasar/input_perulangan.php">Input Data</a></button>
</body>
</html>