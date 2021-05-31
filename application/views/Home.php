<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h2>Halo Dunia</h2>
    <h3>Latihan Web mengunakan CI</h3>
    <?php
    foreach($dataMu as $dat){
        echo "No: ".$dat['index']."<br>";
        echo "Nama: ".$dat['nama']."<br>";
        echo "Nim: ".$dat['nim']."<br>"."<br>";
    }
        echo "Selamat Datang kepada Pak ";
    ?>
</body>
</html>